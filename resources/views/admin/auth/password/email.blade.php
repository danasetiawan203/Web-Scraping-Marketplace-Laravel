<!DOCTYPE html>
@section('title','Reset User Dropshipping UMKM')
<html lang="en">
<head>

  @include('admin.include.head')
  <title>@yield('title')</title>
  <link href='{{asset('global_assets/images/placeholders/logoicon1.png')}}' rel='shortcut icon'>

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

					<!-- Password recovery -->
				<form action="{{route('resetpass1')}}" id="frmResetPassword" method="post">
					{{ csrf_field() }}
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-success text-success"><i class="icon-spinner11"></i></div>
								<h5 class="content-group">Reset Password</h5>
							</div>

							<div class="form-group has-feedback">
								<input name="email" type="email" class="form-control" placeholder="Your email">
								<div class="form-control-feedback">
									<i class="icon-mail5 text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback">
								<input name="password" type="password" class="form-control" placeholder="password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback">
								<input name="password_confirmation" type="password" class="form-control" placeholder="konfirmasi password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<button type="submit" data-loading-text="Loading..." class="btn bg-blue btn-block">Reset password <i class="icon-arrow-right14 position-right"></i></button>
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
