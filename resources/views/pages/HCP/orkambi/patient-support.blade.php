@extends('layouts.main')

@section('content')
    <section class="header-image orkambi-header">
        <div class="container">
            <h1 class="page-title col-lg-6 col-xs-12 col-sm-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
            <div class="orkambi-logo">
                <img class="" src="{{ asset('img/orkambi/logo-orkambi.png') }}" alt="orkambi Logo"/>
            </div>
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
                        <p>Proin sed sapien non sapien vehicula congue. Integer id elit quis ipsum malesuada varius vel quis tellus. Ut a ipsum ex. Nulla at felis ac tortor blandit faucibus. Ut posuere, velit at commodo accumsan, est massa efficitur augue, et egestas sapien nisi pharetra lacus. Proin justo leo, mollis non fringilla ut, feugiat ac nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate.</p>
                    </div>
                </div>

                <div class="downloads" style="padding-top: 0; padding-bottom: 20px;">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="media resource-container">
                                <div class="media-left media-middle">
                                    <img class="media-object icon" src="{{ asset('img/icons/pdf.png') }}">
                                    <div class="icon-abs">
                                        <img src="{{ asset('img/icons/pdf.png') }}">
                                        <a href="#">Download</a>
                                    </div>
                                </div>
                                <div class="media-body media-middle">
                                    <p>Proin sed sapien non sapien vehicula congue. Integer id elit quis ipsum malesuada varius vel quis tellus. Ut a ipsum ex. Nulla at felis ac tortor blandit faucibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="media resource-container">
                                <div class="media-left media-middle">
                                    <img class="media-object icon" src="{{ asset('img/icons/pdf.png') }}">
                                    <div class="icon-abs">
                                        <img src="{{ asset('img/icons/pdf.png') }}">
                                        <a href="#">Download</a>
                                    </div>
                                </div>
                                <div class="media-body media-middle">
                                    <p>Proin sed sapien non sapien vehicula congue. Integer id elit quis ipsum malesuada varius vel quis tellus. Ut a ipsum ex. Nulla at felis ac tortor blandit faucibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="media resource-container">
                                <div class="media-left media-middle">
                                    <img class="media-object icon" src="{{ asset('img/icons/pdf.png') }}">
                                    <div class="icon-abs">
                                        <img src="{{ asset('img/icons/pdf.png') }}">
                                        <a href="#">Download</a>
                                    </div>
                                </div>
                                <div class="media-body media-middle">
                                    <p>Proin sed sapien non sapien vehicula congue. Integer id elit quis ipsum malesuada varius vel quis tellus. Ut a ipsum ex. Nulla at felis ac tortor blandit faucibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="media resource-container">
                                <div class="media-left media-middle">
                                    <img class="media-object icon" src="{{ asset('img/icons/pdf.png') }}">
                                    <div class="icon-abs">
                                        <img src="{{ asset('img/icons/doc.png') }}">
                                        <a href="#">Download</a>
                                    </div>
                                </div>
                                <div class="media-body media-middle">
                                    <p>Proin sed sapien non sapien vehicula congue. Integer id elit quis ipsum malesuada varius vel quis tellus. Ut a ipsum ex. Nulla at felis ac tortor blandit faucibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="media resource-container">
                                <div class="media-left media-middle">
                                    <img class="media-object icon" src="{{ asset('img/icons/pdf.png') }}">
                                    <div class="icon-abs">
                                        <img src="{{ asset('img/icons/pp.png') }}">
                                        <a href="#">Download</a>
                                    </div>
                                </div>
                                <div class="media-body media-middle">
                                    <p>Proin sed sapien non sapien vehicula congue. Integer id elit quis ipsum malesuada varius vel quis tellus. Ut a ipsum ex. Nulla at felis ac tortor blandit faucibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="media resource-container">
                                <div class="media-left media-middle">
                                    <img class="media-object icon" src="{{ asset('img/icons/pdf.png') }}">
                                    <div class="icon-abs">
                                        <img src="{{ asset('img/icons/xls.png') }}">
                                        <a href="#">Download</a>
                                    </div>
                                </div>
                                <div class="media-body media-middle">
                                    <p>Proin sed sapien non sapien vehicula congue. Integer id elit quis ipsum malesuada varius vel quis tellus. Ut a ipsum ex. Nulla at felis ac tortor blandit faucibus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content loading-4">
        <div class="lesser-width container">
            @include('partials.newsPostsInsert', [
                'mainClass' => 'hcp',
                'menuLink1' => 'what-is-orkambi',
                'menuText1' => 'What is Orkambi',
                'menuLink2' => 'who-is-eligible',
                'menuText2' => 'Who is eligible',
                'menuLink3' => 'how-does-it-work',
                'menuText3' => 'How does it work',
                'menuLink4' => 'clinical-data',
                'menuText4' => 'Clinical data',
                'menuLink5' => 'administration',
                'menuText5' => 'Administration'
            ])
        </div>
    </section>
@endsection