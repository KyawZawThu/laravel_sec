@extends('master')

@section('content')
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,<br>Leading Tomorrow</h1>
      <h2>We are team of talanted designers making websites with Bootstrap</h2>
      <a href="courses.html" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero -->
 <section id="students" class="students">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          {{-- <h2>Students</h2> --}}
          <p>Our Students</p>
        </div>



        <div class="row" data-aos="zoom-in" data-aos-delay="100">
         {{--  @foreach($projects as $project)
          @if($project->status==1) --}}
            @foreach($students as $student)
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ asset( $student->photo ) }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>{{$student->name}}</h4>
                <span>{{$student->email}}</span>
                @foreach($student->projects as $studentprj)
                <h5>{{$studentprj->url}}</h5>
                @endforeach
                <p>
                  {{$student->description}}
                </p>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>

                  @role('company')
                  
              <a href="{{route('detailsc')}}" class="btn btn-success checkout" data-id="{{$student->id}}" data-name="{{$student->name}}" data-photo="{{$student->photo}}" data-email="{{$student->email}}" data-description="{{$student->description}}">
              Scout
            </a>
            @else
            <a href="#footer" class="btn btn-success"> Contact Us to Scout </a>
            
            @endrole
            


                </div>
              </div>
            </div>
          </div>
{{--           @endforeach
        
        @endif --}}

      @endforeach
          </section><!-- End Trainers Section -->
@endsection