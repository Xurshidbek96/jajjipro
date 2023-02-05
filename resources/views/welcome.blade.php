@extends('layouts.layout')

@section('home', 'active')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-primary px-0 px-md-5 mb-5">
    <div class="row align-items-center px-3">
        <div class="col-lg-6 text-center text-lg-left">
            <h4 class="text-white mb-4 mt-5 mt-lg-0">Shavkat Mirziyoyev:</h4>
            <h1 class="display-3 font-weight-bold text-white">"@lang('welcome.header')"</h1>
            <!-- <p class="text-white mb-4">Sea ipsum kasd eirmod kasd magna, est sea et diam ipsum est amet sed sit.
                Ipsum dolor no justo dolor et, lorem ut dolor erat dolore sed ipsum at ipsum nonumy amet. Clita
                lorem dolore sed stet et est justo dolore.</p> -->
            <!-- <a href="" class="btn btn-secondary mt-1 py-3 px-5">Ko'proq ma'lumot olish</a> -->
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <img class="img-fluid mt-5" src="/assets/img/header.png" alt="">
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Facilities Start -->
@include('sections.infos')
<!-- Facilities Start -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid rounded mb-5 mb-lg-0" src="/assets/img/about-1.jpg" alt="">
            </div>
            <div class="col-lg-7">
                <p class="section-title pr-5"><span class="pr-2">@lang('welcome.last_article')</span></p>
                <h1 class="mb-4">@lang('welcome.title')</h1>
                <p>@lang('welcome.info')</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Class Start -->
@include('sections.groups')
<!-- Class End -->


<!-- Registration Start -->
@include('sections.register')
<!-- Registration End -->


<!-- Team Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Bizning o'qituvchilarimiz</span></p>
            <h1 class="mb-4">O'qituvchilarimiz bilan tanishing</h1>
        </div>
        @include('sections.teachers')
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
@include('sections.comments')
<!-- Testimonial End -->


<!-- Blog Start -->
@include('sections.blogs')
<!-- Blog End -->

@endsection
