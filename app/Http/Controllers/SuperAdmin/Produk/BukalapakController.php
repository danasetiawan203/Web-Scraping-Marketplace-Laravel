<?php

namespace App\Http\Controllers\SuperAdmin\Produk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Bukalapak;

class BukalapakController extends Controller
{
  public function index() {
    $bukalapaks=Bukalapak::all();
    return view('superadmin.produk.bukalapak',['bukalapaks' => $bukalapaks]);
 }

 public function hapusmodalbukalapakSA(Request $req) {
  Bukalapak::find($req->id)->delete();
  return redirect()->back()->with('error', 'Anda Telah Menghapus Produk Bukalapak.');
}
}
