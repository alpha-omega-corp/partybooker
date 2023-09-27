<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class EmailVerify extends Controller
{
    public function index(Request $request, $email, $email_hash)
    {
        if ($email_hash == md5($email)) {
            DB::table('users')->where('email', $email)->update(array('email_verification' => 1,));
            return view('auth.email_verifyed');
        } else {
            $link_error = 'Something wrong with your link';
            return $link_error;
        }
    }

    public function verification()
    {
        return view('auth.email_verification');
    }

    public function verified()
    {
        return view('auth.email_verified');
    }
}
