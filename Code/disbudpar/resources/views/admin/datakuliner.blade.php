@extends('layouts.layout_admin')

@section('title')
Kuliner
@stop

@section('content')
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Kuliner</h3>
        <div class="row">
          <div class="col-lg-12">
            <a href="{{ route('inputkuliner') }}" class="pull-left btn btn-theme">+ Tambah Data Kuliner</a>
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
                <h4><i class="fa fa-angle-right"></i>Data Kuliner</h4>
              </div>
              <div class="col-lg-4">
                <form action="{{ url('/datakuliner') }}" method="GET">
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
                        <th width="100px">Nama Usaha</th>
                        <th width="250px">Detail Kuliner</th>
                        <th width="50px">Pemilik</th>
                        <th width="100px">Kabupaten/Kota</th>
                        <th width="150px">Alamat</th>
                        <th width="100px">Kontak</th>
                        <th width="50px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($data))
                @foreach ($data as $kuliner)
                    <tr>
                        <td>{{$kuliner->id}}</td>
                        <td>{{$kuliner->nama_kuliner}}</td>
                        <td>{{$kuliner->detail_kuliner}}</td>
                        <td>{{$kuliner->pemilik}}</td>
                        <td>{{$kuliner->nama_kabupaten}}</td>
                        <td>{{$kuliner->alamat}}</td>
                        <td>{{$kuliner->kontak}}</td>
                        <td>
                          <a href="{{ route('updatekuliner',$kuliner->id)}}"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                          <a href="{{ route('hapuskuliner',$kuliner->id)}}" onclick="return confirm('Yakin ingin menghapus data?')"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
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