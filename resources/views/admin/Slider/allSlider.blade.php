@include('admin.include.navbar')
<section class="content-header">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-sm-6">
        <h1>All FAQ</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active"> All FAQ</li>
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
          <h3 class="card-title">All Slider</h3>

          <div class="card-tools">
             <a href="{{route('admin.slider.create')}}" class="btn btn-success">Add New Slider</a>
           
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height:70vh;">
          <table class="table table-head-fixed  ">
          
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>action</th>
                
              </tr>
          
                @foreach($slider as $data)
                   
                
                <tr>
                    <td>{{$data->id}}</td>
                    <td><img width="150px" height="150px" src="{{asset($data->image)}}" alt=""></td>
                    <td>
                            <a href="{{route('admin.slider.delete',[$data->id])}}"><ion-icon name="trash" ></ion-icon></a>
                        <a href="{{route('admin.slider.edit',[$data->id])}}"> <ion-icon name="create" ></ion-icon></a>
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

