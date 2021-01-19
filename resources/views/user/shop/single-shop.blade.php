@extends('user/layout/default')
@section('content')
<div class="product-big-title-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="product-bit-title text-center">
          <h2>Shop {{$product_single->product_name}}</h2>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="single-product-area">
  <div class="zigzag-bottom"></div>
  <div class="container">
    <div class="row">
      @include('user/include/sidebar')
      <div class="col-md-8">
        <div class="product-content-right">
          <div class="product-breadcroumb">
            <a href="">Home</a>
            <a href="">{{$product_single->category_name}}</a>
            <a href="">{{$product_single->product_name}}</a>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="product-images">
                <div class="product-main-img">
                  <img src="{!! url('uploads/product/'.$product_single->product_image) !!}" alt="">
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="product-inner">
                <h2 class="product-name">{{$product_single->product_name}}</h2>
                <div class="product-inner-price">
                  RS:<ins> {{$product_single->product_price}}</ins>
                </div>
                @if($product_single->tab_name=='new')
                <form action="{{url('add-cart',$product_single->product_id)}}" method="post" class="cart">
                  {{csrf_field()}}
                    <input type="number" value="1"  name="qty">
                  </div>
                  <button class="add_to_cart_button" type="submit">Add to cart</button>

                </form>

                @endif
                <div class="product-inner-category">
                  <p>Category:- <a href="">{{$product_single->category_name}}</a>. Tags:- <a href="">{{$product_single->tab_name}}</a></p>
                  <p>Front Cam: <a href="">{{$product_single->product_fcam}}</a>. Back Cam:- <a href="">{{$product_single->product_bcam}}</a></p>
                  <p>Ram:- <a href="">{{$product_single->product_ram}}</a>. Rom:- <a href="">{{$product_single->product_rom}}</a></p>
                </div>
                <div role="tabpanel">
                  <ul class="product-tab" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                  </ul>
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active " id="home">
                      <h2>Product Description</h2>
                      <p>{{$product_single->product_short_description}}</p>
                      <p>{{$product_single->product_long_description}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="Comment">
            <h2>Product Bidding</h2>
            <form method="post" action="{{url('/comment/store/'.$product_single->product_id) }}">
              @csrf
              <div class="submit-review">
                <p><label for="review">Add Comment<p class="text-danger">{{ $errors->first('comment_body') }}</p></label> <textarea name="comment_body" id="" cols="20" rows="10"></textarea></p>
                <p><input type="submit" value="Submit"></p>
              </div>
            </form>
          </div>
          <div class="bootstrap snippets bootdey">
            <div class="row">
              <div class="col-md-12">
                <div class="blog-comment">
                  <hr/>
                  @forelse($product_single->comments as $comment)
                  <ul class="comments">
                    <li class="clearfix">
                      <img src="https://bootdey.com/img/Content/user_2.jpg" class="avatar" alt="">
                      <div class="post-comments">
                        <h5 class="meta">{{ $comment->created_at->diffForHumans() }} <a href="#">{{$comment->customer_name}}</a> says :</h5>
                        <p>
                          {{ $comment->comment_body}}
                        </p>
                      </div>
                    </li>
                  </ul>
                  @empty
                  <p>No Comment</p>
                  @endforelse
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script src="">
$(document).ready(function() {
$('[data-toggle="collapse"]').click(function() {
$(this).toggleClass( "active" );
if ($(this).hasClass("active")) {
$(this).text("Hide");
} else {
$(this).text("Show");
}
});
// document ready
});
</script>
<style type="text/css">
hr {
margin-top: 20px;
margin-bottom: 20px;
border: 0;
border-top: 1px solid #FFFFFF;
}
a {
color: #82b440;
text-decoration: none;
}
.blog-comment::before,
.blog-comment::after,
.blog-comment-form::before,
.blog-comment-form::after{
content: "";
display: table;
clear: both;
}
.blog-comment{
padding-left: 15%;
padding-right: 0%;
}
.blog-comment ul{
list-style-type: none;
padding: 0;
}
.blog-comment img{
opacity: 1;
filter: Alpha(opacity=100);
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
}
.blog-comment img.avatar {
position: relative;
float: left;
margin-left: 0;
margin-top: 0;
width: 65px;
height: 65px;
}
.blog-comment .post-comments{
border: 1px solid #eee;
margin-bottom: 20px;
margin-left: 85px;
margin-right: 0px;
padding: 10px 20px;
position: relative;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
-o-border-radius: 4px;
border-radius: 4px;
background: #fff;
color: #6b6e80;
position: relative;
}
.blog-comment .meta {
font-size: 13px;
color: #aaaaaa;
padding-bottom: 8px;
margin-bottom: 10px !important;
border-bottom: 1px solid #eee;
}
.blog-comment ul.comments ul{
list-style-type: none;
padding: 0;
margin-left: 25px;
}
.blog-comment-form{
padding-left: 15%;
padding-right: 15%;
padding-top: 40px;
}
.blog-comment h3,
.blog-comment-form h3{
margin-bottom: 40px;
font-size: 26px;
line-height: 30px;
font-weight: 800;
}
</style>
@endsection