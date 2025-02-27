<!DOCTYPE html>
<!--
ustora by freshdesignweb.com
Twitter: https://twitter.com/freshdesignweb
URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Online Mobile Market!</title>
        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('user/css/font-awesome.min.css')}}">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{asset('user/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('user/style.css')}}">
        <link rel="stylesheet" href="{{asset('user/css/responsive.css')}}">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="header-area">
            <div class="container">
                <?php
                $customer_id=Session::get('customer_id');
                $customer_name=Session::get('customer_name');
                $customer_email=Session::get('customer_email');
                $customer_phone=Session::get('customer_phone');
                ?>
                <div class="row">
                    <div class="col-md-8">
                        <div class="col-md-4">
                            <div class="header-right">
                                <ul class="list-unstyled list-inline">
                                    <li class="dropdown dropdown-small">
                                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key"><i class="fa fa-user"></i>  User: </span>[<span class="value" style="font-size: 22px;"> {{$customer_name}}</span>]<b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{url('account')}}"><i class="fa fa-user"></i>  My Account</a></li>
                                            <li><a href="{{url('logout')}}"><i class="fa fa-arrow-left"></i> Logout User</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="user-menu">
                            <ul>
                                @if($customer_id!=NULL)
                                <li><a href="{{asset('show-cart/')}}"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                                <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                                <li><a href="#"><i class="fa fa-check"></i>Checkout</a></li>
                                @else
                                <li><a href="{{url('show-cart/')}}"><i class="fa fa-user"></i> My Cart</a></li>
                                <li><a href="{{url('login')}}"><i class="fa fa-user"></i> Login</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="header-right">
                            <ul class="list-unstyled list-inline">
                                <li class="dropdown dropdown-small">
                                    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">INR</a></li>
                                        <li><a href="#">GBP</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-small">
                                    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">German</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div> <!-- End header area -->
            <div class="site-branding-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="logo">
                                <h1><a href="{{asset('/')}}"><img src="{{asset('user/img/logo.png')}}"></a></h1>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="shopping-item">
                                <a href="{{url('show-cart/')}}">Cart - <span class="cart-amunt">RS. {{Cart::total()}}</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">{{Cart::count()}}</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                </div> <!-- End site branding area -->
                <div class="mainmenu-area">
                    <div class="container">
                        <div class="row">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class=""><a href="{{asset('/')}}">Home</a></li>
                                    <li><a href="{{asset('shop')}}">Shop</a></li>
                                    <li><a href="{{url('show-cart/')}}">Cart</a></li>
                                    @if($customer_id!=NULL)
                                    <li><a href="checkout.html">Checkout</a></li>
                                    @endif
                                    <li><a href="#">Category</a></li>
                                    <li><a href="#">Others</a></li>
                                    <li><a href="{{url('contact')}}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div> <!-- End mainmenu area -->