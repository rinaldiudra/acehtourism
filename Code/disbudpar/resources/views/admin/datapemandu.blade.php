@extends('layouts.layout_admin')

@section('title')
Pemandu Wisata
@stop

@section('content')
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Pemandu Wisata</h3>
        <div class="row">
          <div class="col-lg-12">
            <a href="{{ route('inputpemandu') }}" class="pull-left btn btn-theme">+ Tambah Data Pemandu</a>
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
                <h4><i class="fa fa-angle-right"></i>Data Pemandu Wisata</h4>
              </div>
              <div class="col-lg-4">
                <form action="{{ url('/datapemandu') }}" method="GET">
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
                        <th width="100px">Nama Pemandu</th>
                        <th width="100px">Kabupaten/Kota</th>
                        <th width="170px">Alamat</th>
                        <th width="100px">Kontak</th>
                        <th width="100px">Spesifikasi Bahasa</th>
                        <th width="50px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($data))
                @foreach ($data as $pemandu)
                    <tr>
                        <td>{{$pemandu->id}}</td>
                        <td>{{$pemandu->nama_pemandu}}</td>
                        <td>{{$pemandu->nama_kabupaten}}</td>
                        <td>{{$pemandu->alamat}}</td>
                        <td>{{$pemandu->no_hp}}</td>
                        <td>{{$pemandu->spesifikasi_bahasa}}</td>
                        <td>
                            <a href="{{ route('updatepemandu',$pemandu->id)}}"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                            <a href="{{ route('hapuspemandu',$pemandu->id)}}" onclick="return confirm('Yakin ingin menghapus data?')"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
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