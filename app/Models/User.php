<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Auth\Passwords\CanResetPassword as CanResetPasswordTrait;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;

class User extends Authenticatable implements CanResetPassword
{
    use Notifiable;
    use Billable;
    use HasFactory;
    use CanResetPasswordTrait;

    protected $fillable = [
        'name',
        'email',
        'encrypted_password',
        'verified_at',
        'admin',
        'partner_id',
    ];

    protected $hidden = [
        'encrypted_password', 'remember_token',
    ];

    protected $casts = [
        'verified_at' => 'datetime',
    ];

    protected static function newFactory(): UserFactory
    {
        return UserFactory::new();
    }

    public function isAdmin(): bool
    {
        return $this->type === 'admin';
    }

    public function sanitizeRoute(string $path): string
    {
        $isAdmin = $this->type === 'admin';
        return $isAdmin
            ? url('/cp/partner-cp' . $path)
            : url('/partner-cp' . $path);
    }

    public function partner(): HasOne
    {
        return $this->hasOne(Partner::class);
    }
}
