@extends('layouts.layout_user')
 
@section('title')
Destinasi Wisata
@stop

@section('content')
<section id="page-title">
	<div class="container clearfix">
		<div class="heading-block center nomargin">
			<h2>Destinasi Wisata</h2>
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
		@foreach ($data as $destinasi)
			<div class="entry clearfix">
				<div class="entry-image">
					<img src="{{ url('../storage/app/foto/'.($destinasi->foto==NULL?:$destinasi->foto)) }}" alt="Gambar" width="100px" height="100px">
				</div>
				<div class="entry-title">
					<h2>{{$destinasi->namaobjek}}</a></h2>
				</div>
				<ul class="entry-meta clearfix">
					<li>{{$destinasi->jenis}}</li>
				</ul>
				<div class="entry-content">
					<p><b>Alamat : </b>{{$destinasi->lokasi}}</p>
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