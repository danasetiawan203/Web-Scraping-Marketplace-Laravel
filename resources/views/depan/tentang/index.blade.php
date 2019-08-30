@extends('depan.layouts.app')
@section('title','Tentang')

@section('content')

<section id="page-title">

        <div class="container clearfix">
            <h1>Scraping</h1>
            <span>Tentang Scraping dan Cara Scraping</span>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('beranda')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">scraping</li>
            </ol>
        </div>

    </section><br><br>
    
    <div class="rowbaru">
            <div class="col-md-4">
              <img class="img-responsive mt-xl appear-animation" src="{{asset('depan/images/clients/set.png')}}" alt="layout styles" data-appear-animation="fadeInLeft">
            </div>
            <div class="col-md-7 col-md-offset-1">
              <h2 class="mt-xl"><strong>Tentang </strong>Scraping Data Produk</h2>
              <p>
                    Web scarping adalah proses pengambilan sebuah dokumen semi-terstruktur dari internet, umumnya berupa halaman-halaman Web dalam bahasa markup seperti HTML atau XHTML, dan menganalisis dokumen tersebut untuk diambil data tertentu dari halaman tersebut untuk digunakan bagi kepentingan lain
              </p>
              <p>
                    Proses scraping tersebut dilakukan dengan cara mempelajari dokumen HTML dari Website yang akan diambil informasinya untuk di tag HTML-nya. Tujuannya adalah untuk mengambil informasi. Setelah itu, proses berikutnya adalah dengan mengeksplorasi navigasi situs yang dikenai scraping. Tujuannya adalah mempelajari teknik navigasi pada Website yang akan diambil informasinya untuk ditirukan pada aplikasi Web scraping yang dibuat
              </p>
            </div>
          </div>
            <br> <br>

    <div class="section">

            <div class="container clearfix">

                <div class="heading-block center">
                    <h2>Cara Scraping.</h2>
                    <span>Langkah-langkah Proses Pengambambilan Data dari Marketplace.</span>
                </div>

                <div class="col_full">

                    <img data-animate="fadeIn" class="aligncenter" src="{{asset('depan/images/clients/cara scraping.png')}}" alt="Macbook">

                </div>
                <div class="tabs tabs-bottom tabs-center tabs-simple mt-xl mb-xl">
                        <ul class="nav nav-tabs">
                        <div class="col_one_fourth nobottommargin">
                                <a  href="#tabsNavigationSimpleIcons1" data-toggle="tab">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                            <i class="i-alt noborder fas fa-store-alt"></i>
                            </div>
                            <h3>Kunjungi website produk<span class="subtitle">Contoh : www.tokopedia.com</span></h3>
                        </div>
                        </div>
                
                        <div class="col_one_fourth nobottommargin">
                                <a  href="#tabsNavigationSimpleIcons2" data-toggle="tab">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                            <i class="i-alt noborder fas fa-info-circle"></i>
                            </div>
                            <h3>Pilih Produk yang telah ditentukan <span class="subtitle">Link halaman menampilkan detail produk</span></h3>
                        </div>
                        </div>
                
                        <div class="col_one_fourth nobottommargin">
                                <a  href="#tabsNavigationSimpleIcons3" data-toggle="tab">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                            <i class="i-alt noborder far fa-copy"></i>
                            </div>
                            <h3>Copy link produk<span class="subtitle">Contoh: www.tokopedia.com/jeans/4...</span></h3>
                        </div>
                        </div>
                
                
                        <div class="col_one_fourth nobottommargin col_last">
                                <a  href="#tabsNavigationSimpleIcons4" data-toggle="tab">
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="fbox-icon">
                            <i class="i-alt noborder fas fa-cart-plus"></i>
                            </div>
                            <h3>Masukkan link ke tambah produk<span class="subtitle">akan mencul deskripsi produk secara cepat</span></h3>
                        </div>
                        </div>
                        <br><br>
                        
                        <div class="tab-content">
                                <div class="tab-pane active" id="tabsNavigationSimpleIcons1">
                                    <div class="center">
                                        <p>Hal pertama yang harus di lakukan adalah mengunjungi website yang sudah di tentukanseperti: Amazon, Alibaba, Bukalapak, Tokopedia, Lazada, Zilingo, Blanja.com, Kriya, dan Zalora.</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabsNavigationSimpleIcons2">
                                    <div class="center">
                                        <p>Hal Kedua yang harus di lakukan adalah memilih produk yang ingin di scraping data pada marketplace yang sudah di tentukan seperti: Amazon, Alibaba, Bukalapak, Tokopedia, Lazada, Zilingo, Blanja.com, Kriya, dan Zalora .</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabsNavigationSimpleIcons3">
                                    <div class="center">
                                        <p>Hal Ketiga yang harus dilakukan adalah mencopy atau menyalin url marketplace yang telah anda pilih produknya. Contoh: https://www.tokopedia.com/ledaudiovisual/hampers-chocolate.</p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabsNavigationSimpleIcons4">
                                    <div class="center">
                                        <p>
                                        Hal Keempat yang harus di lakukan adalah Masukkan link produk Contoh: https://www.tokopedia.com/ledaudiovisual/hampers-chocolate ke tambah produk untuk memuncul data produk yang sesuai dengan produk yang sudah di scraping.</p>
                                    </div>
                                </div>
                        </div>
                        </ul>
            </div>
            </div>

        </div>
@endsection




@section('js')
<script src="{{asset('depan/js/jquery.js')}}"></script>
	<script src="{{asset('depan/js/plugins.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('depan/js/functions.js')}}"></script>
@endsection
