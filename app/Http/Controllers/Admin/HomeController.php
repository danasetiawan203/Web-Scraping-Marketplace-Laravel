<?php

namespace App\Http\Controllers\Admin;

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

class HomeController extends Controller
{
   public function index()
   {
     $tokopedias = Tokopedia::where('id_scraping', \Auth::user()->id)->count();
     $bukalapaks = Bukalapak::where('id_scraping', \Auth::user()->id)->count();
     $alibabas   = Alibaba::where('id_scraping', \Auth::user()->id)->count();
     $amazons    = Amazon::where('id_scraping', \Auth::user()->id)->count();
     $lazadas    = Lazada::where('id_scraping', \Auth::user()->id)->count();
     $blanjas    = Blanja::where('id_scraping', \Auth::user()->id)->count();
     $zilingos   = Zilingo::where('id_scraping', \Auth::user()->id)->count();
     $kriyas     = Kriya::where('id_scraping', \Auth::user()->id)->count();
     $zaloras    = Zalora::where('id_scraping', \Auth::user()->id)->count();

    
     $total      = $tokopedias + $bukalapaks + $alibabas + $amazons + $lazadas + $blanjas + $kriyas + $zilingos  + $zaloras;
     return view('admin.dashboard.index',[
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
     ]);
   }
   
}
