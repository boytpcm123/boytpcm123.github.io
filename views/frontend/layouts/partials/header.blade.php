<header class="header navbar navbar-static-top" id="top" data-spy="affix" data-offset-top="50">
    <div class="container">
        <div class="row">
            <div class="header__top col-sm-9">
                <button aria-controls="bs-navbar" aria-expanded="false" class="collapsed navbar-toggle"
                        data-target="#main-menu" data-toggle="collapse"
                        type="button">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="header__top__language">
                    @include('frontend.layouts.partials.route_translation')
                </div>
                <!--/ Header Languager-->
                <div class="header__top__search">
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="search"><i
                                class="icon_search"></i></button>
                </div>
                <!--/ Header Search-->
            </div>
            <!--/ Header Top-->
            <div class="navbar-header col-sm-3">
                <a class="header__logo" href="/" class="navbar-brand"><img src="/assets/images/logo.png"
                                                                           alt="Dalat Hasfarms"></a>
            </div>
            <!--Nav Header-->
            <nav class="header__nav collapse col-sm-9" id="main-menu">
                <ul class="nav">
                    <li class="{{ currentPageMenu(['/', 'en'], 'current-page') }}">
                        <a href="/" title="{!! trans('f_menu.home') !!}">{!! trans('f_menu.home') !!}</a>
                    </li>
                    <li class="{{ currentPageMenu([ 'en/about-us', 'gioi-thieu', '*dalathasfarm-360' ], 'current-page') }}"><a href="{!! trans('routes.about_us') !!}" title="{!! trans('f_menu.about_us') !!}">{!! trans('f_menu.about_us') !!}</a>
                        <div class="nav__sub">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3 nav__sub__img">
                                        <div class="nav__sub__img__item {{ currentPageMenu([ 'en/about-us', 'gioi-thieu' ], 'current') }}"
                                             style="background-image: url('/assets/images/menu-about-1.jpg');">
                                            <img src="/assets/images/menu-about-1.jpg" alt="" class="hidden">
                                        </div>
                                        <div class="nav__sub__img__item {{ currentPageMenu([ '*dalathasfarm-360*' ], 'current') }}"
                                             style="background-image: url('/assets/images/menu-about-2.jpg');">
                                            <img src="/assets/images/menu-about-2.jpg" alt="" class="hidden">
                                        </div>
                                    </div>
                                    <div class="col-sm-2 nav__sub__level1">
                                        <ul>
                                            <li class="{{ currentPageMenu([ 'en/about-us', 'gioi-thieu' ], 'current') }}">
                                                <a href="{!! trans('routes.about_us') !!}" title="{!! trans('f_menu.corporate_information') !!}">{!! trans('f_menu.corporate_information') !!}</a>
                                            </li>
                                            <li  class="{{ currentPageMenu([ '*dalathasfarm-360*' ], 'current') }}">
                                                <a href="{!! trans('routes.dalathasfarm_360') !!}" title="{!! trans('f_menu.dalathasfarm_360') !!}">{!! trans('f_menu.dalathasfarm_360') !!}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/products/cut-flower">{!! trans('f_menu.products') !!}</a>
                        <div class="nav__sub">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3 nav__sub__img">
                                        @foreach($composer_categories as $_key => $_rs)
                                            <div class="nav__sub__img__item @if($_key === 0) current @endif"
                                                 style="background-image: url('{!! assetStorage($_rs->icon) !!}');">
                                                <img src="{!! assetStorage($_rs->icon) !!}" alt="{{ $_rs->name }}" class="hidden">
                                            </div>
                                        @endforeach

                                        <div class="nav__sub__img__item--child">
                                            @foreach($composer_categories as $_rs)
                                                @foreach($_rs->children as $_rs1)
                                                    <div class="nav__sub__img__item {{ $_rs1->slug }}"
                                                         style="background-image: url('{!! assetStorage($_rs1->icon) !!}');">
                                                        <img src="{!! assetStorage($_rs1->icon) !!}" alt="{{ $_rs1->name }}" class="hidden">
                                                    </div>
                                                @endforeach
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-sm-2 nav__sub__level1">
                                        <ul>
                                            @foreach($composer_categories as $_key => $_rs)
                                                <li class="@if($_key === 0) current @endif">
                                                    <a href="#" title="{{ $_rs->name }}">{{ $_rs->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 nav__sub__level2">
                                        @foreach($composer_categories as $_key => $_rs)
                                            @if($_rs->children->count())
                                                <div class="nav__sub__level2__child @if($_key === 0) current @endif">
                                                    @foreach($_rs->children->chunk(5) as $chunk)
                                                        <ul>
                                                            @foreach ($chunk as $rs1)
                                                                <li data-id="{{ $rs1->slug }}">
                                                                    <a href="#" title="{{ $_rs->name }}">{{ $rs1->name }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endforeach
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="/distribution-network"
                           title="{{ trans('f_menu.distribution_network') }}">{{ trans('f_menu.distribution_network') }}</a>
                    </li>
                    <li><a href="{{ route('frontend.news.index') }}"
                           title="{{ trans('f_menu.news') }}">{{ trans('f_menu.news') }}</a></li>
                    <li><a href="/careers">{!! trans('f_menu.job') !!}</a>
                        <div class="nav__sub">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3 nav__sub__img">
                                        <div class="nav__sub__img__item current"
                                             style="background-image: url('/assets/images/menu-careers-1.jpg');"><img
                                                    src="/assets/images/menu-careers-1.jpg" alt="" class="hidden"></div>
                                        <div class="nav__sub__img__item"
                                             style="background-image: url('/assets/images/menu-careers-2.jpg');"><img
                                                    src="/assets/images/menu-careers-2.jpg" alt="" class="hidden"></div>
                                    </div>
                                    <div class="col-sm-2 nav__sub__level1">
                                        <ul>
                                            <li class=""><a href="/careers" title="">Why Work With Us?!</a></li>
                                            <li><a href="/careers/vacancy-list" title="">Vacancy list</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="/contact">{!! trans('f_menu.contact') !!}</a>
                        <div class="nav__sub">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3 nav__sub__img">
                                        <div class="nav__sub__img__item current"
                                             style="background-image: url('/assets/images/menu-contact-1.jpg');"><img
                                                    src="/assets/images/menu-contact-1.jpg" alt="" class="hidden"></div>
                                        <div class="nav__sub__img__item"
                                             style="background-image: url('/assets/images/menu-contact-2.jpg');"><img
                                                    src="/assets/images/menu-contact-2.jpg" alt="" class="hidden"></div>
                                    </div>
                                    <div class="col-sm-2 nav__sub__level1">
                                        <ul>
                                            <li class=""><a href="/contact" title="">Contact</a></li>
                                            <li><a href="/contact/faqs" title="">FAQs</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <!--/ main menu-->
        </div>
    </div>
    <!--/ Container-->
    <div class="header__searchForm">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-4">
                    <form action="/search">
                        <input type="text" class="form-control" placeholder="Search for anything in Dalat Hasfarm">
                    </form>
                </div>
            </div>
        </div>
        <a href="javascript:void(0);" class="header__searchForm__close"><i class="icon_close"></i></a>
    </div>
    <!-- / Search Form -->
    <div class="header__extendlink">
        <div class="header__extendlink__item"><a href="#" target="_blank" title="shop inline"><i
                        class="ic-sticky-shop"></i><span>shop<br/>online</span></a></div>
        <div class="header__extendlink__item"><a href="#" target="_blank" title="Our tips"><i
                        class="ic-sticky-tips"></i><span>Blog</span></a></div>
    </div>
</header>