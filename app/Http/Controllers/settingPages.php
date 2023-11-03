<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use DB;

class settingPages extends Controller
{
    public function profile()
    {
        $users = DB::select('select * from users');
        return view('admin.settings.profile', ['users' => $users]);
    }

    public function plans()
    {
        $plans = Plan::with('planOptions')->get();

        foreach ($plans as $plan) {
            $temp = [];
            foreach ($plan->planOptions as $option) {
                $temp[$option->group][] = $option;
            }
            $plan->options = $temp;
        }

        return view('admin.settings.plans', ['plans' => $plans]);
    }

    public function contacts()
    {
        $settings = DB::select('select * from settings');
        return view('admin.settings.contacts', ['settings' => $settings]);
    }

    public function userterms()
    {
        $settings = DB::select('select * from settings');
        return view('admin.settings.user-terms', ['settings' => $settings]);
    }

    public function partnerterms()
    {
        $settings = DB::select('select * from settings');
        return view('admin.settings.partner-terms', ['settings' => $settings]);
    }

}
