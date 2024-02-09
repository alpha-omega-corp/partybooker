<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Auth\Passwords\CanResetPassword as CanResetPasswordTrait;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'password',
        'verified_at',
        'is_admin',
        'partner_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
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
        return $this->is_admin;
    }

    public function sanitizeRoute(string $path): string
    {
        $isAdmin = $this->type === 'admin';
        return $isAdmin
            ? url('/cp/partner-cp' . $path)
            : url('/partner-cp' . $path);
    }

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }
}
