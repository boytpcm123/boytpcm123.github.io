<section class="section-newsletter">
    <div class="container newsletter">
        <h4 class="newsletter__desc animate" data-anim-type="fadeInUp" data-anim-delay="100">interested with us</h4>
        <h2 class="newsletter__title animate" data-anim-type="fadeInUp" data-anim-delay="200">Get our newsletter
            here</h2>
        <form action="{!! route('frontend.subscribe.store') !!}" method="post" class="newsletter__form animate" data-anim-type="fadeInUp" data-anim-delay="300">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-12 col-md-offset-0">
                    <div class="row">
                        <div class="col-sm-7 col-md-8">
                            {{csrf_field()}}
                            <input type="text" class="form-control" id="subscribe_email" placeholder="Enter your email">
                        </div>
                        <div class="col-sm-5 col-md-4">
                            <button type="button" class="btn btn-default" id="btn_subscribe"><span>Get some news!</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <span class="newsletter__bg animate" data-anim-type="active"></span>
    </div>
</section>
<!-- / Section newsletter -->