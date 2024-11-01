<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Kalinka Travels</title>

    <link rel="shortcut icon" href="assets/img/cars/fav1.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="assets/plugins/aos/aos.css">

    <link rel="stylesheet" href="assets/css/feather.css">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Marcellus&family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        .banner-imgs {
            position: relative;
            height: 72px;
            /* Adjust height as needed */
        }

        .banner-img {
            position: absolute;
            right: -50%;
            /* Start from off-screen right */
            animation: slide-in 1s forwards;
        }

        .banner-img.img-1 {
            animation-delay: 0.5s;
            /* Delay for the first image */
            right: -50%;
        }

        .banner-img.img-2 {
            animation-delay: 1s;
            /* Delay for the second image */
            right: -60%;
            /* Adjust to ensure no overlap */
        }

        @keyframes slide-in {
            to {
                right: 0;
                /* Move to the final position */
            }
        }
    </style>

</head>

<body>
    <div class="main-wrapper">

        <?php include ("header.php") ?>



        <section class="banner-section" style="background: url(assets/img/cars/bg.jpg);
    background-repeat: no-repeat;
    background-size: cover;">
            <div id="homeBannerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="10000">
                <div class="container">
                    <div class="carousel-inner">
                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <div class="home-banner">
                                <div class="row align-items-center">
                                    <div class="col-lg-6" data-aos="fade-down">
                                        <p class="explore-text">
                                            <span><i class="fa-solid fa-thumbs-up me-2"></i></span>
                                            100% Trusted rental platform in the World
                                        </p>
                                        <h1 style="padding: 20px 0px;">We provide Coaches and Minibus for any occasion
                                        </h1>
                                        <p style="color: #dbdbdb; padding: 0px 0px 20px;">We offer the most comfortable
                                            travel packages at
                                            affordable prices. Our professional drivers are efficient and well equipped
                                            to assist you in your journey with Kalinka Travels</p>
                                        <div class="view-all">
                                            <a href="best-feet-rental.php"
                                                class="btn btn-view d-inline-flex align-items-center">View all vehicles
                                                <span><i class="feather-arrow-right ms-2"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6" data-aos="fade-down">
                                        <div class="banner-imgs">
                                            <img src="assets/img/cars/car-left1-1.png"
                                                class="img-fluid banner-img img-1" alt="bannerimage">
                                            <img src="assets/img/cars/car-left1-2.png"
                                                class="img-fluid banner-img img-2" alt="bannerimage">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat for other slides with similar structure -->

                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <div class="home-banner">
                                <div class="row align-items-center">
                                    <div class="col-lg-6" data-aos="fade-down">
                                        <p class="explore-text">
                                            <span><i class="fa-solid fa-thumbs-up me-2"></i></span>

                                            Best Taxi Partner in Kerala
                                        </p>
                                        <h1 style="padding: 20px 0px;">Explore South India
                                            with high Quality Vehicles</h1>
                                        <p style="color: #dbdbdb; padding: 0px 0px 20px;">Whether you're traveling for
                                            business or leisure, you can count on Kalinka Travels to provide exceptional
                                            service that prioritizes your comfort and satisfact</p>
                                        <div class="view-all">
                                            <a href="best-feet-rental.php"
                                                class="btn btn-view d-inline-flex align-items-center">View all vehicles
                                                <span><i class="feather-arrow-right ms-2"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6" data-aos="fade-down">
                                        <div class="banner-imgs">
                                            <img src="assets/img/cars/car-left2-1.png"
                                                class="img-fluid banner-img img-1" alt="bannerimage">
                                            <img src="assets/img/cars/car-left2-2.png"
                                                class="img-fluid banner-img img-2" alt="bannerimage">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="carousel-item">
                            <div class="home-banner">
                                <div class="row align-items-center">
                                    <div class="col-lg-6" data-aos="fade-down">
                                        <p class="explore-text">
                                            <span><i class="fa-solid fa-thumbs-up me-2"></i></span>
                                            Reliable Rentals Service Across South India
                                        </p>
                                        <h1 style="padding: 20px 0px;">Rent the Best Vehicles
                                            at Affordable Rates</h1>
                                        <p style="color: #dbdbdb; padding: 0px 0px 20px;">With us, you can experience
                                            the perfect blend of reliability, affordability, and luxury. Let Kalinka
                                            Travels be your trusted partner on the road, exceeding your expectations</p>
                                        <div class="view-all">
                                            <a href="best-feet-rental.php"
                                                class="btn btn-view d-inline-flex align-items-center">View all vehiclesa
                                                <span><i class="feather-arrow-right ms-2"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6" data-aos="fade-down">
                                        <div class="banner-imgs">
                                            <img src="assets/img/cars/car-left3-1.png"
                                                class="img-fluid banner-img img-1" alt="bannerimage">
                                            <img src="assets/img/cars/car-left3-2.png"
                                                class="img-fluid banner-img img-2" alt="bannerimage">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#homeBannerCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#homeBannerCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </section>





        <section class="section services">
            <div class="service-right">
                <img src="assets/img/bg/service-right.svg" class="img-fluid" alt="services right">
            </div>
            <div class="container">

                <div class="section-heading" data-aos="fade-down">
                    <h2 style=" font-weight: 600;"> Your perfect travel partner </br> in South India</h2>


                    <p>

                        Embark on seamless journeys across South India with our extensive rental services.</p>
                </div>

                <div class="services-work">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                            <div class="services-group">
                                <div class="services-icon border-secondary">
                                    <img class="icon-img bg-secondary" src="assets/img/icons/services-icon-01.svg"
                                        alt="Choose Locations">
                                </div>
                                <div class="services-content">
                                    <h3>Quality and Reliability</h3>
                                    <p>All our rental vehicles are meticulously maintained to ensure your safety and
                                        comfort throughout your journey. So you can travel with peace of mind knowing
                                        that you're in good hands.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                            <div class="services-group">
                                <div class="services-icon border-warning">
                                    <img class="icon-img bg-warning" src="assets/img/icons/services-icon-02.svg"
                                        alt="Choose Locations">
                                </div>
                                <div class="services-content">
                                    <h3> Diverse Fleet of Vehicles</h3>
                                    <p>
                                        We have a wide choice of vehicles just for you and we are available all over
                                        South India.
                                        Enjoy the most comfortable and luxurious cab services, anytime, anywhere.


                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12" data-aos="fade-down">
                            <div class="services-group">
                                <div class="services-icon border-dark">
                                    <img class="icon-img bg-dark" src="assets/img/icons/services-icon-03.svg"
                                        alt="Choose Locations">
                                </div>
                                <div class="services-content">
                                    <h3>Safety Standards</h3>
                                    <p>Your safety is our utmost priority. Each vehicle in our esteemed fleet undergoes
                                        rigorous inspections and maintenance checks to uphold the highest safety
                                        standards</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>






        <div class="section gallery-section">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-down" style="padding:0">
                    <div class="gallery-widget" style="margin:0">
                        <a href="assets/img/gallery/gallery-thum-01.jpg" data-fancybox="gallery2">
                            <img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-thum-01.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-down" style="padding:0">
                    <div class="gallery-widget" style="margin:0">
                        <a href="assets/img/gallery/gallery-thum-02.jpg" data-fancybox="gallery2">
                            <img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-thum-02.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-down" style="padding:0">
                    <div class="gallery-widget" style="margin:0">
                        <a href="assets/img/gallery/gallery-thum-03.jpg" data-fancybox="gallery2">
                            <img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-thum-03.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-down" style="padding:0">
                    <div class="gallery-widget" style="margin:0">
                        <a href="assets/img/gallery/gallery-thum-04.jpg" data-fancybox="gallery2">
                            <img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-thum-04.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-down" style="padding:0">
                    <div class="gallery-widget" style="margin:0">
                        <a href="assets/img/gallery/gallery-thum-05.jpg" data-fancybox="gallery2">
                            <img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-thum-05.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-down" style="padding:0">
                    <div class="gallery-widget" style="margin:0">
                        <a href="assets/img/gallery/gallery-thum-06.jpg" data-fancybox="gallery2">
                            <img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-thum-06.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-down" style="padding:0">
                    <div class="gallery-widget" style="margin:0">
                        <a href="assets/img/gallery/gallery-thum-07.jpg" data-fancybox="gallery2">
                            <img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-thum-07.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12" data-aos="fade-down" style="padding:0">
                    <div class="gallery-widget" style="margin:0">
                        <a href="assets/img/gallery/gallery-thum-08.jpg" data-fancybox="gallery2">
                            <img class="img-fluid" alt="Image" src="assets/img/gallery/gallery-thum-08.jpg">
                        </a>
                    </div>
                </div>

            </div>
        </div>






        <section class="section popular-car-type">
            <div class="container">

                <div class="section-heading" data-aos="fade-down">
                    <h2>Prime Qualities of Our Rental Car Services</h2>
                    <p>
                        Explore the excellence of our rental car services, defined by reliability, variety, and
                        exceptional
                        customer care.</p>
                </div>

                <div class="row">
                    <div class="popular-slider-group">
                        <div class="owl-carousel popular-cartype-slider owl-theme">

                            <div class="listing-owl-item">
                                <div class="listing-owl-group">
                                    <div class="listing-owl-img">
                                        <img src="assets/img/cars/shield.png" alt="Popular Cartypes">
                                    </div>
                                    <h6>Safe & hygienic cars</h6>

                                </div>
                            </div>




                            <div class="listing-owl-item">
                                <div class="listing-owl-group">
                                    <div class="listing-owl-img">
                                        <img src="assets/img/cars/suport.png" class="img-fluid" alt="Popular Cartypes">
                                    </div>
                                    <h6>Customer Support</h6>

                                </div>
                            </div>








                            <div class="listing-owl-item">
                                <div class="listing-owl-group">
                                    <div class="listing-owl-img">
                                        <img src="assets/img/cars/booking.png" class="img-fluid" alt="Popular Cartypes">
                                    </div>
                                    <h6>Free booking</h6>

                                </div>
                            </div>

                            <div class="listing-owl-item">
                                <div class="listing-owl-group">
                                    <div class="listing-owl-img">
                                        <img src="assets/img/cars/rate.png" class="img-fluid" alt="Popular Cartypes">
                                    </div>
                                    <h6>Customer Satisfaction</h6>

                                </div>
                            </div>

                            <div class="listing-owl-item">
                                <div class="listing-owl-group">
                                    <div class="listing-owl-img">
                                        <img src="assets/img/cars/car.png" class="img-fluid" alt="Popular Cartypes">
                                    </div>
                                    <h6> Premium Vehicles</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>


        <section class="section facts-number">


            <div class="container">

                <div class="section-heading" data-aos="fade-down">
                    <h2 class="title text-white">Facts By The Numbers</h2>
                    <!-- <p class="description text-white">Explore our car rental fleet diverse, reliable, and ready for your
                    next journey.</p> -->
                    <p class="description text-white">As we continue our success journey, we remain steadfast in our
                        commitment to excellence and customer satisfaction</p>

                </div>

                <div class="counter-group">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="count-group flex-fill">
                                <div class="customer-count d-flex align-items-center">
                                    <div class="count-img">
                                        <img src="assets/img/icons/bx-heart.svg" alt="Icon">
                                    </div>
                                    <div class="count-content">
                                        <h4><span class="counterUp">15000</span>+</h4>
                                        <p>Happy Customers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="count-group flex-fill">
                                <div class="customer-count d-flex align-items-center">
                                    <div class="count-img">
                                        <img src="assets/img/icons/bx-car.svg" alt="Icon">
                                    </div>
                                    <div class="count-content">
                                        <h4><span class="counterUp">700</span>+</h4>
                                        <p>Count of Cars</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="count-group flex-fill">
                                <div class="customer-count d-flex align-items-center">
                                    <div class="count-img">
                                        <img src="assets/img/icons/bx-headphone.svg" alt="Icon">
                                    </div>
                                    <div class="count-content">
                                        <h4><span class="counterUp">24</span>/ 7</h4>
                                        <p>24/7 Support</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="count-group flex-fill">
                                <div class="customer-count d-flex align-items-center">
                                    <div class="count-img">
                                        <img src="assets/img/icons/bx-history.svg" alt="Icon">
                                    </div>
                                    <div class="count-content">
                                        <h4><span class="counterUp">300</span>K+</h4>
                                        <p>Total Kilometer Covered</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <section class="section why-choose popular-explore">
            <div class="choose-left">
                <img src="assets/img/bg/choose-left.png" class="img-fluid" alt="Why Choose Us">
            </div>
            <div class="container">

                <div class="section-heading" data-aos="fade-down">
                    <h2>Why Choose Us</h2>
                    <p>We are determined to make our customers happy and satisfied with our consistent
                        efforts. </p>
                </div>

                <div class="why-choose-group">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="card flex-fill">
                                <div class="card-body">
                                    <div class="choose-img choose-black">
                                        <img src="assets/img/icons/bx-selection.svg" alt="Icon">
                                    </div>
                                    <div class="choose-content">
                                        <h4>Fixed Taxi Rates</h4>
                                        <p>

                                            Enjoy hassle-free travel with our fixed rate taxi service, offering
                                            transparent
                                            pricing for a smooth journey. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="card flex-fill">
                                <div class="card-body">
                                    <div class="choose-img choose-secondary">
                                        <img src="assets/img/icons/bx-crown.svg" alt="Icon">
                                    </div>
                                    <div class="choose-content">
                                        <h4>Many Pickup Location</h4>
                                        <p>
                                            We offer flexible pickup choices, adapting to your needs for a seamless
                                            rental
                                            experience.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                            <div class="card flex-fill">
                                <div class="card-body">
                                    <div class="choose-img choose-primary">
                                        <img src="assets/img/icons/bx-user-check.svg" alt="Icon">
                                    </div>
                                    <div class="choose-content">
                                        <h4> Customer Satisfaction</h4>
                                        <p>
                                            We are thankful to our customer who had repeated their trip with us or
                                            introduced our service to their friends </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <section class="section faq-section bg-light-primary">
            <div class="container">

                <div class="section-heading" data-aos="fade-down">
                    <h2>Frequently Asked Questions </h2>
                    <p></p>
                </div>
                <div class="row" style="justify-content: center;">
                    <div class=" col-md-9">
                        <div class="faq-info">
                            <div class="faq-card bg-white" style="background :rgb(242 247 246) !important;"
                                data-aos="fade-down">
                                <h4 class="faq-title">
                                    <a class="collapseds" data-bs-toggle="collapse" href="#faqOne"
                                        aria-expanded="true">What
                                        happens if I return the rental car late?</a>
                                </h4>
                                <div id="faqOne" class="card-collapse collapse show">
                                    <p>Returning the rental car late may result in additional fees, as most rental
                                        companies charge by the day or hour. It's essential to check the rental
                                        agreement for the specific late return policy.</p>
                                </div>
                            </div>
                            <div class="faq-card bg-white" style="background :rgb(242 247 246) !important;"
                                data-aos="fade-down">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqTwo"
                                        aria-expanded="false">How
                                        do I
                                        return the rental vechicles?</a>
                                </h4>
                                <div id="faqTwo" class="card-collapse collapse">
                                    <p>You'll typically return the rental vechicles to the same location where you
                                        picked
                                        it up, unless it's a one-way rental. Be sure to refuel the car to the level
                                        specified in the rental agreement and return it in the same condition you
                                        received it.</p>
                                </div>
                            </div>
                            <div class="faq-card bg-white" style="background :rgb(242 247 246) !important;"
                                data-aos="fade-down">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqThree"
                                        aria-expanded="false">What
                                        happens if the rental fleet breaks down or is
                                        involved in an accident?</a>
                                </h4>
                                <div id="faqThree" class="card-collapse collapse">
                                    <p> In case of a breakdown or accident, contact the rental company's roadside
                                        assistance immediately. Most rental companies provide 24/7 support and will
                                        guide you through the necessary steps.</p>
                                </div>
                            </div>
                            <div class="faq-card bg-white" style="background :rgb(242 247 246) !important;"
                                data-aos="fade-down">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqFour"
                                        aria-expanded="false">What
                                        insurance options are available for rental
                                        vechicles?</a>
                                </h4>
                                <div id="faqFour" class="card-collapse collapse">
                                    <p> Rental vechicles insurance options vary, but they typically include collision
                                        damage waiver (CDW), liability coverage, and personal accident insurance.
                                        You may also have coverage through your own auto insurance policy or credit
                                        card.</p>
                                </div>
                            </div>
                            <div class="faq-card bg-white" style="background :rgb(242 247 246) !important;"
                                data-aos="fade-down">
                                <h4 class="faq-title">
                                    <a class="collapsed" data-bs-toggle="collapse" href="#faqFive"
                                        aria-expanded="false">Can
                                        I
                                        add an additional driver to my rental
                                        agreement?</a>
                                </h4>
                                <div id="faqFive" class="card-collapse collapse">
                                    <p>Kalinka travels allow you to add additional drivers for a fee, provided they
                                        meet the age and licensing requirements and are present at the time of
                                        rental.</p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>






        <?php include ("footer.php") ?>

    </div>

    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;">
            </path>
        </svg>
    </div>

    <script>
        document.querySelector('#homeBannerCarousel').addEventListener('slide.bs.carousel', function (e) {
            var images = e.relatedTarget.querySelectorAll('.banner-img');
            images.forEach(function (img) {
                img.style.animation = 'none';
                img.offsetHeight; /* trigger reflow */
                img.style.animation = '';
            });
        });
    </script>



    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.7.1.min.js" type="1c628ce1bfb1105e6a5b8a63-text/javascript"></script>

    <script src="assets/js/bootstrap.bundle.min.js" type="1c628ce1bfb1105e6a5b8a63-text/javascript"></script>

    <script src="assets/js/jquery.waypoints.js" type="1c628ce1bfb1105e6a5b8a63-text/javascript"></script>
    <script src="assets/js/jquery.counterup.min.js" type="1c628ce1bfb1105e6a5b8a63-text/javascript"></script>

    <script src="assets/plugins/select2/js/select2.min.js" type="1c628ce1bfb1105e6a5b8a63-text/javascript"></script>

    <script src="assets/plugins/aos/aos.js" type="1c628ce1bfb1105e6a5b8a63-text/javascript"></script>

    <script src="assets/js/backToTop.js" type="1c628ce1bfb1105e6a5b8a63-text/javascript"></script>

    <script src="assets/plugins/moment/moment.min.js" type="1c628ce1bfb1105e6a5b8a63-text/javascript"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js" type="1c628ce1bfb1105e6a5b8a63-text/javascript"></script>

    <script src="assets/js/owl.carousel.min.js" type="1c628ce1bfb1105e6a5b8a63-text/javascript"></script>

    <script src="assets/js/script.js" type="1c628ce1bfb1105e6a5b8a63-text/javascript"></script>
    <script src="cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="1c628ce1bfb1105e6a5b8a63-|49" defer=""></script>
    <script>
        var myCarousel = document.querySelector('#homeBannerCarousel')
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 3000, // 10 seconds
            ride: 'carousel'
        })
    </script>
</body>

</html>