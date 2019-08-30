<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListGudangController extends Controller
{
  public function index() {
  return view('admin.gudang.list');
}
}
