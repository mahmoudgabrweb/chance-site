@extends("front.layout")
@section("content")
    <!-- Start Page Banner -->
    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>Contact</h2>
                        <ul>
                            <li>
                                <a href="{{ url("/") }}">Home</a>
                            </li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Contact Area -->
    <section class="contact-area ptb-50">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <div class="contact-form">
                        <h3>Ready to Get Started?</h3>

                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required
                                               data-error="Please enter your name" placeholder="Your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required
                                               data-error="Please enter your email" placeholder="Your email address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" class="form-control"
                                               required data-error="Please enter your phone number"
                                               placeholder="Your phone number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="subjects" id="subjects" class="form-control" required
                                               data-error="Please enter your subjects" placeholder="Subjects">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="5" required
                                                  data-error="Please enter your message" class="form-control"
                                                  placeholder="Write your message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12">
                    <div class="contact-information">
                        <h3>Here to Help</h3>

                        <ul class="contact-list">
                            <li><i class='bx bx-map'></i> Address: <span>{{ setting("site.address") }}</span></li>
                            <li><i class='bx bx-phone-call'></i> Call Us: <a href="tel:{{ setting("site.phone") }}">{{ setting("site.phone") }}</a>
                            </li>
                            <li><i class='bx bx-envelope'></i> Email Us: <a href="javascript:;">{{ setting("site.email") }}</a></li>
                        </ul>

                        <h3>Opening Hours:</h3>
                        <ul class="opening-hours">
                            {!! setting("site.working_hours") !!}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->

    <!-- Map -->
    <div id="map">
        {!! setting("site.map") !!}
    </div>
    <!-- End Map -->
@endsection
