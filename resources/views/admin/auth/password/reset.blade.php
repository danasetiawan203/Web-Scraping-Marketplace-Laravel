<!DOCTYPE html>
@section('title','Reset User Dropshipping UMKM')
<html lang="en">
<head>

  @include('admin.include.head')
  <title>@yield('title')</title>

</head>

<body class="login-container">
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">
						@if(session()->has('success'))
						<div class="alert alert-success">
							 {{ session()->get('success') }} <a href="https://mail.google.com/mail/u/0/#inbox">Klik Link ini!</a>
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

					<!-- Password recovery -->
				<form action="{{route('reset')}}" id="frmResetPassword" method="post">
					{{ csrf_field() }}
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
								<h5 class="content-group">Password recovery <small class="display-block">Isikan email anda dibawah ini untuk reset Password. Lalu cek email Anda.</small></h5>
							</div>

							<div class="form-group has-feedback">
								<input type="email" name="email" class="form-control" placeholder="Your email">
								<div class="form-control-feedback">
									<i class="icon-mail5 text-muted"></i>
								</div>
							</div>

							<button type="submit" value="Submit" data-loading-text="Loading..." class="btn bg-blue btn-block">Reset password <i class="icon-arrow-right14 position-right"></i></button>
              				<a href="{{route('login')}}" class="btn bg-blue btn-block">Kembali <i class="icon-arrow-left13 position-right"></i></a>
						</div>
					</form>
					<!-- /password recovery -->


					<!-- Footer -->
					@include('admin.include.footer')
					<!-- /footer -->

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
