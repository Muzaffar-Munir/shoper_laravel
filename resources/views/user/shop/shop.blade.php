@extends('user/layout/default')
@section('content')

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Show Product</h2>
                </div>
            </div>
        </div>
    </div>
    </div> <!-- End Page title area -->
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
@include('user/include/sidebar')

                <div class="col-md-9">
                    <div class="text-center text-muted">
                        <h3 style="padding: 40px;"><strong>All Product</strong></h3>
                    </div>
                    @if($showproduct==NULL)
                    <div class="text-center text-muted">
                        <p style="padding: 40px;"><strong>No Product Found</strong></p>
                    </div>
                    @endif
                    @forelse($showproduct as $showp)
                    <div class="col-md-3 col-sm-12 text-center">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img src="{!! url('uploads/product/'.$showp->product_image) !!}" style="width: 100px;" alt="">

                            </div>
                            <h2><a href="{{url('single-shop/'.$showp->product_id)}}">{{$showp->product_name}} :P</a></h2>
                            <div class="product-carousel-price">
                                <ins>{{$showp->product_price}}</ins> <del>$999.00</del>
                            </div>
                            <div class="product-option-shop">
                             <form action="{{url('add-cart',$showp->product_id)}}" method="post" class="cart">
                                        {{csrf_field()}}
                                <button class="add_to_cart_button" type="submit">Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @empty
                  <p>No Product</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    @endsection