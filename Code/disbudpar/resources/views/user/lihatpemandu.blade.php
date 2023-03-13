@extends('layouts.layout_user')
 
@section('title')
Pemandu Wisata
@stop

@section('content')
<section id="page-title">
	<div class="container clearfix">
		<div class="heading-block center nomargin">
			<h2>Pemandu Wisata</h2>
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
		@foreach ($data as $pemandu)
			<div class="entry clearfix">
				<div align="center">
					<img src="{{ asset('user/images/user.png') }}" alt="Gambar" width="150px" height="150px">
				</div>
				<div class="entry-title">
					<h2>{{$pemandu->nama_pemandu}}</a></h2>
				</div>
				<ul class="entry-meta clearfix">
					<li>{{$pemandu->spesifikasi_bahasa}}</li>
				</ul>
				<div class="entry-content">
					<p>
					<b>Kontak : </b>{{$pemandu->no_hp}}<br>
					<b>Alamat : </b>{{$pemandu->alamat}}
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