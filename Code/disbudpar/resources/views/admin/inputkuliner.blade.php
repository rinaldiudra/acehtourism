@extends('layouts.layout_admin')

@section('title')
Kuliner
@stop

@section('content')
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Kuliner</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            @if(Session::has('success_msg'))
             <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
            @endif
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i>Masukkan Data Kuliner</h4>
              <form class="form-horizontal style-form" method="POST" action="{{ route('inputkuliner') }}" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                  <label for="nama_kuliner" class="col-sm-2 col-sm-2 control-label">{{ __('Nama Usaha') }}</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_kuliner" name="nama_kuliner" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="detail_kuliner" class="col-sm-2 col-sm-2 control-label">{{ __('Detail Kuliner') }}</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="detail_kuliner" id="detail_kuliner" rows="5" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                    <label for="pemilik" class="col-sm-2 col-sm-2 control-label">{{ __('Pemilik') }}</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="pemilik" name="pemilik" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="id_kabupaten" class="col-sm-2 col-sm-2 control-label">{{ __('Kabupaten/Kota') }}</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="id_kabupaten" name="id_kabupaten" data-source="{{url('/getKabupaten')}}" data-valueKey="id" data-displayKey="nama_kabupaten" required>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat" class="col-sm-2 col-sm-2 control-label">{{ __('Alamat') }}</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kontak" class="col-sm-2 col-sm-2 control-label">{{ __('Kontak') }}</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="kontak" name="kontak" required>
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <a href="{{ route('datakuliner') }}" class="btn btn-theme04">Batal</a>
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