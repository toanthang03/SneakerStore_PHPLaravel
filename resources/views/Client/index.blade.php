@extends('Layout.clientLayout')
@section('title', 'BOYKA VN')
@section('content')
<!-- Main Wrapper Start -->
<!-- Hero Slider start -->
<div class="hero-slider hero-slider-one">
    <div class="single-slide" style="background-image: url('Client/assets/images/slider/slide-bg-1.jpg')">
        <!-- Hero Content One Start -->
        <div class="hero-content-one container">
            <div class="row">
                <div class="col">
                    <div class="slider-text-info">
                        <h1>Classic Leather Accessories </h1>
                        <h1>Amazing For Men's</h1>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>
                        <a href="shop.html" class="btn slider-btn uppercase"><span><i class="fa fa-plus"></i> Shop Now</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Content One End -->
    </div>
    <div class="single-slide" style="background-image: url('Client/assets/images/slider/slider-bg-2.jpg')">
        <!-- Hero Content One Start -->
        <div class="hero-content-one container">
            <div class="row">
                <div class="col">
                    <div class="slider-text-info">
                        <h1>Spring Men's T-Shirt</h1>
                        <h1>Amazing Men's</h1>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>
                        <a href="shop.html" class="btn slider-btn uppercase"><span><i class="fa fa-plus"></i> SHOP NOW</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Content One End -->
    </div>
</div>
<!-- Hero Slider end -->

<!-- Banner area start -->
<div class="banner-area mb--30">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <!-- single-banner start -->
                <div class="single-banner mt--30">
                    <a href="shop.html"><img src="{{ asset('Client/assets/images/banner/1.jpg') }}" alt=""></a>
                </div>
                <!-- single-banner end -->
            </div>
            <div class="col-lg-4 col-md-4">
                <!-- single-banner start -->
                <div class="single-banner mt--30">
                    <a href="shop.html"><img src="{{ asset('Client/assets/images/banner/2.jpg') }}" alt=""></a>
                </div>
                <!-- single-banner end -->
            </div>
            <div class="col-lg-4 col-md-4">
                <!-- single-banner start -->
                <div class="single-banner mt--30">
                    <a href="shop.html"><img src="{{ asset('Client/assets/images/banner/3.jpg') }}" alt=""></a>
                </div>
                <!-- single-banner end -->
            </div>
        </div>
    </div>
</div>
<!-- Banner area end -->

<!-- Daily Deals area start -->
<div class="daily-deals-area daily-deals-bg section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="row">
                    <div class="col">
                        <div class="daily-deals-title">
                            <h2>Ngày Giảm Giá</h2>
                            <p>Giảm 30% cho các mẫu giày từ ngày 1/8/2024</p>
                        </div>
                    </div>
                </div>
                <div class="deals-product-active">
                    @foreach($specialProduct as $product)
                    <div class="daily-deals-wrap">
                        <!-- countdown start -->
                        <div class="countdown-deals" data-countdown="2023/03/01"></div>
                        <!-- countdown end -->
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="{{ route('products.detail', ['id' => $product->id]) }}"><img src="{{ $product->image }}" alt=""></a>
                                <span class="label-product label-new">new</span>
                            </div>
                            <div class="product-content">
                                <h3><a href="{{ route('products.detail', ['id' => $product->id]) }}">{{$product->productname}}</a></h3>
                                <div class="price-box">
                                    <span class="new-price">{{ number_format($product->price, 0, ',', '.') }} VND</span>
                                    <span class="old-price">1.900.000 VND</span>
                                </div>
                                <div class="product-action">
                                    <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Add to cart</button>
                                    <div class="star_content">
                                        <ul class="d-flex">
                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a class="star-o" href="#"><i class="fa fa-star-o"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Daily Deals area end -->

