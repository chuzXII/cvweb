@extends('layout.master')

@section('konten')

<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Dashboard</h1>
      </div>
      
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
            <i class="fas fa-file fa-spin fa-lg"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Project</h4>
              </div>
              <div class="card-body">
                {{$data}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-info">
            <i class="fas fa-certificate fa-spin"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Certificate</h4>
              </div>
              <div class="card-body">
                {{$datacer}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-success">
            <i class="far fa-user fa-spin fa-lg"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>User</h4>
              </div>
              <div class="card-body">
                {{$datauser}}
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
  </div>
@endsection