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
use App\Model\Zalora;
use App\Model\Zilingo;
use App\Model\Kriya;
use App\Model\Categori1;
use App\Model\Categori2;
use App\Model\Categori3;
use App\Model\Setting;
use Goutte;

class TambahProdukController extends Controller
{
        public function index() {
          $cats1 = Categori1::all();
          return view('admin.tambahproduk.tambah', ['cats1' => $cats1]);
          }

        public function cat2($id) {
          $id_cat2 = Categori2::where('id_cat1', '=', $id)->get();

          return response()->json($id_cat2);
            }

        public function cat3($id) {
          $id_cat3 = Categori3::where('id_cat2', '=', $id)->get();

          return response()->json($id_cat3);
            }

            
  public function create(Request $req) {

    $this->validate($req, [
        
      
      'nama_barang' => 'required',
      'harga' => 'required',
      'berat' => 'required',
      'stock' => 'required',
      'deskripsi' => 'required',
      'cat1' => 'required',
      'cat2' => 'required',
    ],[
      'nama_barang.required' => 'Nama Barang tidak boleh kosong',
      'harga.required' => 'Harga harus diisi tidak boleh kosong',
      'berat.required' => 'Berat harus diisi tidak boleh kosong',
      'stock.required' => 'No HP harus diisi tidak boleh kosong',
      'cat1.required' => 'Kategori 1 harus diisi tidak boleh kosong',
      'cat2.required' => 'Kategori 2 harus diisi tidak boleh kosong',
      'deskripsi.required' => 'Deskripsi harus diisi tidak boleh kosong',
    ]);
    
    $pilihan= parse_url($req->url, PHP_URL_HOST);
  if($pilihan=='www.tokopedia.com'){
    Tokopedia::insert([
      'id_scraping' => \Auth::user()->id,
      'url' => $req->url,
      'nama_barang' => $req->nama_barang,
      'harga' => $req->harga,
      'berat' => $req->berat,
      'stock' => $req->stock,
      'deskripsi' => $req->deskripsi,
      'cat1' => $req->cat1,
      'cat2' => $req->cat2,
      'cat3' => $req->cat3,
      'ukuran' => $req->ukuran,
      'warna' => $req->warna,
      'foto' => $req->foto,
    ]);
    return redirect()->route('tokopedia')->with('success', 'Data Tokopedia Telah Di Tambahkan.');
    }

    elseif ($pilihan=='www.bukalapak.com') {
      Bukalapak::insert([
          'id_scraping' => \Auth::user()->id,
          'url' => $req->url,
          'nama_barang' => $req->nama_barang,
          'harga' => $req->harga,
          'berat' => $req->berat,
          'stock' => $req->stock,
          'deskripsi' => $req->deskripsi,
          'cat1' => $req->cat1,
          'cat2' => $req->cat2,
          'cat3' => $req->cat3,
          'ukuran' => $req->ukuran,
          'warna' => $req->warna,
          'foto' => $req->foto,
      ]);
      return redirect()->route('bukalapak')->with('success', 'Data Bukalapak Telah Di Tambahkan.');
    }

    elseif ($pilihan=='www.amazon.com') {
      Amazon::insert([
      'id_scraping' => \Auth::user()->id,
      'url' => $req->url,
      'nama_barang' => $req->nama_barang,
      'harga' => $req->harga,
      'berat' => $req->berat,
      'stock' => $req->stock,
      'deskripsi' => $req->deskripsi,
      'cat1' => $req->cat1,
      'cat2' => $req->cat2,
      'cat3' => $req->cat3,
      'ukuran' => $req->ukuran,
      'warna' => $req->warna,
      'foto' => $req->foto,
      ]);
      return redirect()->route('amazon')->with('success', 'Data Amazon Telah Di Tambahkan.');
    }

    elseif ($pilihan=='www.lazada.co.id') {
    Lazada::insert([
      'id_scraping' => \Auth::user()->id,
      'url' => $req->url,
      'nama_barang' => $req->nama_barang,
      'harga' => $req->harga,
      'berat' => $req->berat,
      'stock' => $req->stock,
      'deskripsi' => $req->deskripsi,
      'cat1' => $req->cat1,
      'cat2' => $req->cat2,
      'cat3' => $req->cat3,
      'ukuran' => $req->ukuran,
      'warna' => $req->warna,
      'foto' => $req->foto,
      ]);
      return redirect()->route('lazada')->with('success', 'Data Lazada Telah Di Tambahkan.');
    }

    elseif ($pilihan=='www.alibaba.com') {

      Alibaba::insert([
        'id_scraping' => \Auth::user()->id,
        'url' => $req->url,
        'nama_barang' => $req->nama_barang,
        'harga' => $req->harga,
        'berat' => $req->berat,
        'stock' => $req->stock,
        'deskripsi' => $req->deskripsi,
        'cat1' => $req->cat1,
        'cat2' => $req->cat2,
        'cat3' => $req->cat3,
        'ukuran' => $req->ukuran,
        'warna' => $req->warna,
        'foto' => $req->foto,
      ]);
      return redirect()->route('alibaba')->with('success', 'Data Alibaba Telah Di Tambahkan.');
    }

    elseif ($pilihan=='kriya.co.id') {
        Kriya::insert([
        'id_scraping' => \Auth::user()->id,
        'url' => $req->url,
        'nama_barang' => $req->nama_barang,
        'harga' => $req->harga,
        'berat' => $req->berat,
        'stock' => $req->stock,
        'deskripsi' => $req->deskripsi,
        'cat1' => $req->cat1,
        'cat2' => $req->cat2,
        'cat3' => $req->cat3,
        'ukuran' => $req->ukuran,
        'warna' => $req->warna,
        'foto' => $req->foto,
      ]);
      return redirect()->route('kriya')->with('success', 'Data Kriya Telah Di Tambahkan.');
      }

    elseif ($pilihan=='www.zalora.co.id') {
      Zalora::insert([
        'id_scraping' => \Auth::user()->id,
        'url' => $req->url,
        'nama_barang' => $req->nama_barang,
        'harga' => $req->harga,
        'berat' => $req->berat,
        'stock' => $req->stock,
        'deskripsi' => $req->deskripsi,
        'cat1' => $req->cat1,
        'cat2' => $req->cat2,
        'cat3' => $req->cat3,
        'ukuran' => $req->ukuran,
        'warna' => $req->warna,
        'foto' => $req->foto,
      ]);
      return redirect()->route('zalora')->with('success', 'Data Zalora Telah Di Tambahkan.');
    }

    elseif ($pilihan=='zilingo.com') {
      Zilingo::insert([
        'id_scraping' => \Auth::user()->id,
        'url' => $req->url,
        'nama_barang' => $req->nama_barang,
        'harga' => $req->harga,
        'berat' => $req->berat,
        'stock' => $req->stock,
        'deskripsi' => $req->deskripsi,
        'cat1' => $req->cat1,
        'cat2' => $req->cat2,
        'cat3' => $req->cat3,
        'ukuran' => $req->ukuran,
        'warna' => $req->warna,
        'foto' => $req->foto,
      ]);
      return redirect()->route('zilingo')->with('success', 'Data Zilingo Telah Di Tambahkan.');
    }

    elseif ($pilihan=='www.blanja.com') {
      Blanja::insert([
        'id_scraping' => \Auth::user()->id,
        'url' => $req->url,
        'nama_barang' => $req->nama_barang,
        'harga' => $req->harga,
        'berat' => $req->berat,
        'stock' => $req->stock,
        'deskripsi' => $req->deskripsi,
        'cat1' => $req->cat1,
        'cat2' => $req->cat2,
        'cat3' => $req->cat3,
        'ukuran' => $req->ukuran,
        'warna' => $req->warna,
        'foto' => $req->foto,
      ]);
      return redirect()->route('blanja')->with('success', 'Data Blanja Telah Di Tambahkan.');
    }

}

