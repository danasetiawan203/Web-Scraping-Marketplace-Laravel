<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'Depan\HomeController@index')->name('beranda');
Route::get('/TentangScraping',     'Depan\Tentang_ScrapingController@index')->name('tentang_scraping');
Route::get('/FAQ',     'Depan\FaqController@index')->name('faq');
Route::get('/pengguna',     'Depan\mitraController@index')->name('mitra');
Route::get('/Kontak',     'Depan\HomeController@kontak')->name('kontak_kami');
Route::post('/kontak/input',            'Depan\Kontak_KamiController@postPesan')->name('kontak.insert');


Route::get('/login', function () {
    return view('admin.auth.login');
})->name('user.login');


Route::get('/regis', function () {
    return view('admin.auth.register');
})->name('user.register');

Route::get('/reset', function () {
    return view('admin.auth.password.reset');
})->name('user.reset');

Route::get('/resetpass', function () {
  return view('admin.auth.password.email');
})->name('resetpass');

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/coba', 'Admin\DaftarBarangController@scraping')->name('coba');


  Route::get('/regis',     'Admin\Auth\RegisterController@index')->name('userregister');
  Route::post('/regis',     'Admin\Auth\RegisterController@insert')->name('insertregister');
  Route::get('/ajaxkab/{id}', 'Admin\Auth\RegisterController@kabu')->name('tambahajaxkab');

  Route::get('/verify/{token}', 'VerifyController@verify')->name('verify');
  Route::post('/reset', 'VerifyController@resetPassword')->name('reset');
  Route::post('/resetpass1', 'VerifyController@index')->name('resetpass1');

  Route::get('logout', function(){
      return back();
});
Route::post('logout', 'AuthController@logout');

  

