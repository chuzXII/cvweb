@extends('layout.master')
@section('konten')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
              <a href="/tableproject" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Create New Post</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="/tableuser">Table Project</a></div>
              <div class="breadcrumb-item">Create New Project</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Add Your Project</h4>
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
                    <Form action="/add" method="POST" enctype="multipart/form-data">
                      @csrf
                    <div class="form-group row mb-3">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Project</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" name="namaproject" class="form-control">
                        @error('namaproject')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                        @enderror
                      </div> 
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Link</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" name="link" class="form-control">
                          @error('link')
                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="summernote-simple" name="deskripsi"></textarea>
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
                          <input type="file" name="image" id="image-upload" />
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