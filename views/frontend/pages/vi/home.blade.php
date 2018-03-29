@extends('frontend.layouts.master')

@section('body_class') page-home @endsection

@section('content')
    @includeIf('frontend.pages.partials.home.slider')

    <!-- / section slide -->
    <section class="section-sevices">
        <div class="leaves">
            <div class="leaves__inner">
                <div class="leaves__item leaves__item--1"><span></span><span></span><span></span></div>
                <div class="leaves__item leaves__item--2"><span></span></div>
                <div class="leaves__item leaves__item--3"><span></span></div>
                <div class="leaves__item leaves__item--4"><span></span></div>
                <div class="leaves__item leaves__item--5"><span></span><span></span></div>
                <div class="leaves__item leaves__item--6"><span></span></div>
            </div>
        </div>
        <div class="container">
            <div class="featureBox row">
                <h2 class="heading h1 heading--dancing text-center animate" data-anim-type="fadeInUp" data-anim-delay="50">Our Commitment</h2>
                <div class="col-xs-4 col-sm-4 col-lg-2 col-lg-offset-2 featureBox__item">
                    <div class="featureBox__item__icon animate" data-anim-type="active" data-anim-delay="100">
                        <i class="ic-environment"><span></span></i>
                    </div>
                    <h3 class="featureBox__item__title animate" data-anim-type="fadeInUp" data-anim-delay="200">Commitment to Environment</h3>
                </div>
                <div class="col-xs-4 col-sm-4 col-lg-2 col-lg-offset-1 featureBox__item">
                    <div class="featureBox__item__icon animate" data-anim-type="active" data-anim-delay="200">
                        <i class="ic-society"><span></span><span></span></i>
                    </div>
                    <h3 class="featureBox__item__title animate" data-anim-type="fadeInUp" data-anim-delay="300">Commitment to Society</h3>
                </div>
                <div class="col-xs-4 col-sm-4 col-lg-2 col-lg-offset-1 featureBox__item">
                    <div class="featureBox__item__icon animate" data-anim-type="active" data-anim-delay="300"><i class="ic-employee"></i></div>
                    <h3 class="featureBox__item__title animate" data-anim-type="fadeInUp" data-anim-delay="400">Commitment to Employee</h3>
                </div>
            </div>
            <!-- / Our Commitment -->
            <div class="ourStory row">
                <div class="col-md-12 col-md-offset-0 col-lg-10 col-lg-offset-1">
                    <h2 class="heading h1 heading--dancing text-center animate" data-anim-type="fadeInUp" data-anim-delay="100">Our Story</h2>
                    <p class="text-italic text-center animate" data-anim-type="fadeInUp" data-anim-delay="150">We believe environmental protection is the best way for Sustainable Development</p>
                    <p class="text-italic text-center animate" data-anim-type="fadeInUp" data-anim-delay="200">Protect the nature is protect our life. We understand that the value of the business will not only
                        be profitable. Business must go with sustainable development and environmental protection. That
                        is reason we 're involved in creating pesticides that are better for both humans and the environment.
                        Being sustainable is a long battle and Innovation can be seen as a winning tool. Doted with a
                        pro- fessional laboratory, Dalat Hasfarm has started developing its own predator insects and
                        micro- organisms since 2014. Using Bio-Pro® we aim to reduce the presence of chemical residue
                        on our different crops. Being sustainable is a long battle and Innovation can be seen as a winning
                        tool. Doted with a pro- fessional laboratory, Dalat Hasfarm has started developing its own predator
                        insects and micro- organisms since 2014. Using Bio-Pro® we aim to reduce the presence of chemical
                        residue on our different crops </p>
                </div>
            </div>
            <!-- / Our Story -->
        </div>
    </section>
    <!-- / section sevice -->

    <!-- / section features -->
    <section class="section-feature">
        <div class="container text-center">
            <h2 class="heading h1 heading--dancing text-center animate" data-anim-type="fadeInUp" data-anim-delay="50">Feature products</h2>
            <p class="text-italic animate" data-anim-type="fadeInUp" data-anim-delay="150">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.</p>
        </div>
        <div class="slideFeature">
            <div class="slideFeature__inner">
                <div class="slideFeature__item animate" data-anim-type="fadeInUp" data-anim-delay="100">
                    <div class="slideFeature__item__img"><a href="/producs/" style="background-image: url('/assets/images/home-feature-1.jpg');">
                            <span><img class="hidden" src="/assets/images/home-feature-1.jpg" alt=""></span></a>
                    </div>
                    <div class="slideFeature__item__footer">
                        <h3 class="slideFeature__item__title">
                            <a href="#" title="Cut flower">
                                <span>Cut flower</span>
                            </a>
                        </h3>
                        <p class="slideFeature__item__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <a href="#" class="slideFeature__item__link" title="Discover">Discover <i class="arrow_right"></i></a>
                    </div>
                </div>
                <!-- / item -->
                <div class="slideFeature__item animate" data-anim-type="fadeInUp" data-anim-delay="200">
                    <div class="slideFeature__item__img"><a href="/producs/" style="background-image: url('/assets/images/home-feature-2.jpg');">
                            <span><img class="hidden" src="/assets/images/home-feature-2.jpg" alt=""></span></a>
                    </div>
                    <div class="slideFeature__item__footer">
                        <h3 class="slideFeature__item__title">
                            <a href="#" title="Pot plants">
                                <span>Pot plants</span>
                            </a>
                        </h3>
                        <p class="slideFeature__item__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <a href="#" class="slideFeature__item__link" title="Discover">Discover <i class="arrow_right"></i></a>
                    </div>
                </div>
                <!-- / item -->
                <div class="slideFeature__item animate" data-anim-type="fadeInUp" data-anim-delay="300">
                    <div class="slideFeature__item__img"><a href="/producs/" style="background-image: url('/assets/images/home-feature-3.jpg');">
                            <span><img class="hidden" src="/assets/images/home-feature-3.jpg" alt=""></span></a>
                    </div>
                    <div class="slideFeature__item__footer">
                        <h3 class="slideFeature__item__title">
                            <a href="#">
                                <img src="/assets/images/home-feature-6.png" alt=""></a>
                            </a>
                        </h3>
                        <p class="slideFeature__item__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <a href="#" class="slideFeature__item__link" title="Discover">Discover <i class="arrow_right"></i></a>
                    </div>
                </div>
                <!-- / item -->
                <div class="slideFeature__item animate" data-anim-type="fadeInUp" data-anim-delay="400">
                    <div class="slideFeature__item__img"><a href="/producs/" style="background-image: url('/assets/images/home-feature-4.jpg');">
                            <span><img class="hidden" src="/assets/images/home-feature-4.jpg" alt=""></span></a>
                    </div>
                    <div class="slideFeature__item__footer">
                        <h3 class="slideFeature__item__title">
                            <a href="#">
                                <img src="/assets/images/home-feature-7.png" alt=""></a>
                            </a>
                        </h3>
                        <p class="slideFeature__item__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                        <a href="#" class="slideFeature__item__link" title="Discover">Discover <i class="arrow_right"></i></a>
                    </div>
                </div>
                <!-- / item -->
            </div>
        </div>
    </section>
    <!-- / Section Feature -->

    @include('frontend.pages.partials.home.news')

    @include('frontend.pages.partials.home.career')
@endsection