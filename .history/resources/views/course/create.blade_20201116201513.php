@extends('backend')

@section('table')
<section class="content">
    <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> </h1>
        <p>Start a beautiful journey here</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Course Page</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h2>Course Create Form</h2>
          <form method="post" action="{{route('course.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Name:</label>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Course Name..">
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <div class="form-group">
                <label>URL:</label>
                <input type="text" name="url" class="form-control" value="{{old('url')}}" placeholder="URL..">


            </div>


            <div class="form-group">
              <label>Photo: </label>
              <input type="file" name="photo" class="form-control-file r">

            </div>
            <div class="form-group">
                <label>Teacher:</label>
                <select name="teacher" class="form-control">
                  <optgroup label="Choose Teacher">
                    @foreach($teachers as $teacher)
                    <option value="{{$teacher->user->id}}">{{$teacher->user->name}}</option>
                    @endforeach
                  </optgroup>
                </select>
              </div>
            <div class="form-group">
              <input type="submit" name="btnsubmit" value="Save" class="btn btn-success">
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
</section>
@endsection
