@extends('admin/layout/default')
@section('content')



<section id="container">

    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Show All Tab</h3>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> tab feature</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> tab_id</th>
                    <th><i class="fa fa-bookmark"></i> tab Name</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($all_tabs as $tabs)
                  <tr>
                    <td>
                      {{$tabs->tab_id}}
                    </td>
                    <td><a href="">{{$tabs->tab_name}}</a></td>
                    <td>
                      @if($tabs->tab_status==1)
                      <span class="label label-info">Active</span>
                      @else
                      <span class="label label-warning">Unactive</span>
                      @endif
                    </td>
                    <td>
                      @if($tabs->tab_status==1)
                      <a href="{{URL::to('/unactive-tab/'.$tabs->tab_id)}}" class="btn btn-success btn-xs"><i class="fa fa-check" style="padding: 8px;">Active</i></a>
                      @else
                      <a href="{{URL::to('/active-tab/'.$tabs->tab_id)}}" class="btn btn-warning btn-xs"><i class="fa fa-check" style="padding: 8px;">UnActive</i></a>
                      @endif
                      <a href="{{URL::to('edit_tab/'.$tabs->tab_id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil" style="padding: 8px;">edit</i></a>
                      <a href="javascript:void(0)" onclick="deletetab({{$tabs->tab_id}})" class="btn btn-danger btn-xs"><i class="fa fa-trash-o " style="padding: 8px;">Delete</i></a>
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
 <!--   Delete data  -->
<script type="text/javascript">
function deletetab(tab_id)
{
  $.ajaxSetup({
        headers:{'X-CSRF-TOKEN':'{{csrf_token()}}'}
      });
  if(confirm('Do you want to delete this'))
  {
    $.ajax({
      url:'/tab/'+tab_id,
      type:'DELETE',
      data:{
        token:$("input[name=_token]").val()
      },
      success:function(response)
      {
        $("#tab_id"+tab_id).remove();
        location.reload();
      }
    });

  }
}
</script>


@endsection