@extends('admin/layout/default')
@section('content')
<style>
.control-label
{
font-size: 20px;
}
</style>
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Add Product</h3>
    <!-- BASIC FORM VALIDATION -->
    <div class="row mt">
      <div class="col-lg-8">
        <h4><i class="fa fa-angle-right"></i>Add Detail</h4>
        <div class="form-panel">
          <form id="contractform" method="POST" enctype="multipart/form-data" action="javascript:void(0)" class="form-horizontal style-form">
            @csrf
            <div class="form-group has-success">
              <label class="col-lg-2 control-label">Product Name</label>
              <div class="col-lg-9">
                <input type="text" placeholder="xyz" name="product_name" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-success">
              <label class="col-lg-2 control-label">Select Category</label>
              <div class="col-lg-9">
               <select class="form-control" name="product_category">
                <option value="0">Select Category</option>
                @foreach($info_category as $cate)
                  <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                  @endforeach
                </select>
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-success">
              <label class="col-lg-2 control-label">Select Tabs</label>
              <div class="col-lg-9">
               <select class="form-control" name="product_tabs">
                <option value="0">Select Tabs</option>
                @foreach($info_tabs as $tabs)
                  <option value="{{$tabs->tab_id}}">{{$tabs->tab_name}}</option>
                  @endforeach
                </select>
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-error">
              <label class="col-lg-2 control-label">Product price</label>
              <div class="col-lg-9">
                <input type="text" placeholder="" name="product_price" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-error">
              <label class="col-lg-2 control-label">Enter Ram</label>
              <div class="col-lg-9">
                <input type="text" placeholder="" name="product_ram" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-error">
              <label class="col-lg-2 control-label">Enter Rom</label>
              <div class="col-lg-9">
                <input type="text" placeholder="" name="product_rom" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-error">
              <label class="col-lg-2 control-label">Enter Front Came</label>
              <div class="col-lg-9">
                <input type="text" placeholder="" name="product_fcam" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-error">
              <label class="col-lg-2 control-label">Enter Back Camera</label>
              <div class="col-lg-9">
                <input type="text" placeholder="" name="product_bcam" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">Product Slug</label>
              <div class="col-lg-9">
                <input type="text" placeholder="" name="product_slug" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">Product Short Description</label>
              <div class="col-lg-9">
                <textarea style="height: 150px" class="form-control " name="product_short_description" class="col-lg-4"></textarea>
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">Product Long Description</label>
              <div class="col-lg-9">
                <textarea style="height: 150px" class="form-control " name="product_long_description" class="col-lg-4"></textarea>
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">Product Image</label>
              <div class="col-lg-9 ">
                <input type="file" id="product_image" name="product_image">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group ">
              <label for="agree" class="control-label col-lg-2 col-sm-3">Publish</label>
              <div class="col-lg-10 col-sm-9">
                <input type="checkbox" style="width: 20px" class="checkbox form-control" name="product_status" value="1">
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
  $(document).ready(function(){
  $('#contractform').on('submit', function(event){
  event.preventDefault();
  $.ajax({
  url:"{{ url('add-product') }}",
  method:"POST",
  data:new FormData(this),
  dataType:'JSON',
  contentType: false,
  cache: false,
  processData: false,
  success:function(response){
  if(response.success){
  $("#contractform")[0].reset();
  alert(response.message) //Message come from controller
  }else{
  alert("Error")
  }
  },
  error:function(error){
  console.log(error)
  }
  })
  });
  });
  </script>
  @endsection