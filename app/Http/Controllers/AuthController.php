<?php

namespace App\Http\Controllers;


use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {

    }

    public function register(RegisterRequest $request): RedirectResponse
    {
        $data = $request->validated();

        if ($data['password'] !== $data['password_confirm']) {
            return back()->with('error', 'Passwords confirmation does not match');
        }

        User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return back()->with('success', 'User created successfully');
    }


    public function authenticate(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials, true)) {
            $request->session()->regenerate();

            return back()->with('success', 'Welcome back! ' . $credentials['email']);
        }

        return back()->with('success', 'Invalid credentials');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
