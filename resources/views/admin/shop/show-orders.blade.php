@extends('admin/layout/default')
@section('content')



<section id="container">

    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Show All Orders</h3>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> product feature</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> product_id</th>
                    {{-- <th><i class="fa fa-bullhorn"></i> product Image</th> --}}
                    <th><i class="fa fa-bookmark"></i> product Name</th>
                    <th><i class="fa fa-bookmark"></i> Orders By Name</th>
                    <th><i class="fa fa-bookmark"></i> Order By phone</th>
                    <th><i class="fa fa-bookmark"></i> Orders by Address</th>
                    <th><i class=" fa fa-edit"></i> Quantity</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($orders as $product)
                  <tr>
                    <td>{{$product->product_id }}</td>
                    {{-- <td><a href="">
                      <img src="{!! url('uploads/product/'.$product->product_image) !!}" alt="" style="width: 50px; border-radius: 30%;">
                    </a></td> --}}
                    <td><a href="">{{$product->product_name}}</a></td>
                    <td><a href="">{{$product->first_name . ' '. $product->last_name}}</a></td>
                    <td><a href="">{{$product->phone}}</a></td>
                    <td><a href="">{{$product->address}}</a></td>
                    <td>
                    {{$product->quantity}}
                      {{-- @if($product->product_status==1)
                      <span class="label label-info">Active</span>
                      @else
                      <span class="label label-warning">Unactive</span>
                      @endif --}}
                    </td>
                    <td>
                      {{-- @if($product->product_status==1)
                      <a href="{{URL::to('/unactive-product/'.$product->product_id)}}" class="btn btn-success btn-xs"><i class="fa fa-check" style="padding: 8px;">Active</i></a>
                      @else
                      <a href="{{URL::to('/active-product/'.$product->product_id)}}" class="btn btn-warning btn-xs"><i class="fa fa-check" style="padding: 8px;">UnActive</i></a>
                      @endif
                      <a href="{{URL::to('edit_product/'.$product->product_id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil" style="padding: 8px;">edit</i></a>
                      <a href="javascript:void(0)" onclick="deleteproduct({{$product->product_id}})" class="btn btn-danger btn-xs"><i class="fa fa-trash-o " style="padding: 8px;">Delete</i></a> --}}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!-- /MAIN CONTENT -->
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Delete data -->
<script type="text/javascript">
function deleteproduct(product_id)
{
  $.ajaxSetup({
        headers:{'X-CSRF-TOKEN':'{{csrf_token()}}'}
      });
  if(confirm('Do you wnat to delete this'))
  {
    $.ajax({
      url:'/product/'+product_id,
      type:'DELETE',
      data:{
        token:$("input[name=_token]").val()
      },
      success:function(response)
      {
        $("#product_id"+product_id).remove();
        location.reload();
      }
    });

  }
}
</script>


@endsection