<?php


namespace App\Http\Controllers;

use App\Http\Requests\CommissionRequest;
use App\Models\DirectMessage;
use App\Models\PartnersInfo;
use App\Models\Statistic;
use App\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Log;
use Mail;

class ServiceRequestController extends Controller
{

    public function commissionFormAction(CommissionRequest $request): JsonResponse
    {


        $data = $request->all();
        dd($data);
        $partner = $this->getPartner($request->get('partner_id'));

        $this->StoreDirectMessageData($partner, $data, DirectMessage::TYPE_COMMISSION);

        if (env("APP_ENV") == 'production') {
            Mail::send('email.service-request.commission', ["partner" => $partner, 'data' => $data], function ($message) use ($partner, $data) {
                $message->from(env("MAIL_USERNAME"), 'PARTYBOOKER: Service Request');
                $message->to(env('MAIL_COMMISSION_INBOX'))->subject("{$partner->en_company_name} service request");
            });
        }

        return response()->json(['message' => '']);
    }

    private function getPartner($id)
    {
        return PartnersInfo::find($id);
    }

    private function StoreDirectMessageData(PartnersInfo $partner, $formData, $type)
    {
        try {
            $temp = [
                'partners_info_id' => $partner->id,
                'partners_name' => $partner->en_company_name,
                'type' => $type,
                'client_name' => $formData['name'],
                'client_email' => $formData['email'],
                'client_phone' => $formData['phone'],
                'message' => $formData['message'],
                'data' => json_encode($formData)
            ];

            DirectMessage::insert($temp);
        } catch (Exception $e) {
            Log::error($e->getMessage());
        }
    }

    public function catererFormAction(CommissionRequest $request)
    {
        $partner = $this->getPartner($request->get('partner_id'));
        $user = User::where('id_partner', $partner->id_partner)->first();
        $data = $request->all();

        $this->StoreDirectMessageData($partner, $data, DirectMessage::TYPE_CATERER);

        if (env("APP_ENV") == 'production') {
            Mail::send('email.service-request.caterer', ["partner" => $partner, 'data' => $data], function ($message) use ($user, $partner, $data) {
                $message->from(env("MAIL_USERNAME"), 'PARTYBOOKER: Service Request');
                $message->to($user->email)->subject("{$partner->en_company_name} service request");
            });

            Mail::send('email.service-request.caterer', ["partner" => $partner, 'data' => $data], function ($message) use ($user, $partner, $data) {
                $message->from(env("MAIL_USERNAME"), 'PARTYBOOKER: Service Request');
                $message->to(env("MAIL_CONTACT"))->subject("COPY: Partner {$partner->en_company_name} get service request");
            });
        }


        $this->UpdateDirectRequestCount($partner->id_partner);

        return response()->json(['message' => '']);
    }

    private function UpdateDirectRequestCount($idPartner)
    {
        $statistic = Statistic::where('id_partner', $idPartner)->first();
        if (!$statistic) {
            $statistic = new Statistic();
            $statistic->id_partner = $idPartner;
            $statistic->save();
        }

        Statistic::where('id_partner', $idPartner)->increment('direct');
    }

    public function requestFormAction(CommissionRequest $request)
    {
        $request->validate([
            'g-recaptcha-response' => 'required',
        ]);
        $partner = $this->getPartner($request->get('partner_id'));
        $user = User::where('id_partner', $partner->id_partner)->first();
        $data = $request->all();

        $this->StoreDirectMessageData($partner, $data, DirectMessage::TYPE_GENERAL);

        if (env("APP_ENV") == 'production') {
            Mail::send('email.service-request.general', ["partner" => $partner, 'data' => $data], function ($message) use ($user, $partner, $data) {
                $message->from(env("MAIL_USERNAME"), 'PARTYBOOKER: Service Request');
                $message->to($user->email)->subject("{$partner->en_company_name} service request");
            });

            if (env("MAIL_CONTACT")) {
                Mail::send('email.service-request.general', ["partner" => $partner, 'data' => $data], function ($message) use ($user, $partner, $data) {
                    $message->from(env("MAIL_USERNAME"), 'PARTYBOOKER: Service Request');
                    $message->to(env("MAIL_CONTACT"))->subject("COPY: Partner {$partner->en_company_name} service request");
                });
            }
        }

        $this->UpdateDirectRequestCount($partner->id_partner);
        return response()->json(['message' => ''], 200);
    }

}
