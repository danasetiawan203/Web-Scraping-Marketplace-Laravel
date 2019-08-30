<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    if(Auth::user()->id_role == 1){
    return redirect()->route('superadmin')->with('success');
    }

    elseif(Auth::user()->id_role == 2){
      return redirect()->route('dropshipper')->with('success');
    }


    }
}
