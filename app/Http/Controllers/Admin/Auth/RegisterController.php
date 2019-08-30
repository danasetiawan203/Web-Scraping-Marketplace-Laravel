<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Scraping;
use App\Model\User;
use App\Model\Provinsi;
use App\Model\Kabupaten;



class RegisterController extends Controller
{
  public function index() {
    $provs = provinsi::all();

    return view('admin.auth.register', ['provs' => $provs]);
 }

 public function kabu($id) {
          $id_kab = kabupaten::where('id_prov', '=', $id)->get();

          return response()->json($id_kab);
      }

 // public function insert(Request $Request) {
 //
 // user::insert(
 //    ['name' => $Request->nama,
 //    'email' => $Request->email,
 //    'id_role' => 2 ,
 //    'password' => bcrypt($Request->password)]
 //  );
 // $maxuser = user::max('id');
 //  scraping::insert(
 //    ['id_user' => $maxuser,
 //    'nama' => $Request->nama,
 //    'no_identitas' => $Request->identitas,
 //    'tanggal_lahir' => $Request->tanggal,
 //    'pekerjaan' => $Request->pekerjaan,
 //    'no_hp' => $Request->tel,
 //    'id_prov' => $Request->provinsi,
 //    'id_kab' => $Request->kabupaten,
 //    'email' => $Request->email,
 //    'lat' => $Request->lat,
 //    'long' => $Request->long,
 //    'alamat' => $Request->alamat
 //  ]);
 //  return redirect()->route('superadmin');
 // }
}
