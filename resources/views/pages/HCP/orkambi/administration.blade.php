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
            <div class="row">
                <div class="col-lg-12">
                    <p class="loading-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et est accumsan, faucibus orci quis, imperdiet lectus. Vestibulum volutpat, sapien eu pellentesque blandit, urna felis laoreet lectus, et semper mauris lacus et mauris. Aliquam rhoncus fermentum hendrerit. Aliquam euismod finibus libero, non ultricies magna tristique vitae. In non nibh quis est laoreet rhoncus nec sagittis dui. Suspendisse potenti. Donec quis ornare quam, in finibus nisi.</p>

                    <img class="loading-3 img-responsive center-block top-img" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/image-1.jpg') }}">

                    <p class="loading-4">Aenean sit amet quam convallis, tincidunt eros vel, fermentum nisl. Integer sit amet ipsum quis augue laoreet sollicitudin eget et erat. Fusce blandit magna ipsum, eu vulputate turpis auctor eu. Donec lobortis dictum mauris, eu auctor nisl fermentum eget. Integer odio ligula, pharetra sit amet elementum et, blandit nec turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
                </div>
            </div>
        </div>

        <div class="special-text loading-5">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>

                    <p>Aenean sit amet quam convallis, tincidunt eros vel, fermentum nisl. Integer sit amet ipsum quis augue laoreet sollicitudin eget et erat. Fusce blandit magna ipsum, eu vulputate turpis auctor eu. Donec lobortis dictum mauris, eu auctor nisl fermentum eget. Integer odio ligula, pharetra sit amet elementum et, blandit nec turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <img class="img-responsive center-block" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/image-3.jpg') }}">
                </div>
            </div>
        </div>

        <div class="special-text loading-6">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <h2 style="padding-top: 0">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>

                    <p>Aenean sit amet quam convallis, tincidunt eros vel, fermentum nisl. Integer sit amet ipsum quis augue laoreet sollicitudin eget et erat. Fusce blandit magna ipsum, eu vulputate turpis auctor eu. Donec lobortis dictum mauris, eu auctor nisl fermentum eget. Integer odio ligula, pharetra sit amet elementum et, blandit nec turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <img class="img-responsive center-block" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/image-3.jpg') }}">
                </div>
            </div>
        </div>

        <div class="special-text loading-7" style="margin-bottom: 30px;">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <h2 style="padding-top: 0">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>

                    <p>Aenean sit amet quam convallis, tincidunt eros vel, fermentum nisl. Integer sit amet ipsum quis augue laoreet sollicitudin eget et erat. Fusce blandit magna ipsum, eu vulputate turpis auctor eu. Donec lobortis dictum mauris, eu auctor nisl fermentum eget. Integer odio ligula, pharetra sit amet elementum et, blandit nec turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
                </div>

                <div class="col-xs-12 col-sm-6">
                    <img class="img-responsive center-block" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/image-3.jpg') }}">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="content loading-13">
    <div class="lesser-width container">
        @include('partials.newsPostsInsert', [
                'mainClass' => 'hcp',
            'menuLink1' => 'what-is-kalydeco',
            'menuText1' => 'What is Kalydeco',
            'menuLink2' => 'who-is-eligible',
            'menuText2' => 'Who is eligible',
            'menuLink3' => 'how-does-it-work',
            'menuText3' => 'How does it work',
            'menuLink4' => 'clinical-data',
            'menuText4' => 'Clinical data',
            'menuLink5' => 'patient-support',
            'menuText5' => 'Patient support'
        ])
    </div>
</section>
@endsection