<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sunra\PhpSimple\HtmlDomParser;

class DaftarBarangController extends Controller
{
  public function index() {
    return view('admin.barang.daftar');
 }
 public function scraping() {
  $url='https://www.tokopedia.com/afaminshop/xioami-redmi-note-6-pro-4-64-garansi-distributor-hitam?refined=true&trkid=f%3DCa0000L000P0W0S0Sh00Co0Po0Fr0Cb0_src%3Duniverse_page%3D1_ob%3D23_q%3Dxioami_po%3D29_catid%3D24&lt=%2Fsearchproduct%20-%20p6%20-%20product';
$html = HtmlDomParser::file_get_html($url);
$pilihan= parse_url($url, PHP_URL_HOST);

$gambar=array();
if($pilihan=='www.tokopedia.com'){
  $mp = "Tokopedia";
	$judul = $html->find('.rvm-product-title',0)->plaintext;
	$harga = $html->find('.rvm-price',0)->plaintext;
	$des = $html->find('.tab-pane',0)->plaintext;
	foreach( $html->find('.content-img div div img') as $image ){
		$gambar[]=$image->src;
	}
}else if($pilihan=='www.bukalapak.com'){
  $mp = "Bukalapak";
	$judul = $html->find('.c-product-detail__name',0)->plaintext;
	$harga = $html->find('.amount',0)->plaintext;
	$des = $html->find('p',1)->plaintext;
	foreach( $html->find('.c-product-image-gallery__thumbnails a') as $image ){
		$gambar[]=$image->href;
	}
}
  echo "url: $url";
  echo "<br>";
  echo "Nama : $judul";
  echo "<br>";
  echo "Harga : $harga";
  echo "<br>";
  echo "Deskripsi : $des";
  echo "<br>";
  echo "<img src=".$gambar[0]." height=100 width=100>";

//return response()->json([$url,$judul,$harga,$berat,$des,$gambar]);
 }

}
