@extends('front.layout')
@section("content")
    <!-- Start Main Banner Area -->
    <div class="main-banner">
        <div class="home-slides owl-carousel owl-theme">


            @foreach($data['sliders'] as $one)
                <div class="main-banner-item banner-item-two">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container-fluid">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="main-banner-content">
                                            <span>{{ $one->header }}</span>
                                            <h1>{{ $one->title }}</h1>
                                            <p>{{ $one->description }}</p>
                                            @if($one->link != "")
                                                <div class="banner-btn">
                                                    <a href="{{ $one->link }}" class="default-btn">
                                                        Learn More
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="main-banner-image-wrap">
                                            <img
                                                src="{{ \Illuminate\Support\Facades\Storage::url($one->images->image_title) }}"
                                                alt="image">

                                            <div class="banner-image-wrap-shape">
                                                <img src="{{ url("assets/img/main-banner/main-banner-shape-1.png") }}"
                                                     alt="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- End Main Banner Area -->

    <!-- Start Who We Are Area -->
    <section class="who-we-are ptb-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="who-we-are-content">
                        <span>About</span>
                        {!! setting('site.about_us') !!}
                        <div class="who-we-are-btn">
                            <a href="{{ url("about-us") }}" class="default-btn">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="who-we-are-image-wrap">
                        <img src="{{ url("assets/img/who-we-are/who-we-are-3.png") }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Who We Are Area -->

    <!-- Start Activities Area -->
    <section class="activities-area ptb-50">
        <div class="container">
            <div class="section-title">
                <span>Our Activities</span>
                <h2>Our More Enjoyable Services</h2>
            </div>

            <div class="row">
                @foreach($data['services'] as $key => $one)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-activities">
                            <div class="number">
                                <span style="background-color: {{ $one->color_code }}">0{{ ++$key }}</span>
                            </div>
                            <div class="activities-content">
                                <span class="key-section d-none">0{{ $key }}</span>
                                <span class="title-section d-none">{{ $one->title }}</span>
                                <span class="color-section d-none">{{ $one->color_code }}</span>
                                <span class="description-section d-none">{{ $one->description }}</span>
                                <h3>
                                    <a href="javascript:;" class="activities-btn">{{ $one->title }}</a>
                                </h3>
                                <p>{{ substr($one->description, 0, 100) }}</p>
                                <a href="javascript:;" class="activities-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

        {{--        <div class="value-shape">--}}
        {{--            <div class="shape-1">--}}
        {{--                <img src="./assets/img/value/value-shape-1.png" alt="image">--}}
        {{--            </div>--}}
        {{--            <div class="shape-2">--}}
        {{--                <img src="./assets/img/value/value-shape-2.png" alt="image">--}}
        {{--            </div>--}}
        {{--            <div class="shape-3">--}}
        {{--                <img src="./assets/img/value/value-shape-3.png" alt="image">--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </section>
    <!-- End Activities Area -->

    <!-- Start Event Area -->
    <section class="event-area event-item-two ptb-50">
        <div class="container-fluid">
            <div class="section-title">
                <span>Events</span>
                <h2>Our Upcoming Online Events For Kids</h2>
            </div>

            <div class="row">

                @foreach($data['events'] as $one)
                    <div class="col-lg-6">
                        <div class="event-box-item">
                            <div class="row align-items-center">
                                <div class="col-md-3">
                                    <div class="event-image">
                                        <a href="{{ generateEventSlug($one->id, $one->title) }}">
                                            <img
                                                src="{{ \Illuminate\Support\Facades\Storage::url($one->images[0]->image_title) }}"
                                                alt="{{ $one->title }}"></a>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="event-content">
                                        <h3>
                                            <a href="{{ generateEventSlug($one->id, $one->title) }}">#{{ $one->title }}</a>
                                        </h3>
                                        <p>{{ $one->title }}</p>
                                        <ul class="event-list">
                                            <li>
                                                <i class="bx bx-time"></i>
                                                {{ getEventStartEndTime($one->start_date, $one->end_date) }}
                                            </li>
                                            <li>
                                                <i class="bx bxs-map"></i>
                                                {{ $one->address }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="event-date">
                                        <h4>{{ date("d", strtotime($one->start_date)) }}</h4>
                                        <span>{{ date("M", strtotime($one->start_date)) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Event Area -->
    <!-- Start Overview Area -->
    <section class="overview-area ptb-50">
        <div class="container">
            <div class="overview-content">
                {!! setting("site.home_intro") !!}
                <div class="overview-btn">
                    <a href="{{ url("book") }}" class="default-btn">Book Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Overview Area -->
    <!-- Start Gallery Area -->
    <div class="gallery-area ptb-50">
        <div class="container">
            <div class="section-title">
                <span>Gallery</span>
                <h2>Our Activities Gallery</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-box">
                        <div class="gallery-inner">
                            <img src="./assets/img/gallery/gallery-1.jpg" alt="image">

                            <a href="./assets/img/gallery/gallery-1.jpg" class="gallery-btn"
                               data-imagelightbox="popup-btn">
                                <i class='bx bx-search-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-box">
                        <div class="gallery-inner">
                            <img src="./assets/img/gallery/gallery-2.jpg" alt="image">

                            <a href="./assets/img/gallery/gallery-2.jpg" class="gallery-btn"
                               data-imagelightbox="popup-btn">
                                <i class='bx bx-search-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-box">
                        <div class="gallery-inner">
                            <img src="./assets/img/gallery/gallery-3.jpg" alt="image">

                            <a href="./assets/img/gallery/gallery-3.jpg" class="gallery-btn"
                               data-imagelightbox="popup-btn">
                                <i class='bx bx-search-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-box">
                        <div class="gallery-inner">
                            <img src="./assets/img/gallery/gallery-4.jpg" alt="image">

                            <a href="./assets/img/gallery/gallery-4.jpg" class="gallery-btn"
                               data-imagelightbox="popup-btn">
                                <i class='bx bx-search-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-box">
                        <div class="gallery-inner">
                            <img src="./assets/img/gallery/gallery-5.jpg" alt="image">

                            <a href="./assets/img/gallery/gallery-5.jpg" class="gallery-btn"
                               data-imagelightbox="popup-btn">
                                <i class='bx bx-search-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-gallery-box">
                        <div class="gallery-inner">
                            <img src="./assets/img/gallery/gallery-6.jpg" alt="image">

                            <a href="./assets/img/gallery/gallery-6.jpg" class="gallery-btn"
                               data-imagelightbox="popup-btn">
                                <i class='bx bx-search-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery Area -->
    <!-- Start Blog Area -->
    <section class="blog-area ptb-50">
        <div class="container">
            <div class="section-title">
                <span>News and Blog</span>
                <h2>Latest News</h2>
            </div>

            <div class="row">

                @foreach($data['articles'] as $one)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-item">
                            <div class="blog-image">
                                <a href="{{ generateArticleSlug($one->id, $one->title) }}">
                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($one->images->image_title) }}"
                                         alt="{{ $one->title }}">
                                </a>
                            </div>

                            <div class="blog-content">
                                <ul class="post-meta">
                                    <li>
                                        <span>By: </span>
                                        <a href="javascript:;">{{ $one->createdByUser->name }}</a>
                                    </li>
                                    <li>
                                        <span>Date: </span>
                                        {{ date("d m Y", strtotime($one->created_at)) }}
                                    </li>
                                </ul>
                                <h3>
                                    <a href="{{ generateArticleSlug($one->id, $one->title) }}">{{ $one->title }}</a>
                                </h3>
                                <p>{{ substr($one->body, 0, 100) }}</p>

                                <div class="blog-btn">
                                    <a href="{{ generateArticleSlug($one->id, $one->title) }}" class="default-btn">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

@endsection
