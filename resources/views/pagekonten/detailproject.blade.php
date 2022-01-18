@extends('layout.master')
@section('konten')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Detail Project</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Tabel Project</a></div>
          <div class="breadcrumb-item">Detail Project</div>
        </div>
      </div>

      <div class="section-body">
        <div class="row">
          <div class="col-12 col-sm-12 col-lg-12">
            <div class="card author-box card-primary">
              <div class="card-body">
                <div class="author-box-left mr-2">
                  <img alt="image" src="{{asset('img/imgproject')}}/{{$data->img}}" class="author-box-picture" style="width: 250px;">
                  <div class="clearfix"></div>
                </div>
                <div class="author-box-details">
                  <div class="author-box-name">
                    <p class="title">{{$data->nama_project}}</p>
                  </div>
                  <div class="author-box-job">Web Developer</div>
                  <div class="author-box-description">
                    <p>{{$data->deskripsi}}</p>
                  </div>
                  <div class="w-100 d-sm-none"></div>
                  <div class="float-right mt-sm-0 mt-3">
                    <a href="{{$data->link}}" class="btn">View Posts <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection