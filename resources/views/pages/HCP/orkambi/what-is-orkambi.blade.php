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
                    <img class="img-responsive center-block loading-2 top-img" src="{{ asset('img/orkambi/content.png') }}" alt="">
                    <div class="loading-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id nibh mi. Cras vehicula nisi a purus blandit porttitor. Nam sagittis imperdiet purus vel auctor. Donec lacus turpis, laoreet eu mi bibendum, blandit facilisis est. Etiam ut tempor justo. Aenean odio mauris, rhoncus vulputate ullamcorper sit amet, volutpat ut magna. Etiam nisl lorem, condimentum at leo pretium, volutpat varius nisl. Etiam elementum rutrum tellus at scelerisque. Integer pulvinar posuere molestie. Nulla facilisi. Praesent malesuada ante non odio posuere lobortis. Suspendisse potenti. Mauris in justo eleifend metus eleifend viverra. Nullam ac odio tristique nisi scelerisque finibus. Maecenas convallis faucibus imperdiet. Mauris vitae risus porttitor, egestas enim in, mattis eros.</p>

                        <p>Magna metus, aliquet felis nam risus tempor, nec per suscipit sagittis, nibh mauris vivamus egestas wisi sed aliquam. Pretium augue leo amet vitae, facilisi scelerisque cras risus class eros nec, pellentesque interdum sed sem commodo porttitor sem, ut vestibulum libero mollis, morbi suspendisse. Nulla voluptate neque, lectus facilisis nec elit, ante wisi lectus accumsan scelerisque.</p>
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
            'menuLink1' => 'who-is-eligible',
            'menuText1' => 'Who is eligible',
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
