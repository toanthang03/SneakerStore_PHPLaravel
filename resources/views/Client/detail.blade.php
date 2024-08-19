@extends('Layout.clientLayout')
@section('title', 'BOYKA VN')
@section('content')

<!-- Main Wrapper Start -->

<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{ route('Client') }}">Home</a></li>
                    <li class="breadcrumb-item active">Product Details</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->


<!-- content-wraper start -->
<div class="content-wraper">
    <div class="container">
        <div class="row single-product-area">
            <div class="col-lg-5 col-md-6">
                <!-- Product Details Left -->
                <div class="product-details-left">
                    <div class="product-details-images slider-lg-image-1">
                        <div class="lg-image">
                            <a href="#" class="img-poppu"><img src="{{ $products->image }}" alt="product image"></a>
                        </div>
                    </div>
                </div>
                <!--// Product Details Left -->
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="product-details-view-content">
                    <div class="product-info">
                        <h2>{{ $products->productname }}</h2>
                        <div class="price-box">
                            <span class="new-price">{{ number_format($products->price, 0, ',', '.') }} VND</span>
                        </div>
                        <p>{{$products->description}}</p>
                        <div class="product-variants">
                            <div class="produt-variants-size">
                                <label>Chọn size ở đây</label>
                                <select class="form-control-select">
                                    <option value="1" title="S" selected="selected">36</option>
                                    <option value="3" title="L">36.5</option>
                                    <option value="3" title="L">37</option>
                                    <option value="3" title="L">38</option>
                                    <option value="3" title="L">39</option>
                                    <option value="2" title="M">40</option>
                                    <option value="3" title="L">42</option>
                                    <option value="3" title="L">43</option>
                                    <option value="3" title="L">44</option>
                                    <option value="3" title="L">45</option>
                                </select>
                            </div>
                            <div class="product-availability">
                                <i class="fa fa-check"></i> In stock
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
                                <button class="add-to-cart" type="submit">Thêm vào giỏ hàng</button>
                            </form>
                        </div>
                        <div class="product-social-sharing">
                            <label>Share</label>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="block-reassurance">
                            <ul>
                                <li>
                                    <div class="reassurance-item">
                                        <div class="reassurance-icon">
                                            <i class="fa fa-check-square-o"></i>
                                        </div>
                                        <p>Chính sách bảo hành 12 tháng</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="reassurance-item">
                                        <div class="reassurance-icon">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <p>Chính sách giao hàng nhanh chóng trong 2 giờ</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="reassurance-item">
                                        <div class="reassurance-icon">
                                            <i class="fa fa-exchange"></i>
                                        </div>
                                        <p>Đổi trả trong 7 ngày nếu lỗi do nhà sản xuất</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-details-tab mt--60">
                    <ul role="tablist" class="mb--50 nav">
                        <li class="active" role="presentation">
                            <a data-bs-toggle="tab" role="tab" href="#description" class="active">MÔ TẢ</a>
                        </li>
                        <li role="presentation">
                            <a data-bs-toggle="tab" role="tab" href="#sheet">THÔNG SỐ KỸ THUẬT</a>
                        </li>
                        <li role="presentation">
                            <a data-bs-toggle="tab" role="tab" href="#reviews">ĐÁNH GIÁ</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12">
                <div class="product_details_tab_content tab-content">
                    <!-- Start Single Content -->
                    <div class="product_tab_content tab-pane active" id="description" role="tabpanel">
                        <div class="product_description_wrap">
                            <div class="product_desc mb--30">
                                <h2 class="title_3">Details</h2>
                                <p>{{$products->description}}</p>
                            </div>
                            <div class="pro_feature">
                                <img src="{{ $products->image }}" alt="product image">
                            </div>
                        </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div class="product_tab_content tab-pane" id="sheet" role="tabpanel">
                        <div class="pro_feature">
                            <table class="product-info-table">
                                <tr>
                                    <td>NHÃN HIỆU</td>
                                    <td>{{$brand->name}}</td>
                                </tr>
                                <tr>
                                    <td>TÊN</td>
                                    <td>{{$products->productname}}</td>
                                </tr>
                                <tr>
                                    <td>DÒNG SẢN PHẨM</td>
                                    <td>{{$category->name}}</td>
                                </tr>
                                <tr>
                                    <td>NƠI SẢN XUẤT</td>
                                    <td>Việt Nam</td>
                                </tr>
                                <tr>
                                    <td>CHẾ ĐỘ BẢO HÀNH</td>
                                    <td>Bảo hành chính hãng 01 tháng<br>Hỗ trợ bảo hành 3 tháng từ Nhà phân phối BoyKa VN</td>
                                </tr>
                                <tr>
                                    <td>PHỤ KIỆN THEO KÈM</td>
                                    <td>Túi<br>Phiếu bảo hành chính hãng<br>Hộp giày</td>
                                </tr>
                                <tr>
                                    <td>MIỄN PHÍ VẬN CHUYỂN TOÀN QUỐC KHI ĐẶT HÀNG ONLINE</td>
                                    <td>Có</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div class="product_tab_content tab-pane" id="reviews" role="tabpanel">
                        <div class="review_address_inner">
                            <!-- Start Single Review -->
                            <div class="pro_review">
                                <div class="review_details">
                                    <div class="review_info">
                                        <h4><a href="#">Gerald Barnes</a></h4>
                                        <ul class="product-rating d-flex">
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                        </ul>
                                        <div class="rating_send">
                                            <a href="#"><i class="fa fa-reply"></i></a>
                                        </div>
                                    </div>
                                    <div class="review_date">
                                        <span>27 Jun, 2023 at 3:30pm</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                </div>
                            </div>
                            <!-- End Single Review -->
                            <!-- Start Single Review -->
                            <div class="pro_review">
                                <div class="review_details">
                                    <div class="review_info">
                                        <h4><a href="#">Gerald Barnes</a></h4>
                                        <ul class="product-rating d-flex">
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                            <li><span class="fa fa-star"></span></li>
                                        </ul>
                                        <div class="rating_send">
                                            <a href="#"><i class="fa fa-reply"></i></a>
                                        </div>
                                    </div>
                                    <div class="review_date">
                                        <span>27 Jun, 2023 at 4:32pm</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas elese ifend. Phasellus a felis at estei to bibendum feugiat ut eget eni Praesent et messages in con sectetur posuere dolor non.</p>
                                </div>
                            </div>
                            <!-- End Single Review -->
                        </div>
                        <!-- Start RAting Area -->
                        <div class="rating_wrap">
                            <h2 class="rating-title">Write A review</h2>
                            <h4 class="rating-title-2">Your Rating</h4>
                            <div class="rating_list">
                                <ul class="product-rating d-flex">
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star"></span></li>
                                    <li><span class="fa fa-star"></span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End RAting Area -->
                        <div class="comments-area comments-reply-area">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="#" class="comment-form-area">
                                        <div class="comment-input">
                                        </div>
                                        <p class="comment-form-comment">
                                            <label>Comment</label>
                                            <textarea class="comment-notes" required="required"></textarea>
                                        </p>
                                        <div class="comment-form-submit">
                                            <input type="submit" value="Post Comment" class="comment-submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Content -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wraper end -->


