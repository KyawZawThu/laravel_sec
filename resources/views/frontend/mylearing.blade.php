@extends('master')
@section('content')

           <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
          <p class="mt-5">My Course</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        @foreach($st->courses as $row)


          <div class="col-lg-4 col-md-6  ">
            <div class="course-item">
              <img src="{{ asset($row->photo) }}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  
                  <a href="{{route('code')}}"  class="code" data-id="{{$row->id}}" data-name="{{$row->name}}" data-url="{{$row->url}}" data-photo="{{$row->photo}}" data-description="{{$row->description}}" data-teacher="{{$row->teacher_id}}"><h4 class="btn">{{ $row->name }}</h4></a>
                    <!-- Button trigger modal -->
                  
                  {{-- <p class="price">$169</p> --}}
                </div>

                <h3><a href="course-details.html"></a></h3>
                <p>{{ $row->description }}</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    {{-- <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt=""> --}}
                    <span></span>
                  </div>
{{--                   <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <!-- End Course Item-->
        </div>
      </div>
    </section>

@endsection