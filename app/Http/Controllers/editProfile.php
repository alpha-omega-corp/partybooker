<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Middleware\LocaleMiddleware;

class editProfile extends Controller
{
    public function edit(Request $request) {
        
		$user_id = auth()->user()->id;
		$user_name = $request->input('name');
		$user_email = $request->input('email');
		$user_password = $request->input('password');
		$new_password = $request->input('new_password');
		$rep_password = $request->input('rep_password');
		
		if (Hash::check($user_password, auth()->user()->password) && $new_password === $rep_password) {
			if (DB::table('users')
				->where('id', $user_id)
				->update(['name' => $user_name, 'email' => $user_email, 'password' => bcrypt($new_password)])) {
				
				return redirect(LocaleMiddleware::getLocale().'/cp/setting/admin-profile#success');
			} else {
				return redirect(LocaleMiddleware::getLocale().'/cp/setting/admin-profile#error');
			}
		} else {
			return redirect(LocaleMiddleware::getLocale().'/cp/setting/admin-profile#error');
		}
    }
}
