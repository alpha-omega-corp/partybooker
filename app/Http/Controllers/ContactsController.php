<?php


namespace App\Http\Controllers;

use App\Http\Middleware\LocaleMiddleware;
use App\Models\PartnersInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactsController extends Controller
{

	private $lang;

	public function __construct()
	{
		$this->lang = LocaleMiddleware::getLocale();
	}

	public function SendClaimOrDeleteRequest(Request $request)
	{

		$validator = Validator::make($request->all(), [
			'email' => 'required|email',
			'phone' => 'required'
		]);

		if ($validator->fails()) {
			return response()->json(['message' => implode('<br/>', $validator->errors()->all())], 400);
		}

		try {
			$partner = PartnersInfo::where('id', $request->get('partner_id'))->first();
			if (!$partner) {
				return response()->json(['message' => 'Fill all required data and try again'], 400);
			}

			$data = $request->all();
			$data['service_name'] = $this->lang == 'en' ? $partner->en_company_name : $partner->fr_company_name;
			$data['service_link'] = env('APP_URL') . '/listing/' . $partner->slug;
			$data['app_link'] = env('APP_URL');

			if(env('APP_ENV') == 'production') {
				Mail::send('email.claim-request', ["data" => $data], function ($message) use ($request, $data) {
					$message->to(env('MAIL_CONTACT'), 'Plan cash payment request');
					$message->from($request->get('email'), "Basic plan - {$request->get('request_type')} request");
				});

				Mail::send('email.claim-request-copy', ["data" => $data], function ($message) use ($request) {
					$message->to($request->get('email'), 'Request on Partybooker');
					$message->from(env('MAIL_USERNAME'), "Request on Partybooker. {$request->get('request_type')} request");
				});
			}

		} catch (\Exception $e) {
			return response()->json(['message' => $e->getMessage()], 400);
		}
		return response()->json(['message' => "Partybooker will contact with you soon."], 200);
	}


}
