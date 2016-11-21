@extends('layouts.main')

@section('content')
    <section class="header-image" style="background: url('../../img/{{$pageClass}}/header-img.png') no-repeat 50%;background-size: cover; ">
        <div class="container">
            <h1 class="page-title col-lg-6 col-xs-12 col-sm-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
        </div>
    </section>

    <section class="content">
        <div class="container center-block lesser-width">
            <div class="special-text">
                <div class="row loading-1">
                    <div class="col-lg-12">
                        <div class="link-area">
                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt, massa ut mattis posuere, leo velit rhoncus elit, a sagittis mi neque sed mauris. Vestibulum eget mi sit amet mauris porta imperdiet. Fusce non luctus risus, vitae tincidunt felis. Cras vitae fringilla elit. Pellentesque dignissim lacus tellus, eu congue nibh sollicitudin lacinia. Suspendisse at feugiat nulla. Donec tempor cursus ex sit amet porta.</p>

                            <p class="link"><a href="#" target="_blank">www.website.com</a></p>

                            @include('partials.social-media')
                        </div>
                    </div>
                </div>

                <div class="row loading-2">
                    <div class="col-lg-12">
                        <div class="link-area">
                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt, massa ut mattis posuere, leo velit rhoncus elit, a sagittis mi neque sed mauris. Vestibulum eget mi sit amet mauris porta imperdiet. Fusce non luctus risus, vitae tincidunt felis. Cras vitae fringilla elit. Pellentesque dignissim lacus tellus, eu congue nibh sollicitudin lacinia. Suspendisse at feugiat nulla. Donec tempor cursus ex sit amet porta.</p>

                            <p class="link"><a href="#" target="_blank">www.website.com</a></p>

                            @include('partials.social-media')
                        </div>
                    </div>
                </div>

                <div class="row loading-3">
                    <div class="col-lg-12">
                        <div class="link-area">
                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt, massa ut mattis posuere, leo velit rhoncus elit, a sagittis mi neque sed mauris. Vestibulum eget mi sit amet mauris porta imperdiet. Fusce non luctus risus, vitae tincidunt felis. Cras vitae fringilla elit. Pellentesque dignissim lacus tellus, eu congue nibh sollicitudin lacinia. Suspendisse at feugiat nulla. Donec tempor cursus ex sit amet porta.</p>

                            <p class="link"><a href="#" target="_blank">www.website.com</a></p>

                            @include('partials.social-media')
                        </div>
                    </div>
                </div>

                <div class="row loading-4" style="margin-bottom: 40px">
                    <div class="col-lg-12">
                        <div class="link-area">
                            <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tincidunt, massa ut mattis posuere, leo velit rhoncus elit, a sagittis mi neque sed mauris. Vestibulum eget mi sit amet mauris porta imperdiet. Fusce non luctus risus, vitae tincidunt felis. Cras vitae fringilla elit. Pellentesque dignissim lacus tellus, eu congue nibh sollicitudin lacinia. Suspendisse at feugiat nulla. Donec tempor cursus ex sit amet porta.</p>

                            <p class="link"><a href="#" target="_blank">www.website.com</a></p>

                            @include('partials.social-media')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection