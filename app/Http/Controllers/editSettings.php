<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Middleware\LocaleMiddleware;

class editSettings extends Controller
{
		
    public function address(Request $request) {
		$address = $request->input('address');
		if (DB::table('settings')
				->where('id', 1)
				->update(['address' => $address])) {		
			return redirect(LocaleMiddleware::getLocale().'/cp/setting/contacts#success');
		} else {
			return redirect(LocaleMiddleware::getLocale().'/cp/setting/contacts#error');
		}
	}
	
	public function email(Request $request) {
		$email = $request->input('email');
		if (DB::table('settings')
				->where('id', 1)
				->update(['email' => $email])) {		
			return redirect(LocaleMiddleware::getLocale().'/cp/setting/contacts#success');
		} else {
			return redirect(LocaleMiddleware::getLocale().'/cp/setting/contacts#error');
		}
	}
	
	public function phone(Request $request) {
		$phone = $request->input('phone');
		if (DB::table('settings')
				->where('id', 1)
				->update(['phone' => $phone])) {		
			return redirect(LocaleMiddleware::getLocale().'/cp/setting/contacts#success');
		} else {
			return redirect(LocaleMiddleware::getLocale().'/cp/setting/contacts#error');
		}
	}
	
	public function facebook(Request $request) {
		$fb = $request->input('fb');
		if (DB::table('settings')
				->where('id', 1)
				->update(['facebook' => $fb])) {		
			return redirect(LocaleMiddleware::getLocale().'/cp/setting/contacts#success');
		} else {
			return redirect(LocaleMiddleware::getLocale().'/cp/setting/contacts#error');
		}
	}
	
	public function linkedin(Request $request) {
		$ln = $request->input('ln');
		if (DB::table('settings')
				->where('id', 1)
				->update(['linkedin' => $ln])) {		
			return redirect(LocaleMiddleware::getLocale().'/cp/setting/contacts#success');
		} else {
			return redirect(LocaleMiddleware::getLocale().'/cp/setting/contacts#error');
		}
	}
	
	public function google(Request $request) {
		$gl = $request->input('gl');
		if (DB::table('settings')
				->where('id', 1)
				->update(['googleplus' => $gl])) {		
			return redirect(LocaleMiddleware::getLocale().'/cp/setting/contacts#success');
		} else {
			return redirect(LocaleMiddleware::getLocale().'/cp/setting/contacts#error');
		}
	}
	
	public function twitter(Request $request) {
		$tw = $request->input('tw');
		if (DB::table('settings')
				->where('id', 1)
				->update(['twitter' => $tw])) {		
			return redirect(LocaleMiddleware::getLocale().'/cp/setting/contacts#success');
		} else {
			return redirect(LocaleMiddleware::getLocale().'/cp/setting/contacts#error');
		}
	}
	
	public function instagram(Request $request) {
		$inst = $request->input('inst');
		if (DB::table('settings')
				->where('id', 1)
				->update(['instagram' => $inst])) {		
			return redirect(LocaleMiddleware::getLocale().'/cp/setting/contacts#success');
		} else {
			return redirect(LocaleMiddleware::getLocale().'/cp/setting/contacts#error');
		}
	}
	
	public function userterms(Request $request) {
		$lang = $request->input('lang');
		$userTerms = $request->input('terms_'.$lang);
		if (DB::table('settings')
				->where('id', 1)
				->update(['user_terms_'.$lang => $userTerms])) {		
			return redirect(LocaleMiddleware::getLocale().'/cp/setting/user-terms#success');
		} else {
			return redirect(LocaleMiddleware::getLocale().'/cp/setting/user-terms#error');
		}
	}
	
	public function serviceterms(Request $request) {
		$lang = $request->input('lang');
		$serviceTerms = $request->input('terms_'.$lang);
		if (DB::table('settings')
				->where('id', 1)
				->update(['service_terms_'.$lang => $serviceTerms])) {		
			return redirect(LocaleMiddleware::getLocale().'/cp/setting/partner-terms#success');
		} else {
			return redirect(LocaleMiddleware::getLocale().'/cp/setting/partner-terms#error');
		}
	}
}
