<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Partner;
use App\Models\Plan;
use App\Models\Post;

class AdminController extends Controller
{
    public function index()
    {
        return view('app.admin.index', [

        ]);
    }

    public function partners()
    {
        return view('app.admin.partners', [
            'plans' => Plan::all()->map(fn(Plan $plan) => $plan->name),
           
        ]);
    }

    public function messages()
    {
        return view('app.admin.messages', [
            'helps' => Notification::helps()->get(),
            'partnerships' => Notification::partnerships()->get(),
            'services' => Notification::services()->get()
        ]);
    }

    public function blog()
    {
        return view('app.admin.blog', [
            'posts' => Post::all()
        ]);
    }


    public function topServices()
    {
        $partners = Partner::all()->map(function ($e) {
            return (object)[
                'value' => $e->id_partner,
                'label' => str_replace([' ', '.', ',', '"', '--', "'"], '', strtolower(trim($e->slug)))
            ];
        });

        return view('admin.top-services', [
            'partners' => $partners->toArray(),
            'topServices' => TopService::all(),
            'topServicesId' => TopService::all()->map(function ($e) {
                return $e->partner->id_partner;
            })->toArray()
        ]);
    }

}
