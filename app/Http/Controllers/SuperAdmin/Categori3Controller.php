<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Categori3;
use App\Model\Categori2;
use Alert;

class Categori3Controller extends Controller
{
  public function index() {
    $categori2 = Categori2::all();
    $categori3 = Categori3::all();
    $max =  Categori3::max('id')+1;

  return view('superadmin.categori.cat3',['categori3' => $categori3, 'max' => $max, 'categori2' => $categori2 ]);
  }

  public function tambah(Request $req) {
    // dd($req);
    $insert_cat3= Categori3::create([
      'id' => $req->id,
      'id_cat2' => $req->id_cat2,
      'nama' => $req->nama,
  ]);

      return redirect()->route('superadmin.cat3')->with('success', 'Data Categori 3 Tersimpan');
  }

  public function edit($id) {
    $edit_cat3 = Categori3::where('id','=', $id)->get();
    return response()->json($edit_cat3);
  }

  public function update(Request $req) {
    // dd($req);
    $update_cat3 = Categori3::where('id', $req->id_edit)
    ->update([
      'id' => $req->modal_id,
      'id_cat2' => $req->modal_cat2,
      'nama' => $req->modal_nama,
  ]);
    return redirect()->back()->with('success', 'Data categori 3 Telah Diperbarui.');
  }

  public function hapus(Request $req) {
    Categori3::find($req->id)->delete();
    return redirect()->back()->with('error', 'Anda Telah Menghapus Data Categori 3.');
  }


}
