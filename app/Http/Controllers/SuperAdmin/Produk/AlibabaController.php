<?php

namespace App\Http\Controllers\SuperAdmin\Produk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Alibaba;

class AlibabaController extends Controller
{
  public function index() {
    $alibabas=Alibaba::all();
    return view('superadmin.produk.alibaba',['alibabas' => $alibabas]);
 }

 public function hapusmodalalibabaSA(Request $req) {
  Alibaba::find($req->id)->delete();
  return redirect()->back()->with('error', 'Anda Telah Menghapus Produk Alibaba.');
}
}
