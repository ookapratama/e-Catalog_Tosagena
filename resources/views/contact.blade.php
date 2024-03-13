@extends('layouts.app')
@section('content')
    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">Reaching our Office</h2>
                    <h3 class="section-sub-title">Find Our Location</h3>
                </div>
            </div>
            <!--/ Title row end -->

            <div class="row">
                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
                        <span class="ts-service-icon icon-round">
                            <i class="fas fa-map-marker-alt mr-0"></i>
                        </span>
                        <div class="ts-service-box-content">
                            <h4>Visit Our Office</h4>
                            <p>90245 Jl. Perintis Kemerdekaan, Tamalanrea Jaya, Kec. Tamalanrea, Kota
                              Makassar</p>
                        </div>
                    </div>
                </div><!-- Col 1 end -->

                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
                        <span class="ts-service-icon icon-round">
                            <i class="fa fa-envelope mr-0"></i>
                        </span>
                        <div class="ts-service-box-content">
                            <h4>Email Us</h4>
                            <p>cvtosagena@gmail.com</p>
                        </div>
                    </div>
                </div><!-- Col 2 end -->

                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
                        <span class="ts-service-icon icon-round">
                            <i class="fa fa-phone-square mr-0"></i>
                        </span>
                        <div class="ts-service-box-content">
                            <h4>Call Us</h4>
                            <p>(+62) 821-8998-8822</p>
                        </div>
                    </div>
                </div><!-- Col 3 end -->

            </div><!-- 1st row end -->

            <div class="gap-60"></div>

            <div class="google-map">
                {{-- <div id="map" class="map" data-latitude="40.712776" data-longitude="-74.005974"
                    data-marker="images/marker.png" data-marker-name="Constra"></div> --}}
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3973.7684576098363!2d119.4900716!3d-5.1409387!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefc81ffd87c0b%3A0x745241174a9edd9b!2sCV%20Tosagena%20Digital%20Printing!5e0!3m2!1sid!2sid!4v1710273308887!5m2!1sid!2sid" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="gap-40"></div>

            <!-- Content row -->
        </div><!-- Conatiner end -->
    </section><!-- Main container end -->
@endsection
