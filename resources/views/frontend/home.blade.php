@extends('frontend.layouts.app')


@section('main_content')
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

    <!-- Hero Section Start -->
    <section class="hero-section hero-1 style-hero-2">
        <div class="array-button">
            <button class="array-prev"><i class="fas fa-long-arrow-left"></i></button>
            <button class="array-next"><i class="fas fa-long-arrow-right"></i></button>
        </div>
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-image bg-cover" style="background-image: url('assets/img/hero/hero-4.jpg');">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="hero-content text-center">
                                    <h5 data-animation="fadeInUp" data-delay="1.3s">Our Mission: Food, Education,
                                        Medicine</h5>
                                    <h1 data-animation="fadeInUp" data-delay="1.5s">
                                        More charity. Make More <br> better life.
                                    </h1>
                                    <div class="hero-button">
                                        <a href="" data-animation="fadeInUp" data-delay="1.7s"
                                            class="theme-btn">View Causes</a>
                                        <a href="donation-details.html" data-animation="fadeInUp" data-delay="1.9s"
                                            class="theme-btn transparent-btn">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-image bg-cover" style="background-image: url('assets/img/hero/hero-3.jpg');">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="hero-content text-center">
                                    <h5 data-animation="fadeInUp" data-delay="1.3s">Our Mission: Food, Education,
                                        Medicine</h5>
                                    <h1 data-animation="fadeInUp" data-delay="1.5s">
                                        More charity. Make More <br> better life.
                                    </h1>
                                    <div class="hero-button">
                                        <a href="" data-animation="fadeInUp" data-delay="1.7s"
                                            class="theme-btn">View Causes</a>
                                        <a href="donation-details.html" data-animation="fadeInUp" data-delay="1.7s"
                                            class="theme-btn transparent-btn">Donate Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promo Section Start -->
    <section class="promo-section section-padding pt-0">
        <div class="container">
            <div class="promo-wrapper promo-style-2">
                <div class="row g-0">
                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="single-promo-box-items bg-cover"
                            style="background-image: url('assets/img/support-girl.jpg');">
                            <div class="icon">
                                <img src="assets/img/hand.png" alt="img">
                            </div>
                            <div class="content">
                                <h3><a href="donation-details.html">Make Donation</a></h3>
                                <p>
                                    The Spring is a passionate and determined group
                                    of monthly givers on a mission
                                </p>
                                <a href="donation-details.html" class="link-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="single-promo-box-items style-2 bg-cover"
                            style="background-image: url('assets/img/waterboy.jpg');">
                            <div class="icon">
                                <img src="assets/img/world.png" alt="img">
                            </div>
                            <div class="content">
                                <h3><a href="donation-details.html">Foundries For Grow</a></h3>
                                <p>
                                    The Spring is a passionate and determined group
                                    of monthly givers on a mission
                                </p>
                                <a href="donation-details.html" class="link-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section Start -->
    <section class="about-section section-padding pt-0">
        <div class="container">
            <div class="about-wrapper-2">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="about-image-items">
                            <div class="video-box">
                                <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"
                                    class="video-buttton ripple video-popup">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                            <div class="row g-4 align-items-center">
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                    <div class="about-image-1">
                                        <img src="assets/img/about/03.jpg" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                                    <div class="about-image-2">
                                        <img src="assets/img/about/04.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <span class="sub-title color-2 wow fadeInUp"><i class="far fa-heart"></i>About
                                    Us</span>
                                <h2 class="mt-char-animation">
                                    We’ve Funded <span class="count">44</span><span>k</span>
                                    Dollars Over
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Your $40.00 monthly donation can give 12 people clean water every <br> year. 100% funds
                                water projects.
                            </p>
                            <div class="list-area">
                                <div class="list-items">
                                    <i class="fas fa-check"></i>
                                    <div class="content">
                                        <h5>Quick Fundraising</h5>
                                        <p>
                                            Charity Navigator's Giving you
                                            support multiple
                                        </p>
                                    </div>
                                </div>
                                <div class="list-items">
                                    <i class="fas fa-check"></i>
                                    <div class="content">
                                        <h5>Join Our Team</h5>
                                        <p>
                                            Charity Navigator's Giving you
                                            support multiple
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="about-button wow fadeInUp" data-wow-delay=".5s">
                                <a href="about.html" class="theme-btn transparent-btn-2">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Donation Section Start -->
    <section class="donation-section fix section-padding pt-0">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="donation-card-items">
                        <div class="icon">
                            <img src="assets/img/donation/icon-1.png" alt="img">
                        </div>
                        <div class="content">
                            <h3><a href="donation-details.html">Healthy Foods</a></h3>
                            <p>
                                There are only a few times in each of our lives that we get to witness a truly historic
                                global ccomplishment: Ending smallpox, tearing
                            </p>
                            <a href="donation-details.html" class="donation-btn"><i class="fal fa-plus"></i> read
                                more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="donation-card-items">
                        <div class="icon">
                            <img src="assets/img/donation/icon-2.png" alt="img">
                        </div>
                        <div class="content">
                            <h3><a href="donation-details.html">Pure Water</a></h3>
                            <p>
                                There are only a few times in each of our lives that we get to witness a truly historic
                                global ccomplishment: Ending smallpox, tearing
                            </p>
                            <a href="donation-details.html" class="donation-btn"><i class="fal fa-plus"></i> read
                                more</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="donation-card-items">
                        <div class="icon">
                            <img src="assets/img/donation/icon-3.png" alt="img">
                        </div>
                        <div class="content">
                            <h3><a href="donation-details.html">Medical Facilities</a></h3>
                            <p>
                                There are only a few times in each of our lives that we get to witness a truly historic
                                global ccomplishment: Ending smallpox, tearing
                            </p>
                            <a href="donation-details.html" class="donation-btn"><i class="fal fa-plus"></i> read
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Video Section Start -->
    <section class="cta-video-section-2 fix section-padding bg-cover"
        style="background-image: url('assets/img/cta-video.jpg');">
        <div class="container">
            <div class="cta-video-wrapper d-block center">
                <div class="section-title">
                    <span class="sub-title color-2 wow fadeInUp"><i class="far fa-heart"></i>Life Changing
                        Video</span>
                    <h2 class="mt-char-animation text-white">
                        Joel Orphanage Of <br>
                        Ministry Uganda
                    </h2>
                </div>
                <div class="video-play-btn pt-4 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn ripple video-popup">
                        <i class="fas fa-play"></i>
                    </a>
                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-text video-popup wow fadeInUp"
                        data-wow-delay=".5s">
                        Play Video
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Causes Section Start -->
    <section class="causes-section-2 fix section-padding fix section-bg">
        <div class="container">
            <div class="section-title">
                <span class="sub-title color-2 wow fadeInUp"><i class="far fa-heart"></i>Help The People</span>
                <h2 class="mt-char-animation">
                    Our <span>Popular</span> Causes
                </h2>
            </div>
            <div class="swiper causes-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="causes-card-items">
                            <div class="causes-image">
                                <img src="assets/img/causes/01.png" alt="img">
                            </div>
                            <div class="causes-content">
                                <h3>
                                    <a href="{{ route('frontend.layouts.UI.show') }}">Raise Fund For Clean & Healthy Food</a>
                                </h3>
                                <p>
                                    There are only a few times in each of our lives that we get to witness.
                                </p>
                                <div class="progress-items">
                                    <span class="point">
                                        70%
                                    </span>
                                    <div class="progress">
                                        <div class="progress-bar" data-wow-duration=".9s" role="progressbar"
                                            style="width: 70%;" aria-valuenow="95" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress-goals">
                                        <span>Raised <b> $4,407</b></span>
                                        <span>Goal <b> $10.000</b></span>
                                    </div>
                                </div>
                                <a href="donation-details.html" class="theme-btn transparent-btn-2"><i
                                        class="far fa-heart"></i> Donate Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="causes-card-items">
                            <div class="causes-image">
                                <img src="assets/img/causes/02.png" alt="img">
                            </div>
                            <div class="causes-content">
                                <h3>
                                    <a href="{{ route('frontend.layouts.UI.show') }}">Give African Child A Good
                                        Education</a>
                                </h3>
                                <p>
                                    There are only a few times in each of our lives that we get to witness.
                                </p>
                                <div class="progress-items">
                                    <span class="point">
                                        90%
                                    </span>
                                    <div class="progress">
                                        <div class="progress-bar" data-wow-duration=".9s" role="progressbar"
                                            style="width: 90%;" aria-valuenow="95" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress-goals">
                                        <span>Raised <b> $4,407</b></span>
                                        <span>Goal <b> $10.000</b></span>
                                    </div>
                                </div>
                                <a href="donation-details.html" class="theme-btn transparent-btn-2"><i
                                        class="far fa-heart"></i> Donate Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="causes-card-items">
                            <div class="causes-image">
                                <img src="assets/img/causes/03.png" alt="img">
                            </div>
                            <div class="causes-content">
                                <h3>
                                    <a href="{{ route('frontend.layouts.UI.show') }}">Raise Fund For Clean &
                                        Healthy Food</a>
                                </h3>
                                <p>
                                    There are only a few times in each of our lives that we get to witness.
                                </p>
                                <div class="progress-items">
                                    <span class="point">
                                        55%
                                    </span>
                                    <div class="progress">
                                        <div class="progress-bar" data-wow-duration=".9s" role="progressbar"
                                            style="width: 55%;" aria-valuenow="95" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <div class="progress-goals">
                                        <span>Raised <b> $4,407</b></span>
                                        <span>Goal <b> $10.000</b></span>
                                    </div>
                                </div>
                                <a href="donation-details.html" class="theme-btn transparent-btn-2"><i
                                        class="far fa-heart"></i> Donate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand Section Start -->
    <div class="brand-section bg-cover section-padding" style="background-image: url('assets/img/brand/brand-bg.png');">
        <div class="container">
            <div class="title-wrap wow fadeInUp" data-wow-delay=".3s">
                <p>Our Sponsors</p>
            </div>
            <div class="row g-4 align-items-center justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay=".2s">
                    <div class="brand-image">
                        <img src="assets/img/brand/1.png" alt="img">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay=".4s">
                    <div class="brand-image">
                        <img src="assets/img/brand/2.png" alt="img">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay=".6s">
                    <div class="brand-image">
                        <img src="assets/img/brand/3.png" alt="img">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay=".8s">
                    <div class="brand-image">
                        <img src="assets/img/brand/4.png" alt="img">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay=".2s">
                    <div class="brand-image">
                        <img src="assets/img/brand/5.png" alt="img">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay=".4s">
                    <div class="brand-image active">
                        <img src="assets/img/brand/6.png" alt="img">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay=".6s">
                    <div class="brand-image">
                        <img src="assets/img/brand/7.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery Section Start -->
    <div class="gallery-section fix section-padding">
        <div class="container-fluid">
            <div class="gallery-wrappper">
                <div class="gallery-image wow fadeInUp" data-wow-delay=".2s">
                    <img src="assets/img/gallery/gallery-1.jpg" alt="img">
                    <div class="gallery-content">
                        <p>Charity</p>
                        <h4>Education</h4>
                    </div>
                </div>
                <div class="gallery-image wow fadeInUp" data-wow-delay=".4s">
                    <img src="assets/img/gallery/gallery-2.jpg" alt="img">
                    <div class="gallery-content">
                        <p>Charity</p>
                        <h4>Education</h4>
                    </div>
                </div>
                <div class="gallery-image wow fadeInUp" data-wow-delay=".6s">
                    <img src="assets/img/gallery/gallery-3.jpg" alt="img">
                    <div class="gallery-content">
                        <p>Charity</p>
                        <h4>Education</h4>
                    </div>
                </div>
                <div class="gallery-image wow fadeInUp" data-wow-delay=".8s">
                    <img src="assets/img/gallery/gallery-4.jpg" alt="img">
                    <div class="gallery-content">
                        <p>Charity</p>
                        <h4>Education</h4>
                    </div>
                </div>
                <div class="gallery-image wow fadeInUp" data-wow-delay=".9s">
                    <img src="assets/img/gallery/gallery-5.jpg" alt="img">
                    <div class="gallery-content">
                        <p>Charity</p>
                        <h4>Education</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Causes Section Start -->
    <section class="event-section fix section-padding fix section-bg">
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title color-2 wow fadeInUp"><i class="far fa-heart"></i>Events</span>
                <h2 class="mt-char-animation">
                    Upcoming Events
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="event-box-items bg-cover"
                        style="background-image: url('assets/img/event/event-card-bg.jpg');">
                        <div class="cat-name"> <a href="events.html">Water Day</a> </div>
                        <span>24th January 2024</span>
                        <h3><a href="event-details.html">2024 Water Full Day Main Conference</a></h3>
                        <p>
                            <i class="fal fa-map-marker-alt"></i> M12/A Miranda Hall Town Hall Street New York,
                            United States
                        </p>
                        <a href="event-details.html" class="buy-ticket"><i class="fal fa-chair"></i>Book Your
                            Seat</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="event-box-items bg-cover"
                        style="background-image: url('assets/img/event/event-card-bg.jpg');">
                        <div class="cat-name"> <a href="events.html">Friendship Day</a> </div>
                        <span>24th May 2024</span>
                        <h3><a href="event-details.html">How We Can Be A Good Friends</a></h3>
                        <p>
                            <i class="fal fa-map-marker-alt"></i> M12/A Miranda Hall Town Hall Street New York,
                            United States
                        </p>
                        <a href="event-details.html" class="buy-ticket"><i class="fal fa-chair"></i>Book Your
                            Seat</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="event-box-items bg-cover"
                        style="background-image: url('assets/img/event/event-card-bg.jpg');">
                        <div class="cat-name"> <a href="events.html">Teachers Day</a> </div>
                        <span>24th January 2024</span>
                        <h3><a href="event-details.html">Teachers Presentation Day of 2024</a></h3>
                        <p>
                            <i class="fal fa-map-marker-alt"></i> M12/A Miranda Hall Town Hall Street New York,
                            United States
                        </p>
                        <a href="event-details.html" class="buy-ticket"><i class="fal fa-chair"></i>Book Your
                            Seat</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Donation Section Start -->
    <section class="donation-section-2 fix section-padding bg-cover" style="background-image: url();">
        <div class="donation-image">
            <img src="assets/img/donate-img.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-7">
                    <div class="donation-content-area">
                        <div class="section-title">
                            <span class="sub-title color-2 wow fadeInUp">JOIN US NOW </span>
                            <h2 class="mt-char-animation text-white">Support Kids By Raising Valuable Donations</h2>
                        </div>
                        <div class="donate-amount mt-4 wow fadeInUp" data-wow-delay=".5s">
                            <button class="active amount-btn">$10</button>
                            <button class="amount-btn">$30</button>
                            <button class="amount-btn">$50</button>
                            <button class="amount-btn">$100</button>
                            <button class="amount-btn">$200</button>
                        </div>
                        <div class="donate-now mt-4 wow fadeInUp" data-wow-delay=".7s">
                            <input type="text" class="addAmount-value" placeholder="$ Costume Amount">
                            <div class="btn-one">
                                <span class="btn-circle">
                                </span>
                                <a href="#" class="theme-btn">
                                    <span class="btn-text">
                                        DONATE NOW
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Volunter Section Start -->
    <section class="volunter-section fix section-padding">
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title color-2 wow fadeInUp"><i class="far fa-heart"></i>OUR VOLUNTEERS</span>
                <h2 class="mt-char-animation">
                    Our Volunteers
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="volunter-items">
                        <div class="volunter-image">
                            <img src="assets/img/volunter/01.jpg" alt="img">
                            <div class="volunter-content text-center">
                                <h3><a href="team-details.html">Shikhon Islam</a></h3>
                                <p>Volunteer</p>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="volunter-items">
                        <div class="volunter-image">
                            <img src="assets/img/volunter/02.jpg" alt="img">
                            <div class="volunter-content text-center">
                                <h3><a href="team-details.html">Amelia Maeve</a></h3>
                                <p>Volunteer</p>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="volunter-items">
                        <div class="volunter-image">
                            <img src="assets/img/volunter/03.jpg" alt="img">
                            <div class="volunter-content text-center">
                                <h3><a href="team-details.html">Salman Islam</a></h3>
                                <p>Volunteer</p>
                            </div>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section Start -->
    <section class="testimonial-section fix section-bg section-padding">
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title color-2 wow fadeInUp">
                    Our testimonials
                </span>
                <h2 class="mt-char-animation">Our Clients Feedback</h2>
            </div>
            <div class="row g-4">
                <div class="swiper testimonial-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-card-item">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p>It uses a dictionary of over 200 Latin words, combined with handful model tence
                                    structures, to generate Lorem Ipsum which lo reasonable. The gener Lorem Ipsum done
                                </p>
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                        style="background-image: url('assets/img/testimonial/client-1.png');"></div>
                                    <div class="content">
                                        <h4>Shikhon Islam</h4>
                                        <span>Web Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card-item">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p>It uses a dictionary of over 200 Latin words, combined with handful model tence
                                    structures, to generate Lorem Ipsum which lo reasonable. The gener Lorem Ipsum done
                                </p>
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                        style="background-image: url('assets/img/testimonial/client-2.png');"></div>
                                    <div class="content">
                                        <h4>Albert Flores</h4>
                                        <span>Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card-item">
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p>It uses a dictionary of over 200 Latin words, combined with handful model tence
                                    structures, to generate Lorem Ipsum which lo reasonable. The gener Lorem Ipsum done
                                </p>
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                        style="background-image: url('assets/img/testimonial/client-3.png');"></div>
                                    <div class="content">
                                        <h4>Guy Hawkins</h4>
                                        <span>Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-dot center pt-5">
                        <div class="dot"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section Start -->
    <section class="news-section section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <span class="sub-title color-2 wow fadeInUp"><i class="far fa-heart"></i>Our Insights</span>
                <h2 class="mt-char-animation">
                    News Feeds
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="assets/img/news/04.jpg" alt="img">
                        </div>
                        <div class="news-content">
                            <span><i class="far fa-calendar-alt"></i> 24th September 2024</span>
                            <h3><a href="news-details.html">Group of donors is a
                                    cover operating</a></h3>
                            <p>
                                Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed do eiusmod tempor
                                incididunt
                            </p>
                            <a href="news-details.html" class="link-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="assets/img/news/05.jpg" alt="img">
                        </div>
                        <div class="news-content">
                            <span><i class="far fa-calendar-alt"></i> 24th September 2024</span>
                            <h3><a href="news-details.html">Everyone Deserves Clean Water</a></h3>
                            <p>
                                Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed do eiusmod tempor
                                incididunt
                            </p>
                            <a href="news-details.html" class="link-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="assets/img/news/06.jpg" alt="img">
                        </div>
                        <div class="news-content">
                            <span><i class="far fa-calendar-alt"></i> 24th September 2024</span>
                            <h3><a href="news-details.html">Childhood Teaching Free support</a></h3>
                            <p>
                                Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed do eiusmod tempor
                                incididunt
                            </p>
                            <a href="news-details.html" class="link-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Contact Start -->
    <div class="footer-contact-section">
        <div class="container">
            <div class="footer-contact-wrapper">
                <div class="row g-4 justify-content-between">
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay=".3s">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="assets/img/logo/white-logo.png" alt="img">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                        <div class="contact-us-items">
                            <div class="single-info">
                                <div class="icon"> <i class="fal fa-envelope"></i> </div>
                                <div class="contact">
                                    <h4>Email Address</h4>
                                    <p><a href="mailto:info@example.com">info@example.com</a></p>
                                </div>
                            </div>
                            <div class="single-info">
                                <div class="icon"> <i class="fal fa-phone"></i></div>
                                <div class="contact">
                                    <h4>Phone Number</h4>
                                    <p><a href="tel:98098709809">980-987-098-09</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 wow fadeInUp" data-wow-delay=".7s">
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-vimeo-v"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
