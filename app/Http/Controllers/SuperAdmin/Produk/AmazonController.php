<?php

namespace App\Http\Controllers\SuperAdmin\Produk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Amazon;

class AmazonController extends Controller
{
  public function index() {
    $amazons=Amazon::all();
    return view('superadmin.produk.amazon',['amazons' => $amazons]);
 }

 public function hapusmodalamazonSA(Request $req) {
  Amazon::find($req->id)->delete();
  return redirect()->back()->with('error', 'Anda Telah Menghapus Produk Amazon.');
}
}
