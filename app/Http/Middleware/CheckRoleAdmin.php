<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRoleAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if($user->hasRole('Admin')) {
            return $next($request);
        }
        return redirect()->route('user.dashboard')->with('fail', 'Unauthorised access.');
    }
}
