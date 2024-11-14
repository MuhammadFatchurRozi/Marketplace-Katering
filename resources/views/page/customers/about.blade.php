@extends('layouts.customersMain')

@section('content')
    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container  ">

            <div class="row">
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="{{ asset('assets/customers/images/about-img.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                We Are Marketplace Katering
                            </h2>
                        </div>
                        <p>
                            Apa itu Marketplace Katering? </br>
                            Marketplace katering adalah platform online yang berfungsi sebagai penghubung antara penyedia
                            jasa katering (vendor) dengan konsumen yang membutuhkan layanan katering. Sama seperti
                            marketplace pada umumnya, platform ini memfasilitasi transaksi antara kedua belah pihak secara
                            efisien.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->
@endsection
