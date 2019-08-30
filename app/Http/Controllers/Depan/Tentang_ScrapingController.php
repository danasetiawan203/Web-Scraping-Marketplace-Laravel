<?php

namespace App\Http\Controllers\Depan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Tentang_ScrapingController extends Controller
{
    public function index() {
        return view('depan.tentang.index');
      }
}