<!-- Product Area Start -->
<div class="product-area section-pt">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section-title start -->
                <div class="section-title section-bg-2">
                    <h2>Other Products</h2>
                    <p>Most Trendy 2023 Sneaker</p>
                </div>
                <!-- section-title end -->
            </div>
        </div>
        <!-- product-wrapper start -->
        <div class="product-wrapper">
            <div class="row product-slider">
                @foreach ($product as $item)
                <div class="col-12">
                    <!-- single-product-wrap start -->
                    <div class="single-product-wrap">
                        <div class="product-image">
                            <a href="/product/{{$item->id}}"><img src="{{$item->image}}" alt=""></a>
                            <span class="label-product label-new">new</span>
                        </div>
                        <div class="product-content">
                            <h3><a href="">{{$item->productname}}</a></h3>
                            <div class="price-box">
                                <span class="new-price">{{ number_format($products->price, 0, ',', '.') }} VND</span>
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
<!--Style định dạng bảng Product Detail-->
<style>
    .product-info-table {
        width: 60%;
        border-collapse: collapse;
        margin: 0 auto;
    }

    .product-info-table th,
    .product-info-table td {
        padding: 10px 15px;
        border: 1px solid #ddd;
    }

    .product-info-table th {
        text-align: left;
        font-weight: normal;
    }

    .product-info-table .header-section {
        text-align: center;
        font-size: 18px;
        font-weight: bold;
        padding: 15px;
        border: none;
    }

    .product-info-table td {
        background-color: #f9f9f9;
    }

    .product-info-table td:first-child {
        font-weight: bold;
    }
</style>
<!-- Product Area End -->
<!-- Main Wrapper End -->
@endsection