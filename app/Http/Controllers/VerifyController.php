<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use App\Notifications\ResetPassword;

class VerifyController extends Controller
{

    public function index(request $req) {
        $this->validate($req,[
            'email' => 'Required',
        ]);

        $user = User::where('email', $req->email)->firstOrFail()

        ->update(['password' => bcrypt($req->password)]);

        return redirect()->route('beranda')->with('success', 'Password Berhasil diganti, Silahkan Login Kembali.');
    }


    public function verify($token) {

        
        User::where('token', $token)->firstOrFail()

        ->update(['token' => null]);
        
        return redirect()
        ->route('verif')
        ->with('success', 'Account Verified');
    }

    public function resetpassword(Request $req) {

        $this->validate($req,[
            'email' => 'Required',
        ]);

        $user = User::where('email', $req->email)->firstOrFail()

        ->update(['password' => bcrypt($req->password)]);
        
        $user = User::where('email', $req->email)->first();


        $user->notify(new ResetPassword($user));

        return redirect()->back()->with('success', 'kami telah mengirim pesan ke email ' .$user->email. ' berupa tautan atur ulang kata sandi.');
    }
}
