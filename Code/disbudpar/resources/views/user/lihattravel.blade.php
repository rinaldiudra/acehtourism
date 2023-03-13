@extends('layouts.layout_user')
 
@section('title')
Jasa Travel
@stop

@section('content')
<section id="page-title">
	<div class="container clearfix">
		<div class="heading-block center nomargin">
			<h2>Jasa Travel</h2>
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
		@foreach ($data as $travel)
			<div class="entry clearfix">
				<div align="center">
					<img src="{{ asset('user/images/travel.png') }}" alt="Gambar" width="200px" height="200px">
				</div>
				<div class="entry-title">
					<h2>{{$travel->nama_travel}}</a></h2>
				</div>
				<ul class="entry-meta clearfix">
					<li>{{$travel->jenis}}</li>
				</ul>
				<div class="entry-content">
					<p>
					<b>No Izin : </b>{{$travel->no_izin}}<br>
					<b>Pimpinan : </b>{{$travel->pimpinan}}<br>
					<b>Kontak : </b>{{$travel->kontak}}<br>
					<b>Alamat : </b>{{$travel->alamat}}
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