@include('admin.include.navbar')
<section class="content-header">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-sm-6">
        <h1>All Teacher</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active"> All Teacher</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<div class="container">
  
<div class="row d-flex justify-content-center align-items-center">

    <div class="col-12  mt-2">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Teacher</h3>

          <div class="card-tools">
             <a href="{{route('admin.teacher.create')}}" class="btn btn-success">Add New Teacher</a>
           
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height:70vh;">
          <table class="table table-head-fixed  ">
          
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>action</th>
                
              </tr>
          
                @foreach($teacher as $data)
                   
                
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>

                    <td><img width="150px" height="150px" src="{{asset($data->image)}}" alt=""></td>
                    <td>
                            <a href="{{route('admin.teacher.delete',[$data->id])}}"><ion-icon name="trash" ></ion-icon></a>
                        <a href="{{route('admin.teacher.edit',[$data->id])}}"> <ion-icon name="create" ></ion-icon></a>
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

