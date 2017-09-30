<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class CheckUserStatus
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
        // dd($request->all());

        $user = User::where('email', $request->email)->first();

        if($user->status != 1) {
            return redirect('/')->with('fail', 'Your account is not active.');
        }
        return $next($request);
    }
}
