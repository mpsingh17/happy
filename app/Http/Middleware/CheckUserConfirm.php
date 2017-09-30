<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

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
        $user = User::where('email', $request->email)->first();

        if($user->confirmed != 1) {
            return redirect('/')->with('fail', 'Your account is not confirmed.');
        }
        return $next($request);
    }
}
