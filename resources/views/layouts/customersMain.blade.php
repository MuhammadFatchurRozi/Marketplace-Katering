<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{ asset('assets/customers/images/favicon.png') }}" type="">

    <title> Marketplace Katering </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/customers/css/bootstrap.css') }}" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
        crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="{{ asset('assets/customers/css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/customers/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('assets/customers/css/responsive.css') }}" rel="stylesheet" />

</head>

<body @if (!Request::is('/')) class="sub_page" @endif>

    <div class="hero_area">
        <div class="bg-box">
            <img src="{{ asset('assets/customers/images/hero-bg.jpg') }}" alt="">
        </div>
        <!-- header section strats -->
        @include('components.customers.navbar')
        <!-- end header section -->

        <!-- slider section -->
        @if (Request::is('/'))
            <section class="slider_section ">
                <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container ">
                                <div class="row">
                                    <div class="col-md-7 col-lg-6 ">
                                        <div class="detail-box">
                                            <h1>
                                                Marketplace Katering
                                            </h1>
                                            <p>
                                                Dengan hanya beberapa klik, nikmati hidangan lezat dari berbagai
                                                restoran tanpa perlu repot keluar rumah. Pilih menu kesukaan Anda,
                                                tentukan waktu pengiriman, dan pembayaran dilakukan secara aman.
                                                Prosesnya begitu mudah sehingga Anda bisa pesan katering kapan saja dan
                                                di mana saja.
                                            </p>
                                            <div class="btn-box">
                                                <a href="{{ route('menuCustomer.index') }}" class="btn1">
                                                    Order Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        @endif
        <!-- end slider section -->
    </div>

    @yield('content')

    <!-- footer section -->
    @include('components.customers.footer')
    <!-- footer section -->

    <!-- Sidecart Start -->
    @if (Auth::check())
        <div class="backdrop"></div>
        <div class="sidecart" id="sidecart">
            <div class="cart_content">
                <div class="cart_header">
                    <img src="{{ asset('assets/customers/images/favicon.png') }}" alt="logo" style="width: 30px;">
                    <div class="header_title">
                        <h2>Keranjang Saya</h2>
                        <span id="items_num">{{ count($getCart) }}</span>
                    </div>
                    <span id="close_btn" class="close_btn">&times;</span>
                </div>
                <div class="cart_items">
                    @foreach ($getCart as $cart)
                        <div class="cart_item" id="cart_item_{{ $cart->id }}">
                            {{-- <div class="remove_item"
                                onclick="removeItem({{ json_encode(['id' => $cart->id, 'name' => Str::words($cart->name, 2, '...')]) }})">
                                <span>&times;</span>
                            </div> --}}
                            <div class="item_img">
                                <img src="{{ asset('storage/menu/' . $cart->menu->icon) }}" alt="item">
                            </div>
                            <div class="item_details">
                                <p class="title-course" name="title-course">
                                    {{ Str::words($cart->menu->nama, 2, '...') }}
                                </p>
                                <p class="time-period" name="time-periode">{{ $cart->menu->kategori }}</p>
                                <div class="price-details">
                                    <p class="discount" name="discount">{{ $cart->quantity }}</p>
                                    <strong class="details-price" name="details-price">Rp.@idr($cart->menu->harga * $cart->quantity)</strong>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="cart_action">
                    <div class="promo_code">
                        <input type="text" name="promo_code" id="promo_code" placeholder="Masukkan Kode Promo">
                        <button class="apply_promo" type="submit">Check</button>
                    </div>
                    <hr style="margin-bottom: -10px; margin-top: 0;">
                    <div class="disc-total">
                        <p>Diskon :</p>
                        <p class="diskon">Rp<span id="diskon-price">-0</span>,-</p>
                    </div>
                    <div class="subtotal">
                        <p>Total :</p>
                        {{-- sum $cart->menu->harga * $cart->quantity --}}
                        @php
                            $total = 0;
                            foreach ($getCart as $cart) {
                                $total += $cart->menu->harga * $cart->quantity;
                            }
                        @endphp
                        <p class="total_rp">Rp<span id="subtotal_price"> @idr($total)</span>,-</p>
                    </div>
                    <button class="checkout">Checkout</button>
                </div>
            </div>
        </div>
    @endif
    <!-- Sidecart end -->

    @if (Auth::check())
        <script src="{{ asset('assets/customers/js/sidecart.js') }}"></script>
    @endif
    <!-- jQery -->
    <script src="{{ asset('assets/customers/js/jquery-3.4.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/customers/js/bootstrap.js') }}"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- isotope js -->
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="{{ asset('assets/customers/js/custom.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>

</html>
