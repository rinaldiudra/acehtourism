@extends('layouts.layout_user')
 
@section('title')
Hotel
@stop

@section('content')
<section id="page-title">
	<div class="container clearfix">
		<div class="heading-block center nomargin">
			<h2>Hotel</h2>
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
		@foreach ($data as $hotel)
			<div class="entry clearfix">
				<div class="entry-image">
					<img src="{{ url('../storage/app/foto/'.($hotel->foto==NULL?:$hotel->foto)) }}" alt="Gambar">
				</div>
				<div class="entry-title">
					<h2>{{$hotel->nama_hotel}}</a></h2>
				</div>
				<ul class="entry-meta clearfix">
					<li>Kategori/Bintang : {{$hotel->kategori}}</li>
				</ul>
				<div class="entry-content">
					<p>
					<b>Jumlah Kamar : </b>{{$hotel->jumlah_kamar}}<br>
					<b>Detail Kamar : </b><br>{{$hotel->detail_kamar}}<br>
					<b>Pimpinan : </b>{{$hotel->pimpinan}}<br>
					<b>Kontak : </b>{{$hotel->no_telp}}<br>
					<b>Alamat : </b>{{$hotel->alamat}}
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