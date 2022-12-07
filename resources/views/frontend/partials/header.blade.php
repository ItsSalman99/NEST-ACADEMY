<!-- Start Header Top
    ============================================= -->
<div class="top-bar-area address-one-lines bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-10 address-info">
                <div class="info box">
                    <ul>
                        <li>
                            Have any question? +123 456 7890
                        </li>
                        <li>
                            <i class="fas fa-envelope-open"></i>
                            Info@gmail.com
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            Sun - Thu <span>8:00 - 16:00</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="user-login text-right col-md-2">
                <a href="{{ route('login') }}">Sign In</a>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top -->

<!-- Header
    ============================================= -->
<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <div class="container">

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    {{-- <img src="{{ asset('assets/frontend/img/logo.png') }}" class="logo" alt="Logo"> --}}
                    THE NEST ACADEMY
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                    <li class="">
                        <a href="#" class="active">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->
