@if($newses && $newses->total())
<!-- / News & Events -->
<section class="section-newsevent animate" data-anim-type="active">
    <div class="section-newsevent__bg"><div class="section-newsevent__bg__inner"></div></div>
    <div class="container">
        <h2 class="heading h1 heading--dancing text-center animate" data-anim-type="fadeInUp" data-anim-delay="50">News & Events</h2>
        <div class="slideNewsEvent">
            <div class="slideNewsEvent__inner">
                @foreach($newses as $key => $news)
                    <article class="slideNewsEvent__item">
                        <div class="slideNewsEvent__item__inner animate" data-anim-type="fadeInUp" data-anim-delay="{{ 100 * ($key + 1) }}">
                            <figure class="slideNewsEvent__item__image">
                                <a href="{{ route('frontend.news.show', $news->slug) }}" style="background-image: url('{{ assetStorage($news->image, 'full', true, 'large') }}')" title="{{ $news->title }}">
                                    <img src="{{ assetStorage($news->image, 'full', true, 'large') }}" alt="{{ $news->title }}">
                                </a>
                            </figure>
                            <div class="slideNewsEvent__item__content">
                                <div class="slideNewsEvent__item__date">
                                    <i class="icon {{ $news->type }}"></i>
                                    <span class="line-1">{{ $news->time_line[0] }}</span>
                                    <span class="line-2">{{ $news->time_line[1] }}</span>
                                </div>
                                <h2 class="slideNewsEvent__item__title">
                                    <a href="{{ route('frontend.news.show', $news->slug) }}" title="{{ $news->title }}">{{ $news->title }}</a>
                                </h2>
                                <p class="slideNewsEvent__item__desc">
                                    {{ cutString($news->description, 50) }}
                                </p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
            <div class="slideNewsEvent__more text-center">
                <a href="{{ route('frontend.news.index') }}" class="btn btn-more animate" data-anim-type="fadeInUp" data-anim-delay="200"><i class="ic-discover"></i><span>{{ trans('button.discover') }}</span></a>
            </div>
        </div>
    </div>
</section>
<!-- / section news & event -->
@endif