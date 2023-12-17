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
  <form action="{{route('admin.faq.updata')}}" method="POST">
    @csrf
    <div class="row">
      <div class="col-md-12">
        @if($errors->any())
        @foreach ($errors->all() as $error)
        <h3 style="background-color: red">{{$error}}</h3>
            
        @endforeach
        @endif

        <div class="card card-outline card-info">
          
          <!-- /.card-header -->
          <input type="hidden" name="id" value="{{$data->id}}">
        
          <div class="card-body">
            <h3>
              Question
            </h3>
            <textarea id="summernote" name="Question">
                {{$data->Question}}
            </textarea>
          </div>
          <div class="card-body">
            <h3>
              Answer
            </h3>
            <textarea id="summ" name="answer">
                {{$data->answer}}
            </textarea>
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
