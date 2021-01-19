@extends('user/layout/default')
@section('content')
<style type="text/css">
	.contact-parent{
display:flex;
margin:80px 0;
}
.contact-child{
display:flex;
flex:1;
box-shadow:0px 0px 10px -2px rgba(0,0,0,0.75);
}
.child1{
background:linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url("https://cdn.pixabay.com/photo/2019/06/28/00/17/architecture-4303279_1280.jpg");
background-size:cover;
display:flex;
flex-direction:column;
justify-content:space-around;
color:#fff;
padding:100px 0;
}
.child1 p{
padding-left:20%;
font-size:20px;
text-shadow:0px 0px 2px #000;
}
.child1 p span{
font-size:16px;
color:#9df2fd;
}
.child2{
flex-direction:column;
justify-content:space-around;
align-items:center;
}
.inside-contact{
width:90%;
margin:0 auto;
}
.inside-contact h2{
text-transform:uppercase;
text-align:center;
margin-top:50px;
}
.inside-contact h3{
text-align:center;
font-size:16px;
color:#0085e2;
}
.inside-contact input, .inside-contact textarea{
width:100%;
background-color:#fff;
border:1px solid rgba(0,0,0,0.48);
padding:5px 10px;
margin-bottom:20px;
}
.inside-contact button{
background-color:#5a88ca;
color:#fff;
transition:0.2s;
border:2px solid #5a88ca;
margin:30px 0;
}
.inside-contact button:hover{
background-color:#000;
color:#fff;
transition:0.2s;
}
@media screen and (max-width:991px){
.contact-parent{
display:block;
width:100%;
}
.child1{
display:none;
}
.child2{
background-image:linear-gradient(rgba(255,255,255,0.7),rgba(255,255,255,0.7)), url("https://pixabay.com/photos/mobile-phone-smartphone-keyboard-1917737/");
background-size:cover;
}
.inside-contact input, .inside-contact textarea{
background-color:#fff;
}
}
</style>
<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2>Contact us</h2>
				</div>
			</div>
		</div>
	</div>
	</div> <!-- End Page title area -->
	<div>
		<div class="container">
			<div class="contact-parent">
				<div class="contact-child child1">
					<p>
						<i class="fas fa-map-marker-alt"></i> Address <br />
						<span> Lahore
							<br />
							Pakistan
						</span>
					</p>
					<p>
						<i class="fas fa-phone-alt"></i> Let's Talk <br />
						<span> 030387876778</span>
					</p>
					<p>
						<i class=" far fa-envelope"></i> General Support <br />
						<span>mlknaveed80@gmail.com</span>
					</p>
				</div>
				<div class="contact-child child2">
					<div class="inside-contact">
						<h2>Contact Us</h2>
						<h3>
						<span id="confirm">
							<form method="post" action="{{url('contactsend')}}">
								{{csrf_field()}}
							</h3>
							<p>Name *</p><p class="text-danger">{{$errors->first('txt_name')}}</p>
							<input name="txt_name" type="text">
							<p>Email * </p><p class="text-danger">{{$errors->first('txt_email')}}</p>
							<input name="txt_email" type="Email">
							<p>Message *</p><p class="text-danger">{{$errors->first('txt_message')}}</p>
							<textarea name="txt_message" rows="9" cols="20" ></textarea>
							<button type="submit" id="btn_send" value="SEND">Send</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection