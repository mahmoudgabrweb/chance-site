<!-- Start Footer Area -->
<section class="footer-area ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3 class="widgettitle red_sketch">About Us</h3>
                    <div class="logo">
                        <h2>
                            <a href="{{ url("/") }}">Chance</a>
                        </h2>
                    </div>
                    <p>{{ setting("site.footer_bio") }}</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3 class="widgettitle green_sketch">Contact Us</h3>

                    <ul class="footer-contact-info">
                        <li>
                            <i class='bx bxs-phone'></i>
                            <span>Phone</span>
                            <a href="tel:{{ setting("site.phone") }}">{{ setting("site.phone") }}</a>
                        </li>
                        <li>
                            <i class='bx bx-envelope'></i>
                            <span>Email</span>
                            <a href="javascript:;"><span class="">{{ setting("site.email") }}</span></a>
                        </li>
                        <li>
                            <i class='bx bx-map'></i>
                            <span>Address</span>
                            {{ setting("site.address") }}
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget pl-5">
                    <h3 class="widgettitle yellow_sketch">Activities</h3>

                    <ul class="quick-links">
                        <li>
                            <a href="#">Maths Olympiad</a>
                        </li>
                        <li>
                            <a href="#">Art Competition</a>
                        </li>
                        <li>
                            <a href="#">English Novels</a>
                        </li>
                        <li>
                            <a href="#">Science Competition</a>
                        </li>
                        <li>
                            <a href="#">Teachers Day</a>
                        </li>
                        <li>
                            <a href="#">World Kids Day</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget">
                    <h3 class="widgettitle steelblue_sketch">Photo Gallery</h3>

                    <ul class="photo-gallery-list">
                        <li>
                            <div class="box">
                                <a href="{{ url("assets/img/gallery/gallery-1.jpg") }}" class="gallery-btn"
                                   data-imagelightbox="popup-btn">
                                    <img src="{{ url("assets/img/footer-gallery/footer-gallery-1.jpg") }}" alt="image">
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="box">
                                <a href="{{ url("assets/img/gallery/gallery-1.jpg") }}" class="gallery-btn"
                                   data-imagelightbox="popup-btn">
                                    <img src="{{ url("assets/img/footer-gallery/footer-gallery-2.jpg") }}" alt="image">
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="box">
                                <a href="{{ url("assets/img/gallery/gallery-1.jpg") }}" class="gallery-btn"
                                   data-imagelightbox="popup-btn">
                                    <img src="{{ url("assets/img/footer-gallery/footer-gallery-3.jpg") }}" alt="image">
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="box">
                                <a href="{{ url("assets/img/gallery/gallery-1.jpg") }}" class="gallery-btn"
                                   data-imagelightbox="popup-btn">
                                    <img src="{{ url("assets/img/footer-gallery/footer-gallery-4.jpg") }}" alt="image">
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="box">
                                <a href="{{ url("assets/img/gallery/gallery-1.jpg") }}" class="gallery-btn"
                                   data-imagelightbox="popup-btn">
                                    <img src="{{ url("assets/img/footer-gallery/footer-gallery-5.jpg") }}" alt="image">
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="box">
                                <a href="{{ url("assets/img/gallery/gallery-1.jpg") }}" class="gallery-btn"
                                   data-imagelightbox="popup-btn">
                                    <img src="{{ url("assets/img/footer-gallery/footer-gallery-6.jpg") }}" alt="image">
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="box">
                                <a href="{{ url("assets/img/gallery/gallery-1.jpg") }}" class="gallery-btn"
                                   data-imagelightbox="popup-btn">
                                    <img src="{{ url("assets/img/footer-gallery/footer-gallery-1.jpg") }}" alt="image">
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="box">
                                <a href="{{ url("assets/img/gallery/gallery-1.jpg") }}" class="gallery-btn"
                                   data-imagelightbox="popup-btn">
                                    <img src="{{ url("assets/img/footer-gallery/footer-gallery-2.jpg") }}" alt="image">
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="box">
                                <a href="{{ url("assets/img/gallery/gallery-1.jpg") }}" class="gallery-btn"
                                   data-imagelightbox="popup-btn">
                                    <img src="{{ url("assets/img/footer-gallery/footer-gallery-3.jpg") }}" alt="image">
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Footer Area -->
<!-- Start Copy Right Area -->
<div class="copyright">
    <div class="container">
        <p class="copyright-info">© 2023 Chance. All rights reserved.
        </p>
        <div class="footer-links">
            <p>Follow us</p>
            <ul class="social">
                <li>
                    <a href="{{ setting("site.facebook") }}" target="_blank">
                        <i class='bx bxl-facebook'></i>
                    </a>
                </li>
                <li>
                    <a href="{{ setting("site.twitter") }}" target="_blank">
                        <i class='bx bxl-twitter'></i>
                    </a>
                </li>
                <li>
                    <a href="{{ setting("site.linkedin") }}" target="_blank">
                        <i class='bx bxl-linkedin'></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Copy Right Area -->
