@extends('depan.layouts.app')
@section('title','Kontak Kami')

@section('content')

<style>
.form-control {
  display: block;
  width: 230%;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
</style>

<section id="page-title">

        <div class="container clearfix">
            <h1>Kontak Kami</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('beranda')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kontak Kami</li>
            </ol>
        </div>

    </section><br><br>

    <div class="row">
            <div class="col-md-12">
        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
        <iframe style="position:responsive"  width="100%" height="450" frameborder="10" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1985.9893533951115!2d105.25902402103453!3d-5.42020540962191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40da4e6658cd19%3A0xe67e5353145ba7dc!2sGedung+Veteran+RI+Granadha+Lampung!5e0!3m2!1sen!2sid!4v1560180850884!5m2!1sen!2sid"></iframe>
            </div>
        </div>

        <section id="content">

                <div class="content-wrap">
    
                    <div class="container clearfix">
    
                        <!-- Postcontent
                        ============================================= -->
                        <div class="row">
                                <div class="col-md-6">
        
        
        
        
                                    <h2 class="mb-sm mt-sm"><strong>Hubungi</strong> Kami</h2>
                                    @if(session('success'))
                                    <div class="alert alert-success" style="width: 451px;   ">
                                            <ul>
                                                <strong>SUKSES!</strong> Pesan sudah terkirim
        
                                            </ul>
                                    </div>
        
                                        @elseif ($errors->any())
                                            <div class="alert alert-danger">
                                                    <ul>
                                                            @foreach ($errors->all() as $error)
                                                                    <strong>Error!</strong> There was an error sending your message.
                                                            @endforeach
                                                    </ul>
                                            </div>
                                    @endif
                                    <form id="template-contactform" action="{{route('kontak.insert')}}"  enctype="multipart/form-data" method="post">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>Nama Anda <span class="required">*</span></label>
                                                    <input type="text" value="{{old('name')}}" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                                                </div> <br>
                                                <div class="col-md-12">
                                                    <label>Alamat Email Anda <span class="required">*</span></label>
                                                    <input type="email" value="{{old('email')}}" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>Subject <span class="required">*</span></label>
                                                    <input type="text" value="{{old('subject')}}" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label>Message <span class="required">*</span></label>
                                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button value="Submit" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">Submit
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
        
                                    <h4 class="heading-primary mt-lg">Kontak <strong>Kami</strong></h4>
                                    <p>Hubungi kami untuk pertanyaan lebih lanjut.</p>
        
                                    
        
                                    <address>
                                            <strong>Alamat:</strong><br>
                                            Jl.Sriwijaya GG.Melati No.20<br>
                                            Enggal, Bandar Lampung<br>
                                        </address>
                                        <abbr title="Phone Number"><strong>Phone:</strong></abbr> (+62) 813 1818 1025<br>
                                        <abbr title="Email Address"><strong>Email:</strong></abbr> danasetiawan203@.com
                
                                        <div class="widget noborder notoppadding">
                
                                            
                
                                        </div>
                
                                        <div class="widget noborder notoppadding">
                
                                            <a href="https://www.facebook.com/dana.febrisetiawan" class="social-icon si-small si-dark si-facebook">
                                                <i class="icon-facebook"></i>
                                                <i class="icon-facebook"></i>
                                            </a>
                
                                            <a href="https://twitter.com/DanaSetiawan203" class="social-icon si-small si-dark si-twitter">
                                                <i class="icon-twitter"></i>
                                                <i class="icon-twitter"></i>
                                            </a>
                
                                            <a href="https://www.instagram.com/danafebrisetiawan/" class="social-icon si-small si-dark si-instagram">
                                                <i class="icon-instagram"></i>
                                                <i class="icon-instagram"></i>
                                            </a>
                
                                        </div>
        
                                    
        
        
        
                                </div>
        
                            </div><!-- .postcontent end -->
    
                        <!-- Sidebar
                        ============================================= -->
                        <!-- .sidebar end -->
    
                    </div>
    
                </div>
    
            </section>

@endsection


@section('js')
    <script src="{{asset('depan/js/jquery.js')}}"></script>
	<script src="{{asset('depan/js/plugins.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
    <script src="{{asset('depan/js/functions.js')}}"></script>
    <script src="{{asset('depan/js/jquery.gmap.js')}}"></script>
    

    {{-- <script>
    $('#save').click(function() {
      var btn = $(this);
      btn.val(btn.data("loading-text")); setTimeout(function() {
          btn.val('reset');
        }, 2000);
      });
    </script> --}}

	<script>

		$('#google-map').gMap({

			address: 'Melbourne, Australia',
			maptype: 'ROADMAP',
			zoom: 14,
			markers: [
				{
					address: "Melbourne, Australia",
					html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
					icon: {
						image: "images/icons/map-icon-red.png",
						iconsize: [32, 39],
						iconanchor: [13,39]
					}
				}
			],
			doubleclickzoom: false,
			controls: {
				panControl: true,
				zoomControl: true,
				mapTypeControl: true,
				scaleControl: false,
				streetViewControl: false,
				overviewMapControl: false
			}
		});


	</script>

@endsection