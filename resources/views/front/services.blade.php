@extends("front.layout")
@section("content")
    <!-- Start Page Banner -->
    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>All Services</h2>
                        <ul>
                            <li>
                                <a href="?page=index_en">Home</a>
                            </li>
                            <li>All Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

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

        <div class="value-shape">
            <div class="shape-1">
                <img src="{{ url("public/assets/img/value/value-shape-1.png") }}" alt="image">
            </div>
            <div class="shape-2">
                <img src="{{ url("public/assets/img/value/value-shape-2.png") }}" alt="image">
            </div>
            <div class="shape-3">
                <img src="{{ url("public/assets/img/value/value-shape-3.png") }}" alt="image">
            </div>
        </div>
    </section>
    <!-- End Activities Area -->

@endsection
