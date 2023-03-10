@extends('layouts.layout')

@section('wins', 'active')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">@lang('words.win1')</h3>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="/">@lang('words.home')</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">@lang('words.wins')</p>
        </div>
    </div>
</div>
<!-- Header End -->
<!-- Wins Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">@lang('words.win2')</span></p>
            <h1 class="mb-4">@lang('words.win3')</h1>
        </div>
        <div class="row pb-3">
            @foreach($wins as $item)
            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm mb-2">
                    <img class="card-img-top mb-2" src="/images/{{ $item['img'] }}" alt="">
                    <div class="card-body bg-light text-center p-4">
                        <h4 class="">{{ $item['name_'. \App::getLocale()] }}</h4>
                        <div class="d-flex justify-content-center mb-3">
                            <!-- <small class="mr-3"><i class="fa fa-user text-primary"></i> Komiljanova Nargiza</small> -->
                            <!-- <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small> -->
                            <!-- <small class="mr-3"><i class="fa fa-eye text-primary"></i> 15</small> -->
                        </div>
                        <p>{!! $item['title_'. \App::getLocale()] !!}</p>
                        <!-- <a href="" class="btn btn-primary px-4 mx-auto my-2">Batafsil</a> -->
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-md-12 mb-4">
                <nav aria-label="Page navigation">
                 {{ $wins->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Wins End -->

@endsection
