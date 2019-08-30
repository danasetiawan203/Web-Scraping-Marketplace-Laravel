<?php

namespace App\Http\Controllers\Admin\Produk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Blanja;
use App\Model\Categori1;
use App\Model\Categori2;
use App\Model\Categori3;
use Illuminate\Support\Facades\DB;
use Alert;

class BlanjaController extends Controller
{
  public function index() {
    $blanjas=Blanja::where('id_scraping', \Auth::user()->id)->get();
    $cats1 = Categori1::all();
    return view('admin.produk.blanja',['blanjas' => $blanjas, 'cats1' => $cats1]);
}

  public function cat2($id) {
          $id_cat2 = Categori2::where('id_cat1', '=', $id)->get();

          return response()->json($id_cat2);
      }

  public function cat3($id) {
        $id_cat3 = Categori3::where('id_cat2', '=', $id)->get();

        return response()->json($id_cat3);
      }

  public function hapusmodalblanja(Request $req) {
          Blanja::find($req->id)->delete();
          return redirect()->back()->with('error', 'Anda Telah Menghapus Produk Blanja.');
  }


  public function editmodalblanja($id) {

    // $tokopedias = Tokopedia::where('id', $id)->get();
          $blanjas_edit = Blanja::where('id','=', $id)->get();
          return response()->json($blanjas_edit);

  }

  public function updatemodalblanja(Request $req) {  
    
    $this->validate($req, [        
        
      // 'deskripsi' => 'required',
    ],[
      
      // 'deskripsi.required' => 'Deskripsi harus diisi tidak boleh kosong',
    ]); 

          $blanjas_update = Blanja::where('id', $req->id_edit)
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
           return redirect()->back()->with('success', 'Data Blanja Telah Diperbarui.');
       }
}
