@extends('user/layout/default')
@section('content')

 <?php
    $items = Cart::content();
    ?>
<div class="product-big-title-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-bit-title text-center">
					<h2>Shopping Cart</h2>
				</div>
			</div>
		</div>
	</div>
	</div> <!-- End Page title area -->
	<div class="single-product-area">
		<div class="zigzag-bottom"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="single-sidebar">
						<h2 class="sidebar-title">Search Products</h2>
						<form action="#">
							<input type="text" placeholder="Search products...">
							<input type="submit" value="Search">
						</form>
					</div>
					<div class="single-sidebar">
						<h2 class="sidebar-title">Products</h2>
						<div class="thubmnail-recent">
							<img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
							<h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
							<div class="product-sidebar-price">
								<ins>$700.00</ins> <del>$800.00</del>
							</div>
						</div>
						<div class="thubmnail-recent">
							<img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
							<h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
							<div class="product-sidebar-price">
								<ins>$700.00</ins> <del>$800.00</del>
							</div>
						</div>
						<div class="thubmnail-recent">
							<img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
							<h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
							<div class="product-sidebar-price">
								<ins>$700.00</ins> <del>$800.00</del>
							</div>
						</div>
						<div class="thubmnail-recent">
							<img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
							<h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
							<div class="product-sidebar-price">
								<ins>$700.00</ins> <del>$800.00</del>
							</div>
						</div>
					</div>
					<div class="single-sidebar">
						<h2 class="sidebar-title">Recent Posts</h2>
						<ul>
							<li><a href="#">Sony Smart TV - 2015</a></li>
							<li><a href="#">Sony Smart TV - 2015</a></li>
							<li><a href="#">Sony Smart TV - 2015</a></li>
							<li><a href="#">Sony Smart TV - 2015</a></li>
							<li><a href="#">Sony Smart TV - 2015</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-8">
					<div class="product-content-right">
						<div class="woocommerce">
							<form method="post" action="#">
								<table cellspacing="0" class="shop_table cart">
									<thead>
										<tr>
											<th class="product-remove">&nbsp;</th>
											<th class="product-thumbnail">&nbsp;</th>
											<th class="product-name">Product</th>
											<th class="product-price">Price</th>
											<th class="product-quantity">Quantity</th>
											<th class="product-subtotal">Total</th>
										</tr>
									</thead>

									<tbody>
										@foreach($items as $show_cart)
										<tr class="cart_item">
											<td class="product-remove">
												<a title="Remove this item" class="remove" href="{{url('remove-cart',$show_cart->rowId)}}">×</a>
											</td>
											<td class="product-thumbnail">
												<a href="single-product.html"><img style="height: 5s0px; width: 25px;" alt="poster_1_up" class="shop_thumbnail" src="{!! url('uploads/product/'.$show_cart->options->image) !!}"></a>
											</td>
											<td class="product-name">
												<a href="single-product.html">{{$show_cart->name}}</a>
											</td>
											<td class="product-price">
												<span class="amount">{{$show_cart->price}}</span>
											</td>
											<td class="product-quantity">
												<input type="hidden" value="{{$show_cart->rowId}}" id="rowId{{$show_cart->id}}">
												<div class="quantity buttons_added">
													<input type="button" class="minus" value="-">
													<input type="number" size="12" class="input-text qty-fill" name="quantity" id="upcart{{$show_cart->id}}" title="Qty" value="{{$show_cart->qty}}" min="1" step="1">
													<input type="button" class="plus" value="+">
												</div>
											</td>
											<td class="product-subtotal">
												<span class="amount">{{$show_cart->price}} * {{$show_cart->qty}} </span>
											</td>
										</tr>
										@endforeach
										<tr>
											<td class="actions" colspan="6">
												{{-- <div class="coupon">
													<label for="coupon_code">Coupon:</label>
													<input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code">
													<input type="submit" value="Apply Coupon" name="apply_coupon" class="button">
												</div> --}}
												<a href="{{url('shop')}}" type="button" class="button update_cart">Update Cart</a>
												<a href="{{url('checkout')}}" type="button" class="button update_cart">Checkout</a>
												{{-- <input type="submit" value="Checkout" name="proceed" class="checkout-button button alt wc-forward"> --}}
											</td>
										</tr>
									</tbody>
								</table>
							</form>
							<div class="cart-collaterals">
								<div class="cross-sells">
									<h2>You may be interested in...</h2>
									<ul class="products">
										<li class="product">
											<a href="single-product.html">
												<img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="img/product-2.jpg">
												<h3>Ship Your Idea</h3>
												<span class="price"><span class="amount">£20.00</span></span>
											</a>
											<a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">Select options</a>
										</li>
										<li class="product">
											<a href="single-product.html">
												<img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="img/product-4.jpg">
												<h3>Ship Your Idea</h3>
												<span class="price"><span class="amount">{{Cart::setGlobalTax(0)}}</span></span>
											</a>
											<a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">Select options</a>
										</li>
									</ul>
								</div>
								<div class="cart_totals ">
									<h2>Cart Totals</h2>
									<table cellspacing="0">
										<tbody>
											<tr class="cart-subtotal">
												<th>Cart Subtotal</th>
												<td><span class="amount">{{Cart::subtotal()}}</span></td>
											</tr>
											<tr class="shipping">
												<th>Shipping and Handling</th>
												<td>Free Shipping</td>
											</tr>
											<tr class="shipping">
												<th>TAx</th>
												<td>{{Cart::tax()}}</td>
											</tr>
											<tr class="order-total">
												<th>Order Total</th>
												<td><strong><span class="amount">{{Cart::total()}}</span></strong> </td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection