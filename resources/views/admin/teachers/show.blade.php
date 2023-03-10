@extends('admin.layouts.layout')

@section('teachers')
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
              <a href="{{ route('teachers.index') }}" class="btn btn-primary" style="position:absolute; right:50;">Back</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>

                    <tr>
                        <td>Ismi Uz : </td>
                        <td><b>{{ $teacher->name_uz }}</b></td>
                    </tr>

                    <tr>
                        <td>Ismi En : </td>
                        <td><b>{{ $teacher->name_en }}</b></td>
                    </tr>

                    <tr>
                        <td>Kasbi Uz : </td>
                        <td><b>{{ $teacher->profession_uz }}</b></td>
                    </tr>

                    <tr>
                        <td>Kasbi En : </td>
                        <td><b>{{ $teacher->profession_en }}</b></td>
                    </tr>

                    <tr>
                        <td>Tg Link : </td>
                        <td><b>{{ $teacher->tg_link }}</b></td>
                    </tr>

                    <tr>
                        <td>Status : </td>
                        <td><b>@if($teacher->status == 1){{ 'Rahbariyat' }}
                            @else{{ 'O`qituvchi' }}@endif</b></td>
                    </tr>

                    <tr>
                        <td>Rasmi : </td>
                        <td>
                          <img alt="image" src="/images/{{ $teacher->img }}" width="59">
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
