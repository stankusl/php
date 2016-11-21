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
                        <div class="row loading-2">
                            <div class="col-sm-6 text-center">
                                <img class="img-responsive center-block woman-img" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/image-2.jpg') }}">
                            </div>

                            <div class="col-sm-6">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et est accumsan, faucibus orci quis, imperdiet lectus. Vestibulum volutpat, sapien eu pellentesque blandit, urna felis laoreet lectus, et semper mauris lacus et mauris. Aliquam rhoncus fermentum hendrerit. Aliquam euismod finibus libero, non ultricies magna tristique vitae. In non nibh quis est laoreet rhoncus nec sagittis dui. Suspendisse potenti. Donec quis ornare quam, in finibus nisi.</p>

                                <p>Aenean sit amet quam convallis, tincidunt eros vel, fermentum nisl.</p>
                            </div>
                        </div>

                        <p class="loading-3">Aenean sit amet quam convallis, tincidunt eros vel, fermentum nisl. Integer sit amet ipsum quis augue laoreet sollicitudin eget et erat. Fusce blandit magna ipsum, eu vulputate turpis auctor eu. Donec lobortis dictum mauris, eu auctor nisl fermentum eget. Integer odio ligula, pharetra sit amet elementum et, blandit nec turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="container center-block lesser-width">
            <div class="loading-4">
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>

                <hr class="h2-hr"/>
            </div>

            <div class="special-text">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="loading-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et est accumsan, faucibus orci quis, imperdiet lectus. Vestibulum volutpat, sapien eu pellentesque blandit, urna felis laoreet lectus, et semper mauris lacus et mauris. Aliquam rhoncus fermentum hendrerit. Aliquam euismod finibus libero, non ultricies magna tristique vitae. In non nibh quis est laoreet rhoncus nec sagittis dui. Suspendisse potenti. Donec quis ornare quam, in finibus nisi.</p>

                        <p class="loading-6">Aenean sit amet quam convallis, tincidunt eros vel, fermentum nisl. Integer sit amet ipsum quis augue laoreet sollicitudin eget et erat. Fusce blandit magna ipsum, eu vulputate turpis auctor eu. Donec lobortis dictum mauris, eu auctor nisl fermentum eget. Integer odio ligula, pharetra sit amet elementum et, blandit nec turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>

                        <img class="loading-7 img-responsive center-block" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/image-2.jpg') }}">

                        <p class="loading-8">Aenean sit amet quam convallis, tincidunt eros vel, fermentum nisl. Integer sit amet ipsum quis augue laoreet sollicitudin eget et erat. Fusce blandit magna ipsum, eu vulputate turpis auctor eu. Donec lobortis dictum mauris, eu auctor nisl fermentum eget. Integer odio ligula, pharetra sit amet elementum et, blandit nec turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>

                        @include('partials.social-media')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection