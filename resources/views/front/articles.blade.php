@extends("front.layout")
@section("content")
    <!-- Start Page Banner -->
    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>Articles</h2>
                        <ul>
                            <li>
                                <a href="{{ url("/") }}">Home</a>
                            </li>
                            <li>Articles</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

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
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="pagination-area">
                        {!! $data['articles']->links() !!}

                        {{--                        <a href="#" class="prev page-numbers">--}}
{{--                            <i class='bx bx-chevron-left'></i>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="page-numbers">1</a>--}}
{{--                        <span class="page-numbers current" aria-current="page">2</span>--}}
{{--                        <a href="#" class="page-numbers">3</a>--}}
{{--                        <a href="#" class="page-numbers">4</a>--}}
{{--                        <a href="#" class="next page-numbers">--}}
{{--                            <i class='bx bx-chevron-right'></i>--}}
{{--                        </a>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->
@endsection
