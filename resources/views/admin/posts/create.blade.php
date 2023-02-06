@extends('admin.layouts.layout')

@section('posts')
    active
@endsection

@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<section class="section">
    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Post qo'shish</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Post Nomi Uz</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name_uz" value="{{ old('name_uz') }}">
                   @error('name_uz') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Post Nomi En</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name_en" value="{{ old('name_en') }}">
                   @error('name_en') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Katgoriyasi</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="category_id">
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->name_uz }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mazmuni UZ</label>
                <div class="col-sm-12 col-md-7">
                  <textarea class="summernote" name="info_uz" value="{{ old('info_uz') }}">{{ old('info_uz') }}</textarea>
                  @error('info_uz') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mazmuni EN</label>
                <div class="col-sm-12 col-md-7">
                  <textarea class="summernote" name="info_en" value="{{ old('info_en') }}">{{ old('info_en') }}</textarea>
                  @error('info_en') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Muallif Uz</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="owner_uz" value="{{ old('owner_uz') }}">
                   @error('owner_uz') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Muallif En</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="owner_en" value="{{ old('owner_en') }}">
                   @error('owner_en') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rasm</label>
                <div class="col-sm-12 col-md-7">
                  <div id="image-preview" class="image-preview">
                    <label for="image-upload" id="image-label">Rasmni tanlang</label>
                    <input type="file" name="img" id="image-upload" />
                  </div>
                  @error('img') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                  <button class="btn btn-primary">Submit</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

@endsection
