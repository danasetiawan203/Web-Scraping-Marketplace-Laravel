<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Scraping;
use App\User;
use DB;
use Auth;
use Storage;
use Intervention\Image\ImageManagerStatic as Image;

class ProfileController extends Controller
{
  public function index() {
  $lihat = Scraping::where('id_user', \Auth::user()->id)->first();
  $profile = User::with('scraping')->get();
  
  return view('superadmin.profile.index',['profile' => $profile,'lihat' => $lihat]);
 }

 public function pass_superadmin(Request $req){
  $this->validate($req, [
        
        
    'email' => 'required|string|email',
    'password' => 'required|string|min:6|confirmed',

  ]);
  // dd($req);
  if(Auth::user()->email == $req->email) {

    User::where('id', $req->id)->firstOrFail()

    ->update(['password' => bcrypt($req->password)]);



  }
  else {
    User::where('id', $req->id)->firstOrFail()

    ->update(['email' => $req->email, 'password' => bcrypt($req->password)]);

    Scraping::where('id_user', $req->id)->firstOrFail()

    ->update(['email' => $req->email]);
  }
    return redirect()->back()->with('success','Email dan Password Berhasil diupdate');
  }
  

  public function simpan_superadmin(Request $req){
    // dd($req);
    $this->validate($req, [
      
      'foto' => 'mimes:jpeg,bmp,png,jpg',

    ]);

    if ($req->has('foto') && $req->namaFoto == "3.jpg") {
      $save   = Storage::disk('foto-profile');
      $file=$req->foto;
        $filename=mt_rand('100000', '999999').'.jpg';
        $img   = Image::make(file_get_contents($file));
        $img->resize(225, 250)->save( public_path('/uploads/avatars/' . $filename ) );
    }

    else if ($req->has('foto') && $req->namaFoto != "3.jpg") {
      $save   = Storage::disk('foto-profile')->delete($req->namaFoto);
      $file=$req->file('foto');
        $filename=mt_rand('100000', '999999').'.jpg';
        $img   = Image::make(file_get_contents($file));
        $img->resize(225, 250)->save( public_path('/uploads/avatars/' . $filename ) );
    }
    else{
      $filename = $req->namaFoto;
    }

    
    $scraping_update = Scraping::where('id_user', \Auth::user()->id)
    ->update(['foto' => $filename]);

    $user_update = User::where('id', Auth::user()->id)
      ->update(['foto' => $filename]);

    return redirect()->back()->with('success','Setting Informasi Berhasil diupdate');
  }

}
