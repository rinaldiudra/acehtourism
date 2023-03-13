@extends('layouts.layout_admin')

@section('title')
Travel
@stop

@section('content')
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Travel</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            @if(Session::has('success_msg'))
             <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
            @endif
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i>Edit Data Travel</h4>
              <form class="form-horizontal style-form" method="POST" action="{{ route('updatetravel',$travel->id) }}" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                  <label for="nama_travel" class="col-sm-2 col-sm-2 control-label">{{ __('Nama Travel') }}</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_travel" name="nama_travel" value="{{$travel->nama_travel}}" required>
                  </div>
                </div>
                <div class="form-group">
                    <label for="jenis" class="col-sm-2 col-sm-2 control-label">{{ __('Jenis Travel') }}</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="jenis" name="jenis" value="{{$travel->jenis}}">
                            <option selected disabled>{{$travel->jenis}}</option>
                            <option value="Agen Penjalanan Wisata (APW)">Agen Penjalanan Wisata (APW)</option>
                            <option value="Biro Perjalanan Wisata (BPW)">Biro Perjalanan Wisata (BPW)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="no_izin" class="col-sm-2 col-sm-2 control-label">{{ __('No Izin') }}</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="no_izin" name="no_izin" value="{{$travel->no_izin}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pimpinan" class="col-sm-2 col-sm-2 control-label">{{ __('Pimpinan') }}</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="pimpinan" name="pimpinan" value="{{$travel->pimpinan}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="id_kabupaten" class="col-sm-2 col-sm-2 control-label">{{ __('Kabupaten/Kota') }}</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="id_kabupaten" name="id_kabupaten" data-source="{{url('/getKabupaten')}}" data-valueKey="id" data-displayKey="nama_kabupaten" required>
                        <option selected disabled>{{$travel->id_kabupaten}}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat" class="col-sm-2 col-sm-2 control-label">{{ __('Alamat') }}</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{$travel->alamat}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kontak" class="col-sm-2 col-sm-2 control-label">{{ __('Kontak') }}</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="kontak" name="kontak" value="{{$travel->kontak}}" required>
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <a href="{{ route('datatravel') }}" class="btn btn-theme04">Batal</a>
                    <button class="btn btn-theme" type="submit">Simpan</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
@stop

<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script>
	$(document).ready(function(){
		$('select[data-source]').each(function() {
        var $select = $(this);
        
        $select.append('<option></option>');
        //fungsi fetch all kabupaten records
        $.ajax({
            url: $select.attr('data-source'),
            dataType: 'json',
            success:function(response){
                var lens = 0;

                if(response['data'] != null){
                    lens = response['data'].length;
                }else if(response['data'] == null){
                	console.log("data kosong");
                }
                for(var i=0; i<lens; i++ ){
                    var id = response['data'][i].id;
                    var nama_kabupaten = response['data'][i].nama_kabupaten;
                }
            }
            }).then(function(options) {
                options.map(function(option) {
                var $option = $('<option>');      
                $option.val(option[$select.attr('data-valueKey')]).text(option[$select.attr('data-displayKey')]);      
                $select.append($option);
                });
            });
    });

	});
</script>