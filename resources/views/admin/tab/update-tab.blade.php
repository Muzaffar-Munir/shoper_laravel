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
    <h3><i class="fa fa-angle-right"></i> Update TAb</h3>
    <!-- BASIC FORM VALIDATION -->
    <div class="row mt">
      <div class="col-lg-10">
        <h4><i class="fa fa-angle-right"></i>Add Detail</h4>
        <div class="form-panel">
          <form method="post" action="{{URL::to('update_tab/'.$tab_info->tab_id) }}" class="form-horizontal style-form">
            @csrf
            {{method_field('POST')}}
            <div class="form-group has-success">
            <input type="hidden" name="tab_id" value="{{$tab_info->tab_id}}">
              <label class="col-lg-2 control-label">Tab Name</label>
              <div class="col-lg-9">
                <input type="text" placeholder="xyz" id="tab_name" name="tab_name" class="form-control" value="{{$tab_info->tab_name}}">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">tab Slug</label>
              <div class="col-lg-9">
                <input type="text" placeholder="" id="tab_slug" name="tab_slug" class="form-control" value="{{$tab_info->tab_slug}}">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label" for="textarea2">publish</label>
              <div class="col-lg-9 form-group">
                <input type="checkbox" name="tab_status" value="1" checked="">
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