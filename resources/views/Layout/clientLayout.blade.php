<!doctype html>
<html class="no-js" lang="zxx"> 


<!-- Mirrored from htmldemo.net/boyka/boyka/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jul 2024 13:34:54 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Client/assets/images/favicon.ico') }}">

    
    <!-- CSS 
    ========================= -->
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('Client/assets/css/bootstrap.min.css') }}">
    
    <!-- Font CSS -->
    <link rel="stylesheet" href="{{ asset('Client/assets/css/font-awesome.min.css') }}">
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('Client/assets/css/plugins.css') }}">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('Client/assets/css/style.css') }}">
    
    <!-- Modernizer JS -->
    <script src="{{ asset('Client/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>

<!-- Main Wrapper Start -->
<div class="main-wrapper">
    <!-- header-area start -->
    <div class="header-area">
        <!-- header-top start -->
        <div class="header-top bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 order-2 order-lg-1">
                        <div class="top-left-wrap">
                            <ul class="phone-email-wrap">
                                <li><i class="fa fa-phone"></i> (03)9 433 2597</li>
                                <li><i class="fa fa-envelope-open-o"></i> boyka97@gmail.com</li>
                            </ul>
                            <ul class="link-top">
                                <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" title="Rss"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#" title="Google"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2">
                        <div class="top-selector-wrapper">
                            <ul class="single-top-selector">
                                <!-- Sanguage Start -->
                                <li class="setting-top list-inline-item">
                                    <div class="btn-group">
                                        <button class="dropdown-toggle"><i class="fa fa-user-circle-o"></i> Tài khoản <i class="fa fa-angle-down"></i></button>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="{{route('login')}}">Đăng nhập</a></li>
                                                <li><a href="checkout.html">Đăng xuất</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <!-- Nếu chưa đăng nhập thì hiện dòng này -->
                                <!-- <li class="setting-top list-inline-item">
                                    <div class="btn-group">
                                        <button class="dropdown-toggle"><i class="fa fa-user-circle-o"></i> Tài khoản <i class="fa fa-angle-down"></i></button>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="login-register.html">Đăng nhập</a></li>
                                                <li><a href="login-register.html">Đăng ký</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li> -->
                                <!-- Sanguage End -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header-top end -->
        <!-- Header-bottom start -->
        <div class="header-bottom-area header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-4">
                        <!-- logo start -->
                        <div class="logo">
                            <a href=""><img src="{{ asset('Client/assets/images/logo/logo.png') }}" alt=""></a>
                        </div>
                        <!-- logo end -->
                    </div>
                    <div class="col-lg-7 d-none d-lg-block">
                        <!-- main-menu-area start -->
                        <div class="main-menu-area">
                            <nav class="main-navigation">
                                <ul>
                                    <li><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                        <!--Lọc sản phẩm theo hãng-->
                                        <ul class="mega-menu">
                                            <li><a href="{{ route('products.index') }}">Xem tất cả</a>
                                            </li>
                                            <!--Lọc sản phẩm theo từng loại và theo hãng VANS-->
                                            <li><a href="{{ route('products.index', ['brand_id' => '1']) }}">Vans</a>
                                                <ul>
                                                <!--Lọc sản phẩm theo từng loại của hãng-->
                                                    <li><a href="{{ route('products.index', ['category_id' => 1, 'brand_id' => '1']) }}">Vans Old Skool</a></li>
                                                    <li><a href="{{ route('products.index', ['category_id' => 2, 'brand_id' => '1']) }}">Vans Classic</a></li>
                                                    <li><a href="{{ route('products.index', ['category_id' => 4, 'brand_id' => '1']) }}">Vans Slip-On</a></li>
                                                    <li><a href="{{ route('products.index', ['category_id' => 5, 'brand_id' => '1']) }}">Vans Knu Skool</a></li>
                                                    <li><a href="{{ route('products.index', ['category_id' => 6, 'brand_id' => '1']) }}">Vans Authentic </a></li>
                                                </ul>
                                            </li>
                                            <!--Lọc sản phẩm theo từng loại và theo hãng CONVERSE-->
                                            <li><a href="{{ route('products.index', ['brand_id' => '2']) }}">Converse</a>
                                                <ul>
                                                    <!--Lọc sản phẩm theo từng loại của hãng-->
                                                    <li><a href="{{ route('products.index', ['category_id' => 2, 'brand_id' => '2']) }}">Converse Classic</a></li>
                                                    <li><a href="{{ route('products.index', ['category_id' => 3, 'brand_id' => '2']) }}">Chuck 1970s</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Page <i class="fa fa-angle-down"></i></a>
                                        <ul class="mega-menu four-column-menu">
                                            <li><a href="#">Column One</a>
                                                <ul>
                                                    <li><a href="compare.html">Compare Page</a></li>
                                                    <li><a href="login-register.html">Login &amp; Register</a></li>
                                                    <li><a href="my-account.html">My Account Page</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html">Column two</a>
                                                <ul>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Checkout Page</a></li>
                                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Column Three</a>
                                                <ul>
                                                   <li><a href="blog-details-video.html">Blog Details video</a></li>
                                                    <li><a href="blog-details-audio.html">Blog Details Audio</a></li>
                                                    <li><a href="blog-details-slider.html">Blog Details Slider</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Column Four</a>
                                                <ul>
                                                    <li><a href="error404.html">Error 404</a></li>
                                                    <li><a href="faq.html">FAQ</a></li>
                                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog  <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-col-2.html">Blog Grid 2 Layout</a></li>
                                            <li><a href="blog-col-3.html">Blog Grid 3 Layout</a></li>
                                            <li><a href="blog.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-details-right-sidebar.html">Blog Right Sidebar</a></li>
                                            <li><a href="blog-details-slider.html">Blog Details Left Slider</a></li>
                                            <li><a href="blog-details-right-sidebar.html">Blog Details Right Slider</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact-us.html">Contact us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- main-menu-area End -->
                    </div>
                    <div class="col-lg-3 col-8">
                        <div class="header-bottom-right">
                            <div class="block-search">
                                <div class="trigger-search"><i class="fa fa-search"></i> <span>Search</span></div>
                                <div class="search-box main-search-active">
                                    <form action="#" class="search-box-inner">
                                        <input type="text" placeholder="Search our catalog">
                                        <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="shoping-cart">
                                <div class="btn-group">
                                    <!-- Mini Cart Button start -->
                                    <button class="dropdown-toggle"><i class="fa fa-shopping-cart"></i> Cart (2)</button>
                                    <!-- Mini Cart button end -->
                                    
                                    <!-- Mini Cart wrap start -->
                                    <div class="dropdown-menu mini-cart-wrap">
                                        <div class="shopping-cart-content">
                                            <ul class="mini-cart-content">
                                                <!-- Mini-Cart-item start -->
                                                <li class="mini-cart-item">
                                                    <div class="mini-cart-product-img">
                                                        <a href="#"><img src="assets/images/cart/1.jpg" alt=""></a>
                                                        <span class="product-quantity">1x</span>
                                                    </div>
                                                    <div class="mini-cart-product-desc">
                                                        <h3><a href="#">Printed Summer Dress</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$55.21</span>
                                                        </div>
                                                        <div class="size">
                                                            Size: S
                                                        </div>
                                                    </div>
                                                    <div class="remove-from-cart">
                                                        <a href="#" title="Remove"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </li>
                                                <!-- Mini-Cart-item end -->
                                                
                                                <!-- Mini-Cart-item start -->
                                                <li class="mini-cart-item">
                                                    <div class="mini-cart-product-img">
                                                        <a href="#"><img src="assets/images/cart/3.jpg" alt=""></a>
                                                        <span class="product-quantity">1x</span>
                                                    </div>
                                                    <div class="mini-cart-product-desc">
                                                        <h3><a href="#">Faded Sleeves T-shirt</a></h3>
                                                        <div class="price-box">
                                                            <span class="new-price">$72.21</span>
                                                        </div>
                                                        <div class="size">
                                                            Size: M
                                                        </div>
                                                    </div>
                                                    <div class="remove-from-cart">
                                                        <a href="#" title="Remove"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </li>
                                                <!-- Mini-Cart-item end -->
                                                
                                                <li>
                                                    <!-- shopping-cart-total start -->
                                                    <div class="shopping-cart-total">
                                                        <h4>Sub-Total : <span>$127.42</span></h4>
                                                        <h4>Total : <span>$127.42</span></h4>
                                                    </div>
                                                    <!-- shopping-cart-total end -->
                                                </li>
                                                
                                                <li>   
                                                    <!-- shopping-cart-btn start -->
                                                    <div class="shopping-cart-btn">
                                                        <a href="checkout.html">Checkout</a>
                                                    </div>
                                                    <!-- shopping-cart-btn end -->
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Mini Cart wrap End -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <!-- mobile-menu start -->
                        <div class="mobile-menu d-block d-lg-none"></div>
                        <!-- mobile-menu end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Header-bottom end -->
    </div>
    <!-- Header-area end -->    
    @yield('content')
    <!-- Footer Aare Start -->
    <footer class="footer-area">
       <!-- footer-top start -->
       <div class="footer-top pt--50 section-pb">
           <div class="container">
               <div class="row">
                   <div class="col-lg-4 col-md-6">
                        <!-- footer-info-area start -->
                        <div class="footer-info-area">
                            <div class="footer-logo">
                                <a href="#"><img src="{{ asset('Client/assets/images/logo/logo_footer.png') }}" alt=""></a>
                            </div>
                            <div class="desc_footer">
                                <p><i class="fa fa-home"></i> <span> 123 Main Street, Anytown, CA 12345 - USA.</span> </p>
                                <p><i class="fa fa-phone"></i> <span>  (0) 394 332 597</span> </p>
                                <p><i class="fa fa-envelope-open-o"></i> <span> boyka97@gmail.com</span> </p>
                                <div class="link-follow-footer">
                                    <ul class="footer-social-share">
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- footer-info-area end -->
                   </div>
                   <div class="col-lg-4 col-md-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <!-- footer-info-area start -->
                                <div class="footer-info-area">
                                    <div class="footer-title">
                                        <h3>Products</h3>
                                    </div>
                                    <div class="desc_footer">
                                        <ul>
                                            <li><a href="#">Prices drop</a></li>
                                            <li><a href="#"> New products</a></li>
                                            <li><a href="#"> Best sales</a></li>
                                            <li><a href="#">  Contact us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- footer-info-area end -->
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <!-- footer-info-area start -->
                                <div class="footer-info-area">
                                    <div class="footer-title">
                                        <h3>Our company</h3>
                                    </div>
                                    <div class="desc_footer">
                                        <ul>
                                            <li><a href="#">Delivery</a></li>
                                            <li><a href="#">About us</a></li>
                                            <li><a href="#">Contact us</a></li>
                                            <li><a href="#">Sitemap</a></li>
                                            <li><a href="#">Stores</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- footer-info-area end -->
                            </div>
                        </div>
                   </div>
                   <div class="col-lg-4 col-md-12">
                        <!-- footer-info-area start -->
                        <div class="footer-info-area">
                            <div class="footer-title">
                                <h3>Join Our Newsletter Now </h3>
                            </div>
                            <div class="desc_footer">
                                <div class="input-newsletter">
                                   <input name="email" class="input_text" value="" placeholder="Your email address" type="text">
                                   <button class="btn-newsletter"><i class="fa fa-paper-plane-o"></i></button>
                                </div>
                                <p>Get E-mail updates about our latest shop and special offers.</p>
                            </div>
                        </div>
                        <!-- footer-info-area end -->
                   </div>
               </div>
           </div>
        </div>
        <!-- footer-top end -->
        <!-- footer-buttom start -->
        <div class="footer-buttom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="copy-right">
                            <p>Copyright 2021 <a href="#">Boyka</a>.  All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="payment">
                            <img src="{{ asset('Client/assets/images/icon/1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-buttom start -->
    </footer>
    <!-- Footer Aare End -->
    
    
</div>
<!-- Main Wrapper End -->

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{ asset('Client/assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('Client/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('Client/assets/js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('Client/assets/js/bootstrap.min.js') }}"></script>
<!-- Plugins JS -->
<script src="{{ asset('Client/assets/js/plugins.js') }}"></script>
<!-- Ajax Mail -->
<script src="{{ asset('Client/assets/js/ajax-mail.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('Client/assets/js/main.js') }}"></script>


</body>


<!-- Mirrored from htmldemo.net/boyka/boyka/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Jul 2024 13:35:09 GMT -->
</html>