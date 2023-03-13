@extends('layouts.layout_admin')

@section('title')
Hotel
@stop

@section('content')
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Hotel</h3>
        <div class="row">
          <div class="col-lg-12">
            <a href="{{ route('inputhotel') }}" class="pull-left btn btn-theme">+ Tambah Data Hotel</a>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            @if(Session::has('success_msg'))
              <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
            @endif
          </div>
        </div>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
            <div class="col-lg-8">
              <h4><i class="fa fa-angle-right"></i>Data Hotel</h4>
            </div>
              <div class="col-lg-4">
                <form action="{{ url('/datahotel') }}" method="GET">
							    <div class="input-group">
								    <input type="text" class="form-control" name="search">
								    <span class="input-group-btn">
									    <button class="btn btn-search" type="submit"> Cari</button>
								    </span>
							    </div>
						    </form>
              </div>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                @csrf
                <thead>
                    <tr>
                        <th width="30px">ID</th>
                        <th width="100px">Nama Hotel</th>
                        <th width="50px">Bintang</th>
                        <th width="50px">Pimpinan</th>
                        <th width="100px">Kabupaten/Kota</th>
                        <th width="100px">Alamat</th>
                        <th width="50px">Kontak</th>
                        <th width="50px">Jumlah Kamar</th>
                        <th width="80px">Detail Kamar</th>
                        <th width="50px">Foto</th>
                        <th width="50px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($data))
                @foreach ($data as $hotel)
                    <tr>
                        <td>{{$hotel->id}}</td>
                        <td>{{$hotel->nama_hotel}}</td>
                        <td>{{$hotel->kategori}}</td>
                        <td>{{$hotel->pimpinan}}</td>
                        <td>{{$hotel->nama_kabupaten}}</td>
                        <td>{{$hotel->alamat}}</td>
                        <td>{{$hotel->no_telp}}</td>
                        <td>{{$hotel->jumlah_kamar}}</td>
                        <td>{{$hotel->detail_kamar}}</td>
                        <td>{{$hotel->foto}}</td>
                        <td>
                            <a href="{{ route('updatehotel',$hotel->id)}}"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                            <a href="{{ route('hapushotel',$hotel->id)}}" onclick="return confirm('Yakin ingin menghapus data?')"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                @else
				          <div class="row mt">
					          <h3 style="text-align: center">Pencarian Tidak Ditemukan</h3>
				          </div>
			          @endif
                </table>
              </section>
            </div>
            <div align="right">
		          {!! $data->render() !!}
	          </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
@stop