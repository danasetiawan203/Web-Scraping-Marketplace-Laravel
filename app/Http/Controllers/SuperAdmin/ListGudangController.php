<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListGudangController extends Controller
{
  public function index() {
  return view('superadmin.gudang.list');
}
}
