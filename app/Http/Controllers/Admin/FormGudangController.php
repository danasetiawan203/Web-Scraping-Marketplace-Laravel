<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormGudangController extends Controller
{
  public function index() {
  return view('admin.gudang.form_gudang');
}
}
