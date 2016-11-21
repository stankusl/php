@extends('layouts.main')

@section('content')
    <section class="header-image" style="background: url('{{ url() }}/img/{{$pageClass}}/header-img.png') no-repeat 50%;background-size: cover; ">
        <div class="container">
            <h1 class="page-title col-lg-6 col-xs-12 col-sm-12">{!! $content['title'] !!}</h1>
        </div>
    </section>

    <section class="content">
        <div class="container center-block lesser-width">
            <div class="loading-1">
                <h2>{!! $content['title'] !!}</h2>

                <hr class="h2-hr"/>
            </div>

            <div class="special-text">
                <div class="row">
                    <div class="col-lg-12">
                        {!! $content['mainText'] !!}
                        @include('partials.social-media')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection