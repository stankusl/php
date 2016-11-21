@extends('layouts.main')

@section('content')
    <section class="header-image" style="background: url('../img/{{$pageClass}}/sitemap/header-img.png') no-repeat 50%;background-size: cover; ">
        <div class="container">
            <h1 class="page-title col-lg-6 col-xs-12 col-sm-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
        </div>
    </section>

    @include('partials.sitemap-content')
@endsection