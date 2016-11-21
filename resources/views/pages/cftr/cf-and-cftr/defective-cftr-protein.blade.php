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
                <div class="row loading-2">
                    <div class="col-lg-12">
                        <p class="loading-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac risus a turpis elementum commodo. Fusce finibus placerat lacus, a pretium magna pretium nec. Phasellus lacus felis, ornare quis dignissim a, rutrum in nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent vitae ante nulla. Etiam nisl lectus, posuere in ante ac, aliquam iaculis nulla. Integer fermentum sed ligula non accumsan. Vivamus sed massa ut nibh faucibus luctus. Nullam ultricies eleifend ligula, nec rhoncus est mollis et. Vestibulum est enim, pulvinar condimentum turpis vitae, posuere volutpat eros. Integer nec urna a orci fringilla efficitur sit amet id tortor.</p>

                        <img class="loading-3 img-responsive center-block" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/image-1.jpg') }}">

                        <p class="loading-4">Nunc eleifend libero ut elit feugiat, vitae viverra urna condimentum. Sed nec ullamcorper mauris, id ornare nisl. Etiam laoreet urna sit amet nisi venenatis ornare. Phasellus viverra ornare ultrices. Nam vel ipsum leo. Duis a viverra risus. Maecenas non fermentum enim. Aenean ornare ultrices aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis faucibus, velit porta consequat pellentesque, sapien ligula lacinia purus, in laoreet lectus sapien nec augue. Sed hendrerit turpis quis velit volutpat, nec volutpat erat dictum. Quisque sagittis ullamcorper finibus. Etiam pretium ante et ultrices varius. Sed tincidunt pulvinar elit, sed tincidunt libero. Integer ullamcorper, diam eget laoreet cursus, magna enim rhoncus ipsum, porta rutrum nisi dolor a arcu.</p>
                    </div>
                </div>

                <div class="row loading-5">
                    <div class="col-xs-12 col-sm-6">
                        <img class="img-responsive center-block" style="width: 100%;" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/image-2.png') }}">
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <img class="img-responsive center-block" style="width: 100%;" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/image-3.png') }}">
                    </div>
                </div>

                <div class="row loading-6">
                    <div class="col-lg-12">
                        <p>Quisque venenatis diam sit amet fringilla volutpat. Nulla sodales efficitur tellus sed mattis. Aenean luctus pharetra metus, eget ultrices lacus. Aenean eu ipsum tortor. Praesent quis eleifend lorem. Vestibulum ut sapien dui. Proin nec tincidunt augue, vitae congue mi. Nam suscipit sem ut ligula euismod pulvinar. Mauris quis ultricies purus. Etiam elementum condimentum ullamcorper</p>

                        <p>Nunc eu lorem risus. In eu turpis at nisl facilisis tincidunt. Pellentesque posuere justo semper congue posuere. Cras dolor augue, vehicula nec sem eu, ullamcorper tincidunt nisl. Nam accumsan consequat massa quis auctor. Etiam tempus fermentum erat, id dapibus sem efficitur ac. Vestibulum tempus, turpis eget blandit gravida, dolor mi interdum lacus, ut pretium eros ex vitae ligula. Duis eu consectetur leo.</p>

                        @include('partials.social-media')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection