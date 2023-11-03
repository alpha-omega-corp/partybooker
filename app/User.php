<?php

namespace App;

use App\Models\PartnersInfo;
use Illuminate\Auth\Passwords\CanResetPassword as CanResetPasswordTrait;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;

class User extends Authenticatable implements CanResetPassword
{
    use Notifiable;
    use Billable;
    use CanResetPasswordTrait;

    protected $fillable = [
        'id_partner',
        'name',
        'email',
        'password',
        'email_verification',
        'type',
        'provider',
        'provider_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'trial_ends_at' => 'datetime',
    ];

    public function partnerInfo(): HasOne
    {
        return $this->hasOne(PartnersInfo::class, 'id_partner', 'id_partner');
    }
}
