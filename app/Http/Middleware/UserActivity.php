<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Cache;
use Carbon\Carbon;


class UserActivity
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
      if (Auth::check()) {
        $expiresAt = Carbon::now()->addMinutes(1);
        Cache::put('user-is-online'.Auth::user()->id,true,$expiresAt);
      }
        return $next($request);
    }
}
