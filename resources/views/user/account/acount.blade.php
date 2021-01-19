@extends('user/layout/default')
@section('content')
<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2>User Dashboard</h2>
				</div>
			</div>
		</div>
	</div>
	</div> <!-- End Page title area -->
	<?php
	$customer_id=Session::get('customer_id');
	$customer_name=Session::get('customer_name');
	$customer_email=Session::get('customer_email');
	$customer_phone=Session::get('customer_phone');
	?>
	<div class="container cont" style="margin-bottom: 100px;">
		<div class="text-center text-muted">
			<h3 style="margin-top: 30px;"><strong>User Account</strong></h3>
		</div>
		<div class="row profile">
			<div class="col-md-3" style="margin-top: 20px;">
				<div class="profile-sidebar">
					<!-- SIDEBAR USERPIC -->
					<div class="profile-userpic">
						<img src="https://gravatar.com/avatar/31b64e4876d603ce78e04102c67d6144?s=80&d=https://codepen.io/assets/avatars/user-avatar-80x80-bdcd44a3bfb9a5fd01eb8b86f9e033fa1a9897c3a15b33adfc2649a002dab1b6.png" class="img-responsive" alt="">
					</div>
					<!-- END SIDEBAR USERPIC -->
					<!-- SIDEBAR USER TITLE -->
					<div class="profile-usertitle">
						<div class="profile-usertitle-name">
							{{$customer_name}}
						</div>
					</div>
					<!-- END SIDEBAR BUTTONS -->
					<!-- SIDEBAR MENU -->
					<div class="profile-usermenu">
						<ul class="nav">
							<li class="">
								<a href="#">
									<i class="glyphicon glyphicon-home"></i>
								Overview </a>
							</li>
							<li>
								<a href="{{URL::to('user-edit/')}}">
									<i class="glyphicon glyphicon-user"></i>
								Account Settings </a>
							</li>
							<li>
								<a href="#" target="_blank">
									<i class="glyphicon glyphicon-ok"></i>
								Tasks </a>
							</li>
						</ul>
					</div>
					<!-- END MENU -->
				</div>
			</div>
			<div class="col-md-9" style="margin-top: 20px;">
				<div class="profile-content">
					<table>
						<thead>
							<tr>
								<th scope="col">Name</th>
								<th scope="col">{{$customer_name}}</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td data-label="Account">Email</td>
								<td data-label="Due Date">{{$customer_email}}</td>
							</tr>
							<tr>
								<td data-label="Account">Phone</td>
								<td data-label="Due Date">{{$customer_phone}}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-md-9" style="margin-top: 20px;">
				<div class="profile-content">
					<table>
						<caption>Shopping Cart</caption>
						<thead>
							<tr>
								<th scope="col">Name</th>
								<th scope="col">Naveed</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td data-label="Account">Email</td>
								<td data-label="Due Date">naveed@gmail.com</td>
							</tr>
							<tr>
								<td data-label="Account">Phone</td>
								<td data-label="Due Date">873488238348</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<style>
		/***
	User Profile Sidebar by @keenthemes
	A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: https://j.mp/metronictheme
	Licensed under MIT
	***/
	.cont{
	background: #fbfbfb;
	margin-top: 30px;
	}
	/* Profile container */
	.profile {
	margin: 20px 0;
	}
	/* Profile sidebar */
	.profile-sidebar {
	padding: 20px 0 10px 0;
	background: #fff;
	}
	.profile-userpic img {
	float: none;
	margin: 0 auto;
	width: 50%;
	height: 50%;
	-webkit-border-radius: 50% !important;
	-moz-border-radius: 50% !important;
	border-radius: 50% !important;
	}
	.profile-usertitle {
	text-align: center;
	margin-top: 20px;
	}
	.profile-usertitle-name {
	color: #5a7391;
	font-size: 16px;
	font-weight: 600;
	margin-bottom: 7px;
	}
	.profile-usertitle-job {
	text-transform: uppercase;
	color: #5b9bd1;
	font-size: 12px;
	font-weight: 600;
	margin-bottom: 15px;
	}
	.profile-usermenu {
	margin-top: 30px;
	}
	.profile-usermenu ul li {
	border-bottom: 1px solid #f0f4f7;
	}
	.profile-usermenu ul li:last-child {
	border-bottom: none;
	}
	.profile-usermenu ul li a {
	color: #93a3b5;
	font-size: 14px;
	font-weight: 400;
	}
	.profile-usermenu ul li a i {
	margin-right: 8px;
	font-size: 14px;
	}
	.profile-usermenu ul li a:hover {
	background-color: #fafcfd;
	color: #5b9bd1;
	}

	/* Profile Content */
	.profile-content {
	padding: 20px;
	background: #fff;
	min-height: 230px;
	}
	.dashboard-stat, .portlet {
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	-ms-border-radius: 4px;
	-o-border-radius: 4px;
	}
	.profile-stat-title {
	color: #7f90a4;
	font-size: 25px;
	text-align: center;
	}
	.uppercase {
	text-transform: uppercase!important;
	}
	.profile-desc-link i {
	width: 22px;
	font-size: 19px;
	color: #abb6c4;
	margin-right: 5px;
	}
	table {
	border: 1px solid #ccc;
	border-collapse: collapse;
	margin: 0;
	padding: 0;
	width: 100%;
	table-layout: fixed;
	}
	table caption {
	font-size: 1.5em;
	margin: .5em 0 .75em;
	}
	table tr {
	background-color: #f8f8f8;
	border: 1px solid #ddd;
	padding: .35em;
	}
	table th,
	table td {
	padding: .625em;
	text-align: center;
	}
	table th {
	font-size: .85em;
	letter-spacing: .1em;
	text-transform: uppercase;
	}
	@media screen and (max-width: 600px) {
	table {
	border: 0;
	}
	table caption {
	font-size: 1.3em;
	}
	table thead {
	border: none;
	clip: rect(0 0 0 0);
	height: 1px;
	margin: -1px;
	overflow: hidden;
	padding: 0;
	position: absolute;
	width: 1px;
	}
	table tr {
	border-bottom: 3px solid #ddd;
	display: block;
	margin-bottom: .625em;
	}
	table td {
	border-bottom: 1px solid #ddd;
	display: block;
	font-size: .8em;
	text-align: right;
	}
	table td::before {
	/*
	* aria-label has no advantage, it won't be read inside a table
	content: attr(aria-label);
	*/
	content: attr(data-label);
	float: left;
	font-weight: bold;
	text-transform: uppercase;
	}
	table td:last-child {
	border-bottom: 0;
	}
	}
	</style>
	@endsection