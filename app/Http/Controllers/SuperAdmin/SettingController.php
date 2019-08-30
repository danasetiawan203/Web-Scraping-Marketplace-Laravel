<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Setting;

class SettingController extends Controller
{
  public function simpan(Request $req) {

    $mp = $req->marketplace;
    if($mp=='Tokopedia'){
      Setting::updateOrCreate([

      'Marketplace' => $req->marketplace],
      ['nama' => $req->judul_tokopedia,
      'Harga' => $req->harga_tokopedia,
      'deskripsi' => $req->des_tokopedia,
      'foto' => $req->gambar_tokopedia,
      ]);
      return redirect()->back();
    }

    elseif ($mp=='Bukalapak') {

      Setting::updateOrCreate([

      'Marketplace' => $req->marketplace],
      ['nama' => $req->judul_bukalapak,
      'Harga' => $req->harga_bukalapak,
      'deskripsi' => $req->des_bukalapak,
      'foto' => $req->gambar_bukalapak,
      ]);
      return redirect()->back();
    }

    elseif ($mp=='Lazada') {

      Setting::updateOrCreate([

      'Marketplace' => $req->marketplace],
      ['nama' => $req->judul_lazada,
      'Harga' => $req->harga_lazada,
      'deskripsi' => $req->des_lazada,
      'foto' => $req->gambar_lazada,
      ]);
      return redirect()->back();
    }

    elseif ($mp=='Amazon') {

      Setting::updateOrCreate([

      'Marketplace' => $req->marketplace],
      ['nama' => $req->judul_amazon,
      'Harga' => $req->harga_amazon,
      'deskripsi' => $req->des_amazon,
      'foto' => $req->gambar_amazon,
      ]);
      return redirect()->back();
    }

    elseif ($mp=='Alibaba') {

      Setting::updateOrCreate([

      'Marketplace' => $req->marketplace],
      ['nama' => $req->judul_alibaba,
      'Harga' => $req->harga_alibaba,
      'deskripsi' => $req->des_alibaba,
      'foto' => $req->gambar_alibaba,
      ]);
      return redirect()->back();
    }

    elseif ($mp=='Blanja') {

      Setting::updateOrCreate([

      'Marketplace' => $req->marketplace],
      ['nama' => $req->judul_blanja,
      'Harga' => $req->harga_blanja,
      'deskripsi' => $req->des_blanja,
      'foto' => $req->gambar_blanja,
      ]);
      return redirect()->back();
    }

    elseif ($mp=='Zalora') {

      Setting::updateOrCreate([

      'Marketplace' => $req->marketplace],
      ['nama' => $req->judul_zalora,
      'Harga' => $req->harga_zalora,
      'deskripsi' => $req->des_zalora,
      'foto' => $req->gambar_zalora,
      ]);
      return redirect()->back();
    }

    elseif ($mp=='Zilingo') {

      Setting::updateOrCreate([

      'Marketplace' => $req->marketplace],
      ['nama' => $req->judul_zilingo,
      'Harga' => $req->harga_zilingo,
      'deskripsi' => $req->des_zilingo,
      'foto' => $req->gambar_zilingo,
      ]);
      return redirect()->back();
    }

    elseif ($mp=='Kriya') {

      Setting::updateOrCreate([

      'Marketplace' => $req->marketplace],
      ['nama' => $req->judul_kriya,
      'Harga' => $req->harga_kriya,
      'deskripsi' => $req->des_kriya,
      'foto' => $req->gambar_kriya,
      ]);
      return redirect()->back();
    }

  }

  public function index(){

    $setting = Setting::all();
    $setting = $setting->where('Marketplace', 'Tokopedia')->first();
    return view('superadmin.setting.index');
  }

  public function getData($id){
    $setting = Setting::where('Marketplace', $id)->get();
    return response()->json($setting);
  }

  // public function update(Request $req) {
  //   $setting_update = Setting::where('id',$req->id)->update([
  //     'nama' => $req->judul,
  //     'Harga' => $req->harga,
  //     'deskripsi' => $req->des,
  //     'foto' => $req->gambar,
  //   ]);
  //   return redirect()->back()->with('success', 'Data Tokopedia Telah Diperbarui');
  // }
}
