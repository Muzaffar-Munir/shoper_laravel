@extends('user/layout/default')
@section('content')
<style type="text/css">
	.login-container{
margin-top: 5%;
margin-bottom: 5%;
}
.login-form-1{
padding: 10.6%;
box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
text-align: center;
color: #333;
}
.login-form-2{
padding: 7.3%;
background: #5a88ca;
box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3{
text-align: center;
color: #fff;
}
.login-container form{
padding: 10%;
}
.btnSubmit
{
width: 50%;
border-radius: 1rem;
padding: 1.5%;
border: none;
cursor: pointer;
}
.login-form-1 .btnSubmit{
font-weight: 600;
color: #fff;
background-color: #0062cc;
}
.login-form-2 .btnSubmit{
font-weight: 600;
color: #0062cc;
background-color: #fff;
}
.login-form-2 .ForgetPwd{
color: #fff;
font-weight: 600;
text-decoration: none;
}
.login-form-1 .ForgetPwd{
color: #0062cc;
font-weight: 600;
text-decoration: none;
}
</style>
<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2>Login Form</h2>
				</div>
			</div>
		</div>
	</div>
	</div> <!-- End Page title area -->
	<div class="container login-container">

		<div class="row">
			<div class="col-md-6 login-form-1">
				<h3>Login Here</h3>
				<form method="post" action="{{url('login')}}">
				  {{csrf_field()}}
					<div class="form-group">
						<input type="text" name="email" class="form-control" placeholder="Your Email *" value="" />
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Your Password *" value="" />
					</div>
					<div class="form-group">
						<input type="submit" class="btnSubmit" value="Login" />
					</div>
					<div class="form-group">
						<a href="#" class="ForgetPwd">Forget Password?</a>
					</div>
				</form>
			</div>

			<div class="col-md-6 login-form-2">
				@if ($errors->any())
				<ul>
					@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
				<br />
				@endif
				<h3>Register Here</h3>

				<form action="{{url('signup')}}" method="post">
					{{csrf_field()}}
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Your Name *" name="customer_name" />
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Your Phone Number *" name="customer_phone"/>
					</div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Your Email *" name="customer_email"/>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Your Password *" name="customer_password" />
					</div>
					<div class="form-group">
						<button type="submit" class="btnSubmit" value="Register" >Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="brands-area" style="margin-bottom: 10px;">
		<div class="zigzag-bottom"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="brand-wrapper">
						<div class="brand-list">
							<img src="{{asset('user/img/brand1.png')}}" alt="">
							<img src="{{asset('user/img/brand2.png')}}" alt="">
							<img src="{{asset('user/img/brand3.png')}}" alt="">
							<img src="{{asset('user/img/brand4.png')}}" alt="">
							<img src="{{asset('user/img/brand5.png')}}" alt="">
							<img src="{{asset('user/img/brand6.png')}}" alt="">
							<img src="{{asset('user/img/brand1.png')}}" alt="">
							<img src="{{asset('user/img/brand2.png')}}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		</div> <!-- End brands area -->
		@endsection