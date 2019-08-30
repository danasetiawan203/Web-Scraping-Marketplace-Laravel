<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Scraping;
use App\User;
use DB;
use App\Notifications\SuspendAccount;
use App\Notifications\RestoreAccount;

class DropshippingController extends Controller
{
  public function index() {
    // $user = DB::table('scraping')
    // ->join('users','users.id','=','scraping.id_user')
    // ->get();

    $data = array();
    $users = User::with('scraping')->get();
    // dd($users[0]->scrapping->nama);
    // for ($i=0; $i < count($users); $i++) {
    //   $data[$i] = array('nama' => $users[$i]->scrapping->nama);
    // }
    return view('superadmin.dropshipping.user',['users' => $users]);
  }

  public function profil_user($id) {
    // $user = DB::table('scraping')
    // ->join('users','users.id','=','scraping.id_user')
    // ->get();

    $profile = Scraping::find($id);
    // dd($users[0]->scrapping->nama);
    // for ($i=0; $i < count($users); $i++) {
    //   $data[$i] = array('nama' => $users[$i]->scrapping->nama);
    // }
    return view('superadmin.dropshipping.profile',['profile' => $profile]);
  }

  public function insert( Request $req) {
    $this->validate($req, [
      'nama'  => 'required',
      'email' => 'required|email|unique:users,email',
      'password' => 'required|string|min:6|confirmed',
    ]);

    $insert_user = User::create([
      'name' => $req->nama,
      'email' => $req->email,
      'password' => bcrypt($req->password),
      'id_role' => 1,
    ]);

    return redirect()->route('user.login');
  }

  public function suspend(Request $req) {


          $user = User::where('id', $req->id_suspend)->first();

          $user->notify(new SuspendAccount($user));
          $user->aktif = 0;
          $user->save();

          return redirect()
          ->back()
          ->with('success', 'Anda berhasil men-suspend user.');
      }

      public function restore(Request $req) {

        $user = User::where('id', $req->id_restore)->first();

        $user->notify(new RestoreAccount($user));
        $user->aktif = 1;
        $user->save();
        

        return redirect()
        ->back()
        ->with('success', 'Anda berhasil men-restore user.');

      }

      public function hapus(Request $req) {

        $user = User::where('id', $req->id_hapus)->forceDelete();

        return redirect()
        ->back()
        ->with('success', 'Anda sudah menghapus user.');
      }
}
