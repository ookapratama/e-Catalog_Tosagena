@extends('layouts.app')
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Service</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Services</a></li>
                      <li class="breadcrumb-item active" aria-current="page">All Services</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container pb-2">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/service1.jpg" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon1.png" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="#">Cetak Digital Berkualitas Tinggi</a></h3>
                  <p>Menyediakan layanan cetak digital dengan teknologi mutakhir untuk memastikan hasil cetakan berkualitas tinggi.</p>
              </div>
            </div>
        </div><!-- Service1 end -->
      </div><!-- Col 1 end -->

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/service2.jpg" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon2.png" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="#">Desain Kreatif</a></h3>
                  <p>Membantu klien dalam proses desain dengan tim yang kreatif dan berpengalaman untuk menghasilkan desain yang menarik dan sesuai dengan kebutuhan.</p>
              </div>
            </div>
        </div><!-- Service2 end -->
      </div><!-- Col 2 end -->

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/service3.jpg" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon3.png" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="#">Produksi Cepat dan Efisien</a></h3>
                  <p>Menjamin waktu produksi yang cepat dan efisien tanpa mengorbankan kualitas, memastikan klien menerima pesanan mereka tepat waktu.</p>
              </div>
            </div>
        </div><!-- Service3 end -->
      </div><!-- Col 3 end -->

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/service4.jpeg" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon4.png" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="service-single.html">Konsultasi Pelanggan</a></h3>
                  <p>Memberikan layanan konsultasi kepada pelanggan untuk memahami kebutuhan mereka dengan lebih baik dan memberikan solusi yang tepat sesuai dengan anggaran dan tujuan mereka.</p>
              </div>
            </div>
        </div><!-- Service1 end -->
      </div><!-- Col 4 end -->

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/service5.jpg" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon5.png" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="service-single.html">Kontrol Kualitas</a></h3>
                  <p>Melakukan kontrol kualitas yang ketat untuk memastikan setiap cetakan memenuhi standar yang ditetapkan dan memuaskan harapan kualitas tertinggi.</p>
              </div>
            </div>
        </div><!-- Service2 end -->
      </div><!-- Col 5 end -->

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/service6.jpg" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon6.png" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="service-single.html">Layanan Pengiriman Terpercaya</a></h3>
                  <p>Menyediakan layanan pengiriman yang andal untuk memastikan produk sampai ke tangan pelanggan dengan aman dan tepat waktu, meminimalkan kerumitan logistik bagi klien.
                  </p>
              </div>
            </div>
        </div><!-- Service3 end -->
      </div><!-- Col 6 end -->

    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->
@endsection