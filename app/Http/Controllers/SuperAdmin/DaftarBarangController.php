<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DaftarBarangController extends Controller
{
  public function index() {
    return view('superadmin.barang.daftar');
 }
 public function scraping() {
   $url='https://www.tokopedia.com/allureindonesia/bluedio-t2-turbine-hurricane-wireless-bluetooth-headphone-original-hitam?src=topads';
$html = HtmlDomParser::file_get_html($url);
$pilihan= parse_url($url, PHP_URL_HOST);

$gambar=array();
if($pilihan=='www.tokopedia.com'){
	$judul = $html->find('.rvm-product-title',0)->plaintext;
	$harga = $html->find('.rvm-price',0)->plaintext;
	$des = $html->find('.tab-pane',0)->plaintext;
	$berat = $html->find('.rvm-shipping-content',0)->plaintext;
	foreach( $html->find('.content-img div div img') as $image ){
		$gambar[]=$image->src;
	}
}else if($pilihan=='www.bukalapak.com'){
	$judul = $html->find('.c-product-detail__name',0)->plaintext;
	$harga = $html->find('.amount',0)->plaintext;
	$des = $html->find('p',1)->plaintext;
	$berat = $html->find('.c-product-spec',0)->children(3)->plaintext;
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
echo "Berat : $berat";
echo "<br>";
echo "Deskripsi : $des";
echo "<br>";
echo "<img src=".$gambar[0]." height=100 width=100>";
 }

}
