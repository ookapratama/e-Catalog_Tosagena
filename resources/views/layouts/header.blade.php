<div id="top-bar" class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i>
                        <p class="info-text"><a href="https://www.google.com/maps/place/CV+Tosagena+Digital+Printing/@-5.1409387,119.4900716,17z/data=!4m16!1m9!3m8!1s0x2dbefc81ffd87c0b:0x745241174a9edd9b!2sCV+Tosagena+Digital+Printing!8m2!3d-5.1409387!4d119.4900716!9m1!1b1!16s%2Fg%2F11c1s1md7q!3m5!1s0x2dbefc81ffd87c0b:0x745241174a9edd9b!8m2!3d-5.1409387!4d119.4900716!16s%2Fg%2F11c1s1md7q?entry=ttu" target="_blank">90245 Jl. Perintis Kemerdekaan, Tamalanrea Jaya, Kec. Tamalanrea, Kota Makassar</a> </p>
                    </li>
                </ul>
            </div>
            <!--/ Top info end -->

            <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                        <a title="Facebook" href="https://www.facebook.com/cv.tosagena">
                            <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                        </a>
                        <a title="Instagram" href="https://www.instagram.com/cv.tosagena/">
                            <span class="social-icon"><i class="fab fa-instagram"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!--/ Top social end -->
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</div>
<!--/ Topbar end -->

<header id="header" class="header-one">
    <div class="bg-white">
        <div class="container">
            <div class="logo-area">
                <div class="row align-items-center">
                    <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                        <a class="d-block" href="/">
                            <img loading="lazy" src="{{ asset('images/icon.png') }}" alt="CV Tosagena">
                        </a>
                    </div><!-- logo end -->

                    <div class="col-lg-9 header-right">
                        <ul class="top-info-box">
                            <li>
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Call Us</p>
                                        <p class="slider btn btn-primary text-dark border"><a href="https://api.whatsapp.com/send/?phone=6282189988822&text&type=phone_number&app_absent=0" target="_blank"> (+62) 821-8998-8822</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Email Us</p>
                                        <p class="info-box-subtitle">cvtosagena@gmail.com</p>
                                    </div>
                                </div>
                            </li>

                        </ul><!-- Ul end -->
                    </div><!-- header right end -->
                </div><!-- logo area end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </div>

    <div class="site-navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-dark p-0">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="navbar-collapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav mr-auto">
                                <li class="nav-item  {{ Request::is('/') ? 'active' : '' }}">
                                    <a href="/" class="nav-link">Home</a>
                                </li>

                                <li class="nav-item {{ Request::is('about-us') ? 'active' : '' }}">
                                    <a href="/about-us" class="nav-link">About Us</a>

                                </li>

                                <li class="nav-item {{ Request::is('services') ? 'active' : '' }}">
                                    <a href="/services" class="nav-link">Services</a>
                                </li>

                                <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
                                    <a class="nav-link" href="/contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!--/ Col end -->
            </div>
            <!--/ Row end -->

            <div class="nav-search">
                <span id="search"><i class="fa fa-search"></i></span>
            </div><!-- Search end -->

            <div class="search-block" style="display: none;">
                <label for="search-field" class="w-100 mb-0">
                    <input type="text" class="form-control" id="search-field"
                        placeholder="Type what you want and enter">
                </label>
                <span class="search-close">&times;</span>
            </div><!-- Site search end -->
        </div>
        <!--/ Container end -->

    </div>
    <!--/ Navigation end -->
</header>