<!-- Product Area Start -->
<div class="product-area section-pt section-pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section-title start -->
                <div class="section-title">
                    <h2>New Arrivals </h2>
                    <p>Most Trendy 2023 Clother</p>
                </div>
                <!-- section-title end -->
            </div>
        </div>
        <!-- product-wrapper start -->
        <div class="product-wrapper">
            <div class="product-slider">
                @foreach($products as $pro)
                <div class="col-12">
                    <!-- single-product-wrap start -->
                    <div class="single-product-wrap">
                        <div class="product-image">
                            <a href="{{ route('products.detail', ['id' => $pro->id]) }}"><img src="{{ $pro->image }}" alt=""></a>
                            <span class="label-product label-new">new</span>
                            <div class="quick_view">
                                <a href="#" title="quick view" class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="{{ route('products.detail', ['id' => $pro->id]) }}">{{$pro->productname}}</a></h3>
                            <div class="price-box">
                                <span class="new-price">{{ number_format($pro->price, 0, ',', '.') }} VND</span>
                            </div>
                            <div class="product-action">
                                <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Add to cart</button>
                                <div class="star_content">
                                    <ul class="d-flex">
                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                        <li><a class="star-o" href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-wrap end -->
                </div>
                @endforeach
            </div>
        </div>
        <!-- product-wrapper end -->
    </div>
</div>
<!-- Product Area End -->

<!-- Banner area start -->
<div class="banner-area-two">
    <div class="container-fluid plr-40">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <!-- single-banner start -->
                <div class="single-banner-two mt--30">
                    <a href="#"><img src="{{ asset('Client/assets/images/banner/bg1.jpg') }}" alt=""></a>
                </div>
                <!-- single-banner end -->
            </div>
            <div class="col-lg-6 col-md-6">
                <!-- single-banner start -->
                <div class="single-banner-two mt--30">
                    <a href="#"><img src="{{ asset('Client/assets/images/banner/bg2.jpg') }}" alt=""></a>
                </div>
                <!-- single-banner end -->
            </div>
        </div>
    </div>
</div>
<!-- Banner area end -->

<!-- Product Area Start -->
<div class="product-area section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section-title start -->
                <div class="section-title section-bg-2">
                    <h2>Bestseller Products</h2>
                    <p>Most Trendy 2023 Clother</p>
                </div>
                <!-- section-title end -->
            </div>
        </div>
        <!-- product-wrapper start -->
        <div class="product-wrapper">
            <div class="product-slider">
                @foreach($oldProduct as $p)
                <!-- single-product-wrap start -->
                <div class="single-product-wrap">
                    <div class="product-image">
                        <a href="{{ route('products.detail', ['id' => $p->id]) }}"><img src="{{ $p->image }}" alt=""></a>
                        <span class="label-product label-new">new</span>
                    </div>
                    <div class="product-content">
                        <h3><a href="{{ route('products.detail', ['id' => $pro->id]) }}">{{$p->productname}}</a></h3>
                        <div class="price-box">
                            <span class="new-price">{{ number_format($pro->price, 0, ',', '.') }} VND</span>
                        </div>
                        <div class="product-action">
                            <button class="add-to-cart" title="Add to cart"><i class="fa fa-plus"></i> Add to cart</button>
                            <div class="star_content">
                                <ul class="d-flex">
                                    <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a class="star" href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a class="star-o" href="#"><i class="fa fa-star-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-product-wrap end -->
                @endforeach
            </div>
        </div>
        <!-- product-wrapper end -->
    </div>
</div>
<!-- Product Area End -->

<!-- Our Brand Area Start -->
<div class="our-brand-area">
    <div class="container">
        <div class="row our-brand-active text-center">
            <div class="col-12">
                <div class="single-brand">
                    <a href="#"><img src="{{ asset('Client/assets/images/brand/1.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-12">
                <div class="single-brand">
                    <a href="#"><img src="{{ asset('Client/assets/images/brand/2.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-12">
                <div class="single-brand">
                    <a href="#"><img src="{{ asset('Client/assets/images/brand/3.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-12">
                <div class="single-brand">
                    <a href="#"><img src="{{ asset('Client/assets/images/brand/4.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-12">
                <div class="single-brand">
                    <a href="#"><img src="{{ asset('Client/assets/images/brand/5.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-12">
                <div class="single-brand">
                    <a href="#"><img src="{{ asset('Client/assets/images/brand/6.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our Brand Area End -->