Route::group(['middleware' => 'cekActivated'], function(){
  Route::get('/lihat', 'Admin\LihatProdukController@index')->name('lihatproduk');
  Route::get('/ajaxcat2/{id}', 'Admin\TambahProdukController@cat2')->name('tambahajaxcat2');
  Route::get('/ajaxcat3/{id}', 'Admin\TambahProdukController@cat3')->name('tambahajaxcat3');

  // Route::post('/regis-user',     'Admin\UserProfileController@insert')->name('insert.user');
  Route::group(['middleware' => 'superadmin','prefix' => 'superadmin'], function()  {
    Route::get('/',     'SuperAdmin\HomeController@index')->name('superadmin');


    Route::group(['prefix' => 'superadmintambahbarang'], function()  {
      Route::get('/',     'SuperAdmin\TambahBarangController@index')->name('superadmin.tambahbarang');
    });


    Route::group(['prefix' => 'superadmindaftarbarang'], function()  {
      Route::get('/',     'SuperAdmin\DaftarBarangController@index')->name('superadmin.daftarbarang');
    });

    Route::group(['prefix' => 'superadmindaftarpesanan'], function()  {
      Route::get('/',     'SuperAdmin\DaftarPesananController@index')->name('superadmin.daftarpesanan');
    });

    Route::group(['prefix' => 'superadminpenjualanselesai'], function()  {
      Route::get('/',     'SuperAdmin\PenjualanSelesaiController@index')->name('superadmin.penjualanselesai');
    });

    Route::group(['prefix' => 'superadmindropshipping'], function()  {
      Route::get('/',     'SuperAdmin\DropshippingController@index')->name('superadmin.dropshipping');
      Route::post('/suspend',   'SuperAdmin\DropshippingController@suspend')->name('user.suspend');
      Route::post('/restore',  'SuperAdmin\DropshippingController@restore')->name('user.restore');
      Route::post('/hapus',        'SuperAdmin\DropshippingController@hapus')->name('user.delete');
      Route::get('/profil/{id}',   'SuperAdmin\DropshippingController@profil_user')->name('superadmin.user.profil');
    });

    Route::group(['prefix' => 'superadminlistgudang'], function()  {
      Route::get('/',     'SuperAdmin\ListGudangController@index')->name('superadmin.listgudang');
    });

    Route::group(['prefix' => 'superadminformgudang'], function()  {
      Route::get('/',     'SuperAdmin\FormGudangController@index')->name('superadmin.formgudang');
    });

    Route::group(['prefix' => 'superadminprofile'], function()  {
      Route::get('/',     'SuperAdmin\ProfileController@index')->name('superadmin.profile');
      Route::post('/gantifoto',     'SuperAdmin\ProfileController@simpan_superadmin')->name('simpan.profiles');
      Route::post('/editpass',     'SuperAdmin\ProfileController@pass_superadmin')->name('pass.profiles');
    });

    Route::group(['prefix' => 'setting'], function()  {
      Route::get('/',     'SuperAdmin\SettingController@index')->name('superadmin.setting');
      Route::post('/simpan',     'SuperAdmin\SettingController@simpan')->name('superadmin.simpan.setting');
      Route::get('/getdata/{id}',     'SuperAdmin\SettingController@getData')->name('getData.setting');
      Route::post('/update',     'SuperAdmin\SettingController@update')->name('superadmin.update.setting');
    });

    Route::group(['prefix' => 'categori1'], function()  {
      Route::get('/',     'SuperAdmin\Categori1Controller@index')->name('superadmin.cat1');
      Route::post('/tambah',     'SuperAdmin\Categori1Controller@tambah')->name('tambah.cat1');
      Route::get('/edit/{id}',     'SuperAdmin\Categori1Controller@edit')->name('edit.cat1');
      Route::post('/update',     'SuperAdmin\Categori1Controller@update')->name('update.cat1');
      Route::post('/hapus',     'SuperAdmin\Categori1Controller@hapus')->name('hapus.cat1');
    });

    Route::group(['prefix' => 'categori2'], function()  {
      Route::get('/',     'SuperAdmin\Categori2Controller@index')->name('superadmin.cat2');
      Route::post('/tambah',     'SuperAdmin\Categori2Controller@tambah')->name('tambah.cat2');
      Route::get('/edit/{id}',     'SuperAdmin\Categori2Controller@edit')->name('edit.cat2');
      Route::post('/update',     'SuperAdmin\Categori2Controller@update')->name('update.cat2');
      Route::post('/hapus',     'SuperAdmin\Categori2Controller@hapus')->name('hapus.cat2');
    });

    Route::group(['prefix' => 'categori3'], function()  {
      Route::get('/',     'SuperAdmin\Categori3Controller@index')->name('superadmin.cat3');
      Route::post('/tambah',     'SuperAdmin\Categori3Controller@tambah')->name('tambah.cat3');
      Route::get('/edit/{id}',     'SuperAdmin\Categori3Controller@edit')->name('edit.cat3');
      Route::post('/update',     'SuperAdmin\Categori3Controller@update')->name('update.cat3');
      Route::post('/hapus',     'SuperAdmin\Categori3Controller@hapus')->name('hapus.cat3');
    });

    Route::group(['prefix' => 'produktokopedia'], function()  {
      Route::get('/',     'SuperAdmin\produk\TokopediaController@index')->name('superadmin.produk.tokopedia');
      Route::post('/hapusSA', 'SuperAdmin\produk\TokopediaController@hapusmodaltokopediaSA')->name('hapusmodaltokopediaSA');
    });

    Route::group(['prefix' => 'produkbukalapak'], function()  {
      Route::get('/',     'SuperAdmin\produk\BukalapakController@index')->name('superadmin.produk.bukalapak');
      Route::post('/hapusSA', 'SuperAdmin\produk\BukalapakController@hapusmodalbukalapakSA')->name('hapusmodalbukalapakSA');
    });

    Route::group(['prefix' => 'produkzilingo'], function()  {
      Route::get('/',     'SuperAdmin\produk\ZilingoController@index')->name('superadmin.produk.zilingo');
      Route::post('/hapusSA', 'SuperAdmin\produk\ZilingoController@hapusmodalzilingoSA')->name('hapusmodalzilingoSA');
    });

    Route::group(['prefix' => 'produklazada'], function()  {
      Route::get('/',     'SuperAdmin\produk\LazadaController@index')->name('superadmin.produk.lazada');
      Route::post('/hapusSA', 'SuperAdmin\produk\LazadaController@hapusmodallazadaSA')->name('hapusmodallazadaSA');
    });

    Route::group(['prefix' => 'produkkriya'], function()  {
      Route::get('/',     'SuperAdmin\produk\KriyaController@index')->name('superadmin.produk.kriya');
      Route::post('/hapusSA', 'SuperAdmin\produk\BukalapakController@hapusmodalkriyaSA')->name('hapusmodalkriyaSA');
    });

    Route::group(['prefix' => 'produkzalora'], function()  {
      Route::get('/',     'SuperAdmin\produk\ZaloraController@index')->name('superadmin.produk.zalora');
      Route::post('/hapusSA', 'SuperAdmin\produk\ZaloraController@hapusmodalzaloraSA')->name('hapusmodalzaloraSA');
    });

    Route::group(['prefix' => 'produkblanja'], function()  {
      Route::get('/',     'SuperAdmin\produk\BlanjaController@index')->name('superadmin.produk.blanja');
      Route::post('/hapusSA', 'SuperAdmin\produk\BlanjaController@hapusmodalblanjaSA')->name('hapusmodalblanjaSA');
    });

    Route::group(['prefix' => 'produkamazon'], function()  {
      Route::get('/',     'SuperAdmin\produk\AmazonController@index')->name('superadmin.produk.amazon');
      Route::post('/hapusSA', 'SuperAdmin\produk\AmazonController@hapusmodalamazonSA')->name('hapusmodalamazonSA');
    });

    Route::group(['prefix' => 'produkalibaba'], function()  {
      Route::get('/',     'SuperAdmin\produk\AlibabaController@index')->name('superadmin.produk.alibaba');
      Route::post('/hapusSA', 'SuperAdmin\produk\AlibabaController@hapusmodalalibabaSA')->name('hapusmodalalibabaSA');
    });

    Route::get('/lihat/{mp}/{id}', 'SuperAdmin\LihatProdukController@index')->name('lihat.produk.superadmin');

  });


  Route::group(['middleware' => 'dropshipper','prefix' => 'dropshipper'], function()  {
    Route::get('/',     'Admin\HomeController@index')->name('dropshipper');

    Route::group(['prefix' => 'tambahbarang'], function()  {
      Route::get('/',     'Admin\TambahBarangController@index')->name('tambahbarang');
    });

    Route::group(['prefix' => 'daftarbarang'], function()  {
      Route::get('/',     'Admin\DaftarBarangController@index')->name('daftarbarang');
    });

    Route::group(['prefix' => 'daftarpesanan'], function()  {
      Route::get('/',     'Admin\DaftarPesananController@index')->name('daftarpesanan');
    });

    Route::group(['prefix' => 'penjualanselesai'], function()  {
      Route::get('/',     'Admin\PenjualanSelesaiController@index')->name('penjualanselesai');
    });

    Route::group(['prefix' => 'dropshipping'], function()  {
      Route::get('/',     'Admin\DropshippingController@index')->name('dropshipping');
    });

    Route::group(['prefix' => 'listgudang'], function()  {
      Route::get('/',     'Admin\ListGudangController@index')->name('listgudang');
    });

    Route::group(['prefix' => 'formgudang'], function()  {
      Route::get('/',     'Admin\FormGudangController@index')->name('formgudang');
    });

    Route::group(['prefix' => 'profile'], function()  {
      Route::get('/',     'Admin\ProfileController@index')->name('profile');
      Route::post('/simpan',     'Admin\ProfileController@simpan')->name('simpan.profile');
      Route::post('/simpan/pass',     'Admin\ProfileController@pass')->name('pass.profile');
      Route::get('/getData/{id}',     'Admin\ProfileController@getData')->name('getData.profile');
    });


    Route::group(['prefix' => 'bukalapak'], function()  {
      Route::get('/',     'Admin\produk\BukalapakController@index')->name('bukalapak');
      Route::get('/edit/{id}', 'Admin\produk\BukalapakController@editmodalbukalapak')->name('editmodalbukalapak');
      Route::post('/edit/update', 'Admin\produk\BukalapakController@updatemodalbukalapak')->name('updatemodalbukalapak');
      Route::post('/hapus', 'Admin\produk\BukalapakController@hapusmodalbukalapak')->name('hapusmodalbukalapak');
    });


    Route::group(['prefix' => 'lazada'], function()  {
      Route::get('/',     'Admin\produk\LazadaController@index')->name('lazada');
      Route::get('/edit/{id}', 'Admin\produk\LazadaController@editmodallazada')->name('editmodallazada');
      Route::post('/edit/update', 'Admin\produk\LazadaController@updatemodallazada')->name('updatemodallazada');
      Route::post('/hapus', 'Admin\produk\LazadaController@hapusmodallazada')->name('hapusmodallazada');
    });

    Route::group(['prefix' => 'kriya'], function()  {
      Route::get('/',     'Admin\produk\KriyaController@index')->name('kriya');
      Route::get('/edit/{id}', 'Admin\produk\KriyaController@editmodalkriya')->name('editmodalkriya');
      Route::post('/edit/update', 'Admin\produk\KriyaController@updatemodalkriya')->name('updatemodalkriya');
      Route::post('/hapus', 'Admin\produk\KriyaController@hapusmodalkriya')->name('hapusmodalkriya');
    });

    Route::group(['prefix' => 'zilingo'], function()  {
      Route::get('/',     'Admin\produk\ZilingoController@index')->name('zilingo');
      Route::get('/edit/{id}', 'Admin\produk\ZilingoController@editmodalzilingo')->name('editmodalzilingo');
      Route::post('/edit/update', 'Admin\produk\ZilingoController@updatemodalzilingo')->name('updatemodalzilingo');
      Route::post('/hapus', 'Admin\produk\ZilingoController@hapusmodalzilingo')->name('hapusmodalzilingo');
    });

    Route::group(['prefix' => 'tokopedia'], function()  {
      Route::get('/',     'Admin\produk\TokopediaController@index')->name('tokopedia');
      Route::get('/edit/{id}', 'Admin\produk\TokopediaController@editmodaltokopedia')->name('editmodaltokopedia');
      Route::post('/edit/update', 'Admin\produk\TokopediaController@updatemodaltokopedia')->name('updatemodaltokopedia');
      Route::post('/hapus', 'Admin\produk\TokopediaController@hapusmodaltokopedia')->name('hapusmodaltokopedia');
    });

    Route::group(['prefix' => 'zalora'], function()  {
      Route::get('/',     'Admin\produk\ZaloraController@index')->name('zalora');
      Route::get('/edit/{id}', 'Admin\produk\ZaloraController@editmodalzalora')->name('editmodalzalora');
      Route::post('/edit/update', 'Admin\produk\ZaloraController@updatemodalzalora')->name('updatemodalzalora');
      Route::post('/hapus', 'Admin\produk\ZaloraController@hapusmodalzalora')->name('hapusmodalzalora');
    });

    Route::group(['prefix' => 'blanja'], function()  {
      Route::get('/',    'Admin\produk\BlanjaController@index')->name('blanja');
      Route::get('/edit/{id}', 'Admin\produk\BlanjaController@editmodalblanja')->name('editmodalblanja');
      Route::post('/edit/update', 'Admin\produk\BlanjaController@updatemodalblanja')->name('updatemodalblanja');
      Route::post('/hapus', 'Admin\produk\BlanjaController@hapusmodalblanja')->name('hapusmodalblanja');
    });

    Route::group(['prefix' => 'amazon'], function()  {
      Route::get('/',     'Admin\produk\AmazonController@index')->name('amazon');
      Route::get('/edit/{id}', 'Admin\produk\AmazonController@editmodalamazon')->name('editmodalamazon');
      Route::post('/edit/update', 'Admin\produk\AmazonController@updatemodalamazon')->name('updatemodalamazon');
      Route::post('/hapus', 'Admin\produk\AmazonController@hapusmodalamazon')->name('hapusmodalamazon');
    });

    Route::group(['prefix' => 'alibaba'], function()  {
      Route::get('/',     'Admin\produk\AlibabaController@index')->name('alibaba');
      Route::get('/edit/{id}', 'Admin\produk\AlibabaController@editmodalalibaba')->name('editmodalalibaba');
      Route::post('/edit/update', 'Admin\produk\AlibabaController@updatemodalalibaba')->name('updatemodalalibaba');
      Route::post('/hapus', 'Admin\produk\AlibabaController@hapusmodalalibaba')->name('hapusmodalalibaba');
    });

    Route::group(['prefix' => 'tambahproduk'], function()  {
      Route::get('/',     'Admin\TambahProdukController@index')->name('tambahproduk');
    });
    Route::post('/posttambahbarang',     'Admin\TambahProdukController@create')->name('posttambahbarang');

    Route::post('/urlajax',     'Admin\TambahProdukController@urlajax')->name('urlajax');

    Route::get('/lihat/{mp}/{id}', 'Admin\LihatProdukController@lihat')->name('lihatproduk');
  });
});

Auth::routes(['verify' => true]);
