@extends('frontend.layouts.master')

@section('body_class') page-360 @endsection

@section('content')
    <section class="section-panorama">
        <div class="panorama">
            <div class="panorama__viewer">
                <div id="panorama">
                </div>
            </div>
            <!-- / Viewer -->
            <div class="panorama__listing">
                <div class="panorama__listing__inner">
                    <div class="panorama__listing__item">
                        <a class="panorama__listing__item__inner" href="javascript:void(0);" data-option='{
                                "type": "equirectangular","autoLoad": true,"showControls": false,"default": {"firstScene": "scenes-1"},"scenes": {"scenes-1": {"hfov": 110,"pitch": 0,"yaw": 0,"panorama": "/assets/images/360-view-1.jpg","hotSpots": [{"pitch": -9.1,"yaw": 102.9,"type": "scene","sceneId": "scenes-2"}]},"scenes-2": {"hfov": 110,"pitch": 0,"yaw": 0,"panorama": "/assets/images/360-view-5.jpg","hotSpots": [{"pitch": -12.1,"yaw": 132.9,"type": "scene","sceneId": "scenes-1"}]}}}'>
                                <span class="panorama__listing__item__img" style="background-image: url(/assets/images/about-360-thumb-1.jpg);">
                                    <img src="/assets/images/about-360-thumb-1.jpg" alt="">
                                </span>
                            <span class="panorama__listing__item__title">Green House</span>
                        </a>
                    </div>
                    <!-- / item -->
                    <div class="panorama__listing__item">
                        <a class="panorama__listing__item__inner" href="javascript:void(0);" data-option='{"type": "equirectangular","autoLoad": true,"showControls": false,"default": {"firstScene": "scenes-1"},"scenes": {"scenes-1": {"hfov": 110,"pitch": -3,"yaw": 117,"panorama": "/assets/images/360-view-2.jpg"}}}'>
                                <span class="panorama__listing__item__img" style="background-image: url(/assets/images/about-360-thumb-2.jpg);">
                                    <img src="/assets/images/about-360-thumb-2.jpg" alt="">
                                </span>
                            <span class="panorama__listing__item__title">Nursery Garden</span>
                        </a>
                    </div>
                    <!-- / item -->
                    <div class="panorama__listing__item">
                        <a class="panorama__listing__item__inner" href="javascript:void(0);" data-option='{"type": "equirectangular","autoLoad": true,"showControls": false,"default": {"firstScene": "scenes-1"},"scenes": {"scenes-1": {"hfov": 200,"pitch": -3,"yaw": 117,"panorama": "/assets/images/360-view-10.jpg"}}}'>
                                <span class="panorama__listing__item__img" style="background-image: url(/assets/images/about-360-thumb-3.jpg);">
                                    <img src="/assets/images/about-360-thumb-3.jpg" alt="">
                                </span>
                            <span class="panorama__listing__item__title">Bio-Pro Factory</span>
                        </a>
                    </div>
                    <!-- / item -->
                    <div class="panorama__listing__item">
                        <a class="panorama__listing__item__inner" href="javascript:void(0);" data-option='{"type": "equirectangular","autoLoad": true,"showControls": false,"default": {"firstScene": "scenes-1"},"scenes": {"scenes-1": {"hfov": 200,"pitch": -3,"yaw": 117,"panorama": "/assets/images/360-view-11.jpg"}}}'>
                                <span class="panorama__listing__item__img" style="background-image: url(/assets/images/about-360-thumb-4.jpg);">
                                    <img src="/assets/images/about-360-thumb-4.jpg" alt="">
                                </span>
                            <span class="panorama__listing__item__title">Packaging Factory</span>
                        </a>
                    </div>
                    <!-- / item -->
                    <div class="panorama__listing__item">
                        <a class="panorama__listing__item__inner" href="javascript:void(0);" data-option='{"type": "equirectangular","autoLoad": true,"showControls": false,"default": {"firstScene": "scenes-1"},"scenes": {"scenes-1": {"hfov": 200,"pitch": -3,"yaw": 117,"panorama": "/assets/images/360-view-12.jpg"}}}'>
                                <span class="panorama__listing__item__img" style="background-image: url(/assets/images/about-360-thumb-5.jpg);">
                                    <img src="/assets/images/about-360-thumb-5.jpg" alt="">
                                </span>
                            <span class="panorama__listing__item__title">Flower shop</span>
                        </a>
                    </div>
                    <!-- / item -->
                    <div class="panorama__listing__item">
                        <a class="panorama__listing__item__inner" href="javascript:void(0);" data-option='{"type": "equirectangular","autoLoad": true,"showControls": false,"default": {"firstScene": "scenes-1"},"scenes": {"scenes-1": {"hfov": 200,"pitch": -3,"yaw": 117,"panorama": "/assets/images/360-view-13.jpg"}}}'>
                                <span class="panorama__listing__item__img" style="background-image: url(/assets/images/about-360-thumb-6.jpg);">
                                    <img src="/assets/images/about-360-thumb-6.jpg" alt="">
                                </span>
                            <span class="panorama__listing__item__title">Green House</span>
                        </a>
                    </div>
                    <!-- / item -->
                    <div class="panorama__listing__item">
                        <a class="panorama__listing__item__inner" href="javascript:void(0);" data-option='{"type": "equirectangular","autoLoad": true,"showControls": false,"default": {"firstScene": "scenes-1"},"scenes": {"scenes-1": {"hfov": 200,"pitch": -3,"yaw": 117,"panorama": "/assets/images/360-view-14.jpg"}}}'>
                                <span class="panorama__listing__item__img" style="background-image: url(/assets/images/about-360-thumb-7.jpg);">
                                    <img src="/assets/images/about-360-thumb-7.jpg" alt="">
                                </span>
                            <span class="panorama__listing__item__title">Green House</span>
                        </a>
                    </div>
                    <!-- / item -->
                </div>
            </div>
            <!-- / Listing -->
        </div>
        <!-- / panorama -->
    </section>
@endsection