<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormGudangController extends Controller
{
  public function index() {
  return view('superadmin.gudang.form_gudang');
}
}
