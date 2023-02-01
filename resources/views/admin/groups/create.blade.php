@extends('admin.layouts.layout')

@section('groups')
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
              <h4>Sinf qo'shish</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('groups.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nomi</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                   @error('name') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ta'rif</label>
                <div class="col-sm-12 col-md-7">
                  <textarea class="summernote" name="title" value="{{ old('title') }}">{{ old('title') }}</textarea>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Yosh</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="age" value="{{ old('age') }}">
                  @error('age') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Joylar soni</label>
                <div class="col-sm-12 col-md-7">
                  <input type="number" class="form-control" name="seat" value="{{ old('seat') }}">
                  @error('seat') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Dars vaqti</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="time" value="{{ old('time') }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">To'lov miqdori(so'm)</label>
                <div class="col-sm-12 col-md-7">
                  <input type="number" class="form-control" name="payment" value="{{ old('payment') }}">
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
