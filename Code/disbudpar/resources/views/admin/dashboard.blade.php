@extends('layouts.layout_admin')

@section('title')
Dashboard
@stop

@section('content')
    <section id="main-content">
      <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i>Dashboard</h3>
        <div class="row">
        <div class="col-lg-12 main-chart">
              <!--/ col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>DESTINASI WISATA</h5>
                  </div>
                    <div class="user">
                      <img src="{{ asset('admin/img/foto.jpg') }}" class="img-circle" width="110" height="110">
                    </div>
                    <h5>Total Data</h5>
                  <h3><b>{{$destinasi}}</b></h3>
                </div>
              </div>

              <!--/ col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>HOTEL</h5>
                  </div>
                    <div class="user">
                      <img src="{{ asset('admin/img/hotel.jpg') }}" class="img-circle" width="110" height="110">
                    </div>
                    <h5>Total Data</h5>
                  <h3><b>{{$hotel}}</b></h3>
                </div>
              </div>

              <!--/ col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>KULINER</h5>
                  </div>
                    <div class="user">
                      <img src="{{ asset('user/images/food.png') }}" class="img-circle" width="110" height="110">
                    </div>
                    <h5>Total Data</h5>
                  <h3><b>{{$kuliner}}</b></h3>
                </div>
              </div>

              <!--/ col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>SOUVENIR</h5>
                  </div>
                    <div class="user">
                      <img src="{{ asset('admin/img/khasaceh.jpg') }}" class="img-circle" width="110" height="110">
                    </div>
                    <h5>Total Data</h5>
                  <h3><b>{{$souvenir}}</b></h3>
                </div>
              </div>

              <!--/ col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>PEMANDU WISATA</h5>
                  </div>
                    <div class="user">
                      <img src="{{ asset('admin/img/pemandu.jpg') }}" class="img-circle" width="110" height="110">
                    </div>
                    <h5>Total Data</h5>
                  <h3><b>{{$pemandu}}</b></h3>
                </div>
              </div>

              <!--/ col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>JASA TRAVEL</h5>
                  </div>
                    <div class="user">
                      <img src="{{ asset('admin/img/travel.jpg') }}" class="img-circle" width="110" height="110">
                    </div>
                    <h5>Total Data</h5>
                  <h3><b>{{$travel}}</b></h3>
                </div>
              </div>

            <!-- /row -->
          </div>
		</div>
      </section>
    </section>

@stop