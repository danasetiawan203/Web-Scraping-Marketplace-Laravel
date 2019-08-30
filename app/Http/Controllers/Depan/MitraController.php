<?php

namespace App\Http\Controllers\Depan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Scraping;

class MitraController extends Controller
{
    public function index() {
        $d = Scraping::all();
        return view('depan.mitra.index',compact(['d']));
      }
}