  public function urlajax(Request $req) {
    $setting = Setting::all();
    $crawler = Goutte::request('GET', $req->url);
    $pilihan= parse_url($req->url, PHP_URL_HOST);
    $i=0;
    // !fungsi strval() untuk mengubah data dari mysql untuk di jadikan string
    
    if($pilihan=='www.bukalapak.com'){

    $setting = $setting->where('Marketplace', 'Bukalapak')->first();

    $nama =	$crawler->filter(strval($setting->nama))->text();

    $harga = $crawler->filter(strval($setting->Harga))->text();
    $harga = str_replace('Rp','',$harga);
    $harga = str_replace('Cicilan','',$harga);
    $harga = str_replace(' ','',$harga);
    $harga = "Rp. ".str_replace('0%','',$harga);

    $img = $crawler->filter(strval($setting->foto))->attr('href');

    $des = $crawler->filter(strval($setting->deskripsi))->each(function ($node) {
        return $node->html();
      });
    }
    elseif ($pilihan=='www.tokopedia.com') {

      $setting = $setting->where('Marketplace', 'Tokopedia')->first();

      $nama =	$crawler->filter(strval($setting->nama))->text();
      $nama = trim($nama);
  
      $harga = $crawler->filter(strval($setting->Harga))->text();
      $harga = trim($harga); //?fungsi trim() untuk mengahpus spasi yang lebih di awal dan di akhir
      $harga = str_replace('Rp','',$harga); //?str_replace() untuk menghapus kalimat atau kata yang ingin di hapus
      $harga = "Rp. ".trim($harga);
  
      $img = $crawler->filter(strval($setting->foto))->attr('src');
  
      $des = $crawler->filter(strval($setting->deskripsi))->each(function ($node) {
      return $node->html();
      });
    }

    elseif ($pilihan=='www.amazon.com') {
      $setting = $setting->where('Marketplace', 'Amazon')->first();

      $nama =	$crawler->filter(strval($setting->nama))->text();
      $nama = trim($nama);

      $harga = $crawler->filter(strval($setting->Harga))->text();
      // $harga = trim($harga);
      // $harga = str_replace('$','', $harga);
      // $harga = str_replace(',','', $harga);
      // $harga = number_format($harga, 0, '', '.'); //?number_format() untuk mengubah suatu angka menjadi bulat
      // $harga = (str_replace(',','', $harga)*14318);
      // $harga = "Rp. ".number_format($harga, 0, '', '.');

      $hitungdollar = substr_count($harga, "$"); //Hitung jml dollar
      if($hitungdollar=="2"){
        $posisi = strpos($harga,"-"); //?Hitung posisi dari "-"

        $hitungjml = strlen($harga); // ?Hitung jumlah string harga
        $harga1 = substr($harga,0,$posisi); // ?Potong dari 0 sampai kata sebelum "-"
        $harga2 = substr($harga,$posisi+2, $hitungjml); //?Potong "-" ditambah 2 sampai akhir
        /*/**
         * Hitung rupiah harga1
         * 
         */
        $harga = trim($harga1); // ?Hapus karakter dari kedua sisi string
        $harga = str_replace('$','', $harga); // ?Mengapus $
        $harga = str_replace(',','', $harga); // ?Mengapus ,
        $harga1 = ($harga*14318); // ?Menghitunh harga * harga 1 dollar
        $harga1 = ("Rp. ".number_format($harga1, 0, '', '.')); //? format number

        /**
         * hitung rupiah di harga 2
         * 
         * 
         */
        $harga = trim($harga2);
        $harga = str_replace('$','', $harga);
        $harga = str_replace(',','', $harga);
        $harga2 = ($harga*14318);
        $harga2 = ("Rp. ".number_format($harga2, 0, '', '.'));

        $harga = $harga1." - ".$harga2;
      }
      

      else{
        /**
         * maka
         */
        $harga = trim($harga);
        $harga = str_replace('$','', $harga);
        // $harga = str_replace('.','', $harga);
        $harga = ($harga*14318);
        $harga = ("Rp. ".number_format($harga, 0,'','.'));

      }

      $img = $crawler->filter(strval($setting->foto))->attr('src');

      $des = $crawler->filter(strval($setting->deskripsi))->each(function ($node) {
          return $node->html();
        });
    }

    elseif ($pilihan=='www.lazada.co.id') {
      $setting = $setting->where('Marketplace', 'Lazada')->first();

      $nama =	$crawler->filter(strval($setting->nama))->text();

      $harga = $crawler->filter(strval($setting->Harga))->text();
      $harga = str_replace('Rp','', $harga);
      $harga = "Rp. ".trim($harga);

      $img = $crawler->filter(strval($setting->foto))->attr('src');

      $des = $crawler->filter(strval($setting->deskripsi))->each(function ($node) {
          return $node->html();
        });
    }

    elseif ($pilihan=='www.alibaba.com') {
      $setting = $setting->where('Marketplace', 'Alibaba')->first();

      $nama =	$crawler->filter(strval($setting->nama))->text();

      $harga = $crawler->filter(strval($setting->Harga))->text();
      // dd($harga);
      $hitungdollar = substr_count($harga, "$"); //?Hitung jml dollar
      if($hitungdollar=="2"){
        $posisi = strpos($harga,"-"); //?Hitung posisi dari "-"

        $hitungjml = strlen($harga); // ?Hitung jumlah string harga
        $harga1 = substr($harga,0,$posisi); // ?Potong dari 0 sampai kata sebelum "-"
        $harga2 = substr($harga,$posisi+2, $hitungjml); //?Potong "-" ditambah 2 sampai akhir
        //*Hitung rupiah harga1
        $harga = trim($harga1);
        $harga = str_replace('$','', $harga);
        $harga = str_replace(',','', $harga);
        $harga1 = ($harga*14318);
        $harga1 = ("Rp. ".number_format($harga1, 0, '', '.'));

        //*Hitung rupiah harga2
        $harga = trim($harga2);
        $harga = str_replace('$','', $harga);
        $harga = str_replace(',','', $harga);
        $harga2 = ($harga*14318);
        $harga2 = ("Rp. ".number_format($harga2, 0, '', '.'));

        $harga = $harga1." - ".$harga2;
      }

      else{
        $harga = trim($harga);
        $harga = str_replace('$','', $harga);
        // $harga = str_replace('.','', $harga);
        $harga = "Rp. ".($harga*14318);

      }

      $img = $crawler->filter(strval($setting->foto))->attr('src');

      $des = $crawler->filter(strval($setting->deskripsi))->each(function ($node) {
          return $node->html();
        });
    }

    elseif ($pilihan=='kriya.co.id') {
      $setting = $setting->where('Marketplace', 'Kriya')->first();

      $nama =	$crawler->filter(strval($setting->nama))->text();
      $nama = trim($nama);

      $harga = $crawler->filter(strval($setting->Harga))->text();
      $harga = str_replace(',','', $harga);
        $harga = str_replace('IDR','', $harga);
        $harga = "Rp. ".trim($harga);

      $img = $crawler->filter(strval($setting->foto))->attr('src');

      $des = $crawler->filter(strval($setting->deskripsi))->each(function ($node) {
          return $node->html();
        });
    }

    elseif ($pilihan=='www.zalora.co.id') {
      $setting = $setting->where('Marketplace', 'Zalora')->first();

      $nama =	$crawler->filter(strval($setting->nama))->text();

      $harga = $crawler->filter(strval($setting->Harga))->text();
      $harga = trim($harga);
      $harga = str_replace('Rp','', $harga);
      $harga = "Rp. ".trim($harga);

      $img = $crawler->filter(strval($setting->foto))->attr('src');

      $des = $crawler->filter(strval($setting->deskripsi))->each(function ($node) {
          return $node->html();
        });
    }

    elseif ($pilihan=='www.blanja.com') {
      $setting = $setting->where('Marketplace', 'Blanja')->first();

      $nama =	$crawler->filter(strval($setting->nama))->text();

      $harga = $crawler->filter(strval($setting->Harga))->text();
      $harga = str_replace('Rp','', $harga);
      $harga = "Rp. ".trim($harga);

      $img = $crawler->filter(strval($setting->foto))->attr('src');

      $des = $crawler->filter(strval($setting->deskripsi))->each(function ($node) {
          return $node->html();
        });
    }

    elseif ($pilihan=='zilingo.com') {
      $setting = $setting->where('Marketplace', 'Zilingo')->first();

      $nama =	$crawler->filter(strval($setting->nama))->text();

      $harga = $crawler->filter(strval($setting->Harga))->text();
      $harga = str_replace('RP','', $harga);
      $harga = "Rp. ".trim($harga);

      $img = $crawler->filter(strval($setting->foto))->attr('src');

      $des = $crawler->filter(strval($setting->deskripsi))->each(function ($node) {
          return $node->html();
        });
    }

    $data = array('nama' => $nama,'harga' => $harga, 'img' => $img, 'url'=>$req->url, 'des' => $des[0]);
    return response()->json($data);
    // return  view('ajax.url_ajax', ['nama' => $nama,'harga' => $harga, 'img' => $img, 'url'=>$req->url, 'des' => $des[0]]);
 }

}
