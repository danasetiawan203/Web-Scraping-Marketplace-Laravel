<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Categori1;
use Alert;

//class
class Categori1Controller extends Controller
{
    
    public function index() { //method
      
      $categori1 = Categori1::all(); //properti atau variabel
      // dd($categori1);
      // var_dump($categori1);
      // print_r($categori1);
      // Di atas merupakan debugging sistem
      // $id = count($categori1)+1;
      $max =  Categori1::max('id')+1;
      // return response()->json(['success' => '$categori1']);
    return view('superadmin.categori.cat1',['categori1' => $categori1,'max' => $max ]); //data sebagai object
    }

    public function tambah(Request $req) {
      
      $insert_cat1= Categori1::create([
        'id' => $req->id,
        'nama' => $req->nama,
    ]);
        return redirect()->route('superadmin.cat1')->with('success', 'Data Categori 1 Tersimpan');
    }

    public function edit($id) {
      $edit_cat1 = Categori1::where('id','=', $id)->get();
      return response()->json($edit_cat1);
    }

    public function update(Request $req) {
      // dd($req);
      $update_cat1 = Categori1::where('id', $req->id_edit)
      ->update([
        'id' => $req->modal_id,
        'nama' => $req->modal_nama,
    ]);
      return redirect()->back()->with('success', 'Data categori 1 Telah Diperbarui.');
    }

    public function hapus(Request $req) {
      Categori1::find($req->id)->delete();
      return redirect()->back()->with('error', 'Anda Telah Menghapus Data Categori 1.');
    }
}
