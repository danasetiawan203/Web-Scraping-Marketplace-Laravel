<?php

namespace App\Http\Controllers\SuperAdmin\Produk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Lazada;

class LazadaController extends Controller
{
  public function index() {
    $lazadas = Lazada::all();
    return view('superadmin.produk.lazada',['lazadas' => $lazadas]);
}

  public function hapusmodallazadaSA(Request $req) {
  Lazada::find($req->id)->delete();
  return redirect()->back()->with('error', 'Anda Telah Menghapus Produk Lazada.');
}
}
