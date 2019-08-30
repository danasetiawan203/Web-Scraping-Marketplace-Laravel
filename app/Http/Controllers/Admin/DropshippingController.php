<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DropshippingController extends Controller
{
  public function index() {
    return view('admin.dropshipping.user');
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
      'id_role' => 2,
    ]);

    return redirect()->route('user.login');
  }
}
