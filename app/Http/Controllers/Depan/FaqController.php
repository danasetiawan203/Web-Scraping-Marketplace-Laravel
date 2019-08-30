<?php

namespace App\Http\Controllers\Depan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    public function index() {
        return view('depan.faq.index');
      }
}
