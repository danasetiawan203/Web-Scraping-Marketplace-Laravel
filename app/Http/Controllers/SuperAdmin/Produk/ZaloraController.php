<?php

namespace App\Http\Controllers\Superadmin\Produk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Zalora;

class ZaloraController extends Controller
{
  public function index() {
    $zaloras=Zalora::all();
    return view('superadmin.produk.zalora',['zaloras' => $zaloras]);
}

  public function hapusmodalzaloraSA(Request $req) {
  Zalora::find($req->id)->delete();
  return redirect()->back()->with('error', 'Anda Telah Menghapus Produk Zalora.');
}
}
