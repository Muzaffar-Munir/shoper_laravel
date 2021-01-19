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
    <h3><i class="fa fa-angle-right"></i> Add Category</h3>
    <!-- BASIC FORM VALIDATION -->
    <div class="row mt">
      <div class="col-lg-10">
        <h4><i class="fa fa-angle-right"></i>Add Detail</h4>
        <div class="form-panel">
          <form method="post" action="{{URL::to('update_category/'.$category_info->category_id) }}" class="form-horizontal style-form">
            @csrf
            {{method_field('POST')}}
            <div class="form-group has-success">
            <input type="hidden" name="category_id" value="{{$category_info->category_id}}">
              <label class="col-lg-2 control-label">Category Name</label>
              <div class="col-lg-9">
                <input type="text" placeholder="xyz" name="category_name" class="form-control" value="{{$category_info->category_name}}">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">Category Slug</label>
              <div class="col-lg-9">
                <input type="text" placeholder="" name="category_slug" class="form-control" value="{{$category_info->category_slug}}">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">Category Description</label>
              <div class="col-lg-9">
                <textarea style="height: 150px" class="form-control " name="category_description" class="col-lg-4">{{$category_info->category_description}}</textarea>
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label" for="textarea2">publish</label>
              <div class="col-lg-9 form-group">
                <input type="checkbox" name="category_status" value="1" checked="">
              </div>
            </div>

            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                <button type="submit" class="btn btn-theme">Submit</button>
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