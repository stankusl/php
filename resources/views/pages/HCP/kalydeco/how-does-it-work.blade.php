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
                    <img class="img-responsive center-block top-img" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/image-1.jpg') }}">
                    <div class="loading-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eros urna, sollicitudin vel pharetra vel, tristique tincidunt ante. Maecenas pharetra ligula et nisi pulvinar, sit amet semper nisi blandit. Pellentesque cursus sagittis mi, ut viverra sem ultrices et. Nulla vulputate faucibus urna, at ornare augue varius et. Ut condimentum semper odio, ac elementum lorem aliquet ut. Cras sollicitudin sit amet erat non auctor. Aliquam vehicula neque vitae sagittis fringilla. Suspendisse a molestie dolor. Praesent posuere nec urna vulputate dictum.</p>

                        <p>Proin id dignissim lorem, non condimentum orci. Fusce orci metus, mattis quis imperdiet at, dictum ac justo. Donec eget iaculis lacus, non tempus magna. Etiam interdum diam sagittis eros sodales laoreet. Morbi sagittis mattis sapien ut vestibulum. Vivamus pulvinar magna dictum eleifend pretium. Aliquam condimentum lorem ac lectus facilisis laoreet. Nulla ullamcorper diam et maximus maximus. Nullam ut turpis et quam tincidunt gravida. Cras semper ultrices ante, nec sagittis diam dictum.</p>
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
            'menuLink2' => 'who-is-eligible',
            'menuText2' => 'Who is eligible',
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