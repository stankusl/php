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
                        <p class="loading-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vehicula sem libero, eget posuere ex lacinia vitae. Nunc auctor velit odio, a gravida orci faucibus a. Proin vitae neque porttitor neque pulvinar porttitor sed vel arcu. Morbi laoreet mattis risus nec cursus. Donec nec diam enim. Curabitur at mattis purus. Cras iaculis sapien eu mi bibendum commodo. Sed quis convallis mi, eget pellentesque mauris. Aliquam posuere enim vel risus hendrerit, a dictum erat efficitur. Nunc facilisis, nisi nec sollicitudin elementum, orci mauris bibendum dolor, eget mattis odio ex sed sem. Phasellus in ante sit amet arcu cursus commodo. Vivamus congue elementum magna. Sed ullamcorper lectus ligula, vitae finibus nisl varius sed. Aenean euismod convallis tellus, eu porttitor sem malesuada eu.</p>

                        <p class="loading-3">Morbi tempus massa nisi, id faucibus turpis feugiat nec. Vestibulum quis sem ut tortor vulputate vehicula at a nisl. Mauris eu purus eget nisl sollicitudin commodo ut in lacus. Fusce sagittis viverra tellus, quis sodales odio egestas at. Fusce eget eros ex. Aliquam erat volutpat. Phasellus imperdiet consectetur enim vel rutrum. Praesent et dapibus augue. Proin vulputate, leo sed sagittis convallis, nunc nunc pellentesque metus, sed ornare nibh lectus ac ante.</p>

                        <p class="loading-4">Vivamus cursus, arcu dignissim condimentum efficitur, ipsum neque placerat neque, et cursus nunc massa gravida nibh. Sed interdum turpis ante, eget aliquam diam vulputate in. Aliquam aliquet nec turpis id scelerisque. In vel nulla eget tortor finibus mattis. Morbi finibus nisi eget quam tempor, sit amet lacinia lectus gravida. Quisque ultrices risus ac velit dapibus, quis malesuada sapien varius. Etiam porttitor, purus ut auctor lobortis, justo ipsum mollis ex, at sollicitudin nisi est quis sapien. Proin sit amet dictum ligula, vel ullamcorper lorem. Curabitur varius mi eu neque rhoncus, ac rutrum tellus lacinia. Donec hendrerit est lacus, non placerat eros pulvinar facilisis. Ut a orci libero. Sed id est id felis fringilla consectetur.</p>

                        <p class="loading-5">Morbi in turpis eu ante tempor ullamcorper et nec neque. In elementum imperdiet risus, at molestie felis maximus quis. Vestibulum nibh nibh, luctus quis nulla ac, euismod rhoncus tortor. Etiam in mi cursus, pulvinar mauris nec, eleifend ex. Sed ornare feugiat laoreet. Suspendisse et nibh viverra.</p>

                        @include('partials.social-media')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection