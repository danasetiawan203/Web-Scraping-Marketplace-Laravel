<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Categori2;
use App\model\categori1;
use Alert;

class Categori2Controller extends Controller
{
  public function index() {
    $categori1 = Categori1::all();
    $categori2 = Categori2::all();
    $max =  Categori2::max('id')+1;
    // $setting = $setting->where('Marketplace', 'Tokopedia')->first();
  return view('superadmin.categori.cat2',['categori1' => $categori1, 'max' => $max, 'categori2' => $categori2 ]);
  }

  public function tambah(Request $req) {
    // dd($req);
    $insert_cat2= Categori2::create([
      'id' => $req->id,
      'id_cat1' => $req->id_cat1,
      'nama' => $req->nama,
  ]);

      return redirect()->route('superadmin.cat2')->with('success', 'Data Categori 2 Tersimpan');
  }

  public function edit($id) {
    $edit_cat2 = Categori2::where('id','=', $id)->get();
    return response()->json($edit_cat2);
  }

  public function update(Request $req) {
    // dd($req);
    $update_cat2 = Categori2::where('id', $req->id_edit)
    ->update([
      'id' => $req->modal_id,
      'id_cat1' => $req->modal_cat1,
      'nama' => $req->modal_nama,
  ]);
    return redirect()->back()->with('success', 'Data categori 2 Telah Diperbarui.');
  }

  public function hapus(Request $req) {
    Categori2::find($req->id)->delete();
    return redirect()->back()->with('error', 'Anda Telah Menghapus Data Categori 2.');
  }
}
