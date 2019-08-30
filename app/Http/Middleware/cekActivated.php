<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Illuminate\Contracts\Auth\Guard;

use Closure;

class cekActivated
{
  /**
    * The Guard implementation.
    *
    * @var Guard
    */
    protected $auth;

    /**
    * Create a new middleware instance.
    *
    * @param  Guard  $auth
    * @return void
    */
    public function __construct(Guard $auth)
    {
      $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if ($this->auth->guest()) {
  	        if ($request->ajax()) {
  	            return response('Unauthorized.', 401);
  	        } else {
  	            return redirect()->guest('/');
  	        }
  	    }

      else if($this->auth->user()->aktif!=1){
          Auth::logout();
        return redirect()->route('beranda')->with('aktif', 'Akun Anda aktif');
      }
        return $next($request);
    }
}
