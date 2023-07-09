@extends("front.layout")
@section("content")
    <!-- Start Page Banner -->
    <div class="page-banner-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-banner-content">
                        <h2>Book Appointment</h2>
                        <ul>
                            <li>
                                <a href="{{ url("/") }}">Home</a>
                            </li>
                            <li>Book Appointment</li>
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

            <div class="contact-form">
                <form id="bookingForm">
                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <div class="contact-form">
                                <h3>Ready to Book Your Appointment?</h3>
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
                                                   data-error="Please enter your email"
                                                   placeholder="Your email address">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number"
                                                   class="form-control" required
                                                   data-error="Please enter your phone number"
                                                   placeholder="Your phone number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="sonAge" id="sonAge" class="form-control" required
                                                   data-error="Please enter your Son Age"
                                                   placeholder="Please enter your Son Age">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Pick Appointment Time</option>
                                                <option value="1">12pm - 1pm</option>
                                                <option value="1">1pm - 2pm</option>
                                                <option value="1">3pm - 4pm</option>
                                                <option value="1">5pm - 6pm</option>
                                                <option value="1">6pm - 7pm</option>
                                                <option value="1">7pm - 8pm</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="file" name="file" id="file" class="form-control file" required
                                                   data-error="Please enter your Son Age"
                                                   placeholder="Please enter your Son Age">
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
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="contact-information">
                                <h3>If You Need Any Help ?!</h3>
                                <ul class="contact-list">
                                    <li><i class='bx bx-map'></i> Location: <span>123 king Street, UAE</span></li>
                                    <li><i class='bx bx-phone-call'></i> Call Us: <a href="tel:+01321654214">+01 321 654
                                            214</a></li>
                                    <li><i class='bx bx-envelope'></i> Email Us: <a href="#">info@chance.com</a></li>
                                    <li><i class='bx bx-phone-incoming'></i> Fax: <a
                                            href="tel:+123456789">+123456789</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>
    <!-- End Contact Area -->
@endsection
