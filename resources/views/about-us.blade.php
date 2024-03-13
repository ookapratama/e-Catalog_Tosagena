@extends('layouts.app')
@section('content')
    <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">About</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">company</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Banner text end -->
    </div><!-- Banner area end -->

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="column-title">Who We Are</h3>
                    <p>CV Tosagena Digital Printing adalah penyedia layanan cetak digital yang berkomitmen terhadap
                        keunggulan, inovasi, dan kepuasan pelanggan.</p>
                    <blockquote>
                        <p>Di Tosagena, kami bukan sekadar mencetak; kami menciptakan karya berkualitas tinggi yang
                            merefleksikan dedikasi kami terhadap inovasi dan kepuasan pelanggan.</p>
                    </blockquote>
                    <p>Dengan fokus pada desain kreatif, produksi cepat, dan kontrol kualitas ketat, kami memberikan solusi
                        cetak yang berkualitas tinggi dengan pelayanan pelanggan yang ramah.</p>

                </div><!-- Col end -->

                <div class="col-lg-6 mt-5 mt-lg-0">

                    <div id="page-slider" class="page-slider small-bg">

                        <div class="item" style="background-image:url(images/slider-pages/slide-page1.jpg)">
                            <div class="container">
                                <div class="box-slider-content">
                                    <div class="box-slider-text">
                                        <h2 class="box-slide-title">Leadership</h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Item 1 end -->

                        <div class="item" style="background-image:url(images/slider-pages/slide-page2.jpg)">
                            <div class="container">
                                <div class="box-slider-content">
                                    <div class="box-slider-text">
                                        <h2 class="box-slide-title">Relationships</h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Item 1 end -->

                        <div class="item" style="background-image:url(images/slider-pages/slide-page3.jpg)">
                            <div class="container">
                                <div class="box-slider-content">
                                    <div class="box-slider-text">
                                        <h2 class="box-slide-title">Performance</h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Item 1 end -->
                    </div><!-- Page slider end-->


                </div><!-- Col end -->
            </div><!-- Content row end -->

        </div><!-- Container end -->
    </section><!-- Main container end -->

    <section id="facts" class="facts-area dark-bg">
        <div class="container">
            <div class="facts-wrapper">
                <div class="row">
                    <div class="col-md-4 col-sm-6 ts-facts">
                        <div class="ts-facts-img">
                            <img loading="lazy" src="images/icon-image/fact1.png" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="1789">0</span></h2>
                            <h3 class="ts-facts-title">Total Projects</h3>
                        </div>
                    </div><!-- Col end -->

                    <div class="col-md-4 col-sm-6 ts-facts mt-5 mt-md-0">
                        <div class="ts-facts-img">
                            <img loading="lazy" src="images/icon-image/fact3.png" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>
                            <h3 class="ts-facts-title">Hours of Work</h3>
                        </div>
                    </div><!-- Col end -->

                    <div class="col-md-4 col-sm-6 ts-facts mt-5 mt-md-0">
                        <div class="ts-facts-img">
                            <img loading="lazy" src="images/icon-image/fact4.png" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="44">0</span></h2>
                            <h3 class="ts-facts-title">Countries Experience</h3>
                        </div>
                    </div><!-- Col end -->

                </div> <!-- Facts end -->
            </div>
            <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </section><!-- Facts end -->
@endsection
