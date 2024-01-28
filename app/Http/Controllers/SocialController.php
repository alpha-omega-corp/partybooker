<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\User;
use Socialite;
use function bcrypt;

class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $getInfo = Socialite::driver($provider)->user();
        if ($getInfo->email == null || $getInfo->email == '') {
            return redirect()->to('/')->with('error', 'Email is required');
        }
        $user = $this->createUser($getInfo, $provider);
        auth()->login($user);
        return redirect()->to('/');
    }

    function createUser($getInfo, $provider)
    {
        $user = User::where('provider_id', $getInfo->id)->first();
        if (!$user) {
            $user = User::create([
                'name' => $getInfo->name,
                'email' => $getInfo->email,
                'provider' => $provider,
                'provider_id' => $getInfo->id,
                'password' => bcrypt($getInfo->email),
                'email_verification' => 1,
                'id_partner' => null,
                'type' => null
            ]);

            $this->SaveNotification($getInfo->name, $getInfo->email);

        }
        return $user;
    }

    private function SaveNotification($name, $email)
    {
        $date = date('Y-m-d H:i:s');
        $event = 'User registration';
        $description = 'New user:' . $name . ', ' . $email;

        $notification = new Notification();
        $notification->fill(['event_date' => $date, 'event' => $event, 'description' => $description]);
        $notification->save();
    }
}
