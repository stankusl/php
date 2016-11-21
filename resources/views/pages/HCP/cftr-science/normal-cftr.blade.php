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
                        <img class="img-responsive center-block loading-2 top-img" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/image-1.png') }}">
                        <div class="loading-3">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id nibh mi. Cras vehicula nisi a purus blandit porttitor. Nam sagittis imperdiet purus vel auctor. Donec lacus turpis, laoreet eu mi bibendum, blandit facilisis est. Etiam ut tempor justo. Aenean odio mauris, rhoncus vulputate ullamcorper sit amet, volutpat ut magna. Etiam nisl lorem, condimentum at leo pretium, volutpat varius nisl. Etiam elementum rutrum tellus at scelerisque. Integer pulvinar posuere molestie. Nulla facilisi. Praesent malesuada ante non odio posuere lobortis. Suspendisse potenti. Mauris in justo eleifend metus eleifend viverra. Nullam ac odio tristique nisi scelerisque finibus. Maecenas convallis faucibus imperdiet. Mauris vitae risus porttitor, egestas enim in, mattis eros.</p>

                            <p>Duis rutrum pretium arcu, nec efficitur purus suscipit vel. Vestibulum vitae quam a magna gravida rutrum. Proin velit sem, posuere eget convallis at, cursus at ex. Aliquam euismod condimentum ex, in tristique sapien. Suspendisse posuere in urna quis rhoncus. Morbi iaculis bibendum ipsum, in egestas massa gravida quis. Nulla malesuada arcu dictum metus interdum posuere. Aenean sit amet bibendum nunc. Nullam feugiat a quam in lacinia. Etiam quis urna eu nulla consectetur suscipit. Maecenas tempor tellus ac feugiat pretium. Donec rhoncus erat et sem aliquet, vitae tempus sem sagittis. Nulla in tincidunt felis. Fusce nec tempor lacus. Donec vulputate orci nulla, vitae pellentesque massa accumsan quis. Duis lorem magna, faucibus at nunc nec, convallis pulvinar tortor.</p>

                            <p>Sed faucibus sem sed libero egestas, ac tempor eros semper. Duis lobortis eu sapien eu tristique. Suspendisse potenti. Etiam maximus aliquet nunc, et eleifend ante egestas.</p>
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
                'menuLink1' => 'cftr-mutations',
                'menuText1' => 'CFTR mutations',
                'menuLink2' => 'genotype-and-phenotype',
                'menuText2' => 'Genotype and phenotype',
                'menuLink3' => 'scientific-resources',
                'menuText3' => 'Scientific resources'
            ])
        </div>
    </section>
@endsection