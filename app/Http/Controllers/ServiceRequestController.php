<?php


namespace App\Http\Controllers;

use App\Http\Requests\CommissionRequest;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\StoreServiceRequestCaterer;
use App\Interfaces\IRequestService;
use App\Models\DirectMessage;
use App\Models\PartnersInfo;
use App\Services\RequestService;
use Illuminate\Http\RedirectResponse;
use Mail;

class ServiceRequestController extends Controller
{
    private RequestService $requestService;

    public function __construct(IRequestService $requestService)
    {
        $this->requestService = $requestService;
    }

    public function commissionFormAction(CommissionRequest $request): RedirectResponse
    {
        $data = $request->all();
        $partner = $this->getPartner($request->get('partner_id'));
        $this->StoreDirectMessageData($partner, $data, DirectMessage::TYPE_COMMISSION);

        if (env("APP_ENV") == 'production') {
            Mail::send('email.service-request.commission', ["partner" => $partner, 'data' => $data], function ($message) use ($partner, $data) {
                $message->from(env("MAIL_USERNAME"), 'PARTYBOOKER: Service Request');
                $message->to(env('MAIL_COMMISSION_INBOX'))->subject("{$partner->en_company_name} service request");
            });
        }

        return redirect()->back()->with('success', 'Your request has been sent successfully');
    }

    public function requestFormAction(StoreServiceRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $partner = PartnersInfo::find($validated['partner-info-id']);

        $this->requestService->sendRequest($partner, $validated, DirectMessage::TYPE_GENERAL);

        return redirect()->back()->with('success', 'Your request has been sent successfully');
    }

    public function catererFormAction(StoreServiceRequestCaterer $request): RedirectResponse
    {
        $validated = $request->validated();
        $partner = PartnersInfo::find($validated['partner-info-id']);
        $this->requestService->sendRequest($partner, $validated, DirectMessage::TYPE_CATERER);

        return redirect()->back()->with('success', 'Your request has been sent successfully');

    }
}
