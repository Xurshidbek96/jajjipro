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
              <a href="{{ route('wins.index') }}" class="btn btn-primary" style="position:absolute; right:50;">Back</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                        <td>Ismi : </td>
                        <td><b>{{ $win->name }}</b></td>
                    </tr>

                    <tr>
                        <td>Ta'rif : </td>
                        <td><b>{!! $win->title !!}</b></td>
                    </tr>

                    <tr>
                        <td>Rasmi : </td>
                        <td>
                          <img alt="image" src="/images/{{ $win->img }}" width="59">
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
