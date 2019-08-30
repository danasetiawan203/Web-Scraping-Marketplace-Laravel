<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Tokopedia;
use App\Model\Amazon;
use App\Model\Bukalapak;
use App\Model\Alibaba;
use App\Model\Lazada;
use App\Model\Blanja;
use App\Model\Kriya;
use App\Model\Zalora;
use App\Model\Zilingo;
use App\User;

class HomeController extends Controller
{
  public function index() {
    $tokopedias = Tokopedia::count();
    $bukalapaks = Bukalapak::count();
    $alibabas   = Alibaba::count();
    $amazons    = Amazon::count();
    $lazadas    = Lazada::count();
    $blanjas    = Blanja::count();
    $zilingos   = Zilingo::count();
    $kriyas     = Kriya::count();
    $zaloras    = Zalora::count();
    $users      = User::count();

    $total      = $tokopedias + $bukalapaks + $alibabas + $amazons + $lazadas + $blanjas + $kriyas + $zilingos  + $zaloras;

    return view('superadmin.dashboard.index',[
      'total'=> $total,
      'tokopedias'=> $tokopedias,
      'bukalapaks'=> $bukalapaks,
      'alibabas'=> $alibabas,
      'amazons'=> $amazons,
      'lazadas'=> $lazadas,
      'blanjas'=> $blanjas,
      'zilingos'=> $zilingos,
      'kriyas'=> $kriyas,
      'zaloras'=> $zaloras,
      'users'=> $users,
    ]);
  }
}
