<?php

namespace App\Http\Controllers\SuperAdmin\Produk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Tokopedia;

class TokopediaController extends Controller
{
  public function index() {
    $tokopedias=Tokopedia::all();
    return view('superadmin.produk.tokopedia',['tokopedias' => $tokopedias]);
}

  public function hapusmodaltokopediaSA(Request $req) {
  Tokopedia::find($req->id)->delete();
  return redirect()->back()->with('error', 'Anda Telah Menghapus Produk Tokopedia.');
}
}
