@extends('admin.layouts.layout')

@section('wins')
active
@endsection

@section('content')
<section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">
            @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
            @endif
          <div class="card">
            <div class="card-header">
              <h4>O'qituvchilar</h4>
              <a href="{{ route('wins.create') }}" class="btn btn-primary" style="position:absolute; right:50;">Create</a>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        #
                      </th>
                      <th>Yutuq nomi</th>
                      <th>Ta'rif</th>
                      <th>Rasm</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if (count($wins) == 0)
					    <tr>
					        <td colspan="5" class="h5 text-center text-muted">Ma'lumot qo'shilmagan</td>
					    </tr>
					@endif

                    @foreach($wins as $item)
                      <tr>
                        <td>
                          {{ ++$loop->index }}
                        </td>
                        <td>{!! $item->title !!}</td>
                        <td>
                          <img alt="image" src="/images/{{ $item->img }}" width="59">
                        </td>

                        <td>
                            <form action="{{ route('wins.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            <a href="{{ route('wins.show', $item->id) }}" class="btn btn-info"><ion-icon class="fas fa-info-circle"></ion-icon></a>
                            <a href="{{ route('wins.edit', $item->id) }}" class="btn btn-primary"><ion-icon class="far fa-edit"></ion-icon></a>
                            <button class="btn btn-danger" onclick="return confirm('Rostdan o`chirmoqchimisiz ?')"><ion-icon class="fas fa-times"></ion-icon></button>
                            </form>
                        </td>

                      </tr>
                    @endforeach

                  </tbody>
                </table>
                {{ $wins->links('vendor.pagination.bootstrap-5') }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
