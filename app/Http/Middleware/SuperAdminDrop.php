<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;

use Closure;

class SuperAdminDrop
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
	    else if($this->auth->user()->id_role != 1){
	      return redirect('/')->with('error','Anda tidak punya hak akses');
	    }

	    return $next($request);
    }
}
