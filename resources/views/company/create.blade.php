@extends('backend')

@section('table')

<section class="content">

    <!-- /.card-body -->

  <!-- /.card -->

  <div class="card">
    <div class="card-header">
      <h2 class="card-title">Create Form</h2>
      <a href="{{route('company.index')}}" class="fas fa-arrow-left float-right fa-2x"></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form method="post" action="{{route('company.store')}}" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
          <label>Name:</label>
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">

          @error('name') <span class="invalid-feedback" role="alert"></span> <strong>{{$message}}</strong>@enderror
        </div>

        <div class="form-group">
          <label>Address:</label>
          <input type="text" name="address" class="form-control @error('address') is-invalid @enderror">

          @error('address') <span class="invalid-feedback" role="alert"></span> <strong>{{$message}}</strong>@enderror
        </div>

        <div class="form-group">
          <label>Contact:</label>
          <input type="text" name="contact" class="form-control @error('contact') is-invalid @enderror">

          @error('contact') <span class="invalid-feedback" role="alert"></span> <strong>{{$message}}</strong>@enderror
        </div>

        <div class="form-group">
          <label>Description:</label>
          <input type="text" name="description" class="form-control @error('description') is-invalid @enderror">

          @error('description') <span class="invalid-feedback" role="alert"></span> <strong>{{$message}}</strong>@enderror
        </div>

        <div class="form-group">
          <label>Email:</label>
          <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">

          @error('email') <span class="invalid-feedback" role="alert"></span> <strong>{{$message}}</strong>@enderror
        </div>

         <div class="form-group">
          <label>Photo: (<small class="text-danger">*jpeg,bmp,png</small>)</label>
          <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror">
          @error('photo') <span class="invalid-feedback" role="alert"></span> <strong>{{$message}}</strong> @enderror
         </div>

          <div class="form-group">
          <input type="submit" name="btnsubmit" value="Save" class="btn btn-success">
         </div>
         </form>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>

@endsection