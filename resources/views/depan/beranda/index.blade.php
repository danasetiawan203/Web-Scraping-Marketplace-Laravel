@extends('depan.layouts.app')
@section('title','Beranda')

@section('content')

<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix" data-autoplay="7000" data-speed="650" data-loop="true">
    @if(session()->has('success'))
    <div class="alert alert-success">
       {{ session()->get('success') }}
    </div>
    @elseif ($errors->any())
      <div class="alert alert-danger">
          <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
          </ul>
      </div>
  @endif

  <div class="slider-parallax-inner">

    <div class="swiper-container swiper-parent">
      <div class="swiper-wrapper">
        <div class="swiper-slide dark" style="background-image: url('depan/images/slider/swiper/gudang1.jpg');">
          <div class="container clearfix">
            <div class="slider-caption slider-caption-center">
              <h2 data-caption-animate="jackInTheBox">Selamat Datang Di Sistem Informasi Web Scraping</h2>
              <p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">Daftarkan dan coba fitur-fitur kami.</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide dark" style="background-image: url('depan/images/slider/swiper/gudang2.jpg'); background-position: center top;">
          <div class="container clearfix">
            <div class="slider-caption">
              <h2 data-caption-animate="flip">DAFTAR SEGERA!</h2>
              <p class="d-none d-sm-block" data-caption-animate="fadeInUp" data-caption-delay="200">rasakan kemudahan pengelolahan sistem informasi web scraping</p>
            </div>
          </div>
        </div>
      </div>
      <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
      <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
      <div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
    </div>

  </div>

</section>