<!-- Start Go Top Area -->
<div class="upToScroll hidden-xs">
    <a href="#" class="scrollToTop icon-up-open-big" title="Back to top"> </a>
</div>
<!-- End Go Top Area -->

<!-- serviceModal -->
<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="serviceModalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="single-activities">
                    <div class="number">
                        <span></span>
                    </div>
                    <div class="activities-content">
                        <h3>
                            <a href="javascript:;"></a>
                        </h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- acceptbookingModal -->
<div class="modal fade" id="acceptbookingModal" tabindex="-1" aria-labelledby="acceptbookingModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="acceptbookingModalLabel">Read Privacy Policy</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="readPolicy">
                    <h6>Read Privacy Policy and Re-attach the Downloaded File Again</h6>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <a href="./assets/pdf/test.pdf" class="downalodFile" download><i
                                    class='bx bxs-file-pdf'></i> Click to Download this file</a>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="readpolicyBtn">
                                <label class="form-check-label" for="readpolicyBtn">I've read And accept</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Jquery Slim JS -->
<script src="{{ url("assets/js/jquery.min.js") }}"></script>
<!-- Bootstrap JS -->
<script src="{{ url("assets/js/bootstrap.bundle.min.js") }}"></script>
<!-- Meanmenu JS -->
<script src="{{ url("assets/js/jquery.meanmenu.js") }}"></script>
<!-- Owl Carousel JS -->
<script src="{{ url("assets/js/owl.carousel.min.js") }}"></script>
<!-- Magnific Popup JS -->
<script src="{{ url("assets/js/jquery.magnific-popup.min.js") }}"></script>
<!-- Imagelightbox JS -->
<script src="{{ url("assets/js/imagelightbox.min.js") }}"></script>
<!-- Odometer JS -->
<script src="{{ url("assets/js/odometer.min.js") }}"></script>
<!-- Jquery Appear JS -->
<script src="{{ url("assets/js/jquery.appear.min.js") }}"></script>
<!-- Custom JS -->
<script src="{{ url("assets/js/main.js") }}"></script>
<script>
    $(document).ready(function () {
        var isDownloadClicked = false;
        var isModalShown = localStorage.getItem('isModalShown');
        if (window.location.href.indexOf('book_appointment') > -1 && !isModalShown) { // check if the URL contains 'book_appointment' and the modal has not been shown before
            $('#acceptbookingModal').modal({
                backdrop: 'static',
                keyboard: false // prevent closing the modal by clicking outside or pressing ESC key
            });
            $('#acceptbookingModal').modal('show');

            $('.downalodFile').on('click', function (event) {
                // event.preventDefault(); // prevent the default action of following the link
                isDownloadClicked = true;
                $('#readpolicyBtn').on('change', function () {
                    if ($(this).is(':checked')) { // check if the checkbox is checked
                        $('#acceptbookingModal').modal('hide'); // hide the modal
                        localStorage.setItem('isModalShown', true); // set the flag to indicate that the modal has been shown
                    }
                });
            });
        }

        $(document).on("click", ".activities-btn", function (e) {
            e.preventDefault();
            let title = $(this).closest(".activities-content").find(".title-section").text();
            $("#serviceModal .modal-title, #serviceModal .activities-content h3 a").html(title);

            let key = $(this).closest(".activities-content").find(".key-section").text();
            let color = $(this).closest(".activities-content").find(".color-section").text();
            $("#serviceModal .single-activities .number span").css("background-color", color).html(key);

            let description = $(this).closest(".activities-content").find(".description-section").text();
            $("#serviceModal .activities-content p").html(description);

            $("#serviceModal").modal("show");
        });
    });
</script>
