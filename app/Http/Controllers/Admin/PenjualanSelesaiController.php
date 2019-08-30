<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PenjualanSelesaiController extends Controller
{
  public function index() {
  return view('admin.penjualan.selesai');
}
}
