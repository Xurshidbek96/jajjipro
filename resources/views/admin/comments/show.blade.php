@extends('admin.layouts.layout')

@section('comments')
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
              <a href="{{ route('comments.index') }}" class="btn btn-primary" style="position:absolute; right:50;">Back</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>

                    <tr>
                        <td>Ismi Uz : </td>
                        <td><b>{{ $comment->name_uz }}</b></td>
                    </tr>

                    <tr>
                        <td>Ismi En : </td>
                        <td><b>{{ $comment->name_en }}</b></td>
                    </tr>

                    <tr>
                        <td>Kasbi Uz : </td>
                        <td><b>{{ $comment->profession_uz }}</b></td>
                    </tr>

                    <tr>
                        <td>Kasbi En : </td>
                        <td><b>{{ $comment->profession_en }}</b></td>
                    </tr>

                    <tr>
                        <td>Izoh Uz : </td>
                        <td><b>{{ $comment->title_uz }}</b></td>
                    </tr>

                    <tr>
                        <td>Izoh En : </td>
                        <td><b>{{ $comment->title_uz }}</b></td>
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
