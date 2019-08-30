<?php

namespace App\Http\Controllers\Admin\Produk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Kriya;
use App\Model\Categori1;
use App\Model\Categori2;
use App\Model\Categori3;
use Illuminate\Support\Facades\DB;
use Alert;

class kriyaController extends Controller
{
  public function index() {
    $kriyas= Kriya::where('id_scraping', \Auth::user()->id)->get();
    $cats1 = Categori1::all();
    return view('admin.produk.kriya',['kriyas' => $kriyas, 'cats1' => $cats1]);
 }

 public function cat2($id) {
          $id_cat2 = Categori2::where('id_cat1', '=', $id)->get();

          return response()->json($id_cat2);
      }

public function cat3($id) {
         $id_cat3 = Categori3::where('id_cat2', '=', $id)->get();

         return response()->json($id_cat3);
     }

  public function hapusmodalkriya(Request $req) {
          Kriya::find($req->id)->delete();
          return redirect()->back()->with('error', 'Anda Telah Menghapus Produk Kriya.');
  }


  public function editmodalkriya($id) {

    // $tokopedias = Tokopedia::where('id', $id)->get();
          $kriyas_edit = Kriya::where('id','=', $id)->get();
          return response()->json($kriyas_edit);

  }

  public function updatemodalkriya(Request $req) {   

    $this->validate($req, [        
        
      // 'deskripsi' => 'required',
    ],[
      
      // 'deskripsi.required' => 'Deskripsi harus diisi tidak boleh kosong',
    ]); 

          $kriyas_update = Kriya::where('id', $req->id_edit)
          ->update([
              'url' => $req->modal_url,
              'nama_barang' => $req->modal_nama_barang,
              'harga' => $req->modal_harga,
              'berat' => $req->modal_berat,
              'stock' => $req->modal_stock,
              'deskripsi' => $req->modal_deskripsi,
              'cat1' => $req->modal_cat1,
              'cat2' => $req->modal_cat2,
              'cat3' => $req->modal_cat3,
              'ukuran' => $req->modal_ukuran,
              'warna' => $req->modal_warna,
              'foto' => $req->modal_foto,

          ]);
           return redirect()->back()->with('success', 'Data Kriya Telah Diperbarui.');
       }
}
