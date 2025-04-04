<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    protected function redirectTo(Request $request): ?string
    {
        // Redirect to 'adminLoginShow' route if not expecting JSON
        return $request->expectsJson() ? null : route('adminLoginShow');
    }
}