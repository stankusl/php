<header id="header">

    <div class="language-select">
        <div class="container special-container">

            @if($pageClass == 'cftr')
                <section class="language-selector pull-right">
                    <select id="select-country">
                        <option>{{ trans('navigation.language_select') }}</option>
                        <option value="en">English</option>
                        <option value="es">Spanish</option>
                        <option value="de">German</option>
                        <option value="fr">French</option>
                    </select>
                </section>
                <a href="#" class="different-link">{{ trans('navigation.report_effect') }}</a>
            @else
                <a class="logout pull-right" href="#">{{ trans('navigation.logout') }} <i class="glyphicon glyphicon-log-out"></i></a>
                <a href="#" class="different-link">{{ trans('navigation.report_effect') }}</a>
            @endif
        </div>
    </div>

    <div class="container special-container">


        <div class="row">
            <section class="col-sm-3 col-xs-10">
                <a href="{{ url($pageClass) }}">
                    <img class="img-responsive logo" src="{{ asset('img/'.$pageClass.'/logo.png') }}" alt="Vertex Logo" />
                </a>
            </section>

            <button type="button" class="navbar-toggle col-xs-2 collapsed">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar first-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar last-bar"></span>
            </button>

            <div class="main-menu col-sm-9 col-xs-12">
                <nav>
                    <ul id="navUl">
                        @foreach($menus as $key=>$menu)
                            <li class="{{ ($menu->classSlug == $pageClass) ? 'active' : ''}}" data-category="{{ $menu->classSlug }}"
                                data-color="{{ $menu->color }}" data-color-bg="{{ $menu->colorBg }}" data-color-hover="{{ $menu->colorHover }}" data-color-bg-hover="{{ $menu->colorBgHover }}">

                                <a href="#">{{ $menu->className }}</a>

                                <span class="lines"></span>

                                <ul class="inner">
                                    @foreach($subMenus as $key2=>$subMenu)
                                        @if($subMenu->classSlug == $menu->classSlug)
                                            <li><a href="{{ url($locale.'/'.$pageClass) }}/{{ $subMenu->classSlug }}/{{ $subMenu->pageSlug }}">{{ $subMenu->pageName }}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <section class="sub-navs">
        @foreach($menus as $key=>$menu)
            <nav class="sub-nav hidden-xs" data-category="{{ $menu->classSlug }}-sub-nav">
                <ul>
                    @foreach($subMenus as $key2=>$subMenu)
                        @if($subMenu->classSlug == $menu->classSlug)
                            <li class="page-{{ $subMenu->pageSlug }}"><a href="{{ url($locale.'/'.$pageClass) }}/{{ $subMenu->classSlug }}/{{ $subMenu->pageSlug }}">{{ $subMenu->pageName }}</a></li>
                        @endif
                    @endforeach
                </ul>
            </nav>
        @endforeach
    </section>

</header>
