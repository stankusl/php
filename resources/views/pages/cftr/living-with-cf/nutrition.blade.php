@extends('layouts.main')

@section('content')
    <section class="header-image" style="background: url('../../img/{{$pageClass}}/header-img.png') no-repeat 50%;background-size: cover; ">
        <div class="container">
            <h1 class="page-title col-lg-6 col-xs-12 col-sm-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
        </div>
    </section>

    <section class="content">
        <div class="container center-block lesser-width">
            <div class="loading-1">
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>

                <hr class="h2-hr"/>
            </div>

            <div class="special-text">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row loading-2">
                            <div class="col-lg-12">
                                <div class="nutrition-box">

                                    <div class="box-menus box-menu-1 active" data-menu="box-content-1">Lorem</div>
                                    <div class="box-menus box-menu-2" data-menu="box-content-2">Lorem</div>
                                    <div class="box-menus box-menu-3" data-menu="box-content-3">Lorem</div>
                                    <div class="box-menus box-menu-4" data-menu="box-content-4">Lorem</div>

                                    <div class="row box-contents box-content-1">
                                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                                        <div class="col-sm-6">
                                            <ul>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                            </ul>
                                        </div>

                                        <div class="col-sm-6">
                                            <img class="loading-3 img-responsive center-block" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/image-1.jpg') }}">
                                        </div>
                                    </div>

                                    <div class="row box-contents box-content-2">
                                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                                        <div class="col-sm-6">
                                            <ul>
                                                <li>Lorem ipsum2</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                            </ul>
                                        </div>

                                        <div class="col-sm-6">
                                            <img class="loading-3 img-responsive center-block" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/image-1.jpg') }}">
                                        </div>
                                    </div>

                                    <div class="row box-contents box-content-3">
                                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                                        <div class="col-sm-6">
                                            <ul>
                                                <li>Lorem ipsum3</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                            </ul>
                                        </div>

                                        <div class="col-sm-6">
                                            <img class="loading-3 img-responsive center-block" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/image-1.jpg') }}">
                                        </div>
                                    </div>

                                    <div class="row box-contents box-content-4">
                                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                                        <div class="col-sm-6">
                                            <ul>
                                                <li>Lorem ipsum4</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                                <li>Lorem ipsum</li>
                                            </ul>
                                        </div>

                                        <div class="col-sm-6">
                                            <img class="loading-3 img-responsive center-block" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/image-1.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @include('partials.social-media')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection