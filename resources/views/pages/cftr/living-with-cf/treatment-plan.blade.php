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
                        <p class="loading-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mattis leo vitae felis tempus, sit amet lacinia lacus pretium. Vestibulum venenatis, diam scelerisque condimentum sagittis, orci sem convallis lacus, eget condimentum ex nulla tempus arcu. Integer tincidunt bibendum tortor, ac pretium nisi. Vivamus iaculis condimentum ante, ut rhoncus arcu blandit vel. Suspendisse elit erat, pulvinar eget posuere vitae, efficitur volutpat tortor. Quisque aliquet a elit sed maximus. Fusce sed mauris ullamcorper, mollis tortor sed, posuere mauris. Nunc sit amet laoreet sapien. Curabitur nec dictum justo, at faucibus nisi. Duis non ante mi.</p>

                        <p class="loading-3">Cras scelerisque pellentesque finibus. Ut finibus eros ultricies elit fringilla, nec interdum enim congue. Aliquam mollis quis nulla vitae porta. Vestibulum vitae ex mauris. Ut at turpis imperdiet, dapibus purus vitae, lobortis tellus. Vestibulum vitae condimentum arcu. Maecenas congue, erat in tincidunt gravida, quam ipsum egestas turpis, at faucibus est enim ut lorem. Suspendisse posuere, eros ac aliquam blandit, enim ligula lobortis erat, at suscipit metus lacus ut risus. Pellentesque accumsan mattis sapien et congue. Etiam mauris orci, facilisis sed est non, congue fringilla lacus. Sed vulputate libero a sagittis luctus. Quisque ut aliquam urna. Maecenas a porta augue. Pellentesque sodales consectetur erat quis egestas. Donec maximus lorem id efficitur consequat. Curabitur eget fermentum nibh.</p>

                        <p class="loading-4">Duis odio est, porta quis quam in, dapibus efficitur ante. Suspendisse elementum justo diam, quis feugiat dui auctor et. Nullam et justo sit amet tellus commodo commodo. Cras ultricies, sem rhoncus bibendum ultrices, arcu dolor finibus leo, et congue tellus quam ac erat.</p>

                        @include('partials.social-media')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection