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
              <h4>Edit</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('comments.update', $comment->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ismi UZ</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name_uz" value="{{ $comment->name_uz }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ismi EN</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name_en" value="{{ $comment->name_en }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kasbi UZ</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="profession_uz" value="{{ $comment->profession_uz }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kasbi En</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="profession_en" value="{{ $comment->profession_en }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Izoh UZ</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="title_uz" value="{{ $comment->title_uz }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Izoh EN</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="title_en" value="{{ $comment->title_en }}">
                </div>
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
