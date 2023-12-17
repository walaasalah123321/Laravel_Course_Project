@include('admin.include.navbar')
<section class="content-header">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-sm-6">
        <h1>All Courses</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active"> All Courses</li>
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
          <h3 class="card-title">All Courses</h3>

          <div class="card-tools">
             <a href="{{route('admin.course.create')}}" class="btn btn-success">Add New Courses</a>
           
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height:70vh;">
          <table class="table table-head-fixed  ">
          
              <tr>
                <th>ID</th>
                <th>Name Course</th>
                <th>Price</th>
                <th>Name Teacher</th>
                <th>Image</th>
                <th>action</th>
                
              </tr>
                @foreach($courses as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->Course->name}}</td>
                    <td><img width="150px" height="150px" src="{{asset($data->image)}}" alt=""></td>
                    <td>
                            <a href="{{route('admin.course.delete',[$data->id])}}"><ion-icon name="trash" ></ion-icon></a>
                        <a href="{{route('admin.course.edit',[$data->id])}}"> <ion-icon name="create" ></ion-icon></a>
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

