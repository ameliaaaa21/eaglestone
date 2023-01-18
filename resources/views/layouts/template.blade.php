<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'EagleStone') }}</title>

        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{ asset('img/favicon.png') }}" rel="icon">
        <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&family=Playfair+Display&display=swap" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->

        <!-- Vendor CSS Files -->
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            <div id="header" class="justify-content-center align-items-center" style="margin-top: -2%;">
                <div class="header-container">

                    <div class="container" style="align-items: center;display: flex;justify-content: center;">
                        <img src="{{ asset('img/test2.png') }}" width="400px" height="auto">
                    </div>
                    
                    <h2><strong>Small Enough to Care, But Big Enough to Provide Excellent Quality</strong></h2>
                </div>

                <div id="header_navbar" class="d-flex justify-content-center align-items-center">
                    <nav id="navbar" class="navbar">
                        <ul>
                            <li><a class="nav-link {{isset($menu_item_page) && $menu_item_page == 'index'? 'active': '' }}" href="{{ route('index') }}">Home</a></li>
                            <li><a class="nav-link" href="{{ route('index') }}#about">About Us</a></li>
                            <li><a class="nav-link {{isset($menu_item_page) && $menu_item_page == 'products'? 'active': '' }}" href="{{ route('products') }}">Products</a></li>
                            <li><a class="nav-link {{isset($menu_item_page) && $menu_item_page == 'gallery'? 'active': '' }}" href="{{ route('gallery') }}">Gallery</a></li>
                            <li><a class="nav-link {{isset($menu_item_page) && $menu_item_page == 'contact_us'? 'active': '' }}" href="{{ route('contact-us') }}">Contact</a></li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle"></i>
                    </nav><!-- .navbar -->
                </div>
            </div>  
        </header>

        <main id="main">
            @yield('content')
        </main>

        <footer id="footer">
            <div class="container">
                <h2>FIND US</h2>
                
                <h3>Eagle Stone</h3>
                <p>
                    ARCADIA HOTEL, Jalan Rajawali 9-11<br>
                    Surabaya - 60175, Indonesia <br>
                    <strong>Phone:</strong> +62-313545063<br>
                    <strong>Email:</strong> wiwien@eaglestone.co.id<br> mkt1@eaglestone.co.id<br>
                </p>

                <div class="social-links">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
                <div class="container">
                    <p style="margin-bottom: -1%;">Other business :</p>
                    <a href="https://eaglefreight.co.id/" target="_blank">
                        <img src="{{ asset('img/favicon_eagle.png') }}" width="100px" style="margin-left: 2.5%;">   
                    </a><h5>Eagle Freight Logistik</h5><p style="font-size: 12px;">International Freight Forwarding & Trucking</p>
                    
                </div>
                <div class="copyright" style="margin-top: 3%;">
                    &copy; Copyright 2022 <strong><span>Eagle Stone</span></strong>. All Rights Reserved
                </div>
            </div>
        </footer>

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
        <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
