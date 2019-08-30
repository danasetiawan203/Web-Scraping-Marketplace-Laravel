<?php

namespace App\Http\Controllers\SuperAdmin\Produk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Zilingo;

class ZilingoController extends Controller
{
  public function index() {
    $zilingos=Zilingo::all();
    return view('superadmin.produk.zilingo',['zilingos' => $zilingos]);
  }

  public function hapusmodalzilingoSA(Request $req) {
    Zilingo::find($req->id)->delete();
    return redirect()->back()->with('error', 'Anda Telah Menghapus Produk Zilingo.');
}
}
