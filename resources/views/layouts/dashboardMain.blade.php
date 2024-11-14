<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('assets/dashboard/') }}" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="" />

    <title>Dashboard - WanCourse</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/landingPage/images/logo-nav.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/css/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/css/theme-default.css/') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/spinningPrelaoder.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/dashboard/vendor/libs/apex-charts/apex-charts.css') }}" />

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Helpers -->
    <script src="{{ asset('assets/dashboard/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/config.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('components.dashboard.sidebar')
            <!-- Layout container -->
            <div class="layout-page">
                @include('components.dashboard.navbar')
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    @yield('content')
                    @include('components.dashboard.footer')
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
    </div>

    <script src="{{ asset('js/lazysizes.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Hide preloader
            const preloader = document.querySelectorAll('.preloader-wrapper');
            preloader.forEach((loader) => {
                loader.style.display = 'none';
            });

            // Lazyload images
            const lazyloadImages = document.querySelectorAll("img.lazyload");
            let lazyloadThrottleTimeout;

            function lazyload() {
                if (lazyloadThrottleTimeout) {
                    clearTimeout(lazyloadThrottleTimeout);
                }

                lazyloadThrottleTimeout = setTimeout(function() {
                    let scrollTop = window.pageYOffset;
                    lazyloadImages.forEach(function(img) {
                        if (img.offsetTop < (window.innerHeight + scrollTop)) {
                            const spinner = img
                                .previousElementSibling; // Assuming spinner is the previous sibling
                            if (spinner && spinner.classList.contains('spinner')) {
                                spinner.style.display = 'block'; // Show spinner
                            }

                            img.src = img.dataset.src;
                            img.srcset = img.dataset.srcset;
                            img.sizes = img.dataset.sizes;
                            img.classList.remove('lazyload');
                            img.classList.add(
                                'lazyloaded'); // Add a class to indicate the image has been loaded

                            img.onload = function() {
                                if (spinner && spinner.classList.contains('spinner')) {
                                    spinner.style.display = 'none'; // Hide spinner
                                }
                            };
                        }
                    });
                    if (document.querySelectorAll("img.lazyload").length == 0) {
                        document.removeEventListener("scroll", lazyload);
                        window.removeEventListener("resize", lazyload);
                        window.removeEventListener("orientationChange", lazyload);
                    }
                }, 20);
            }

            document.addEventListener("scroll", lazyload);
            window.addEventListener("resize", lazyload);
            window.addEventListener("orientationChange", lazyload);
            lazyload(); // Initial call to load images that are in the viewport on page load
        });
    </script>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/dashboard/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/dashboard/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/dashboard/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/dashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/extended-ui-perfect-scrollbar.js') }}"></script>


    <script src="{{ asset('assets/dashboard/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Main JS -->
    <script src="{{ asset('assets/dashboard/js/main.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- CDN Ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

    {{-- if width media < 700 navbar add class fixed and after scroll --}}
    <script>
        $(window).scroll(function() {
            if ($(window).width() < 700) {
                if ($(window).scrollTop() >= 150) {
                    $('.navbar-hidden').removeClass('d-none');
                } else {
                    $('.navbar-hidden').addClass('d-none');
                }
            }
        });
    </script>

    {{-- go back --}}
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>
