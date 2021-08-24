<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class UserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            $expiresAt = now()->addMinutes(2);
            Cache::put('user-is-online-'.Auth::user()->id,true,$expiresAt);

            /*  User Last Seen*/
            User::where('id',Auth::user()->id)->update(['last_seen'=>now()]);
        }
        return $next($request);
    }
}