@extends('frontend.layouts.main')

@section('content')
    <!-- Start Banner
        ============================================= -->
    <div class="banner-area auto-height banner-box text-default text-light bg-gradient">

        <div class="item">
            <div class="box-table shadow dark">
                <div class="box-cell">
                    <div class="container">
                        <div class="row item-flex center">
                            <div class="col-md-5 thumb">
                                <img src="{{ asset('assets/frontend/img/thumb.png') }}" alt="Thumb">
                            </div>
                            <div class="col-md-7">
                                <div class="content">
                                    <h4>Own your future learning new skills online</h4>
                                    <h1>Learn from best online training course</h1>
                                    <a class="btn btn-light border btn-md" href="#">Learn more</a>
                                    <a class="btn btn-light effect btn-md" href="#">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Course Offer
        ============================================= -->
    <div class="course-offer-area default-padding-top">
        <div class="container">
            <div class="offer-box">
                <div class="row">
                    <div class="col-md-6 thumb">
                        <img src="{{ asset('assets/frontend/img/illustration/2.png') }}" alt="Thumb">
                    </div>
                    <div class="col-md-6 info">
                        <h2>Register today</h2>
                        <h4>Get 50s of online Courses For Free!</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A harum quibusdam sapiente nobis
                            hic. Quaerat aperiam ad, fuga assumenda facere tempora? Amet quod debitis, sed, nam impedit
                            eius ab atque.
                        </p>
                        <a class="btn btn-theme effect btn-md smooth-menu" href="#register">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Course Offer -->

    <!-- Start Top Category & Trending Courses
        ============================================= -->
    <div class="top-cat-area inc-trending-courses about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 top-cat-items text-light inc-bg-color text-center">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 equal-height">
                            <div class="item mariner" style="background-image: url(assets/img/category/1.jpg);">
                                <a href="#">
                                    <i class="flaticon-feature"></i>
                                    <div class="info">
                                        <h4>software engineering</h4>
                                        <span>(1,226) Topics</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 equal-height">
                            <div class="item java" style="background-image: url(assets/img/category/2.jpg);">
                                <a href="#">
                                    <i class="flaticon-interaction"></i>
                                    <div class="info">
                                        <h4>Interactive Program</h4>
                                        <span>(2,366) Topics</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 equal-height">
                            <div class="item malachite" style="background-image: url(assets/img/category/3.jpg);">
                                <a href="#">
                                    <i class="flaticon-conveyor"></i>
                                    <div class="info">
                                        <h4>Quantum Mechanics</h4>
                                        <span>(766) Topics</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 equal-height">
                            <div class="item brilliantrose" style="background-image: url(assets/img/category/4.jpg);">
                                <a href="#">
                                    <i class="flaticon-education"></i>
                                    <div class="info">
                                        <h4>Preventing Dementia</h4>
                                        <span>(4,500) Topics</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 equal-height">
                            <div class="item casablanca" style="background-image: url(assets/img/category/5.jpg);">
                                <a href="#">
                                    <i class="flaticon-potential"></i>
                                    <div class="info">
                                        <h4>Hidden Potential</h4>
                                        <span>(975) Topics</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 equal-height">
                            <div class="item emerald" style="background-image: url(assets/img/category/6.jpg);">
                                <a href="#">
                                    <i class="flaticon-print"></i>
                                    <div class="info">
                                        <h4>Basic C++</h4>
                                        <span>(3,340) Topics</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Top Category -->

                <!-- End Home Sidebar -->
                <div class="col-md-4 home-sidebar">
                    <!-- Start Trending Courses -->
                    <div class="sidebar-item trending-courses-box">
                        <h4>Trending Courses</h4>
                        <div class="trending-courses-items">
                            <div class="item">
                                <div class="content">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/courses/g1.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h4>
                                            <a href="#">Profession paython learing</a>
                                        </h4>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>4.5 (23,890)</span>
                                        </div>
                                        <div class="meta">
                                            <i class="fas fa-user"></i> By <a href="#">Drup Paul</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="content">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/courses/g2.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h4>
                                            <a href="#">Profession paython learing</a>
                                        </h4>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>4.5 (23,890)</span>
                                        </div>
                                        <div class="meta">
                                            <i class="fas fa-user"></i> By <a href="#">Drup Paul</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="content">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="assets/img/courses/g3.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h4>
                                            <a href="#">Profession paython learing</a>
                                        </h4>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>4.5 (23,890)</span>
                                        </div>
                                        <div class="meta">
                                            <i class="fas fa-user"></i> By <a href="#">Drup Paul</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="more">Browse All Crouses <i
                                    class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <!-- End Trending Courses -->
                </div>
                <!-- End Home Sidebar -->

            </div>
        </div>
    </div>
    <!-- End Top Categories & Trending Courses -->

    <!-- Start Popular Courses
        ============================================= -->
    <div class="popular-courses circle carousel-shadow bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Popular Courses</h2>
                        <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but
                            solicitude inhabiting projection off. Connection stimulated estimating excellence an to
                            impression.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="popular-courses-items bottom-price popular-courses-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/courses/6.jpg" alt="Thumb">
                                </a>
                                <div class="overlay">
                                    <a class="btn btn-theme effect btn-sm" href="#">
                                        <i class="fas fa-chart-bar"></i> Enroll Now
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                    <div class="thumb">
                                        <a href="#"><img src="assets/img/team/2.jpg" alt="Thumb"></a>
                                    </div>
                                    <div class="others">
                                        <a href="#">Munil Druva</a>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>4.5 (23,890)</span>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="#">Java Programming Masterclass</a></h4>
                                <div class="cats">
                                    <a href="#">Education</a>
                                    <a href="#">Science</a>
                                </div>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty
                                    earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> 6,690
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 16:00
                                        </li>
                                    </ul>
                                    <div class="price-btn">
                                        Free
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/courses/2.jpg" alt="Thumb">
                                </a>
                                <div class="overlay">
                                    <a class="btn btn-theme effect btn-sm" href="#">
                                        <i class="fas fa-chart-bar"></i> Enroll Now
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                    <div class="thumb">
                                        <a href="#"><img src="assets/img/team/4.jpg" alt="Thumb"></a>
                                    </div>
                                    <div class="others">
                                        <a href="#">Akua Paul</a>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>5 (1,890)</span>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="#">Social Science & Humanities</a></h4>
                                <div class="cats">
                                    <a href="#">Social</a>
                                    <a href="#">Online</a>
                                </div>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty
                                    earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> 6,690
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 16:00
                                        </li>
                                    </ul>
                                    <div class="price-btn">
                                        $12.00
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/courses/3.jpg" alt="Thumb">
                                </a>
                                <div class="overlay">
                                    <a class="btn btn-theme effect btn-sm" href="#">
                                        <i class="fas fa-chart-bar"></i> Enroll Now
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                    <div class="thumb">
                                        <a href="#"><img src="assets/img/team/3.jpg" alt="Thumb"></a>
                                    </div>
                                    <div class="others">
                                        <a href="#">Jon Babu</a>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>4.7 (890)</span>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="#">Actualized Leadership Network</a></h4>
                                <div class="cats">
                                    <a href="#">Online</a>
                                    <a href="#">Source</a>
                                </div>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty
                                    earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> 8,690
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 126:00
                                        </li>
                                    </ul>
                                    <div class="price-btn">
                                        Free
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/courses/4.jpg" alt="Thumb">
                                </a>
                                <div class="overlay">
                                    <a class="btn btn-theme effect btn-sm" href="#">
                                        <i class="fas fa-chart-bar"></i> Enroll Now
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                    <div class="thumb">
                                        <a href="#"><img src="assets/img/team/7.jpg" alt="Thumb"></a>
                                    </div>
                                    <div class="others">
                                        <a href="#">Babu Paol</a>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>5 (980)</span>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="#">Machine Learning Management</a></h4>
                                <div class="cats">
                                    <a href="#">PHP</a>
                                    <a href="#">Programming</a>
                                </div>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty
                                    earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> 8,690
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 256:00
                                        </li>
                                    </ul>
                                    <div class="price-btn">
                                        $124.00
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/courses/5.jpg" alt="Thumb">
                                </a>
                                <div class="overlay">
                                    <a class="btn btn-theme effect btn-sm" href="#">
                                        <i class="fas fa-chart-bar"></i> Enroll Now
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <div class="author-info">
                                    <div class="thumb">
                                        <a href="#"><img src="assets/img/team/8.jpg" alt="Thumb"></a>
                                    </div>
                                    <div class="others">
                                        <a href="#">Mickel Clark</a>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>4.5 (23,890)</span>
                                        </div>
                                    </div>
                                </div>
                                <h4><a href="#">Online Programming</a></h4>
                                <div class="cats">
                                    <a href="#">Education</a>
                                    <a href="#">Science</a>
                                </div>
                                <p>
                                    Would day nor ask walls known. But preserved advantage are but and certainty
                                    earnestly enjoyment.
                                </p>
                                <div class="bottom-info">
                                    <ul>
                                        <li>
                                            <i class="fas fa-user"></i> 6,690
                                        </li>
                                        <li>
                                            <i class="fas fa-clock"></i> 16:00
                                        </li>
                                    </ul>
                                    <div class="price-btn">
                                        $12.00
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Popular Courses -->

    <!-- Start Fun Factor
        ============================================= -->
    <div class="fun-factor-area default-padding bottom-less text-center bg-fixed shadow dark-hard"
        style="background-image: url(assets/img/banner/1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="flaticon-contract"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="212" data-speed="5000"></span>
                            <span class="medium">National Awards</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="flaticon-professor"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="128" data-speed="5000"></span>
                            <span class="medium">Best Teachers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="flaticon-online"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="8970" data-speed="5000"></span>
                            <span class="medium">Students Enrolled</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="flaticon-reading"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="640" data-speed="5000"></span>
                            <span class="medium">Cources</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor -->

    <!-- Start Advisor Area
        ============================================= -->
    <section id="advisor" class="advisor-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Experience Advisors</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay
                            own additions education satisfied the perpetual. If he cause manor happy. Without farther
                            she exposed saw man led. Along on happy could cease green oh.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="advisor-items text-center text-light">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 single-item">
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="assets/img/advisor/1.jpg" alt="Thumb">
                                <div class="info-title">
                                    <h4>Professon. Nuri Paul</h4>
                                    <span>Chemistry specialist</span>
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 single-item">
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="assets/img/advisor/2.jpg" alt="Thumb">
                                <div class="info-title">
                                    <h4>Monayem Pruda</h4>
                                    <span>Senior Developer</span>
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 single-item">
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="assets/img/advisor/3.jpg" alt="Thumb">
                                <div class="info-title">
                                    <h4>Dr. Bubly Minu</h4>
                                    <span>Science specialist</span>
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 single-item">
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="assets/img/advisor/4.jpg" alt="Thumb">
                                <div class="info-title">
                                    <h4>Professon. John Doe</h4>
                                    <span>Senior Writter</span>
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 single-item">
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="assets/img/advisor/5.jpg" alt="Thumb">
                                <div class="info-title">
                                    <h4>Professon. John Doe</h4>
                                    <span>Senior Writter</span>
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 single-item">
                        <div class="advisor-item">
                            <div class="info-box">
                                <img src="assets/img/advisor/1.jpg" alt="Thumb">
                                <div class="info-title">
                                    <h4>Professon. John Doe</h4>
                                    <span>Senior Writter</span>
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                </div>
            </div>
        </div>
    </section>
    <!--End Advisor Area -->

    <!-- Start Registration
        ============================================= -->
    <div id="register" class="reg-area default-padding-top bg-gray">
        <div class="container">
            <div class="row">
                <div class="reg-items">
                    <div class="col-md-6 reg-form default-padding-bottom">
                        <div class="site-heading text-left">
                            <h2>Get a Free online Registration</h2>
                            <p>
                                written on charmed justice is amiable farther besides. Law insensible middletons
                                unsatiable for apartments boy delightful unreserved.
                            </p>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="First Name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Last Name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email*" type="email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select>
                                            <option value="1">Chose Subject</option>
                                            <option value="2">Computer Engineering</option>
                                            <option value="4">Accounting Technologies</option>
                                            <option value="5">Web Development</option>
                                            <option value="6">Machine Language</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Phone" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit">
                                        Rigister Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 thumb">
                        <img src="assets/img/contact.png" alt="Thumb">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Registration -->

    <!-- Start Event
        ============================================= -->
    <section id="event" class="event-area default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Upcoming Events</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay
                            own additions education satisfied the perpetual. If he cause manor happy. Without farther
                            she exposed saw man led. Along on happy could cease green oh.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="event-items">
                    <!-- Single Item -->
                    <div class="item horizontal col-md-12">
                        <div class="col-md-6 thumb bg-cover" style="background-image: url(assets/img/event/1.jpg);">
                            <div class="date">
                                <h4><span>12</span> Dec, 2018</h4>
                            </div>
                        </div>
                        <div class="col-md-6 info">
                            <h4>
                                <a href="#">Secondary Schools United Nations</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 15 Oct, 2019</li>
                                    <li><i class="fas fa-clock"></i> 8:00 AM - 5:00 PM</li>
                                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                                </ul>
                            </div>
                            <p>
                                Early had add equal china quiet visit. Appear an manner as no limits either praise in.
                                In in written on charmed justice is amiable farther besides. Law insensible middletons
                                unsatiable for apartments boy delightful unreserved.
                            </p>
                            <a href="#" class="btn btn-dark effect btn-sm">
                                <i class="fas fa-chart-bar"></i> Book Now
                            </a>
                            <a href="#" class="btn btn-gray btn-sm">
                                <i class="fas fa-ticket-alt"></i> 23 Available
                            </a>
                        </div>
                    </div>
                    <!-- Single Item -->

                    <!-- Single Item -->
                    <div class="item vertical col-md-6">
                        <div class="info">
                            <h4>
                                <a href="#">Social Science & Humanities</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 15 Oct, 2019</li>
                                    <li><i class="fas fa-clock"></i> 8:00 AM - 5:00 PM</li>
                                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                                </ul>
                            </div>
                            <p>
                                Early had add equal china quiet visit. Appear an manner as no limits either praise in.
                                In in written on charmed justice is amiable farther besides. Law insensible middletons
                                unsatiable for apartments boy delightful unreserved.
                            </p>
                            <a href="#" class="btn btn-dark effect btn-sm">
                                <i class="fas fa-chart-bar"></i> Book Now
                            </a>
                            <a href="#" class="btn btn-gray btn-sm">
                                <i class="fas fa-ticket-alt"></i> 126 Available
                            </a>
                        </div>
                    </div>
                    <!-- Single Item -->

                    <!-- Single Item -->
                    <div class="item vertical col-md-6">
                        <div class="info">
                            <h4>
                                <a href="#">Actualized Leadership Network Seminar</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 15 Oct, 2019</li>
                                    <li><i class="fas fa-clock"></i> 8:00 AM - 5:00 PM</li>
                                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                                </ul>
                            </div>
                            <p>
                                Early had add equal china quiet visit. Appear an manner as no limits either praise in.
                                In in written on charmed justice is amiable farther besides. Law insensible middletons
                                unsatiable for apartments boy delightful unreserved.
                            </p>
                            <a href="#" class="btn btn-dark effect btn-sm">
                                <i class="fas fa-chart-bar"></i> Book Now
                            </a>
                            <a href="#" class="btn btn-gray btn-sm">
                                <i class="fas fa-ticket-alt"></i> 72 Available
                            </a>
                        </div>
                    </div>
                    <!-- Single Item -->

                    <!-- Single Item -->
                    <div class="item horizontal col-md-12">
                        <div class="col-md-6 thumb bg-cover" style="background-image: url(assets/img/event/2.jpg);">
                            <div class="date">
                                <h4><span>24</span> Apr, 2019</h4>
                            </div>
                        </div>
                        <div class="col-md-6 info">
                            <h4>
                                <a href="#">International Conference on Art Business</a>
                            </h4>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 15 Oct, 2019</li>
                                    <li><i class="fas fa-clock"></i> 8:00 AM - 5:00 PM</li>
                                    <li><i class="fas fa-map"></i> California, TX 70240 </li>
                                </ul>
                            </div>
                            <p>
                                Early had add equal china quiet visit. Appear an manner as no limits either praise in.
                                In in written on charmed justice is amiable farther besides. Law insensible middletons
                                unsatiable for apartments boy delightful unreserved.
                            </p>
                            <a href="#" class="btn btn-dark effect btn-sm">
                                <i class="fas fa-chart-bar"></i> Book Now
                            </a>
                            <a href="#" class="btn btn-gray btn-sm">
                                <i class="fas fa-ticket-alt"></i> 56 Available
                            </a>
                        </div>
                    </div>
                    <!-- Single Item -->

                    <div class="more-btn col-md-12 text-center">
                        <a href="#" class="btn btn-dark border btn-md">View All Events</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Event -->

    <!-- Start Testimonials
        ============================================= -->
    <div class="testimonials-area carousel-shadow default-padding bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Students Review</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay
                            own additions education satisfied the perpetual. If he cause manor happy. Without farther
                            she exposed saw man led. Along on happy could cease green oh.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="clients-review-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="assets/img/team/2.jpg" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has.
                                    Early had add equal china quiet visit. Appear an manner as no limits either praise..
                                </p>
                                <h4>Druna Patia</h4>
                                <span>Biology Student</span>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="assets/img/team/3.jpg" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has.
                                    Early had add equal china quiet visit. Appear an manner as no limits either praise..
                                </p>
                                <h4>Astron Brun</h4>
                                <span>Science Student</span>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="assets/img/team/4.jpg" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has.
                                    Early had add equal china quiet visit. Appear an manner as no limits either praise..
                                </p>
                                <h4>Paol Druva</h4>
                                <span>Development Student</span>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="col-md-5 thumb">
                                <img src="assets/img/team/7.jpg" alt="Thumb">
                            </div>
                            <div class="col-md-7 info">
                                <p>
                                    Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has.
                                    Early had add equal china quiet visit. Appear an manner as no limits either praise..
                                </p>
                                <h4>Druna Patia</h4>
                                <span>Biology Student</span>
                            </div>
                        </div>
                        <!-- Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    <!-- Start Blog
        ============================================= -->
    <div id="blog" class="blog-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Latest News</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay
                            own additions education satisfied the perpetual. If he cause manor happy. Without farther
                            she exposed saw man led. Along on happy could cease green oh.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-items">

                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="assets/img/blog/1.jpg" alt="Thumb"></a>
                                <div class="date">
                                    <h4><span>24</span> Nov, 2018</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Objection happiness something</a>
                                </h4>
                                <p>
                                    Sitting mistake towards his few country ask. You delighted two rapturous six
                                    depending objection happiness something the partiality unaffected
                                </p>
                                <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Author</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="assets/img/blog/2.jpg" alt="Thumb"></a>
                                <div class="date">
                                    <h4><span>12</span> Sep, 2018</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Meant to learn of vexed</a>
                                </h4>
                                <p>
                                    Sitting mistake towards his few country ask. You delighted two rapturous six
                                    depending objection happiness something the partiality unaffected
                                </p>
                                <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Author</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#"><img src="assets/img/blog/3.jpg" alt="Thumb"></a>
                                <div class="date">
                                    <h4><span>29</span> Dec, 2018</h4>
                                </div>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="#">Delightful up dissimilar</a>
                                </h4>
                                <p>
                                    Sitting mistake towards his few country ask. You delighted two rapturous six
                                    depending objection happiness something the partiality unaffected
                                </p>
                                <a href="#">Read More <i class="fas fa-angle-double-right"></i></a>
                                <div class="meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="fas fa-user"></i> Author</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fas fa-comments"></i> 23 Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->

                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
