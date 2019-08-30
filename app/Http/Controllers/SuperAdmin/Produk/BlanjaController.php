<?php

namespace App\Http\Controllers\SuperAdmin\Produk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Blanja;

class BlanjaController extends Controller
{
  public function index() {
    $blanjas=Blanja::all();
    return view('superadmin.produk.blanja',['blanjas' => $blanjas]);
 }

 public function hapusmodalblanjaSA(Request $req) {
  Blanja::find($req->id)->delete();
  return redirect()->back()->with('error', 'Anda Telah Menghapus Produk Blanja.');
}
}
