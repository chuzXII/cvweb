@extends('layout.master')
@section('konten')

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>DataTables</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Modules</a></div>
        <div class="breadcrumb-item">DataTables</div>
      </div>
    </div>
    <div class="card">
      
      <div class="card-body">
      <div class="row">
        <div class="col-8">
        <h4>Basic DataTables</h4>
        </div>
        <div class="col-4 text-right">
        <a href="/pageadd" class="btn btn-primary btn-sm">Add Data</a>
        </div>
        
      </div>
      <hr>
      </div>
     
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped" id="table-1">
            <thead>
              <tr>
                <th class="text-center" style="width: 25px;">
                  #
                </th>
                <th style="width: 10px;">Nama Project</th>
                <th>Deskripsi</th>
                <th>Link</th>
                <th style="width: 50px;">Image</th>
                <th style="width: 140px;">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $dat)
              <tr>
                <td>
                  1
                </td>
                <td>{{$dat->nama_project}}</td>
                <td>{{$dat->deskripsi}}</td>
                <td>{{$dat->link}}</td>
                <td>
                  <img alt="image" src="{{asset('img/imgproject')}}/{{$dat->img}}" width="150">
                </td>
                <td><a href="/detailproject/{{$dat->id_project}}" class="btn btn-info btn-sm">Detail</a> <a href="/pageedit/{{$dat->id_project}}" class="btn btn-warning btn-sm">Edit</a> <a href="/delete/{{$dat->id}}" class="btn btn-danger btn-sm">Delete</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection