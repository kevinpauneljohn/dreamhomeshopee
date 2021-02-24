@extends('layouts.master')

@section('title','Dream Home Shopee')

@section('content')

    <!-- Banner start -->
    <div class="banner" id="banner">
        <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item banner-max-height active item-bg">
                    <img class="d-block w-100 h-100" src="http://placehold.it/1920x1080" alt="banner">
                    <div class="carousel-caption banner-slider-inner h-100"></div>
                </div>
                <div class="carousel-item banner-max-height item-bg">
                    <img class="d-block w-100 h-100" src="http://placehold.it/1920x1080" alt="banner">
                    <div class="carousel-caption banner-slider-inner h-100"></div>
                </div>
                <div class="carousel-item banner-max-height item-bg">
                    <img class="d-block w-100 h-100" src="http://placehold.it/1920x1080" alt="banner">
                    <div class="carousel-caption banner-slider-inner h-100"></div>
                </div>
                <div class="carousel-caption d-flex h-100 banner-slider-inner-2">
                    <div class="carousel-content container">
                        <div class="text-center bi-3">
                            <div class="clearfix">
                                <h3>Find Your Amazing Home</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                            </div>
                            <x-property-search type="search-1"></x-property-search>

                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-secton">
                <ol class="carousel-indicators">
                    <li data-target="#bannerCarousole" data-slide-to="0" class="active"></li>
                    <li data-target="#bannerCarousole" data-slide-to="1"></li>
                    <li data-target="#bannerCarousole" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Banner end -->

    <!-- Featured Properties start -->
    <div class="featured-properties content-area-12">
        <x-featured-property></x-featured-property>
    </div>
    <!-- Featured Properties end -->

    <!-- Services start -->
    <div class="services content-area bg-grea-3">
        <x-services></x-services>
    </div>
    <!-- Services end -->

    <!-- Categories strat -->
    <div class="categories content-area-7">
        <x-most-popular></x-most-popular>
    </div>
    <!-- Categories end -->

    <!-- Counters 2 strat -->
    <div class="counters-2">
        <x-counters></x-counters>
    </div>
    <!-- Counters 2 end -->

    <!-- Our team start -->
    <div class="our-team content-area">
        <x-our-agents></x-our-agents>
    </div>
    <!-- Our team end -->

    <!-- Testimonial start -->
    <div class="testimonial content-area-5">
        <x-testimonial></x-testimonial>
    </div>
    <!-- Testimonial end -->

    <!-- Blog start -->
    <div class="blog content-area">
        <x-our-blog></x-our-blog>
    </div>
    <!-- Blog end -->

    <x-get-intouch></x-get-intouch>
@endsection
