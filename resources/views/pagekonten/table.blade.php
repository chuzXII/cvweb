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
        <a href="#" class="btn btn-primary btn-sm">Add Data</a>
        </div>
        
      </div>
      <hr>
      </div>
     
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped" id="table-1">
            <thead>
              <tr>
                <th class="text-center">
                  #
                </th>
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $dat)
              <tr>
                <td>
                  1
                </td>
                <td>{{$dat->name}}</td>
                <td>{{$dat->email}}</td>
                <td>
                  <img alt="image" src="{{asset('img/imgprofile')}}/{{$dat->img}}" class="rounded-circle" width="50">
                </td>
                <td>{{$dat->created_at}}</td>
                <td>{{$dat->updated_at}}</td>
                <td><a href="/detail/{{$dat->id}}" class="btn btn-info btn-sm">Detail</a> <a href="/delete/{{$dat->id}}" class="btn btn-danger btn-sm">Delete</a></td>
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