@extends("front.layout")
@section("content")
    <!-- Start Page Banner -->
    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>Events</h2>
                        <ul>
                            <li>
                                <a href="{{ url("/") }}">Home</a>
                            </li>
                            <li>Events</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->
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
@endsection
