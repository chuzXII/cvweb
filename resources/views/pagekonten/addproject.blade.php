@extends('layout.master')
@section('konten')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <div class="section-header-back">
            <a class="btn btn-icon" href="/tableproject"> <i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Create New Post</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="/tableproject">Table Project</a></div>
              <div class="breadcrumb-item">Create New Project</div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <div class="row-sm" style="width: 100%;">
                      <div class="col-lg-12">
                        <h4>Add Your Project</h4>
                      </div>
                      <div class="col-lg mt-3">
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
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <Form action="/add" method="POST" enctype="multipart/form-data">
                      @csrf
                    <div class="form-group row mb-3">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="formname">Nama Project</label>
                      <div class="col-sm-12 col-md-7"> 
                        <input type="text" name="namaproject" id="formname" class="form-control" autofocus>
                        @error('namaproject')
                          <div class="alert alert-danger mt-3">{{ $message }}</div>
                        @enderror
                      </div> 
                    </div>
                    <div class="form-group row mb-3">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="exampleFormControlSelect1">Kategori Project</label>
                      <div class="col-sm-12 col-md-7">
                      <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                        <option value="filter-web">Website</option>
                        <option value="filter-appm">App Mobile</option>
                        <option value="filter-appd">App Desktop</option>
                        <option value="filter-other">Other</option>
                      </select>
                      </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="formlink">Link</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" name="link" id="formlink" class="form-control">
                          @error('link')
                            <div class="alert alert-danger mt-3">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                    <div class="form-group row ">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="formdeskripsi">Deskripsi</label>
                      <div class="col-sm-12 col-md-7">
                        <div class="input-group">
                          <textarea class="form-control" name="deskripsi" id="formdeskripsi" aria-label="With textarea" style="height: 100px"></textarea>
                        </div>
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