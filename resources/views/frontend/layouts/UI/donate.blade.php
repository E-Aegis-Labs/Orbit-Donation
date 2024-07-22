<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->

<head>
    <!-- ========== Meta Tags ========== -->
    @include('frontend.components.meta')

    <!-- All CSS -->
    @include('frontend.layouts.styles')
</head>

<body>

    <!-- Back To Top Start -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>


    <!-- Header Section Start -->
    @include('frontend.layouts.nav')


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

    <!-- Causes Details Start -->
    <section class="causes-details-section fix section-padding">
        <div class="container">
            <div class="causes-details-wrapper">
                <div class="row g-5">
                    <div class="col-lg-8">
                        <div class="causes-details-items">
                            <div class="details-image">
                                <img src="assets/img/causes/cause-details.jpg" alt="img">
                            </div>
                            <div class="details-content">
                                <span class="sub-text">
                                    <i class="far fa-heart"></i> water
                                </span>
                                <h2>Somalian People Need Pure Water</h2>
                                <div class="progress-items">
                                    <div class="progress">
                                        <div class="progress-bar" data-wow-duration=".9s" role="progressbar"
                                            style="width: 70%;" aria-valuenow="95" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <div class="cause-amount d-flex">
                                        <div class="price-raised">
                                            <i class="fal fa-donate"></i><span>70</span> Raised
                                        </div>
                                        <div class="price-goal">
                                            <i class="far fa-analytics"></i><span>$7000</span> Goal
                                        </div>
                                    </div>
                                </div>
                                <form action="#" class="give-form">

                                    <div class="donate-amount-buttons give-donation-amount">
                                        <span>5</span>
                                        <span>10</span>
                                        <span>20</span>
                                        <span>50</span>
                                        <span>100</span>
                                        <span>custom</span>
                                    </div>

                                    <div class="give-payment-mode-select">
                                        <h3>Select Payment Method</h3>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="method1" name="paymentmode"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="method1">Test Donation</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="method2" name="paymentmode"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="method2">Offline
                                                Donation</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="method3" name="paymentmode"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="method3">Credit Card</label>
                                        </div>
                                    </div>
                                    <div class="give-purchase-form-wrap">
                                        <div class="row g-4">
                                            <div class="col-md-6 col-12">
                                                <div class="single-personal-info">
                                                    <label for="fname">First Name</label>
                                                    <input type="text" class="give-input" id="fname"
                                                        placeholder="Enter Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="single-personal-info">
                                                    <label for="lname">Last Name</label>
                                                    <input type="text" class="give-input" id="lname"
                                                        placeholder="Enter Name">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="single-personal-info">
                                                    <label for="email">Email Address</label>
                                                    <input type="email" class="give-input" id="email"
                                                        placeholder="Enter Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="donate-total-amount">
                                                    <div class="give-donation-total-label">Donation Total:</div>
                                                    <div class="give-final-total-amount"><span>$</span>10</div>
                                                    <button type="submit" class="theme-btn mt-4 mt-md-0"><i
                                                            class="far fa-heart"></i>Donate Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="causes-contents">
                                <p>But many people around the world don’t have that luxury. Every day, about 1,400
                                    children die from diseases caused by unsafe water and poor sanitation. But it
                                    doesn’t have to be that way. There are simple solutions like drilled wells, spring
                                    protections and BioSand filters</p>
                                <p>100% of the money will be used to build clean water projects, and when they’re
                                    complete, charity: water will send us photos and GPS coordinates so we can see the
                                    exact community we helped.</p>
                                <p>I started this fundraising campaign to help charity: water build these types of
                                    projects around the world, and I'm looking for anyone who can help me. But many
                                    people around the world don’t have that luxury. Every day, about 1,400 children die
                                    from diseases caused by unsafe water and poor sanitation. But it doesn’t have to be
                                    that way. There are simple solutions like drilled wells, spring protections and
                                    BioSand filters that help provide clean water to communities around the world.</p>

                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <img src="assets/img/causes/p2.jpg" alt="fundraising">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="assets/img/causes/p3.jpg" alt="fundraising">
                                    </div>
                                </div>

                                <h3>Our Goals</h3>
                                <p>Surely access to clean water should be a basic human right in the <b>21st
                                        century</b>. If you can only give <a href="donation-details.html">£10</a> just
                                    this one time, it will still make a difference.</p>

                                <p>I started this fundraising campaign to help charity: water build these types of
                                    projects around the world, and I'm looking for anyone who can help me. But many
                                    people around the world don’t have that luxury. Every day, about 1,400 children die
                                    from diseases caused by unsafe water and poor sanitation. But it doesn’t have to be
                                    that way. There are simple solutions like drilled wells, spring protections and
                                    BioSand filters that help provide clean water to communities around the world.</p>

                                <ul>
                                    <li>A place in history</li>
                                    <li>It’s about impact, goodness</li>
                                    <li>More goodness in the world</li>
                                    <li>The world we live in right now</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="casues-sidebar-wrapper">
                            <div class="single-sidebar-widgets">
                                <div class="widget-title">
                                    <h4>Categories</h4>
                                </div>
                                <ul>
                                    <li><a href="causes-details.html">Charity <span>35</span></a></li>
                                    <li><a href="causes-details.html">Donation <span>20</span></a></li>
                                    <li><a href="causes-details.html">Food & Water <span>57</span></a></li>
                                    <li><a href="causes-details.html">Medical <span>208</span></a></li>
                                    <li><a href="causes-details.html">Kids in Africa <span>09</span></a></li>
                                </ul>
                            </div>
                            <!-- single-sidebar-widgets -->
                            <div class="single-sidebar-widgets">
                                <div class="widget-title">
                                    <h4>Gallery</h4>
                                </div>
                                <div class="causue-gallery-wid">
                                    <a href="assets/img/causes/g1.jpg" class="single-cause-img img-popup bg-cover"
                                        style="background-image: url('assets/img/causes/g1.jpg')"></a>
                                    <a href="assets/img/causes/g2.jpg" class="single-cause-img img-popup"
                                        style="background-image: url('assets/img/causes/g2.jpg')"></a>
                                    <a href="assets/img/causes/g3.jpg" class="single-cause-img img-popupy"
                                        style="background-image: url('assets/img/causes/g3.jpg')"></a>
                                    <a href="assets/img/causes/g4.jpg" class="single-cause-img img-popup mb-0"
                                        style="background-image: url('assets/img/causes/g4.jpg')"></a>
                                </div>
                            </div>
                            <!-- single-sidebar-widgets -->
                            <div class="sidebar-promo-widgets bg-cover text-white text-center"
                                style="background-image: url('assets/img/causes/cause1.jpg')">
                                <span>Call To Action</span>
                                <h3>There are no secrets to success</h3>
                                <a href="contact.html" class="theme-btn">Get In Touch</a>
                            </div>
                            <!-- single-sidebar-widgets -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer Section Start -->
    @include('frontend.layouts.script_footer')

    <!-- All Javascripts -->
    @include('frontend.layouts.scripts')

</body>

</html>
