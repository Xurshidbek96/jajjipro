@extends('admin.layouts.layout')

@section('teachers')
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
              <h4>Edit</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ismi UZ</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name_uz" value="{{ $teacher->name_uz }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ismi EN</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name_en" value="{{ $teacher->name_en }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kasbi UZ</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="profession_uz" value="{{ $teacher->profession_uz }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kasbi En</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="profession_en" value="{{ $teacher->profession_en }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tg Link</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="tg_link" value="{{ $teacher->tg_link }}">
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="status">
                    <option value="{{ $teacher->status }}">
                        @if($teacher->status == 1)
                            Rahbariyat
                            </option>
                        <option value="0">Oddiy</option>
                        @else
                            Oddiy
                            </option>
                            <option value="1">Rahbariyat</option>
                        @endif
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rasm</label>
                <div class="col-sm-12 col-md-7">
                  <div id="image-preview" class="image-preview">
                    <label for="image-upload" id="image-label">Choose File</label>
                    <input type="file" name="img" value="{{ $teacher->img }}" id="image-upload" />
                  </div>
                  <img alt="image" src="/images/{{ $teacher->img }}" width="59">
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