<!-- Latest Blog Posts Area start -->
<div class="latest-blog-post-area section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section-title start -->
                <div class="section-title section-bg-3">
                    <h2>Latest Blog Posts </h2>
                    <p>There are latest blog posts</p>
                </div>
                <!-- section-title end -->
            </div>
        </div>
        <div class="latest-blog-slider">
            <!-- single-latest-blog start -->
            <div class="single-latest-blog mt--30">
                <div class="latest-blog-image">
                    <a href="blog-details.html">
                        <img src="{{ asset('Client/assets/images/blog/1.jpg') }}" alt="">
                    </a>
                </div>
                <div class="latest-blog-content">
                    <h4><a href="blog-details.html">Work with customizer</a></h4>
                    <div class="post_meta">
                        <span class="meta_date"><span> <i class="fa fa-calendar"></i></span>Mar 05, 2018</span>
                        <span class="meta_author"><span></span>Demo Name</span>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the ...</p>
                </div>
            </div>
            <!-- single-latest-blog end -->
            <!-- single-latest-blog start -->
            <div class="single-latest-blog mt--30">
                <div class="latest-blog-image">
                    <a href="blog-details.html">
                        <img src="{{ asset('Client/assets/images/blog/2.jpg') }}" alt="">
                    </a>
                </div>
                <div class="latest-blog-content">
                    <h4><a href="blog-details.html">Go to New Horizonts</a></h4>
                    <div class="post_meta">
                        <span class="meta_date"><span> <i class="fa fa-calendar"></i></span>may 17, 2018</span>
                        <span class="meta_author"><span></span>Demo Name</span>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the ...</p>
                </div>
            </div>
            <!-- single-latest-blog end -->
            <!-- single-latest-blog start -->
            <div class="single-latest-blog mt--30">
                <div class="latest-blog-image">
                    <a href="blog-details.html">
                        <img src="{{ asset('Client/assets/images/blog/3.jpg') }}" alt="">
                    </a>
                </div>
                <div class="latest-blog-content">
                    <h4><a href="blog-details.html">What is Bootstrap?</a></h4>
                    <div class="post_meta">
                        <span class="meta_date"><span> <i class="fa fa-calendar"></i></span>june 11, 2018</span>
                        <span class="meta_author"><span></span>Demo Name</span>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the ...</p>
                </div>
            </div>
            <!-- single-latest-blog end -->
            <!-- single-latest-blog start -->
            <div class="single-latest-blog mt--30">
                <div class="latest-blog-image">
                    <a href="blog-details.html">
                        <img src="{{ asset('Client/assets/images/blog/4.jpg') }}" alt="">
                    </a>
                </div>
                <div class="latest-blog-content">
                    <h4><a href="blog-details.html">Try comfort work </a></h4>
                    <div class="post_meta">
                        <span class="meta_date"><span> <i class="fa fa-calendar"></i></span>Mar 13, 2018</span>
                        <span class="meta_author"><span></span>Demo Name</span>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the ...</p>
                </div>
            </div>
            <!-- single-latest-blog end -->
        </div>
    </div>
</div>
<!-- Latest Blog Posts Area End -->

