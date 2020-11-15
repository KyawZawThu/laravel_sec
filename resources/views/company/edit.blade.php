@extends('backend')

@section('table')

<section class="content">

    <!-- /.card-body -->

  <!-- /.card -->

  <div class="card">
    <div class="card-header">
      <h2 class="card-title">Edit Form</h2>
      <a href="{{route('company.index')}}" class="fas fa-arrow-left float-right fa-2x"></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form method="post" action="{{route('company.update',$company->id)}}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
      <div class="form-group">
              <label>Name:</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$company->name}}">
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Address:</label>
              <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{$company->address}}">
              @error('address')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

          <div class="form-group">
              <label>Contact:</label>
              <input type="text" name="contact" class="form-control @error('contact') is-invalid @enderror" value="{{$company->contact}}">
              @error('contact')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Description:</label>
              <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{$company->description}}">
              @error('description')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label>Email:</label>
              <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$company->email}}">
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

          <div class="form-group">
              <label>Photo: (<small class="text-danger">* jpeg|bmp|png</small>)</label>

              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Old</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New</a>
                </li>
              </ul>
              <div class="tab-content mt-3" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <img src="{{asset($company->photo)}}" class="w-25 h-25" alt="">
                  <input type="hidden" name="oldphoto" value="{{$company->photo}}">
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror">
                  @error('photo')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
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