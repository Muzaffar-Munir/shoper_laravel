<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Dashio - Bootstrap Admin Template</title>
    <!-- Favicons -->
    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('admin/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/lib/gritter/css/jquery.gritter.css')}}" />
    <!-- Custom styles for this template -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet">
    <script src="{{asset('admin/lib/chart-master/Chart.js')}}"></script>
  </head>
  <body>
    <?php
    $id=Session::get('id');
    $shop_name=Session::get('shop_name');
    ?>
    <section id="container">
      <header class="header black-bg">
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo"><b><span>{{$shop_name}}</span></b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
        </div>
        <div class="top-menu">
          <ul class="nav pull-right top-menu">
            <li><a class="logout" href="{{url('shoplogout')}}">Logout</a></li>
          </ul>
        </div>
      </header>
      <aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="profile.html"><img src="{{asset('admin/img/ui-sam.jpg')}}" class="img-circle" width="80"></a></p>
            <h5 class="centered">{{$shop_name}}</h5>
            <li class="mt">
              <a class="active" href="">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-upload"></i>
                <span>Products</span>
              </a>
              <ul class="sub">
                <li><a href="{{url('add-product')}}">Add Product</a></li>
                <li><a href="{{url('show-product')}}">Show Product</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-tag"></i>
                <span>Tabs</span>
              </a>
              <ul class="sub">
                <li><a href="{{url('add-tab')}}">Add Tabs</a></li>
                <li><a href="{{url('show-tab')}}">Show Tabs</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-plus"></i>
                <span>Category</span>
              </a>
              <ul class="sub">
                <li><a href="{{url('add-category')}}">Add Category</a></li>
                <li><a href="{{url('show-category')}}">Show Category</a></li>
              </ul>
            </li>
            @if($id==NULL)
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-user"></i>
                <span>Customers</span>
              </a>
              <ul class="sub">
                <li><a href="{{url('add-customer')}}">Add Customers</a></li>
                <li><a href="{{url('show-customer')}}">Show Customers</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-home"></i>
                <span>Shops</span>
              </a>
              <ul class="sub">
                <li><a href="{{url('add-shop')}}">Add Shops</a></li>
                <li><a href="{{url('show-shop')}}">Show Shops</a></li>
              </ul>
            </li>
            @endif
            <li class="mt">
              <a  href="{{url('orders')}}">
                <i class="fa fa-shopping-cart"></i>
                <span>Orders</span>
              </a>
            </li>
            <li>
              <a href="google_maps.html">
                <i class="fa fa-map-marker"></i>
                <span>Google Maps </span>
              </a>
            </li>
          </ul>
          <!-- sidebar menu end-->
        </div>
      </aside>