@extends('frontend.layouts.master')

@section('body_class') page-newsevent @endsection

@section('content')

    <section class="section-highline">
        <div class="highline">
            <div class="highline__item">
                <div class="highline__item__inner">
                    <a class="highline__item__img" style="background-image: url(/assets/images/news-slide-1.jpg);"
                       title="The standard Lorem Ipsum passage, used since the 1500s"><img
                                src="/assets/images/news-slide-1.jpg" alt=""></a>
                    <div class="highline__item__bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-5 col-md-5 col-lg-4 col-lg-offset-1">
                                    <a class="highline__item__link"
                                       title="The standard Lorem Ipsum passage, used since the 1500s">The standard Lorem
                                        Ipsum passage, used since the 1500s</a>
                                </div>
                                <div class="col-sm-7 col-md-7 col-lg-6">
                                    <p class="highline__item__desc">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / item -->
            <div class="highline__item">
                <div class="highline__item__inner">
                    <a class="highline__item__img" style="background-image: url(/assets/images/news-slide-2.jpg);"
                       title="The standard Lorem Ipsum passage, used since the 1500s"><img
                                src="/assets/images/news-slide-2.jpg" alt=""></a>
                    <div class="highline__item__bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-5 col-md-5 col-lg-4 col-lg-offset-1">
                                    <a class="highline__item__link"
                                       title="The standard Lorem Ipsum passage, used since the 1500s">At iam decimum
                                        annum in spelunca iacet tum illa dicta sunt</a>
                                </div>
                                <div class="col-sm-7 col-md-7 col-lg-6">
                                    <p class="highline__item__desc">Aeque enim contingit omnibus fidibus, ut incontentae
                                        sint. raditur, inquit, ab Epicuro ratio neglegendi doloris. Quoniam, si dis
                                        placet</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / item -->
            <div class="highline__item">
                <div class="highline__item__inner">
                    <a class="highline__item__img" style="background-image: url(/assets/images/news-slide-3.jpg);"
                       title="The standard Lorem Ipsum passage, used since the 1500s"><img
                                src="/assets/images/news-slide-3.jpg" alt=""></a>
                    <div class="highline__item__bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-5 col-md-5 col-lg-4 col-lg-offset-1">
                                    <a class="highline__item__link"
                                       title="The standard Lorem Ipsum passage, used since the 1500s">Sin tantum modo ad
                                        indicia veteris memoriae cognoscenda.</a>
                                </div>
                                <div class="col-sm-7 col-md-7 col-lg-6">
                                    <p class="highline__item__desc">Incididunt ut labore et dolore magna aliqua. Ut enim
                                        ad minim. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / item -->
            <div class="highline__item">
                <div class="highline__item__inner">
                    <a class="highline__item__img" style="background-image: url(/assets/images/news-slide-4.jpg);"
                       title="The standard Lorem Ipsum passage, used since the 1500s"><img
                                src="/assets/images/news-slide-4.jpg" alt=""></a>
                    <div class="highline__item__bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-5 col-md-5 col-lg-4 col-lg-offset-1">
                                    <a class="highline__item__link"
                                       title="The standard Lorem Ipsum passage, used since the 1500s">Quodsi ipsam
                                        honestatem undique pertectam atque absolutam.</a>
                                </div>
                                <div class="col-sm-7 col-md-7 col-lg-6">
                                    <p class="highline__item__desc">Sin tantum modo ad indicia veteris memoriae
                                        cognoscenda, curiosorum. An ea, quae per vinitorem antea consequebatur, per se
                                        ipsa curabit?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / item -->
        </div>
    </section>

    <!-- / Section highline  -->
    <section class="section-newslisting">
        <div class="container">
            <div class="newslisting">
                <h1 class="newslisting__head animate" data-anim-type="fadeInUp" data-anim-delay="100">
                    <span>{{ trans('f_news.discover_our_news_event') }}</span>
                </h1>
                <!-- / head -->
                <div class="newslisting__filter clearfix animate" data-anim-type="fadeInUp" data-anim-delay="150">
                    <div class="newslisting__filter__inner">
                        <form action="" id="frm-news-search">
                            <div class="newslisting__filter__item">
                                <select class="select" name="type" id="categoryfilter">
                                    @foreach($types as $key => $name)
                                        @if(empty($input['type']))
                                            <option {!! empty($key) ? 'selected' : '' !!} value="{{ $key }}">{{ $name }}</option>
                                        @else
                                            <option {!! $input['type'] == $key ? 'selected' : '' !!} value="{{ $key }}">{{ $name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="newslisting__filter__item">
                                <select class="select" name="status" id="typefilter">
                                    @foreach($statuses as $key => $name)
                                        @if(empty($input['status']))
                                            <option {!! empty($key) ? 'selected' : '' !!} value="{{ $key }}">{{ $name }}</option>
                                        @else
                                            <option {!! $input['status'] == $key ? 'selected' : '' !!} value="{{ $key }}">{{ $name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="newslisting__filter__item">
                                <select class="select" name="limit" id="perPagefilter">
                                    @foreach($limits as $key => $name)
                                        @if(empty($input['limit']))
                                            <option {!! empty($key) ? 'selected' : '' !!} value="{{ $key }}">{{ $name }}</option>
                                        @else
                                            <option {!! $input['limit'] == $key ? 'selected' : '' !!} value="{{ $key }}">{{ $name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- / filter -->
                <div class="newslisting__list row">
                    @forelse($newses as $key => $news)
                        <article class="newslisting__list__item col-md-6 animate" data-anim-type="fadeInUp"
                                 data-anim-delay="{{ 200 + (50 * $key) }}">
                            <figure class="newslisting__list__item__img">
                                <a href="{{ route('frontend.news.show', $news->slug) }}" style="background-image: url({{ assetStorage($news->image) }});"
                                   title="{{ $news->title }}">
                                    <img src="{{ assetStorage($news->image) }}" alt="{{ $news->title }}">
                                </a>
                            </figure>
                            <header class="newslisting__list__item__head">

                                <span class="newslisting__list__item__icon @if($news->type == 'event') event @endif"><span class="hidden">{{ $news->label_type }}</span></span>

                                <span class="newslisting__list__item__date">
                                    @if($news->type == 'news')
                                        {{ cvDbTime($news->created_at, DB_TIME) }}
                                    @else
                                        {{ cvDbTime($news->event_from) }} {{ trans('f_news.to') }} {{ cvDbTime($news->event_to) }}
                                    @endif
                                </span>
                                <h2 class="newslisting__list__item__title">
                                    <a href="{{ route('frontend.news.show', $news->slug) }}" title="{{ $news->title }}">{{ $news->title }}</a>
                                </h2>
                            </header>
                            <p class="newslisting__list__item__desc">{{ $news->description }}</p>
                        </article>
                    @empty
                        <div class="alert alert-success" role="alert">
                            {{ trans('f_news.no_data') }}
                        </div>
                    @endforelse
                </div>
                <!-- / list -->
                <nav aria-label="Page navigation">
                    {{ $newses->appends($input)->links() }}
                </nav>
                <!-- / navigation -->
            </div>
        </div>
    </section>
    <!-- / Section news listing -->

@endsection

@section('script')
    <script>
        jQuery(function ($) {
            $('#frm-news-search select').change(function () {
                $('#frm-news-search').submit();
            });
        });
    </script>
@endsection