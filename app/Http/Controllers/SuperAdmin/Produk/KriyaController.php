<?php

namespace App\Http\Controllers\SuperAdmin\Produk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Kriya;

class KriyaController extends Controller
{
  public function index() {
    $kriyas= Kriya::all();
    return view('superadmin.produk.kriya',['kriyas' => $kriyas]);
  }
  public function hapusmodalkriyaSA(Request $req) {
    Kriya::find($req->id)->delete();
    return redirect()->back()->with('error', 'Anda Telah Menghapus Produk Kriya.');
}
}
