<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckUserConfirm
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

        if($user->confirmed != 1) {
            return back()->with('fail', 'Your account is not confirmed.');    
        }
        return $next($request);
    }
}
