@extends("front.layout")
@section("content")
    <!-- Start Page Banner -->
    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>{{ $data['details']->title }}</h2>
                        <ul>
                            <li>
                                <a href="{{ url("/") }}">Home</a>
                            </li>
                            <li>{{ $data['details']->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->
    <!-- Start Blog Details Area -->
    <section class="blog-details-area ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-image">
                            <div class="main-banner">
                                <div class="home-slides owl-carousel owl-theme">
                                    <div class="main-banner-item banner-item-two">
                                        <img
                                            src="{{ \Illuminate\Support\Facades\Storage::url($data['details']->images->image_title) }}"
                                            alt="{{ $data['details']->title }}" title="{{ $data['details']->title }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="article-content">
                            <div class="entry-meta">
                                <ul>
                                    <li>
                                        <span>Posted On:</span>
                                        <a href="javascript:;">{{ date("M d, Y", strtotime($data['details']->created_at)) }}</a>
                                    </li>
                                    <li>
                                        <span>Posted By:</span>
                                        <a href="javascript:;">{{ $data['details']->createdByUser->name }}</a>
                                    </li>
                                </ul>
                            </div>

                            {!! $data['details']->body !!}

                        </div>

                        {{--                        <div class="article-footer">--}}
                        {{--                            <div class="article-share">--}}
                        {{--                                <ul class="social">--}}
                        {{--                                    <li><span>Share:</span></li>--}}
                        {{--                                    <li>--}}
                        {{--                                        <a href="#" target="_blank">--}}
                        {{--                                            <i class='bx bxl-facebook'></i>--}}
                        {{--                                        </a>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li>--}}
                        {{--                                        <a href="#" target="_blank">--}}
                        {{--                                            <i class='bx bxl-twitter'></i>--}}
                        {{--                                        </a>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li>--}}
                        {{--                                        <a href="#" target="_blank">--}}
                        {{--                                            <i class='bx bxl-instagram'></i>--}}
                        {{--                                        </a>--}}
                        {{--                                    </li>--}}
                        {{--                                </ul>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area">
                        <section class="widget widget_ketan_posts_thumb">
                            <h3 class="widget-title">Popular Posts</h3>

                            @foreach($data['articles'] as $one)
                                <article class="item">
                                    <a href="{{ generateArticleSlug($one->id, $one->title) }}" class="thumb">
                                        <span class="fullimage cover bg1" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <span>{{ date("M d, Y", strtotime($one->created_at)) }}</span>
                                        <h4 class="title usmall">
                                            <a href="{{ generateArticleSlug($one->id, $one->title) }}">{{ $one->title }}</a>
                                        </h4>
                                    </div>
                                </article>
                            @endforeach

                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Details Area -->
@endsection
