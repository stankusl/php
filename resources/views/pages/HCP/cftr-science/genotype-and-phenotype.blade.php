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
                        <img class="img-responsive center-block loading-2 top-img" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/image-1.jpg') }}">
                        <div class="loading-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed libero lectus, sollicitudin eu auctor et, volutpat ac nunc. Etiam tincidunt risus non ipsum porta luctus. In id metus quam. Nulla dictum, lacus quis egestas gravida, sapien velit dapibus sapien, eget finibus ipsum est et mauris. Cras vitae dapibus lorem, id aliquam magna. Nullam velit mauris, efficitur id bibendum a, efficitur eget nulla. Nullam eget finibus massa. Vestibulum pharetra dictum fermentum. Aliquam id ornare tellus, et malesuada felis. Nulla vitae venenatis mauris, in interdum quam. Quisque odio diam, fringilla vitae venenatis non, malesuada sit amet quam. Nullam nec tempus enim. Sed vel euismod lectus. Vestibulum interdum vel leo sit amet volutpat.</p>

                            <p>Donec a tempus mi. Cras fringilla libero nec maximus euismod. Fusce sagittis porta luctus. Proin a libero at massa elementum condimentum et nec eros. Donec eros ipsum, condimentum a massa et, volutpat blandit elit. Etiam nisl nisl, ullamcorper dignissim ante non, ullamcorper accumsan augue. Integer id cursus quam. Fusce volutpat dictum porttitor. Mauris vitae porta purus. Maecenas tincidunt mi ac porttitor vehicula. Integer nibh urna, volutpat ac fermentum id, dapibus id odio.</p>

                            <p>Duis pulvinar sapien felis, eget rutrum augue tristique ac. Aliquam mollis ornare ipsum in accumsan. Donec lorem sem, fermentum vitae tincidunt at, suscipit quis odio. Nullam sed lectus a massa porta bibendum at ut erat. Phasellus euismod erat leo, finibus bibendum felis vestibulum euismod. Praesent condimentum erat sem, sed faucibus nunc mollis eu. Aliquam maximus turpis eu eros interdum feugiat. Vivamus nec odio ut est dapibus dictum. Integer euismod id purus ut molestie. Sed ligula dui, fermentum sed faucibus non, egestas non velit.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container center-block lesser-width">
            <div class="loading-4">
                <h2 style="padding-top: 0">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>

                <hr class="h2-hr"/>
            </div>

            <div class="special-text">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="loading-5">
                            <p>In dignissim elit quis neque tempor, at tincidunt mauris auctor. Nulla rutrum sapien risus, nec finibus mauris bibendum et. Nullam rhoncus mauris tempus mi elementum gravida. Phasellus sodales placerat dolor, vitae varius mauris aliquet eget. Ut in urna vel sapien efficitur ullamcorper. Nulla pellentesque ligula placerat ligula tincidunt convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                            <p>Nam pretium ipsum eget diam porttitor, vitae sagittis lorem sagittis. Curabitur sagittis ex mi, quis vehicula neque feugiat at. Praesent urna libero, congue tempus lorem ac, viverra maximus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut velit ligula, tristique id tincidunt quis, lobortis luctus nunc. Aliquam sagittis nibh et felis gravida fermentum. Aenean pellentesque condimentum eros at tincidunt. Morbi tristique eget dolor at fringilla. Aenean vitae orci orci. Sed dignissim ligula at metus tempus ornare.</p>

                            <p>Vivamus et dignissim nunc. Vestibulum gravida urna quis eros posuere convallis. Sed blandit porta dictum. Curabitur fringilla orci massa. Suspendisse vestibulum sed tortor vel pulvinar. Etiam iaculis, nulla a blandit imperdiet, est magna consectetur erat, vel luctus magna ipsum vitae sem. Integer odio tellus, porta nec rutrum eget, elementum at nulla. Aliquam sit amet mauris et mi scelerisque fermentum nec sit amet est. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus viverra.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content loading-6">
        <div class="lesser-width container">
            @include('partials.newsPostsInsert', [
                'mainClass' => 'hcp',
                'menuLink1' => 'normal-cftr',
                'menuText1' => 'Normal CFTR',
                'menuLink2' => 'cftr-mutations',
                'menuText2' => 'CFTR mutations',
                'menuLink3' => 'scientific-resources',
                'menuText3' => 'Scientific resources'
            ])
        </div>
    </section>
@endsection