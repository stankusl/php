@extends('layouts.main')

@section('content')
    <section class="header-image">
        <div class="container">
            <h1 class="page-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
        </div>
    </section>

    <section class="content">
        <div class="container">

            <h2 class="loading-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>

            <div class="special-text" style="margin-bottom: 0 !important;">
                <div class="row loading-2">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p>
                            Lorem ipsum dolor sit amet, pellentesque neque erat vivamus morbi eu facilisis, cras mauris integer, etiam odio urna pharetra ornare tortor. Sit integer dui pharetra non eleifend erat, cursus ligula justo tortor, suscipit elit a mus, pede conubia curabitur aliquam in fusce fermentum. Fusce rhoncus libero odio, velit wisi arcu scelerisque, mattis ullamcorper habitant euismod, laoreet lacus lacinia. Ipsum tristique, ac tortor, quam tincidunt elit amet ridiculus in ac.
                        </p>

                        <div class="hover-effect">
                            <a href="#">
                                <div class="img-overlay">
                                    <div class="text-overlay">
                                        <h3>Genotype and phenotype</h3>
                                        <span>Find out more</span>
                                    </div>

                                    <img class="img-responsive" src="{{ asset('img/'.$pageClass.'/content-pic-1.png') }}"/>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <p>
                            Lorem ipsum dolor sit amet, pellentesque neque erat vivamus morbi eu facilisis, cras mauris integer, etiam odio urna pharetra ornare tortor. Sit integer dui pharetra non eleifend erat, cursus ligula justo tortor, suscipit elit a mus, pede conubia curabitur aliquam in fusce fermentum. Fusce rhoncus libero odio, velit wisi arcu scelerisque, mattis ullamcorper habitant euismod, laoreet lacus lacinia. Ipsum tristique, ac tortor, quam tincidunt elit amet ridiculus in ac.
                        </p>
                        <div class="hover-effect">
                            <a href="#">
                                <div class="img-overlay">
                                    <div class="text-overlay">
                                        <h3>Genotype and phenotype</h3>
                                        <span>Find out more</span>
                                    </div>

                                    <img class="img-responsive" src="{{ asset('img/'.$pageClass.'/content-pic-2.png') }}"/>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row loading-3">
                    <div class="col-lg-12 col-xs-12">
                        <p class="text-center center-block text-contain" style="margin-bottom: 60px">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id nibh mi. Cras vehicula nisi a purus blandit porttitor. Nam sagittis imperdiet purus vel auctor. Donec lacus turpis, laoreet eu mi bibendum, blandit facilisis est. Etiam ut tempor justo. Aenean odio mauris, rhoncus vulputate ullamcorper sit amet, volutpat ut magna. Etiam nisl lorem, condimentum at leo pretium, volutpat varius nisl. Etiam elementum rutrum tellus at scelerisque. Integer pulvinar posuere molestie. Nulla facilisi. Praesent malesuada ante non odio posuere lobortis. Suspendisse potenti. Mauris in justo eleifend metus eleifend viverra. Nullam ac odio tristique nisi scelerisque finibus. Maecenas convallis faucibus imperdiet. Mauris vitae risus porttitor, egestas enim in, mattis eros.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--<section class="parallax-insert loading-4" data-stellar-background-ratio="1"></section>--}}

    <div class="hidden-xs" id="home-video-holder">
        <section class="video-holder col-xs-12">
            <img src="{{ asset('img/spacer.gif') }}" class="video-spacer img-responsive" ondragstart="return false;">
            <div id="home-video">
                <video class="video" autoplay="autoplay" loop="loop" muted="muted" preload="auto">
                    <source src="{{ asset('video/video-home.mp4') }}" type="video/mp4">
                    <source src="{{ asset('video/video-home.ogv') }}" type="video/ogg">
                    <source src="{{ asset('video/video-home.webm') }}" type="video/webm">
                </video>
            </div>

            <div class="overlay">
            </div>
            <div class="button">
                <div class="video-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </div>
            </div>
        </section>
    </div>

    <section class="content2">
        <div class="container">
            <div class="row loading-5">
                <div class="col-lg-12">
                    <h2 class="bottom-h2">Frequently Asked Questions</h2>
                </div>
            </div>
            
            <div class="row text-bottom loading-5">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <p>Lorem ipsum dolor sit amet, pellentesque neque erat vivamus morbi eu facilisis, cras mauris integer, etiam odio urna pharetra ornare tortor. Sit integer dui pharetra non eleifend erat, cursus ligula justo tortor, suscipit elit a mus, pede conubia curabitur aliquam in fusce fermentum. Fusce rhoncus libero odio, velit wisi arcu scelerisque, mattis ullamcorper habitant euismod, laoreet lacus lacinia. Ipsum tristique, ac tortor, quam tincidunt elit amet ridiculus in ac.</p>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <p>Magna metus, aliquet felis nam risus tempor, nec per suscipit sagittis, nibh mauris vivamus egestas wisi sed aliquam. Pretium augue leo amet vitae, facilisi scelerisque cras risus class eros nec, pellentesque interdum sed sem commodo porttitor sem, ut vestibulum libero mollis, morbi suspendisse. Nulla voluptate neque, lectus facilisis nec elit, ante wisi lectus accumsan scelerisque.</p>
                </div>
            </div>

            <div class="row news-posts-insert loading-6">
                <div class="col-sm-4 col-xs-12 news-item text-center">
                    <div class="animated-wave">
                        <a href="{{ url($pageClass) }}/cftr-mutations">
                            <img class="img-responsive news-thumbnail" src="{{ asset('img/'.$pageClass.'/news-pic-1.png') }}" alt="News Article Example 1"/>
                            <div class="blog-infos">
                                <h3>CFTR mutations</h3>
                                <span>Find out more</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12 news-item text-center">
                    <div class="animated-wave">
                        <a href="{{ url($pageClass) }}/genotype-and-phenotype">
                            <img class="img-responsive news-thumbnail" src="{{ asset('img/'.$pageClass.'/news-pic-2.png') }}" alt="News Article Example 1"/>
                            <div class="blog-infos">
                                <h3>Genotype and phenotype</h3>
                                <span>Find out more</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 col-xs-12 news-item text-center">
                    <div class="animated-wave">
                        <a href="{{ url($pageClass) }}/scientific-resources">
                            <img class="img-responsive news-thumbnail" src="{{ asset('img/'.$pageClass.'/news-pic-3.png') }}" alt="News Article Example 1"/>
                            <div class="blog-infos">
                                <h3>Scientific resources</h3>
                                <span>Find out more</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection