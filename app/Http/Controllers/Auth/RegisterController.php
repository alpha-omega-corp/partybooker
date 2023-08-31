<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Mail;
use DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/cp';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
		if ($data['type'] === 'partner') {
			$time = $_SERVER["REQUEST_TIME_FLOAT"];
			$pos = strpos($time, '.');
			$in = substr($time, $pos+1);
			$id_partner = date('hisymd').'-'.$in;
		} else {
			$id_partner = 0;
		}
        $user = User::create([
			'id_partner' => $id_partner,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
			'email_verification' => '0',
			'type' => $data['type'],
        ]);
		
		//write event to DB for notifications "REGISTRATION"
		$date = date('Y-m-d H:i:s');
		if ($data['type'] === 'partner') {
			$event = 'Service provider registration';
			$description = 'New service provider:' . $data['name'] .', ID:' . $id_partner;
		} else {
			$event = 'User registration';
			$description = 'New user:' . $data['name'] .', ' . $data['email'];
		}
		DB::insert('insert into notification (event_date, event, description) value(?, ?, ?)',[$date, $event, $description]);
		
		//send verification mail to partner
        //---------------------------------------------------------
		if ($id_partner != 0) {
			$data = array(
				'name' => $user['name'],
				'type' => $user['type'],
				'email' => $user['email'],
			);
			Mail::send('email.html', $data, function ($message) use ($data) {
				$message->from(env('MAIL_USERNAME'), 'New registration');
				$message->to($data['email'])->subject('Email Varification');
			});
		}
		return $user;
    }
}
