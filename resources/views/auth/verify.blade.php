<!DOCTYPE html>
@section('title','Verifikasi E-mail')
<html lang="en">
<head>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('depan/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('depan/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('depan/css/swiper.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('depan/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('depan/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('depan/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('depan/css/magnific-popup.css')}}" type="text/css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">




	<link rel="stylesheet" href="{{asset('depan/css/responsive.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href='{{asset('global_assets/images/placeholders/logoicon1.png')}}' rel='shortcut icon'>
  <title>@yield('title')</title>

</head>

<body class="login-container" style="width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('global_assets/images/backgrounds/login_cover.jpg') center center no-repeat; background-size: cover;">

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Advanced login -->
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <br><br><br>
                                <div class="card">
                                    <div class="card-header">{{ __('Verifikasi alamat email Anda') }}</div>
                    
                                    <div class="card-body">
                                        @if (session('resent'))
                                            <div class="alert alert-success" role="alert">
                                                {{ __('Tautan verifikasi baru telah dikirim ke alamat email Anda.') }}
                                            </div>
                                        @endif
                    
                                        {{ __('Sebelum melanjutkan, silakan periksa email Anda untuk tautan verifikasi.') }}
                                        {{ __('Jika Anda tidak menerima email') }}, <a href="{{ route('verification.resend') }}">{{ __('Klik Untuk meminta verifikasi email') }}</a>.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>

</html>