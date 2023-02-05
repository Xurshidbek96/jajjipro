@extends('layouts.layout')

@section('blogs', 'active')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-primary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">@lang('words.blogs')</h3>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="/">@lang('words.home')</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">@lang('words.blogs')</p>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Blog Start -->
@include('sections.blogs')
<!-- Blog End -->
@endsection
