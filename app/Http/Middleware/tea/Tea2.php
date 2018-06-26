<?php

namespace App\Http\Middleware;

use Closure;

class Tea2
{

    public function handle($request, Closure $next)
    {
        echo 'middleware <br>';

        return $next($request);
    }

}
