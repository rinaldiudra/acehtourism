@extends('layouts.layout_user')
 
@section('title')
Souvenir
@stop

@section('content')
<section id="page-title">
	<div class="container clearfix">
		<div class="heading-block center nomargin">
			<h2>Souvenir</h2>
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
		@foreach ($data as $souvenir)
			<div class="entry clearfix">
				<div class="entry-image">
					<img src="{{ url('../storage/app/foto/'.($souvenir->foto==NULL?:$souvenir->foto)) }}" alt="Gambar">
				</div>
				<div class="entry-title">
					<h2>{{$souvenir->nama_usaha}}</a></h2>
				</div>
				<ul class="entry-meta clearfix">
					<li>{{$souvenir->jenis_produk}}</li>
				</ul>
				<div class="entry-content">
					<p>
					<b>Pemilik : </b>{{$souvenir->nama_pemilik}}<br>
					<b>Kontak : </b>{{$souvenir->no_hp}}<br>
					<b>Alamat : </b>{{$souvenir->alamat}}
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