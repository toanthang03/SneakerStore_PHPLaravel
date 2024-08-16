@extends('Layout.clientLayout')
@section('title', 'BOYKA VN')
@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{route('Client')}}">Home</a></li>
                        <li class="breadcrumb-item active">Login Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    
    
    <!-- content-wraper start -->
    <div class="content-wraper">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 m-auto">
                    <div class="login-register-wrapper">
                        <!-- login-register-tab-list start -->
                        <div class="login-register-tab-list nav">
                            <a class="active" data-bs-toggle="tab" href="#lg1">
                                <h4> login </h4>
                            </a>
                            <a data-bs-toggle="tab" href="#lg2">
                                <h4> register </h4>
                            </a>
                        </div>
                        <!-- login-register-tab-list end -->
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="#" method="post">
                                            <div class="login-input-box">
                                                <input type="text" name="email" placeholder="Địa chỉ Email">
                                                <input type="password" name="password" placeholder="Password">
                                            </div>
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox">
                                                    <label>Remember me</label>
                                                    <a href="#">Forgot Password?</a>
                                                </div>
                                                <div class="button-box">
                                                    <button class="login-btn btn" type="submit"><span>Login</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="#" method="post">
                                            <div class="login-input-box">
                                                <input type="text" name="name" placeholder="Nhập họ tên ở đây">
                                                <input name="email" placeholder="Nhập Email" type="email">
                                                <input type="text" name="address" placeholder="Nhập địa chỉ">
                                                <input type="text" name="phone" placeholder="Nhập số điện thoại">
                                                <span>Mật khẩu</span>
                                                <input type="password" name="password" placeholder="Nhập mật khẩu ở dòng này">
                                                <input type="password" name="password_repeat" placeholder="Nhập lại lần nữa">
                                            </div>
                                            <div class="button-box">
                                                <button class="register-btn btn" type="submit"><span>Register</span></button>
                                            </div>
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
    <!-- content-wraper end -->
<!-- Main Wrapper End -->
@endsection
