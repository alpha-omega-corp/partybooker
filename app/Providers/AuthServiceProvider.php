<?php

namespace App\Providers;

use App\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    public function boot(): void
    {
        $this->registerPolicies();

        Gate::define('update-partner', function (User $user) {
            $authPartner = Auth::user()->partnerInfo;
            if ($user->isAdmin()) {
                return true;
            }

            return $user->id_partner === $authPartner->id_partner
                ? Response::allow()
                : Response::deny('This is not your account.');
        });
    }
}
