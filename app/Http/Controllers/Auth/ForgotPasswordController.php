<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mails\ResetPasswordLink;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $email = $request->get('email');
        $user = User::where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->withErrors(['email' => trans('User does not exist')]);
        }

        DB::table('password_resets')->insert([
            'email' => $email,
            'token' => Str::random(60),
            'created_at' => now()
        ]);

        $tokenData = DB::table('password_resets')
            ->where('email', $email)->first();

        $this->sendResetEmail($email, $tokenData->token);


        return redirect()->back()->with('status', trans('A reset link has been sent to your email address.'));
    }

    private function sendResetEmail($email, $token): void
    {
        Mail::to($email)->send(new ResetPasswordLink($token));
    }


}
