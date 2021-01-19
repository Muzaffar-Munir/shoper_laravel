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
    <h3><i class="fa fa-angle-right"></i> Add Shop</h3>
    <!-- BASIC FORM VALIDATION -->
    <div class="row mt">
      <div class="col-lg-10">
        <h4><i class="fa fa-angle-right"></i>Add Detail</h4>
        <div class="form-panel">
          <form id="shopform" action=""  method="POST" class="form-horizontal style-form">
            @csrf
            <div class="form-group has-success">
              <label class="col-lg-2 control-label">Shop Name</label>
              <div class="col-lg-9">
                <input type="text" placeholder="xyz" name="shop_name" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-success">
              <label class="col-lg-2 control-label">Shop email</label>
              <div class="col-lg-9">
                <input type="email" placeholder="xyz" name="shop_email" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-success">
              <label class="col-lg-2 control-label">Password</label>
              <div class="col-lg-9">
                <input type="password" placeholder="xyz" name="shop_password" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">Shop Phone</label>
              <div class="col-lg-9">
                <input type="text" placeholder="" name="shop_phone" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">Shop Number</label>
              <div class="col-lg-9">
                <input type="text" placeholder="" name="shop_no" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">Address</label>
              <div class="col-lg-9">
                <input type="text" placeholder="" name="addresss" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">City</label>
              <div class="col-lg-9">
                <input type="text" placeholder="" name="shop_city" class="form-control">
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
  $('#shopform').submit(function(e){
  e.preventDefault();
  var data = $(this).serialize();
  var url='{{url('admin-shop')}}'
  console.log(data);
  $.ajax({
  url:url,
  method:'POST',
  data:data,
  success:function(response){
  if(response.success){
  $("#shopform")[0].reset();
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