<!-- Content
============================================= -->
<section id="content">

  <div class="content-wrap">

    <div class="promo promo-light promo-full bottommargin-lg header-stick notopborder">
      <div class="container clearfix">
        <span class="text-rotater nocolor" data-separator="|" data-rotate="flipInX" data-speed="3500">
          <h3>Solusi Pengisian Deskripsi Produk Yang Di inginkan <span class="t-rotate">Tanpa Ribet|Tanpa Lama|Tanpa Susah</span></h3>
        </span>
        <span>Anda akan mudah merasakan dalama pengisian deskripsi produk dengan mudah dan cepat</span>
        <a href="{{route('userregister')}}" class="button button-dark button-xlarge button-rounded">Daftar Sekarang!</a>
      </div>

    </div>

    <div class="container clearfix">



      <div class="col_one_fourth nobottommargin">
        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
          <div class="fbox-icon">
            <i class="i-alt noborder fas fa-store-alt"></i>
          </div>
          <h3>Kunjungi website produk<span class="subtitle">Contoh : www.tokopedia.com</span></h3>
        </div>
      </div>

      <div class="col_one_fourth nobottommargin">
        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
          <div class="fbox-icon">
            <i class="i-alt noborder fas fa-info-circle"></i>
          </div>
          <h3>Pilih Produk yang telah ditentukan <span class="subtitle">Link halaman menampilkan detail produk</span></h3>
        </div>
      </div>

      <div class="col_one_fourth nobottommargin">
        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
          <div class="fbox-icon">
          <i class="i-alt noborder far fa-copy"></i>
          </div>
          <h3>Copy link produk<span class="subtitle">Contoh: www.tokopedia.com/jeans/4...</span></h3>
        </div>
      </div>


      <div class="col_one_fourth nobottommargin col_last">
        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
          <div class="fbox-icon">
            <i class="i-alt noborder fas fa-cart-plus"></i>
          </div>
          <h3>Masukkan link ke tambah produk<span class="subtitle">akan mencul deskripsi produk secara cepat</span></h3>
        </div>
      </div>

      <div class="clear"></div><div class="line bottommargin-lg"></div>

      <div class="row">
            <div class="col-md-4">
              <img class="img-responsive mt-xl appear-animation" src="{{asset('depan/images/clients/tampilan 1.png')}}" alt="layout styles" data-appear-animation="fadeInLeft">
            </div>
            <div class="col-md-7 col-md-offset-1">
              <h2 class="mt-xl"><strong>Tampilan </strong>Data Produk</h2>
              <p class="lead">
                Tampilan data produk ini menampilkan Data Produk yang suda di scraping datanya sepert <span> Amazon, Alibaba, Bukalapak, Lazada, Tokopedia, Blanja, Zilingo, Zalora, dan Kriya</span>
              </p>
            </div>
          </div>
            <br> <br>
          <hr class="tall">

          <div class="row">
            <div class="col-md-7">
              <h2 class="mt-xl">Tampilan <strong> Tambah Produk</strong></h2>
              <p class="lead">
                Pada tampilan tambah produk ini yang harus di lakukan user pertama ada mencari produk yang diinginkan pada marketplace tertentu. lalu copy url marketplace selanjutnya paste url tersebut lalu klik tombol tunggu sampai selesai, maka akan menampilkan foto, nama produk, harga, deskripsi dengan cepat.
              </p>
            </div>
            <div class="col-md-4 col-md-offset-1 mt-xl">
              <img class="img-responsive appear-animation" src="{{asset('depan/images/clients/tampilan 3.png')}}" alt="style switcher" data-appear-animation="fadeInRight">
            </div>
          </div>
          <br> <br> <hr class="tall">
    </div>

    <div class="container clearfix">

      <div id="oc-clients" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="30" data-loop="true" data-nav="false" data-autoplay="2000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6" style="padding: 20px 0;">
        <div class="oc-item"><a href="https://www.tokopedia.com/"><img src="{{asset('depan/images/clients/tokopedia.png')}}" alt="Clients"></a></div>
        <div class="oc-item"><a href="https://www.bukalapak.com/"><img src="{{asset('depan/images/clients/bukalapak.png')}}" alt="Clients"></a></div>
        <div class="oc-item"><a href="https://www.amazon.com/"><img src="{{asset('depan/images/clients/amazon.png')}}" alt="Clients"></a></div>
        <div class="oc-item"><a href="https://www.alibaba.com/"><img src="{{asset('depan/images/clients/alibaba.png')}}" alt="Clients"></a></div>
        <div class="oc-item"><a href="https://www.lazada.co.id/"><img src="{{asset('depan/images/clients/lazada.png')}}" alt="Clients"></a></div>
        <div class="oc-item"><a href="https://www.blanja.com/"><img src="{{asset('depan/images/clients/blanja.png')}}" alt="Clients"></a></div>
        <div class="oc-item"><a href="https://zilingo.com/en-id/"><img src="{{asset('depan/images/clients/zilingo.png')}}" alt="Clients"></a></div>
        <div class="oc-item"><a href="https://www.zalora.co.id/"><img src="{{asset('depan/images/clients/zalora.png')}}" alt="Clients"></a></div>
        <div class="oc-item"><a href="https://www.kriya.co.id/"><img src="{{asset('depan/images/clients/kriya.png')}}" alt="Clients"></a></div>
      </div>
    </div>

    <div class="section parallax bottommargin-lg" style="background-image: url('/images/parallax/3.jpg'); padding: 100px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">
      <div class="heading-block center nobottomborder nobottommargin">
        <h2>“Resiko terbesar adalah tidak mengambil resiko sama sekali. Dalam dunia yang berubah dengan sangat cepat ini, satu-satunya strategi yang dijamin gagal adalah tidak mengambil resiko.”</h2>
        
      </div>
    </div>
  </div>


</section><!-- #content end -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="color: #1cd8d8;background-color: #ffad00;">
        <h4 class="modal-title">PERHATIAN!</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>Mohon maaf akun anda telah disuspend.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection

@section('js')
  <script src="{{asset('depan/js/jquery.js')}}"></script>
	<script src="{{asset('depan/js/plugins.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('depan/js/functions.js')}}"></script>

  <script>
	$(function() {
		$( "#side-navigation" ).tabs({ show: { effect: "fade", duration: 400 } });
	});
</script>
@if (session()->has('aktif'))
<script>
$(function() {
    $('#myModal').modal('show');
});
</script>
@endif
@endsection
