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
              <a href="{{ route('groups.index') }}" class="btn btn-primary" style="position:absolute; right:50;">Back</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>

                    <tr>
                        <td>Ismi UZ : </td>
                        <td><b>{{ $group->name_uz }}</b></td>
                    </tr>

                    <tr>
                        <td>Ismi En : </td>
                        <td><b>{{ $group->name_en }}</b></td>
                    </tr>

                    <tr>
                        <td>Ta'rif UZ: </td>
                        <td><b>{!! $group->title_uz !!}</b></td>
                    </tr>

                    <tr>
                        <td>Ta'rif En: </td>
                        <td><b>{!! $group->title_en !!}</b></td>
                    </tr>

                    <tr>
                        <td>Yosh : </td>
                        <td><b>{{ $group->age }}</b></td>
                    </tr>

                    <tr>
                        <td>Joylar soni : </td>
                        <td><b>{{ $group->seat }}</b></td>
                    </tr>

                    <tr>
                        <td>Dars vaqti : </td>
                        <td><b>{{ $group->time }}</b></td>
                    </tr>

                    <tr>
                        <td>to'lov : </td>
                        <td><b>{{ $group->payment }}</b></td>
                    </tr>

                    <tr>
                        <td>Rasmi : </td>
                        <td>
                          <img alt="image" src="/images/{{ $group->img }}" width="59">
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
