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
          <form id="customerform" action="{{URL::to('update_customer/'.$customer_info->customer_id) }}"  method="POST" class="form-horizontal style-form">
            @csrf
            <div class="form-group has-success">
              <label class="col-lg-2 control-label">Customer Name</label>
              <div class="col-lg-9">
                <input type="text" value="{{$customer_info->customer_name}}" placeholder="xyz" name="customer_name" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">Customer Phone</label>
              <div class="col-lg-9">
                <input type="text" value="{{$customer_info->customer_phone}}" placeholder="" name="customer_phone" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">Customer Email</label>
              <div class="col-lg-9">
                <input type="email" value="{{$customer_info->customer_email}}" placeholder="" name="customer_email" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">Customer Password</label>
              <div class="col-lg-9">
                <input type="password" value="{{$customer_info->password}}" placeholder="" name="customer_password" class="form-control">
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

  @endsection