<!DOCTYPE html>
@section('title','Login User Dropshipping UMKM')
<html lang="en">
<head>

  @include('admin.include.head')
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
          <form method="POST" action="{{ route('login') }}" class="form-validate">
              {{csrf_field()}}
						<div class="panel panel-body login-form">
							<div class="text-center">
							<a href="{{ route('beranda') }}">	<img src="{{asset('global_assets/images/placeholders/login1.jpg')}}" class="img-circle" alt="logo" style="width: 110px; height: 110px;"> </a>
								<h5 class="content-group">Login to your account <small class="display-block">Dropshipping</small></h5>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control" placeholder="Email" name="email" id="email" value="{{old('email')}}">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" name="password" id="password" class="form-control" name="password" placeholder="Password" required="required">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group login-options">
								<div class="row">
									<div class="col-sm-6">
										<label class="checkbox-inline">
											<input type="checkbox" class="styled" >
											Remember
										</label>
									</div>

									<div class="col-sm-6 text-right">
										<a href="{{route('user.reset')}}">Forgot password?</a>
									</div>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn bg-blue btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
							</div>

							<div class="content-divider text-muted form-group"><span>Don't have an account?</span></div>
							<a href="{{route('user.register')}}" class="btn btn-default btn-block content-group">Sign up</a>
							<span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
						</div>
					</form>
					<!-- /advanced login -->

          <div class="footer text-white">
              &copy; 2019. <a class="text-orange-300" href="#">Dropshipping UMKM</a> by <a class="text-orange-300" href="https://www.instagram.com/danafebrisetiawan/?hl=id" target="_blank">Dana Febri Setiawan</a>
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
