<?php

namespace App\Http\Middleware;

use Closure;

class IsLogin
{
    public function handle($request, Closure $next)
    {
        if (!session('account')) {
            return redirect('/');
        }
        return $next($request);
    }
}
