@extends('admin.layouts.layout')

@section('comments')
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
              <h4>Comment add</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('comments.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ismi Uz</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name_uz" value="{{ old('name_uz') }}">
                  @error('name_uz') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name En</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name_en" value="{{ old('name_en') }}">
                  @error('name_en') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kasbi uz</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="profession_uz" value="{{ old('profession_uz') }}">
                  @error('profession_uz') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Profession En</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="profession_en" value="{{ old('profession_en') }}">
                  @error('profession_en') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Izoh Uz</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="title_uz" value="{{ old('title_uz') }}">
                  @error('title_uz') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Izoh Uz</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="title_en" value="{{ old('title_en') }}">
                  @error('title_en') <div class="alert alert-danger">{{ $message }}</div> @enderror
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
