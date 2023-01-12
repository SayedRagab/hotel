<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateWithJWT
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {

        foreach ($guards as $guard) {
            if (auth($guard)->user()) {
                return $next($request);
            }
        }

        return response()->json([
            'status' => false,
            'message' => 'Unauthorized',
            'data' => null
        ], 401);
    }
}
