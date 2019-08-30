<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Bukalapak;
use App\Model\Tokopedia;
use App\Model\Amazon;
use App\Model\Alibaba;
use App\Model\Lazada;
use App\Model\Kriya;
use App\Model\Zalora;
use App\Model\Zilingo;
use App\Model\Blanja;

class LihatProdukController extends Controller
{
  public function lihat($mp, $id) {
    if($mp=='tokopedia'){
      $tokopedias_lihat = Tokopedia::find($id);
      // $url= "{{route('tokopedia')}}";
      return view('admin.aksi.lihat', ['datas' => $tokopedias_lihat]);
    }else if($mp=='bukalapak'){
      $bukalapaks_lihat = Bukalapak::find($id);
      return view('admin.aksi.lihat', ['datas' => $bukalapaks_lihat]);
    }else if($mp=='amazon'){
      $amazons_lihat = Amazon::find($id);
      return view('admin.aksi.lihat', ['datas' => $amazons_lihat]);
    }else if($mp=='alibaba'){
      $alibabas_lihat = Alibaba::find($id);
      return view('admin.aksi.lihat', ['datas' => $alibabas_lihat]);
    }else if($mp=='lazada'){
      $lazadas_lihat = Lazada::find($id);
      return view('admin.aksi.lihat', ['datas' => $lazadas_lihat]);
    }else if($mp=='blanja'){
      $blanjas_lihat = Blanja::find($id);
      return view('admin.aksi.lihat', ['datas' => $blanjas_lihat]);
    }else if($mp=='zalora'){
      $zaloras_lihat = Zalora::find($id);
      return view('admin.aksi.lihat', ['datas' => $zaloras_lihat]);
    }else if($mp=='zilingo'){
      $zilingos_lihat = Zilingo::find($id);
      return view('admin.aksi.lihat', ['datas' => $zilingos_lihat]);
    }else if($mp=='kriya'){
      $kriyas_lihat = Kriya::find($id);
      return view('admin.aksi.lihat', ['datas' => $kriyas_lihat]);
    }
  }
}
