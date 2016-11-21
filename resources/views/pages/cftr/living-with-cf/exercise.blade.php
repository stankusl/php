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
                        <p class="loading-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur finibus, velit ac consequat consectetur, libero nulla dictum tortor, vel porttitor massa justo ut odio. Donec sagittis lacus vitae laoreet dictum. Nunc ipsum libero, sagittis vitae porttitor ut, pulvinar eu quam. Ut pharetra velit quis massa dictum, vel venenatis nulla porta. Morbi ac ligula fringilla, aliquet leo ut, fringilla quam. Ut eleifend commodo metus, ultrices tincidunt est feugiat vitae. Maecenas feugiat sit amet orci vitae facilisis. Vivamus consectetur egestas lorem vel varius. Praesent nec dui sit amet tellus dapibus congue et ut ipsum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur sagittis rhoncus massa vulputate iaculis. Etiam at massa eget erat vulputate posuere eget sed nisi. Cras lobortis a risus id ultricies. Ut vitae pellentesque justo.</p>

                        <p class="loading-3">Vestibulum vel mauris eget purus vestibulum efficitur. Vestibulum porta nisi vel nibh congue, pharetra scelerisque dolor aliquam. Nam euismod egestas mi sit amet ullamcorper. Curabitur eu dignissim libero, eu feugiat nibh. Nunc posuere commodo porttitor. In lacinia magna sed turpis ullamcorper, in bibendum eros dapibus. Vivamus semper porta ante a malesuada. Nam et venenatis nulla, in tempor ex. Praesent lobortis venenatis nisi, eu pretium orci porttitor posuere. Etiam pretium massa elit, eget.</p>

                        @include('partials.social-media')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection