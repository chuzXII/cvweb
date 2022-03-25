@extends('layout.master')
@section('konten')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a class="btn btn-icon" href="/tableproject"> <i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit Project</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="/tableproject">Table Project</a></div>
              <div class="breadcrumb-item">Edit Project</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Your Project</h4>
                  </div>
                  <div class="card-body">
                    @if (session('gagal'))
                    <div class="alert alert-danger mt-1">
                        {{ session('gagal') }}
                    </div>
                    @if (session('berhasil'))
                    <div class="alert alert-sucsess mt-1">
                        {{ session('berhasil') }}
                    </div>
                @endif
                @endif
                    <Form action="/updateproject/{{$data->id_project}}" method="POST" enctype="multipart/form-data">
                      @csrf
                    <div class="form-group row mb-3">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Project</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="namaproject" value="{{$data->nama_project}}" class="form-control">
                        @error('namaproject')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                        @enderror
                      </div> 
                    </div>
                    <div class="form-group row mb-3">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="exampleFormControlSelect1">Kategori Project</label>
                      <div class="col-sm-12 col-md-7">
                      <select class="form-control" id="exampleFormControlSelect1" name="kategori" >
                        <option value="filter-website" {{($data->kategori) == 'filter-web' ? 'selected="selected"' : '' }} >Website</option>
                        <option value="filter-appm" {{($data->kategori) == 'filter-appm' ? 'selected="selected"' : '' }} >App Mobile</option>
                        <option value="filter-appd"{{($data->kategori) == 'filter-appd' ? 'selected="selected"' : '' }} >App Desktop</option>
                        <option value="filter-other" {{($data->kategori) == 'filter-other' ? 'selected="selected"' : '' }} >Other</option>
                      </select>
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Link</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" name="link" class="form-control" value="{{$data->link}}">
                          @error('link')
                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="summernote-simple" name="deskripsi">{{$data->deskripsi}}</textarea>
                        @error('deskripsi')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                      @enderror
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image Project</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                          <label for="image-upload" id="image-label">Choose File</label>
                          <input type="file" name="image" id="image-upload" value="{{old('img')}}">
                        </div>
                        @error('image')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Create Post</button>
                      </div>
                    </div>
                </Form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection