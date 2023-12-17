@include('admin.include.navbar')


<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Add New Course</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active"> Add Course</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
  <form action="{{route('admin.course.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-md-11">
        @if($errors->any())
        @foreach ($errors->all() as $error)
        <h3 style="background-color: red">{{$error}}</h3>
            
        @endforeach
        @endif

        <div class="card card-outline card-info p-4">
          <!-- /.card-header -->
          <div class="form-group col-8">
            <label for="exampleInputFile">Course Name</label>
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="text" class="form-control"  name="name" placeholder="Enter course Name">
              </div>
            </div>
            <label for="exampleInputFile">Price</label>
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="text" class="form-control"  name="price" placeholder="Enter price">
              </div>
            </div>
            <label for="exampleInputFile">Teacher Name</label>
              <select class="custom-select mb-3 rounded-0" id="exampleSelectRounded0" name="teacher_Id">
                @foreach ($teacher  as  $teacher)
                <option value="{{$teacher->id}}" >{{$teacher->name}}</option>
                
                @endforeach
              </select>
            <label for="exampleInputFile">Enter Image</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="image" >
                <label class="custom-file-label" for="exampleInputFile">Choose File</label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>

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
