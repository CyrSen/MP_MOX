<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPermissionLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }

        /* public function handle($request, Closure $next, ...$levels)
        {
            $user = $request->user();
        
            // Check if the user has the required permission level
            if ($user && in_array($user->permission_level, $levels)) {
                return $next($request);
            }
        
            abort(403, 'Unauthorized');
        } */

}
