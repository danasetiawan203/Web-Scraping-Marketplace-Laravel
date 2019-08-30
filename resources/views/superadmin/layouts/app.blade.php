<!DOCTYPE html>
<html lang="en">
<head>

@include('superadmin.include.head')
<title>@yield('title')</title>
<link href='{{asset('global_assets/images/placeholders/logoicon1.png')}}' rel='shortcut icon'>

</head>

<body>

	<!-- Main navbar -->
	@include('superadmin.include.navbar')
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			@include('superadmin.include.sidebar')
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				@yield('content')
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
