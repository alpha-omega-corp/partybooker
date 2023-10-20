<?php

namespace App\Http\Middleware;


class TrustHosts extends \Illuminate\Http\Middleware\TrustHosts
{
    public function hosts(): array
    {
        return [
            'laravel.test',
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
