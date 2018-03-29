@extends('frontend.layouts.master')

@section('body_class') page-event @endsection

@section('content')

    <!-- / Section breadcrumbs -->
    <section class="section-article">
        <article class="single">
            <figure class="single__img" style="background-image: url({!! assetStorage($news->banner) !!});">
                <img src="{!! assetStorage($news->banner) !!}" alt="{{ $news->title }}">
                <!--
                    If Video
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/vQFXYp3YOCQ?showinfo=0" frameborder="0" allowfullscreen></iframe>
                -->
            </figure>
            <header class="single__head animate" data-anim-type="active" data-anim-delay="100">
                <div class="single__head__inner">
                    <h1>{{ $news->title }}</h1>
                    <h2>{{ $news->label_type }}</h2>
                    <p>
                        @if($news->type == 'news')
                            {{ cvDbTime($news->created_at, DB_TIME) }}
                        @else
                            {{ cvDbTime($news->event_from) }} {{ trans('f_news.to') }} {{ cvDbTime($news->event_to) }}
                        @endif
                    </p>
                </div>
            </header>
            <div class="single__content">
                <div class="single__content__share">
                    <label>{{ trans('button.share') }}</label>
                    <div class="sharethis-inline-share-buttons"></div>
                </div>
                <div class="single__content__inner">
                    {!! $news->content !!}
                </div>
            </div>
        </article>
    </section>

    <!-- / Section article  -->
    @if($other_newses->count())
    <section class="section-other">
        <div class="container">
            <div class="otherArticle">
                <div class="otherArticle__head">
                    <h2>{{ trans('f_news.other_news_event') }}</h2>
                    <a href="{!! route('frontend.news.index') !!}" class="otherArticle__head__more" title="{{ trans('button.see_more') }}">{{ trans('button.see_more') }} <i class="arrow_carrot-2right"></i></a>
                </div>
                <div class="otherArticle__inner">
                    @foreach($other_newses as $key => $rs)
                    <article class="otherArticle__item animate" data-anim-type="fadeInUp" data-anim-delay="{{ $key * 50 + 50 }}">
                        <figure class="otherArticle__item__img">
                            <a href="{{ route('frontend.news.show', $rs->slug) }}" style="background-image: url({{ assetStorage($rs->image) }});" title="{{ $rs->title }}">
                                <img src="{{ assetStorage($rs->image) }}" alt="{{ $rs->title }}">
                            </a>
                        </figure>
                        <header class="otherArticle__item__head">
                            <span class="otherArticle__item__icon @if($rs->type == 'event') event @endif"><span class="hidden">{{ $rs->label_type }}</span></span>
                            <span class="otherArticle__item__date">
                                @if($rs->type == 'news')
                                    {{ cvDbTime($rs->created_at, DB_TIME) }}
                                @else
                                    {{ cvDbTime($rs->event_from) }} {{ trans('f_news.to') }} {{ cvDbTime($rs->event_to) }}
                                @endif
                            </span>
                            <h2 class="otherArticle__item__title">
                                <a href="{{ route('frontend.news.show', $rs->slug) }}" title="{{ $rs->title }}">
                                    {{ $rs->title }}
                                </a>
                            </h2>
                        </header>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif

@endsection

@section('script')
    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5996922705d15a0012b80701&product=inline-share-buttons"></script
@endsection