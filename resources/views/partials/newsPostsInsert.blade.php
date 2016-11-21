<div class="row news-posts-insert narrow">
    @if (isset($menuLink1))
        <div class="col-sm-4 col-xs-12 news-item text-center">
            <div class="animated-wave">
                <a href="{{ url($mainClass) }}/{{ $pageClass }}/{{ $menuLink1 }}">
                    <img class="img-responsive news-thumbnail" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/news-pic-1.png') }}" alt="News Article Example 1"/>
                    <div class="blog-infos">
                        <h3>{{ $menuText1 }}</h3>
                        <span>Find out more</span>
                    </div>
                </a>
            </div>
        </div>
    @endif

    @if (isset($menuLink2))
        <div class="col-sm-4 col-xs-12 news-item text-center">
            <div class="animated-wave">
                <a href="{{ url($mainClass) }}/{{ $pageClass }}/{{ $menuLink2 }}">
                    <img class="img-responsive news-thumbnail" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/news-pic-2.png') }}" alt="News Article Example 1"/>
                    <div class="blog-infos">
                        <h3>{{ $menuText2 }}</h3>
                        <span>Find out more</span>
                    </div>
                </a>
            </div>
        </div>
    @endif

    @if (isset($menuLink3))
        <div class="col-sm-4 col-xs-12 news-item text-center">
            <div class="animated-wave">
                 <a href="{{ url($mainClass) }}/{{ $pageClass }}/{{ $menuLink3 }}">
                    <img class="img-responsive news-thumbnail" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/news-pic-3.png') }}" alt="News Article Example 1"/>
                    <div class="blog-infos">
                        <h3>{{ $menuText3 }}</h3>
                        <span>Find out more</span>
                    </div>
                </a>
            </div>
        </div>
    @endif
</div>

@if (isset($menuLink4))
<div class="row news-posts-insert narrow" style="margin-bottom: 50px">
    @if (isset($menuLink4))
        <div class="col-sm-4 col-xs-12 news-item text-center">
            <div class="animated-wave">
                 <a href="{{ url($mainClass) }}/{{ $pageClass }}/{{ $menuLink4 }}">
                    <img class="img-responsive news-thumbnail" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/news-pic-1.png') }}" alt="News Article Example 1"/>
                    <div class="blog-infos">
                        <h3>{{ $menuText4 }}</h3>
                        <span>Find out more</span>
                    </div>
                </a>
            </div>
        </div>
    @endif

    @if (isset($menuLink5))
        <div class="col-sm-4 col-xs-12 news-item text-center">
            <div class="animated-wave">
                 <a href="{{ url($mainClass) }}/{{ $pageClass }}/{{ $menuLink5 }}">
                    <img class="img-responsive news-thumbnail" src="{{ asset('img/'.$pageClass.'/'.$pageName.'/news-pic-2.png') }}" alt="News Article Example 1"/>
                    <div class="blog-infos">
                        <h3>{{ $menuText5 }}</h3>
                        <span>Find out more</span>
                    </div>
                </a>
            </div>
        </div>
    @endif
</div>
@else
    <div class="row news-posts-insert narrow" style="margin-bottom: 30px">
    </div>
@endif