<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Scraping;
use App\Model\Provinsi;
use App\Model\Kabupaten;
use App\User;
use Auth;
use Storage;
use Intervention\Image\ImageManagerStatic as Image;

class ProfileController extends Controller
{
    public function index() {
      $profile = Scraping::where('id_user', \Auth::user()->id)->first();
      $provs = provinsi::all();
    return view('admin.profile.index',['profile' => $profile,'provs' => $provs]);
    }

    public function kabu($id) {
          $id_kab = kabupaten::where('id_prov', '=', $id)->get();

          return response()->json($id_kab);
    }

    public function simpan(Request $req){
      // dd($req);
      $this->validate($req, [
        
        'foto' => 'mimes:jpeg,bmp,png,jpg',
        'nama' => 'required|string|max:255',
        'no_identitas' => 'required',
        'tanggal_lahir' => 'required',
        'pekerjaan' => 'required',
        'no_hp' => 'required',
        'alamat' => 'required',
      ],[
        'mimes' => 'Harap Gunakan format foto .jpeg, .bmp, .png dan .jpg',
        'nama.required' => 'Nama harus diisi tidak boleh kosong',
        'no_identitas.required' => 'No identitas harus diisi tidak boleh kosong',
        'tanggal_lahir.required' => 'Tanggal lahir harus diisi tidak boleh kosong',
        'no_hp.required' => 'No HP harus diisi tidak boleh kosong',
        'alamat.required' => 'alamat harus diisi tidak boleh kosong',
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
      ->update([
      
      'nama' => $req->nama,
      'no_identitas' => $req->no_identitas,
      'tanggal_lahir' => $req->tanggal_lahir,
      'pekerjaan' => $req->pekerjaan,
      'no_hp' => $req->no_hp,
      'id_prov' => $req->provinsi,
      'id_kab' => $req->kabupaten,
      'lat' => $req->lat,
      'long' => $req->long,
      'alamat' => $req->alamat,
      'foto' => $filename,
      ]);

      $user_update = User::where('id', Auth::user()->id)
        ->update([
          'name' => $req->nama,
          'foto' => $filename,
          ]);

      return redirect()->back()->with('success','Setting Informasi Berhasil diupdate');
    }

    public function pass(Request $req){
      $this->validate($req, [
        
        
        'email' => 'required|string|email',
        'password' => 'required|string|min:6|confirmed',
      
      ],[
            
        'required' => 'Harap diisi jangan dikosongkan.',
        'min:6' => 'masukkan password anda minimal 6.',
        'confirmed' => 'Anda Lupa Memasukkan Konfrimasi password anda.', 

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

    public function getData($id) {
      $profile_edit = Scraping::where('id_user', \Auth::user()->id)->get();
      return response()->json($profile_edit);
    }
}
