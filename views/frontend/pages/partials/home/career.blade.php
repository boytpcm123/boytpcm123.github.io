@if($careers && $careers->total())
<!-- / section news & event -->
<section class="section-job">
    <div class="container">
        <h2 class="heading h1 heading--dancing text-center animate" data-anim-type="fadeInUp" data-anim-delay="50">Job Opportunity</h2>
        <!-- / heding -->
        <div class="boxJobs">
            <div class="row">
                @php $career = $careers->first(); @endphp
                <div class="col-md-6">
                    <div class="boxJobs__highline animate" data-anim-type="fadeInUp" data-anim-delay="100">
                        <div class="boxJobs__highline__img">
                            <a href="/careers" class="boxJobs__highline__img__inner" style="background-image: url('{{ assetStorage($career->image, 'full', true, 'large') }}')">
                                <img src="{{ assetStorage($career->image, 'full', true, 'large') }}" alt="">
                            </a>
                        </div>
                        <div class="boxJobs__highline__content">
                            <h3 class="boxJobs__highline__title"><a href="/careers/" title="{{ $career->name }}">{{ $career->name }}</a></h3>
                            <p class="boxJobs__highline__desc">
                                {{ cutString($career->description, 150) }}
                            </p>
                        </div>
                    </div>
                    <!-- / highline -->
                </div>
                @php $careers->shift(); @endphp

                <div class="col-md-6">
                    @foreach($careers as $key => $career)
                        <div class="boxJobs__item animate" data-anim-type="fadeInUp" data-anim-delay="{{ 50 * ($key + 3) }}">
                        <a href="#" class="boxJobs__item__img" title="{{ $career->name }}">
                                    <span style="background-image: url('{{ assetStorage($career->image, 'full', true, 'medium') }}')">
                                        <img src="{{ assetStorage($career->image, 'full', true, 'medium') }}" alt="{{ $career->name }}">
                                    </span>
                        </a>
                        <div class="boxJobs__item__meta">
                            <span class="boxJobs__item__meta__date">{{ cvDbTime($career->published_date) }}</span>
                            <span class="boxJobs__item__meta__status">{{ $career->label_status }}</span>
                        </div>
                        <h3 class="boxJobs__item__title"><a href="#" title="{{ $career->name }}">{{ $career->name }}</a></h3>
                        <div class="boxJobs__item__bottom">
                            <div class="boxJobs__item__work">
                                <span>Work at</span>
                                <h5>{{ $career->city_name }}</h5>
                            </div>
                            <div class="boxJobs__item__desc">
                                {{ cutString($career->description, 50) }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- / jobs -->
        <div class="text-center animate" data-anim-type="fadeInUp" data-anim-delay="50">
            <a href="/careers/vacancy-list" class="btn btn-more"><i class="ic-discover"></i><span>{{ trans('button.discover') }}</span></a>
        </div>
    </div>
</section>
<!-- / Section Job Opportunity  -->
@endif