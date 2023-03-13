@extends('layouts.layout_user')
 
@section('title')
Pariwisata Aceh 
@stop

@section('slider')
		<section id="slider" class="slider-parallax swiper_wrapper clearfix">
			<div class="slider-parallax-inner">
				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">The Light Of Aceh</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">The Journey In A Hidden Paradise</p>
								</div>
							</div>
							<div class="video-wrap">
								<video poster="{{ asset('user/images/videos/explore.jpg') }}" preload="auto" loop autoplay muted>
									<source src="{{ asset('user/images/videos/video2.mp4') }}" type='video/mp4' />
									<source src="{{ asset('user/images/videos/explore.webm') }}" type='video/webm' />
								</video>
								<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
							</div>
						</div>
						<div class="swiper-slide dark">
							<div class="container clearfix">
								<div class="slider-caption">
									<h2 data-caption-animate="fadeInUp">Pariwisata Aceh</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">Ribuan Destinasi Wisata tersedia di Aceh</p>
								</div>
							</div>
							<div class="video-wrap">
								<video poster="{{ asset('user/images/videos/explore.jpg') }}" preload="auto" loop autoplay muted>
									<source src="{{ asset('user/images/videos/video1.mp4') }}" type='video/mp4' />
									<source src="{{ asset('user/images/videos/explore.webm') }}" type='video/webm' />
								</video>
								<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
							</div>
						</div>
						<div class="swiper-slide dark">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">Halal Tourism</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">Aceh memenangkan Penghargaan World Halal Tourism Awards 2016 sebagai World’s Best Halal Cultural Destination</p>
								</div>
							</div>
							<div class="video-wrap">
								<video poster="{{ asset('user/images/videos/explore.jpg') }}" preload="auto" loop autoplay muted>
									<source src="{{ asset('user/images/videos/video3.mp4') }}" type='video/mp4' />
									<source src="{{ asset('user/images/videos/explore.webm') }}" type='video/webm' />
								</video>
								<div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
							</div>
						</div>
					</div>
					<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
					<div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
				</div>
			</div>
		</section>

		<section id="content">
			<div class="section notopborder topmargin-sm bottommargin-sm noborder nobg">
				<div class="container clearfix">
						<div class="col_one_sixth nobottommargin center" data-animate="bounceIn">
							<a href="{{ route('destinasiwisata') }}">
							<i class="i-plain i-xlarge divcenter nobottommargin icon-location"></i></a>
							<div class="counter counter-lined"><span data-from="100" data-to="{{$destinasi}}" data-refresh-interval="50" data-speed="2000"></span></div>
							<h4>Destinasi Wisata</h4>
						</div>

						<div class="col_one_sixth nobottommargin center" data-animate="bounceIn" data-delay="400">
							<a href="{{ route('hotel') }}">
							<i class="i-plain i-xlarge divcenter nobottommargin icon-home"></i></a>
							<div class="counter counter-lined"><span data-from="100" data-to="{{$hotel}}" data-refresh-interval="50" data-speed="2000"></span></div>
							<h4>Hotel</h4>
						</div>

						<div class="col_one_sixth nobottommargin center" data-animate="bounceIn" data-delay="600">
							<a href="{{ route('kuliner') }}">
							<i class="i-plain i-xlarge divcenter nobottommargin icon-food"></i></a>
							<div class="counter counter-lined"><span data-from="100" data-to="{{$kuliner}}" data-refresh-interval="50" data-speed="2000"></span></div>
							<h4>Kuliner</h4>
						</div>

						<div class="col_one_sixth nobottommargin center" data-animate="bounceIn" data-delay="600">
							<a href="{{ route('souvenir') }}">
							<i class="i-plain i-xlarge divcenter nobottommargin icon-bag"></i></a>
							<div class="counter counter-lined"><span data-from="100" data-to="{{$souvenir}}" data-refresh-interval="50" data-speed="2000"></span></div>
							<h4>Souvenir</h4>
						</div>

						<div class="col_one_sixth nobottommargin center" data-animate="bounceIn" data-delay="200">
							<a href="{{ route('pemanduwisata') }}">
							<i class="i-plain i-xlarge divcenter nobottommargin icon-user"></i></a>
							<div class="counter counter-lined"><span data-from="100" data-to="{{$pemandu}}" data-refresh-interval="50" data-speed="2000"></span></div>
							<h4>Pemandu Wisata</h4>
						</div>
		
						<div class="col_one_sixth nobottommargin center col_last" data-animate="bounceIn" data-delay="600">
							<a href="{{ route('travel') }}">
							<i class="i-plain i-xlarge divcenter nobottommargin icon-plane"></i></a>
							<div class="counter counter-lined"><span data-from="100" data-to="{{$travel}}" data-refresh-interval="50" data-speed="2000"></span></div>
							<h4>Jasa Travel</h4>
						</div>
				</div>
			</div>
			</section>
@stop