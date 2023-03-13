@extends('layouts.layout_user')
 
@section('title')
Kuliner
@stop

@section('content')
<section id="page-title">
	<div class="container clearfix">
		<div class="heading-block center nomargin">
			<h2>Kuliner</h2>
			@foreach ($kab as $kabupaten)
			<h4>{{$kabupaten->nama_kabupaten}}</h4>
			@endforeach
		</div>
	</div>
</section>

<section id="content">
<div class="content-wrap">
	<div class="container clearfix">
		<!-- Posts
		============================================= -->
		<div id="posts" class="post-grid grid-container clearfix" data-layout="fitRows">
		@foreach ($data as $kuliner)
			<div class="entry clearfix">
				<div align="center">
					<img src="{{ asset('user/images/food.png') }}" alt="Gambar" width="200px" height="200px">
				</div>
				<div class="entry-title">
					<h2>{{$kuliner->nama_kuliner}}</a></h2>
				</div>
				<div class="entry-content">
					<p>
					<b>Detail : </b><br>{{$kuliner->detail_kuliner}}<br>
					<b>Pemilik : </b>{{$kuliner->pemilik}}<br>
					<b>Kontak : </b>{{$kuliner->kontak}}<br>
					<b>Alamat : </b>{{$kuliner->alamat}}
					</p>
				</div>
			</div>
		@endforeach
		</div><!-- #posts end -->
		<div align="right">
			{!! $data->render() !!}
		</div>
	</div>
</div>
</section><!-- #content end -->

@stop