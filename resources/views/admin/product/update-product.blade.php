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
    <h3><i class="fa fa-angle-right"></i> Update Product</h3>
    <!-- BASIC FORM VALIDATION -->
    <div class="row mt">
      <div class="col-lg-10">
        <h4><i class="fa fa-angle-right"></i>Add Detail</h4>
        <div class="form-panel">
          <form method="POST" enctype="multipart/form-data" action="{{URL::to('update_product/'.$product_info->product_id) }}" class="form-horizontal style-form">
            @csrf
            {{method_field('POST')}}
            <div class="form-group has-success">
              <input type="hidden" name="product_id" value="{{$product_info->product_id}}">
              <label class="col-lg-2 control-label">Product Name</label>
              <div class="col-lg-9">
                <input type="text" placeholder="xyz" name="product_name" value="{{$product_info->product_name}}" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-success">
              <label class="col-lg-2 control-label">Select Category</label>
              <div class="col-lg-9">
               <select class="form-control" name="product_category">
                <option>Select Category</option>
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
                <option>Select Tabs</option>
                @foreach($info_tabs as $tabs)
                  <option value=" {{$tabs->tab_id}}" {{ $tabs->product_id == $product_info->tab_id ? 'selected' : ''}}</option>{{$tabs->tab_name}}</option>
                  @endforeach
                </select>
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-error">
              <label class="col-lg-2 control-label">Product price</label>
              <div class="col-lg-9">
                <input type="text" placeholder="" name="product_price" class="form-control" value="{{$product_info->product_price}}">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-error">
              <label class="col-lg-2 control-label">Product RAm</label>
              <div class="col-lg-9">
                <input type="text" placeholder="" name="product_ram" class="form-control" value="{{$product_info->product_ram}}">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-error">
              <label class="col-lg-2 control-label">Product Rom</label>
              <div class="col-lg-9">
                <input type="text" placeholder="" name="product_rom" class="form-control" value="{{$product_info->product_rom}}">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-error">
              <label class="col-lg-2 control-label">Product Front Cam</label>
              <div class="col-lg-9">
                <input type="text" placeholder="" name="product_fcam" class="form-control" value="{{$product_info->product_fcam}}">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-error">
              <label class="col-lg-2 control-label">Product Back Cam</label>
              <div class="col-lg-9">
                <input type="text" placeholder="" name="product_bcam" class="form-control" value="{{$product_info->product_bcam}}">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">Product Slug</label>
              <div class="col-lg-9">
                <input type="text" placeholder="" name="product_slug" class="form-control" value="{{$product_info->product_slug}}">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">Product Short Description</label>
              <div class="col-lg-9">
                <textarea style="height: 150px" class="form-control " name="product_short_description" class="col-lg-4">{{$product_info->product_short_description}}</textarea>
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">Product Long Description</label>
              <div class="col-lg-9">
                <textarea style="height: 150px" class="form-control " name="product_long_description" class="col-lg-4">{{$product_info->product_long_description}}</textarea>
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
                <input type="checkbox" style="width: 20px" class="checkbox form-control" name="product_status" value="{{$product_info->product_status}}">
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