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
          <form id="categoryform" action=""  method="POST" class="form-horizontal style-form">
            @csrf
            <div class="form-group has-success">
              <label class="col-lg-2 control-label">Category Name</label>
              <div class="col-lg-9">
                <input type="text" placeholder="xyz" name="category_name" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">Category Slug</label>
              <div class="col-lg-9">
                <input type="text" placeholder="" name="category_slug" class="form-control">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="form-group has-warning">
              <label class="col-lg-2 control-label">Category Description</label>
              <div class="col-lg-9">
                <textarea style="height: 150px" class="form-control " name="category_description" class="col-lg-4"></textarea>
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
      $('#categoryform').submit(function(e){
        e.preventDefault();
        var data = $(this).serialize();
        var url='{{url('add-category')}}'
        console.log(data);
        $.ajax({
          url:url,
          method:'POST',
          data:data,
           success:function(response){
              if(response.success){
                $("#categoryform")[0].reset();
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