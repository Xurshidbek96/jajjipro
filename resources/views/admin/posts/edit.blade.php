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
              <h4>Edit</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name UZ</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name_uz" value="{{ $post->name_uz }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name EN</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="name_en" value="{{ $post->name_en }}">
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Katgoriyasi</label>
                <div class="col-sm-12 col-md-7">
                  <select class="form-control selectric" name="category_id">
                    <option value="{{ $post->category->id }}">{{ $post->category->name_uz }}</option>
                    @foreach ($categories as $item)
                        @if($item->id != $post->category_id)
                            <option value="{{ $item->id }}">{{ $item->name_uz }}</option>
                        @endif
                    @endforeach
                  </select>
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ma'lumotlar uz</label>
                <div class="col-sm-12 col-md-7">
                  <textarea class="summernote" name="info_uz" value="{!! $post->info_uz !!}">{!! $post->info_uz !!}</textarea>
                  @error('info_uz') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ma'lumotlar en</label>
                <div class="col-sm-12 col-md-7">
                  <textarea class="summernote" name="info_en" value="{!! $post->info_en !!}">{!! $post->info_en !!}</textarea>
                  @error('info_en') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Muallif uz</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="owner_uz" value="{{ $post->owner_uz }}">
                   @error('owner_uz') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Muallif En</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="owner_en" value="{{ $post->owner_en }}">
                   @error('owner_en') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rasm</label>
                <div class="col-sm-12 col-md-7">
                  <div id="image-preview" class="image-preview">
                    <label for="image-upload" id="image-label">Rasm tanlang</label>
                    <input type="file" name="img" id="image-upload" />
                  </div>
                  <img alt="image" src="/images/{{ $post->img }}" width="59">
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
