@extends('layouts.layout_user')
 
@section('title')
Perkiraan Biaya
@stop
 
@section('content')
<section id="content">
<div class="content-wrap">
	<div class="container clearfix">
		<div class="col_one_third nobottommargin">
			<div class="well well-lg nobottommargin">

				<form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">
					<h3>Pilih Provinsi Asalmu</h3>

					<div class="col_full">
						<label for="login-form-username">{{ __('Provinsi :') }}</label>
						<select class="form-control" id="id_provinsi" name="id_provinsi" data-source="{{url('/getProvinsi')}}" data-valueKey="id_provinsi" data-displayKey="nama_provinsi">
						</select>
					</div>
			</div>

		</div>

		<div class="col_two_third col_last nobottommargin">
			<h3>Pilih Tujuan Destinasi Liburanmu di Aceh</h3>
			<p>Hitung perkiraan biaya liburanmu selama di Aceh, Perkiraan biaya yang dihitung yaitu Biaya Tiket Pesawat dari Provinsimu ke Banda Aceh (Pulang Pergi), Biaya Transportasi Umum dari Banda Aceh ke Kabupaten/Kota destinasi liburanmu (Pulang Pergi) dan Biaya Penginapan.</p>

				<div class="col_half">
					<label for="id_kabupaten">{{ __('Pilih Kabupaten/Kota :') }}</label>
					<select class="form-control input-lg dynamic" id="id_kabupaten" name="id_kabupaten" data-dependent="id_kabupaten">
                    <option value="">Pilih Kabupaten/Kota</option>
					@foreach($data as $kab)
					<option value="{{ $kab->id_kabupaten}}">{{ $kab->id_kabupaten }}</option>
  					@endforeach
					</select>
				</div>

				<div class="col_half col_last">
					<label for="id_kabupaten">Pilih Destinasi Wisata:</label>
					<select name="namaobjek" id="namaobjek" class="form-control input-lg" data-dependent="namaobjek">
						<option value="">Pilih Destinasi</option>
   					</select>
				</div>
				{{ csrf_field() }}

				<div class="clear"></div>

				<div class="col_half">
					<label for="register-form-username">Pilih Hotel:</label>
					<input type="text" id="register-form-username" name="register-form-username" value="" class="form-control" />
				</div>

				<div class="col_half col_last">
					<label for="register-form-phone">Pilih Tipe Kamar:</label>
					<input type="text" id="register-form-phone" name="register-form-phone" value="" class="form-control" />
				</div>

				<div class="clear"></div>

				<div class="col_half">
					<label for="register-form-password">Pilih Jumlah Hari:</label>
					<input type="number" id="register-form-password" name="register-form-password" value="" class="form-control" />
				</div>

				<div class="clear"></div>

				<div class="col_full nobottommargin">
					<button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Hitung Perkiraan Biaya</button>
				</div>
			</form>
		</div>
	</div>
</div>
</section>
@stop

<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script>
$(document).ready(function(){

 $('.dynamic').change(function(){
  if($(this).val() != '')
  {
   var select = $(this).attr("id_destinasi");
   var value = $(this).val();
   var dependent = $(this).data('dependent');
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"{{ route('dynamicdependent.fetch') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token, dependent:dependent},
    success:function(result)
    {
     $('#'+dependent).html(result);
    }

   })
  }
 });

 $('#id_kabupaten').change(function(){
  $('#namaobjek').val('');
 });

});
</script>
