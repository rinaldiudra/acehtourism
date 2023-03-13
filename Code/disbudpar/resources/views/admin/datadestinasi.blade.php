@extends('layouts.layout_admin')

@section('title')
Destinasi Wisata 
@stop

@section('content')
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Destinasi Wisata</h3>
        <div class="row">
          <div class="col-lg-12">
            <a href="{{ route('inputdestinasi') }}" class="pull-left btn btn-theme">+ Tambah Data Destinasi</a>
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
                <h4><i class="fa fa-angle-right"></i>Data Destinasi Wisata</h4>
              </div>
              <div class="col-lg-4">
                <form action="{{ url('/datadestinasi') }}" method="GET">
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
                        <th width="100px">Nama Wisata</th>
                        <th width="50px">Jenis Wisata</th>
                        <th width="50px">Kabupaten/Kota</th>
                        <th width="300px">Alamat</th>
                        <th width="80px">Foto</th>
                        <th width="20px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($data))
                @foreach ($data as $destinasi)
                    <tr>
                        <td>{{$destinasi->id}}</td>
                        <td>{{$destinasi->namaobjek}}</td>
                        <td>{{$destinasi->jenis}}</td>
                        <td>{{$destinasi->nama_kabupaten}}</td>
                        <td>{{$destinasi->lokasi}}</td>
                        <td>{{$destinasi->foto}}</td>
                        <td>
                          <a href="{{ route('updatedestinasi',$destinasi->id)}}"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                          <a href="{{ route('hapusdestinasi',$destinasi->id)}}" onclick="return confirm('Yakin ingin menghapus data?')"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
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