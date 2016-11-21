@extends('layouts.main')

@section('content')

<section class="header-image kalydeco-header">
    <div class="container">
        <h1 class="page-title col-lg-6 col-xs-12 col-sm-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
        <div class="kalydeco-logo">
            <img class="" src="{{ asset('img/kalydeco/kalydeco-logo.png') }}" alt="kalydeco Logo"/>
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
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive center-block loading-2 top-img" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/image-1.jpg') }}">
                    <div class="loading-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pellentesque vel augue eget commodo. Maecenas tempus cursus sem. Maecenas a diam vel mauris porta lacinia. Duis eu efficitur lacus. Integer nec condimentum tortor. Donec quam sapien, pretium ac elit at, condimentum fermentum sem. Quisque quis viverra dui, posuere aliquam leo. Etiam laoreet ut orci vel ullamcorper. Fusce tristique commodo vulputate. Fusce tempus molestie pellentesque.</p>

                        <p>Morbi laoreet, nibh non eleifend semper, justo magna dignissim dui, vel placerat orci mauris quis ligula. Nam lacinia bibendum elit, nec ornare justo semper sed. Sed non sollicitudin magna. Duis lorem augue, placerat id magna sed.</p>
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
            'menuLink1' => 'what-is-kalydeco',
            'menuText1' => 'What is Kalydeco',
            'menuLink2' => 'how-does-it-work',
            'menuText2' => 'How does it work',
            'menuLink3' => 'clinical-data',
            'menuText3' => 'Clinical data',
            'menuLink4' => 'administration',
            'menuText4' => 'Administration',
            'menuLink5' => 'patient-support',
            'menuText5' => 'Patient support'
        ])
    </div>
</section>
@endsection