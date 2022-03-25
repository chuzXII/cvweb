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
      @if (session('b'))
        <div class="alert alert-success alert-dismissible show fade" style="height:50px">
          <div class="alert-body">
            <button class="close" data-dismiss="alert">
              <span>&times;</span>
            </button>
            <p>{{ session('b') }}</p>  
          </div>
        </div>
      @endif
      @if (session('g'))
        <div class="alert alert-success alert-dismissible show fade" style="height:50px">
          <div class="alert-body">
            <button class="close" data-dismiss="alert">
              <span>&times;</span>
            </button>
            <p>{{ session('g') }}</p>  
          </div>
        </div>
      @endif
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
                <th>Kategori</th>
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
                <td> @if($dat->kategori == "filter-web")
                    Website
                    @elseif($dat->kategori == "filter-appm")
                    App Mobile
                    @elseif($dat->kategori == "filter-appd")
                    App Desktop
                    @elseif($dat->kategori == "filter-other")
                    Other
                    @endif</td>
                <td>{{$dat->deskripsi}}</td>
                <td>{{$dat->link}}</td>
                <td>
                  <img class="p-2" alt="image" src="{{asset('img/imgproject')}}/{{$dat->img}}" width="100">
                </td>
                <td>
                  <a href="/detailproject/{{$dat->id_project}}" class="btn btn-info btn-sm">Detail</a>
                  <a href="/pageedit/{{$dat->id_project}}" class="btn btn-warning btn-sm">Edit</a>
                  <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">Delete</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>
@foreach ($data as $dat)
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DELETE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Delete Project?
      </div>
      <div class="modal-footer bg-whitesmoke ">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="/deleteproject/{{$dat->id_project}}"  class="btn btn-danger">YA</a>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection