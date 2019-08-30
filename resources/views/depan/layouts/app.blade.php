<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<title>@yield('title')</title>
<link href='{{asset('global_assets/images/placeholders/logoicon1.png')}}' rel='shortcut icon'>
@include('depan.include.head')

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			@include('depan.include.header')

		</header><!-- #header end -->

		<!-- Content
		============================================= -->
		@yield('content')
    <!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark" style="background: url('depan/images/footer-bg.jpg') repeat; background-size: cover;">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				@include('depan.include.footer')
        <!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				@include('depan.include.copyright')

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

@yield('js')

</body>
</html>
