<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DaftarPesananController extends Controller
{
  public function index() {
  return view('superadmin.penjualan.pesanan');
}
}