<!-- Client Testimonials Area Start -->
<div class="client-testimonials-area testimonials-bg section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section-title start -->
                <div class="section-title section-bg-2">
                    <h2>Client Testimonials</h2>
                    <p>What they say</p>
                </div>
                <!-- section-title end -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 m-auto">
                <div class="testimonial-slider">
                    <!-- testimonial-content start -->
                    <div class="testimonial-content text-center">
                        <p class="des_testimonial">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                        <div class="content_author">
                            <div class="author-image">
                                <img src="{{ asset('Client/assets/images/comment/com-author.png') }}" alt="">
                            </div>
                        </div>
                        <p class="des_namepost">orando BLoom</p>
                    </div>
                    <!-- testimonial-content end -->
                    <!-- testimonial-content start -->
                    <div class="testimonial-content text-center">
                        <p class="des_testimonial">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                        <div class="content_author">
                            <div class="author-image">
                                <img src="{{ asset('Client/assets/images/comment/com-author.png') }}" alt="">
                            </div>
                        </div>
                        <p class="des_namepost">orando BLoom</p>
                    </div>
                    <!-- testimonial-content end -->
                    <!-- testimonial-content start -->
                    <div class="testimonial-content text-center">
                        <p class="des_testimonial">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
                        <div class="content_author">
                            <div class="author-image">
                                <img src="{{ asset('Client/assets/images/comment/com-author.png') }}" alt="">
                            </div>
                        </div>
                        <p class="des_namepost">orando BLoom</p>
                    </div>
                    <!-- testimonial-content start -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Client Testimonials Area End -->

<!-- Categories List Post area start-->
<div class="poslistcategories-area section-ptb">
    <div class="container-fluid plr-30">
        <div class="row product-categproes-active">
            <div class="col-lg-3">
                <!-- categories-list-post-item start -->
                <div class="categories-list-post-item">
                    <img src="{{ asset('Client/assets/images/category/1.jpg') }}" alt="">
                    <a href="#" class="category-inner">Earrings</a>
                </div>
                <!-- categories-list-post-item end -->
            </div>
            <div class="col-lg-3">
                <!-- categories-list-post-item start -->
                <div class="categories-list-post-item">
                    <img src="{{ asset('Client/assets/images/category/2.jpg') }}" alt="">
                    <a href="#" class="category-inner">Necklaces</a>
                </div>
                <!-- categories-list-post-item end -->
            </div>
            <div class="col-lg-3">
                <!-- categories-list-post-item start -->
                <div class="categories-list-post-item">
                    <img src="{{ asset('Client/assets/images/category/3.jpg') }}" alt="">
                    <a href="#" class="category-inner">Bracelets</a>
                </div>
                <!-- categories-list-post-item end -->
            </div>
            <div class="col-lg-3">
                <!-- categories-list-post-item start -->
                <div class="categories-list-post-item">
                    <img src="{{ asset('Client/assets/images/category/4.jpg') }}" alt="">
                    <a href="#" class="category-inner">Portfolio</a>
                </div>
                <!-- categories-list-post-item end -->
            </div>
            <div class="col-lg-3">
                <!-- categories-list-post-item start -->
                <div class="categories-list-post-item">
                    <img src="{{ asset('Client/assets/images/category/1.jpg') }}" alt="">
                    <a href="#" class="category-inner">Popovers</a>
                </div>
                <!-- categories-list-post-item end -->
            </div>
        </div>
    </div>
</div>
<!-- Categories List Post area -->

