<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />
    <link rel="icon" type="image/png" sizes="18x18" href="{{ asset('user/images/logolightaceh.png') }}">
	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('user/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('user/css/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('user/css/swiper.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('user/css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('user/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('user/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('user/css/magnific-popup.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('user/css/responsive.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- Document Title
	============================================= -->
	<title>@yield('title')</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="{{url('/')}}" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="{{ asset('user/images/cahayaaceh.png') }}" alt="Canvas Logo"></a>
						<a href="{{url('/')}}" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="{{ asset('user/images/cahayaaceh.png') }}" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<!-- <li><a href="#"><div>Home</div></a>
							</li> -->
							<li><a href="{{ route('destinasiwisata') }}"><div>Destinasi Wisata</div></a>
							</li>
							<li><a href="{{ route('hotel') }}"><div>Hotel</div></a>
							</li>
							<li><a href="{{ route('kuliner') }}"><div>Kuliner</div></a>
							</li>
							<li><a href="{{ route('souvenir') }}"><div>Souvenir</div></a>
							</li>
							<li><a href="{{ route('pemanduwisata') }}"><div>Pemandu Wisata</div></a>
							</li>
							<li><a href="{{ route('travel') }}"><div>Jasa Travel</div></a>
							</li>
						</ul>

						<!-- Card Login
						============================================= -->
						<div id="top-cart">
							<a href="{{ route('login') }}"><i class="icon-user"></i></a>
						</div><!-- #Card Login -->
					</nav><!-- #primary-menu end -->
				</div>
			</div>
		</header><!-- #header end -->

		@yield('slider')
		
		@yield('content')

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="{{ asset('user/js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('user/js/plugins.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="{{ asset('user/js/functions.js') }}"></script>

</body>
</html>