<div class="col-md-3">
    <div class="single-sidebar">
        <h2 class="sidebar-title">Search Products</h2>
        <form action="{{url('search') }}" method="get">
            <input type="text" name="search" placeholder="Search products...">
            <input type="submit" value="Search">
        </form>
    </div>
    <div class="single-sidebar">
        <h4 class="sidebar-title">Category</h4>
        <ul>
            @if($showcategory==NULL)
            <li>No category found</li>
            @endif
            @foreach($showcategory as $showc)
            <li><a href="#">{{$showc->category_name}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="single-sidebar">
        <h2 class="sidebar-title">Products</h2>
        <div class="thubmnail-recent">
            <img src="{{asset('user/img/product-thumb-1.jpg')}}" class="recent-thumb" alt="">
            <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
            <div class="product-sidebar-price">
                <ins>$700.00</ins> <del>$800.00</del>
            </div>
        </div>
    </div>
</div>