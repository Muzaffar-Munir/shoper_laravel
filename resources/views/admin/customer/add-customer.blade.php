@extends('admin/layout/default')
@section('content')
<style type="text/css">
.control-label
{
font-size: 20px;
}
</style>
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Add Customer</h3>
    <!-- BASIC FORM VALIDATION -->
    <div class="row mt">
      <div class="col-lg-10">
        <h4><i class="fa fa-angle-right"></i>Add Detail</h4>
        <div class="form-panel">
          <form id="customerform" action=""  method="POST" class="form-horizontal style-form">
            @csrf
            @if ($errors->any())
            <ul>
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            <br />
            @endif
            <div class="form-group has-success">
              <label class="col-lg-2 control-label">Customer Name</label>
              <div class="col-lg-9">
                <input type="text" placeholder="xyz" name="customer_name" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">Customer Phone</label>
              <div class="col-lg-9">
                <input type="text" placeholder="" name="customer_phone" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">Customer Email</label>
              <div class="col-lg-9">
                <input type="email" placeholder="" name="customer_email" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">Customer Password</label>
              <div class="col-lg-9">
                <input type="password" placeholder="" name="customer_password" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                <button type="submit"  class="btn btn-theme">Submit</button>
              </div>
            </div>
          </form>
        </div>
        <!-- /form-panel -->
      </div>
      <!-- /col-lg-12 -->
    </div>
    <!-- /row -->
    <!-- /wrapper -->
  </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- insert data -->
  <script type="text/javascript">
  $(function(){
  $.ajaxSetup({
  headers:{'X-CSRF-TOKEN':'{{csrf_token()}}'}
  });
  $('#customerform').submit(function(e){
  e.preventDefault();
  var data = $(this).serialize();
  var url='{{url('admin-customer')}}'
  console.log(data);
  $.ajax({
  url:url,
  method:'POST',
  data:data,
  success:function(response){
  if(response.success){
  $("#customerform")[0].reset();
  alert(response.message) //Message come from controller
  }else{
  alert("Error")
  }
  },
  error:function(error){
  console.log(error)
  }
  });
  })
  })
  </script>
  @endsection