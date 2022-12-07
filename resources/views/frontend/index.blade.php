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

@endsection
