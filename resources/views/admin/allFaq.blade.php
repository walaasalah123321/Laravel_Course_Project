@include('admin.include.navbar')
<div class="container">
<div class="row d-flex justify-content-center align-items-center">

    <div class="col-10  mt-4">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">All FAQ</h3>

          <div class="card-tools">
             <a href="" class="btn btn-success">Add New FAQ</a>
           
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height:70vh;">
          <table class="table table-head-fixed  ">
          
              <tr>
                <th>ID</th>
                <th>Question</th>
                <th>answer</th>
                <th>action</th>
                
              </tr>
          
                @foreach($data as $key=>$data)
                    
                
                <tr>
                    <td>{{++$key}}</td>
                    <td>{!!$data->Question!!}</td>
                    <td>{!!$data->answer!!}</td>
                    <td>
                       
                            <a href="{{route('admin.faq.delete',[$data->id])}}"><ion-icon name="trash" ></ion-icon></a>
                        <a href="{{route('admin.faq.edit',[$data->id])}}"> <ion-icon name="create" ></ion-icon></a>
                    </td>
                
                </tr>
              @endforeach
             
           
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
</div>
</div>
  @include('admin.include.footer')

