@extends('layouts.shop')

@section('content')
     <!-- Breadcrumb Section Begin -->
     <section class="breadcrumb-section set-bg st-color container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Hubungi Kami</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>No. Telp</h4>
                        <p>+62 822 8547 9825</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Alamat</h4>
                        <p>Kecamatan Batam Kota, Kota Batam, Kepulauan Riau</p>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Jam Buka</h4>
                        <p>07:00 am to 17:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>axelginting0@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="map container mb-5">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15934.36419718713!2d104.0202522!3d1.1189571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da3d3e7e7e7e7e%3A0x7e7e7e7e7e7e7e7e!2sBatam%20Kota%2C%20Kota%20Batam%2C%20Kepulauan%20Riau!5e0!3m2!1sid!2sid!4v1734094056240!5m2!1sid!2sid"
            height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                                        <h4>Buah Balap</h4>
                <ul>
                    <li>No Telp.: +62 822 8547 9825</li>
                </ul>
            </div>
        </div>
    </div>

@endsection