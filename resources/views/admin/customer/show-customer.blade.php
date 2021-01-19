@extends('admin/layout/default')
@section('content')



<section id="container">

    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Show All Customer</h3>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Customer feature</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Customer_id</th>
                    <th><i class="fa fa-bookmark"></i> Customer Name</th>
                    <th><i class="fa fa-bookmark"></i> Customer Phone</th>
                    <th><i class="fa fa-bookmark"></i> Customer Email</th>
                    <th><i class="fa fa-bookmark"></i> Customer Password</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($show_customer as $customer)
                  <tr>
                    <td>
                      {{$customer->customer_id}}
                    </td>
                    <td><a href="">{{ $customer->customer_name}}</a></td>
                    <td><a href="">{{$customer->customer_phone}}</a></td>
                    <td><a href="">{{$customer->customer_email}}</a></td>
                    <td><a href="">{{$customer->password}}</a></td>

                    <td>
                      <a href="{{URL::to('edit_customer/'.$customer->customer_id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil" style="padding: 8px;">edit</i></a>
                      <a href="javascript:void(0)" onclick="deletecategory({{$customer->customer_id}})" class="btn btn-danger btn-xs"><i class="fa fa-trash-o " style="padding: 8px;">Delete</i></a>
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
function deletecategory(customer_id)
{
  $.ajaxSetup({
        headers:{'X-CSRF-TOKEN':'{{csrf_token()}}'}
      });
  if(confirm('Do you wnat to delete this'))
  {
    $.ajax({
      url:'/customer/'+customer_id,
      type:'DELETE',
      data:{
        token:$("input[name=_token]").val()
      },
      success:function(response)
      {
        $("#customer_id"+customer_id).remove();
        location.reload();
      }
    });

  }
}
</script>


@endsection