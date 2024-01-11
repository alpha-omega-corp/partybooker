<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\User;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register(StoreUserRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $validated['password'] = bcrypt($validated['password']);
        $validated['email_verification'] = 1;
        
        User::create($validated);
        return redirect()->back()->with('success', 'Account created, you can now login.');
    }
}
