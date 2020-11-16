@extends('backend')
@section('header')
<div class="col-sm-6">
    <ol class=" float-sm-right">
      <li class="btn"><a href="{{ route('course.index') }}" class="btn btn-danger"><i class="fas fa-backspace fa-2x"></i></a></li>

    </ol>
  </div>
@endsection
@section('table')

<div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
    <div class="course-item">
      <img src="{{ asset($course->photo) }}" class="img-fluid" alt="...">
      <div class="course-content">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h4>{{ $course->name }}</h4>
          <p class="price">$250</p>
        </div>

        <h3><a href="course-details.html">Search Engine Optimization</a></h3>
        <p>{{ $course->url }}</p>
        <div class="trainer d-flex justify-content-between align-items-center">
          <div class="trainer-profile d-flex align-items-center">
            <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
            <span>Lana</span>
          </div>
          <div class="trainer-rank d-flex align-items-center">
            <i class="bx bx-user"></i>&nbsp;35
            &nbsp;&nbsp;
            <i class="bx bx-heart"></i>&nbsp;42
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
