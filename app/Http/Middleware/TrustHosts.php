<?php

namespace App\Http\Middleware;


class TrustHosts extends \Illuminate\Http\Middleware\TrustHosts
{
    public function hosts(): array
    {
        return [
            '^(127.0.0.1|localhost|partybooker.ch)$',
            $this->allSubdomainsOfApplicationUrl(),
        ];
    }
}
