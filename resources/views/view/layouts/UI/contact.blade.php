<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    @include('view.components.meta')

    <!-- All CSS -->
    @include('view.layouts.styles')
</head>

<body>

    <!-- Back To Top Start -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>


    <!-- Header Section Start -->
    @include('view.layouts.nav')


    <!-- Search Area Start -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fas fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search...">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--<< Breadcrumb Section Start >>-->
    <div class="breadcrumb-wrapper section-padding bg-cover" {{-- style="background-image: url('assets/img/breadcrumb.jpg');"> --}} <div class="container">
        <div class="page-heading">


        </div>
    </div>
    </div>

        <!-- Contact Info Section Start -->
        <section class="contact-page-wrap section-padding">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="single-contact-card card1">
                            <div class="top-part">
                                <div class="icon">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="title">
                                    <h4>Email Address</h4>
                                    <span>Sent mail asap anytime</span>
                                </div>
                            </div>
                            <div class="bottom-part">                            
                                <div class="info">
                                    <p>info@example.com</p>
                                    <p>jobs@example.com</p>
                                </div>
                                <div class="icon">
                                    <i class="fal fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-contact-card card2">
                            <div class="top-part">
                                <div class="icon">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="title">
                                    <h4>Phone Number</h4>
                                    <span>call us asap anytime</span>
                                </div>
                            </div>
                            <div class="bottom-part">                            
                                <div class="info">
                                    <p>098-098-098-09</p>
                                    <p>+(098) 098-098-765</p>
                                </div>
                                <div class="icon">
                                    <i class="fal fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".7s">
                        <div class="single-contact-card card3">
                            <div class="top-part">
                                <div class="icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="title">
                                    <h4>Office Address</h4>
                                    <span>Sent mail asap anytime</span>
                                </div>
                            </div>
                            <div class="bottom-part">                            
                                <div class="info">
                                    <p>B2, Miranda City Tower</p>
                                    <p>New York, US</p>
                                </div>
                                <div class="icon">
                                    <i class="fal fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="office-google-map-wrapper wow fadeInUp">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>

        <!-- Contact Section Start -->
        <section class="contact-section-2 fix section-padding pt-0">
            <div class="container">
                <div class="main-contact-form-items">
                    <div class="section-title text-center">
                        <span class="sub-title color-2 wow fadeInUp"><i class="fal fa-pen"></i>Write Here</span>
                        <h2 class="mt-char-animation">
                            Get In Touch
                        </h2>
                    </div>
                    <form action="contact.php" id="contact-form" method="POST" class="mt-4 mt-md-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="form-clt">
                                    <input type="text" name="name" id="name" placeholder="Your Name*">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-clt">
                                    <input type="text" name="email" id="email" placeholder="Your Email*">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-clt">
                                    <input type="text" name="text" id="phone" placeholder="Phone*">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-clt">
                                    <input type="text" name="text" id="subject" placeholder="Subject*">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-clt">
                                    <textarea name="message" id="message" placeholder="Write Message*"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="theme-btn center d-block">
                                    Send Your Meassage
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>



    <!-- Footer Section Start -->
    @include('view.layouts.footer')

    <!-- All Javascripts -->
    @include('view.layouts.scripts')

</body>

</html>
