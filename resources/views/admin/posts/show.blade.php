@extends('admin.layouts.layout')

@section('wins')
active
@endsection

@section('content')
<section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h4>Show Product</h4>
              <a href="{{ route('posts.index') }}" class="btn btn-primary" style="position:absolute; right:50;">Back</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                        <td>Nomi UZ: </td>
                        <td><b>{{ $post->name_uz }}</b></td>
                    </tr>

                    <tr>
                        <td>Nomi EN: </td>
                        <td><b>{{ $post->name_en }}</b></td>
                    </tr>

                    <tr>
                        <td>Kategoriyasi UZ : </td>
                        <td><b>{{ $post->category->name_uz }}</b></td>
                    </tr>

                    <tr>
                        <td>Ma'lumotlar UZ: </td>
                        <td><b>{!! $post->info_uz !!}</b></td>
                    </tr>

                    <tr>
                        <td>Ma'lumotlar EN: </td>
                        <td><b>{!! $post->info_en !!}</b></td>
                    </tr>

                    <tr>
                        <td>Muallif UZ: </td>
                        <td><b>{{ $post->owner_uz }}</b></td>
                    </tr>

                    <tr>
                        <td>Muallif EN: </td>
                        <td><b>{{ $post->owner_en }}</b></td>
                    </tr>

                    <tr>
                        <td>Rasmi : </td>
                        <td>
                          <img alt="image" src="/images/{{ $post->img }}" width="59">
                        </td>
                    </tr>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
