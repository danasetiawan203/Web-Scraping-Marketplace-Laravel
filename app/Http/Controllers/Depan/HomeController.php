<?php

namespace App\Http\Controllers\Depan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
  public function index() {
  return view('depan.beranda.index');
}
public function kontak() {
  return view('depan.kontak.index');
}
}
