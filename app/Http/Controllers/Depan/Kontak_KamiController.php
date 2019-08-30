<?php

namespace App\Http\Controllers\Depan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Pesan;

class Kontak_KamiController extends Controller
{

      public function postPesan(Request $req){
        
        $this->validate($req, [
          'name' => 'required',
          'email' => 'required',
          'subject' => 'required',
          'message' => 'required',
        ]);
    
        $insert_pesan= Pesan::create([
    
          'nama' => $req->name,
          'email' => $req->email,
          'subject' => $req->subject,
          'isi' => $req->message,
        ]);
    
        return redirect()->back()->withSuccess('Pesan sudah Terkirim.');
    
      }
}
