@extends('layouts.layout')

@section('wins', 'active')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">Bizni yutuqlarimiz</h3>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="/">Bosh sahifa</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Yutuqlar</p>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Wins Start -->
    @include('sections.wins')
<!-- Wins End -->
@endsection
