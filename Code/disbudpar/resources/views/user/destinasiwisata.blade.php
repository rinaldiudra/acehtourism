@extends('layouts.layout_user')
 
@section('title')
Destinasi Wisata
@stop

@section('content')
<section id="page-title">
	<div class="container clearfix">
		<div class="heading-block center nomargin">
			<h2>Destinasi Wisata</h2>
		</div>
	</div>
</section>

<section id="content">
<div class="section parallax nobottommargin notopmargin nobottomborder" style="background: url('user/images/bgpattern.png');" data-stellar-background-ratio="0.3">
	<div class="container clearfix">
	@foreach ($kabupaten as $kabupaten)
		<div class="col-md-3 bottommargin-sm">
			<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
				<div class="fbox-icon">
					<a href="{{url('/lihatdestinasi/'.$kabupaten->id)}}"><i class="icon-location i-alt"></i></a>
				</div>
				<h3>{{$kabupaten->nama_kabupaten}}</h3>
			</div>
		</div>
		@endforeach
		<div class="clear"></div>
	</div>
</div>
</section><!-- #content end -->
@stop