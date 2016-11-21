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
                <div class="row loading-2">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <img class="img-responsive center-block" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/image-2.png') }}">
                                </div>

                                <div class="col-sm-6" style="padding-right: 30px">
                                    <p>Proin sed sapien non sapien vehicula congue. Integer id elit quis ipsum malesuada varius vel quis tellus. Ut a ipsum ex. Nulla at felis ac tortor blandit faucibus. Ut posuere, velit at commodo accumsan, est massa efficitur augue, et egestas sapien nisi pharetra lacus. Proin justo leo, mollis non fringilla ut, feugiat ac nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row loading-3">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                            <div class="row">
                                <div class="col-sm-6" style="padding-left: 30px">
                                    <p>Proin sed sapien non sapien vehicula congue. Integer id elit quis ipsum malesuada varius vel quis tellus. Ut a ipsum ex. Nulla at felis ac tortor blandit faucibus. Ut posuere, velit at commodo accumsan, est massa efficitur augue, et egestas sapien nisi pharetra lacus. Proin justo leo, mollis non fringilla ut, feugiat ac nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate.</p>
                                </div>

                                <div class="col-sm-6">
                                    <img class="img-responsive center-block" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/image-2.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row loading-4">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <img class="img-responsive center-block" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/image-2.png') }}">
                                </div>

                                <div class="col-sm-6" style="padding-right: 30px">
                                    <p>Proin sed sapien non sapien vehicula congue. Integer id elit quis ipsum malesuada varius vel quis tellus. Ut a ipsum ex. Nulla at felis ac tortor blandit faucibus. Ut posuere, velit at commodo accumsan, est massa efficitur augue, et egestas sapien nisi pharetra lacus. Proin justo leo, mollis non fringilla ut, feugiat ac nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row loading-5">
                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                            <div class="row">
                                <div class="col-sm-6" style="padding-left: 30px">
                                    <p>Proin sed sapien non sapien vehicula congue. Integer id elit quis ipsum malesuada varius vel quis tellus. Ut a ipsum ex. Nulla at felis ac tortor blandit faucibus. Ut posuere, velit at commodo accumsan, est massa efficitur augue, et egestas sapien nisi pharetra lacus. Proin justo leo, mollis non fringilla ut, feugiat ac nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate.</p>
                                </div>
                                <div class="col-sm-6">
                                    <img class="img-responsive center-block" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/image-2.png') }}">
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