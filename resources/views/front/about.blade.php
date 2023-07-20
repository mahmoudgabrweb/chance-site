@extends("front.layout")
@section("content")
    <!-- Start Page Banner -->
    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>About Us</h2>
                        <ul>
                            <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Who We Are Area -->
    <section class="who-we-are ptb-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="who-we-are-content">
                        <span>About</span>
                        {!! setting('site.about_us') !!}
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="who-we-are-image-wrap">
                        <img src="{{ url("public/assets/img/who-we-are/who-we-are-3.png") }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Who We Are Area -->

    <!-- Start FAQ Area -->
    <section class="faq-area ptb-50 bk-blue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    Our Mission
                                </a>
                                <p class="accordion-content show">{{ setting('site.mission') }}</p>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    Our Vision
                                </a>
                                <p class="accordion-content">{{ setting('site.vision') }}</p>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    our Goal
                                </a>
                                <p class="accordion-content">{{ setting('site.goal') }}</p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ Area -->
@endsection
