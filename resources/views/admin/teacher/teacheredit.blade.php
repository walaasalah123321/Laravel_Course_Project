@include('admin.include.navbar')


<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Add New FAQ</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active"> FAQ</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
  <form action="{{route('admin.teacher.updata',[$teacher->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row d-flex justify-content-center align-items-center">
    
      <div class="col-md-11">
        @if($errors->any())
        @foreach ($errors->all() as $error)
        <h3 style="background-color: red">{{$error}}</h3>
        @endforeach
        @endif

        <div class="card card-outline card-info">
          
            <div class="form-group col-8">
              <label for="exampleInputFile">Teacher Name</label>
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="text" class="form-control"  name="name" placeholder="Enter teacher Name" value="{{$teacher->name}}">
              </div>
            </div>
              <label for="exampleInputFile">Enter Image</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile" name="image" >
                  <label class="custom-file-label" for="exampleInputFile">Choose File</label>
                </div>
              </div>
  
            </div>
            
          
         
          <div class="card-footer">
            <button type="submit" class="btn btn-success">Updata</button>
          </div>
        </div>
      </div>
      
      <!-- /.col-->
    </div>
  </form>
  <!-- ./row -->
 
  <!-- ./row -->
</section>
<!-- /.content -->

  @include('admin.include.footer')