<!-- Our Services Area Start -->
<div class="our-services-area section-pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <!-- single-service-item start -->
                <div class="single-service-item">
                    <div class="our-service-icon">
                        <i class="fa fa-truck"></i>
                    </div>
                    <div class="our-service-info">
                        <h3>Free Shipping</h3>
                        <p>Free shipping on all US order or order above $200</p>
                    </div>
                </div>
                <!-- single-service-item end -->
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- single-service-item start -->
                <div class="single-service-item">
                    <div class="our-service-icon">
                        <i class="fa fa-support"></i>
                    </div>
                    <div class="our-service-info">
                        <h3>Support 24/7</h3>
                        <p>Contact us 24 hours a day, 7 days a week</p>
                    </div>
                </div>
                <!-- single-service-item end -->
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- single-service-item start -->
                <div class="single-service-item">
                    <div class="our-service-icon">
                        <i class="fa fa-undo"></i>
                    </div>
                    <div class="our-service-info">
                        <h3>30 Days Return</h3>
                        <p>Simply return it within 30 days for an exchange</p>
                    </div>
                </div>
                <!-- single-service-item end -->
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- single-service-item start -->
                <div class="single-service-item">
                    <div class="our-service-icon">
                        <i class="fa fa-credit-card"></i>
                    </div>
                    <div class="our-service-info">
                        <h3>100% Payment Secure</h3>
                        <p>We ensure secure payment with PEV</p>
                    </div>
                </div>
                <!-- single-service-item end -->
            </div>
        </div>
    </div>
</div>
<!-- Our Services Area End -->

<!-- Modal Algemeen Uitgelicht start -->
<div class="modal fade modal-wrapper" id="exampleModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-inner-area row">
                    <div class="col-lg-5 col-md-6 col-sm-6">
                        <!-- Product Details Left -->
                        <div class="product-details-left">
                            <div class="product-details-images slider-navigation-1">
                                <div class="lg-image">
                                    <img src="{{ asset('Client/assets/images/product/1.jpg') }}" alt="product image">
                                </div>
                                <div class="lg-image">
                                    <img src="{{ asset('Client/assets/images/product/2.jpg') }}" alt="product image">
                                </div>
                                <div class="lg-image">
                                    <img src="{{ asset('Client/assets/images/product/3.jpg') }}" alt="product image">
                                </div>
                                <div class="lg-image">
                                    <img src="{{ asset('Client/assets/images/product/5.jpg') }}" alt="product image">
                                </div>
                            </div>
                            <div class="product-details-thumbs slider-thumbs-1">
                                <div class="sm-image"><img src="{{ asset('Client/assets/images/product/1.jpg') }}" alt="product image thumb"></div>
                                <div class="sm-image"><img src="{{ asset('Client/assets/images/product/2.jpg') }}" alt="product image thumb"></div>
                                <div class="sm-image"><img src="{{ asset('Client/assets/images/product/3.jpg') }}" alt="product image thumb"></div>
                                <div class="sm-image"><img src="{{ asset('Client/assets/images/product/4.jpg') }}" alt="product image thumb"></div>
                            </div>
                        </div>
                        <!--// Product Details Left -->
                    </div>

                    <div class="col-lg-7 col-md-6 col-sm-6">
                        <div class="product-details-view-content">
                            <div class="product-info">
                                <h2>Healthy Melt</h2>
                                <div class="price-box">
                                    <span class="old-price">$70.00</span>
                                    <span class="new-price">$76.00</span>
                                    <span class="discount discount-percentage">Save 5%</span>
                                </div>
                                <p>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom. Lorem ipsum dolor sit amet, consectetur adipisicing elit. quibusdam corporis, earum facilis et nostrum dolorum accusamus similique eveniet quia pariatur.</p>
                                <div class="product-variants">
                                    <div class="produt-variants-size">
                                        <label>Size</label>
                                        <select class="form-control-select">
                                            <option value="1" title="S" selected="selected">S</option>
                                            <option value="2" title="M">M</option>
                                            <option value="3" title="L">L</option>
                                        </select>
                                    </div>
                                    <div class="produt-variants-color">
                                        <label>Color</label>
                                        <ul class="color-list">
                                            <li><a href="#" class="orange-color active"></a></li>
                                            <li><a href="#" class="paste-color"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="single-add-to-cart">
                                    <form action="#" class="cart-quantity">
                                        <div class="quantity">
                                            <label>Quantity</label>
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" value="1" type="text">
                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                            </div>
                                        </div>
                                        <button class="add-to-cart" type="submit">Add to cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Algemeen Uitgelicht end -->

<!-- Main Wrapper End -->

@endsection