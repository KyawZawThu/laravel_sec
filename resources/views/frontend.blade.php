

@extends('master')
@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,<br>Leading Tomorrow</h1>
      <h2>We are team of talanted designers making websites with Bootstrap</h2>
      <a href="courses.html" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>About Us</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>“Education is free. Freedoom of education shall be enjoyed under the condition fixed by law and under the supreme control of the state”</h3>
            <p class="font-italic">
                Our programs are carefully designed to give you the same experience and, most importantly, the same successful outcome. We have  premium courses at training people with zero coding experience and turning them into high-earning software engineers. After full course and project, the students have to pay 20% of their monthly salary for a year. Eighty percent of the above payment will be for the teachers and 20%, for us. The intention of this program is to develop the community of web development and computer science.
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Education is the most powerful weapon which you can use to change the world.
              </li>
              <li><i class="icofont-check-circled"></i> Free education and health care are essential for the welfare of the population.</li>
              <li><i class="icofont-check-circled"></i> If we would spend on education half the amount of money that we currently lavish on sports and entertainment, we could provide complete and free education for every student in this country.</li>
            </ul>


          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1232</span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">64</span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">42</span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Trainers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->



    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
          <p>Popular Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        @foreach($courses as $row)


          <div class="col-lg-4 col-md-6  ">
            <div class="course-item">
              <img src="{{ asset($row->photo) }}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <a href="frontend_registration"><h4 class="btn">{{ $row->name }}</h4></a>
                    <!-- Button trigger modal -->

                  <p class="price">$169</p>
                </div>

                <h3><a href="course-details.html"></a></h3>
                <p>{{ $row->url }}</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    {{-- <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt=""> --}}
                    <span></span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <!-- End Course Item-->

          {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Marketing</h4>
                  <p class="price">$250</p>
                </div>

                <h3><a href="course-details.html">Search Engine Optimization</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
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
          </div> <!-- End Course Item--> --}}

          {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Content</h4>
                  <p class="price">$180</p>
                </div>

                <h3><a href="course-details.html">Copywriting</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                    <span>Brandon</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;85
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item--> --}}

        </div>

      </div>
    </section><!-- End Popular Courses Section -->
{{-- 
    <!-- ======= Trainers Section ======= -->
    <section id="teachers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Trainers</h2>
          <p>Our Professional Trainers</p>
        </div> --}}



{{--         <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @foreach($teachers as $row)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ asset( $row->photo ) }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>{{ $row->name }}</h4>
                <span>Web Development</span>
                <p>
                  Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
                </p>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach --}}

 {{--          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sarah Jhinson</h4>
                <span>Marketing</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>William Anderson</h4>
                <span>Content</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div> --}}

        </div>

      </div>
    </section><!-- End Trainers Section -->

       <!-- ======= Student Section ======= -->
    <section id="students" class="students">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Students</h2>
          <p>Our Students</p>
        </div>



        <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @foreach($confirmed as $project)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ asset( $project->student->photo ) }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>{{$project->student->name}}</h4>
                <span>{{$project->student->email}}</span>
                <h5>{{$project->url}}</h5>
                <p>
                  {{$project->student->description}}
                </p>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>

                  
                  <a href="{{route('detailsc')}}" class="btn btn-success checkout" data-id="{{$project->student->id}}" data-name="{{$project->student->name}}" data-photo="{{$project->student->photo}}" data-email="{{$project->student->email}}" data-description="{{$project->student->description}}">Detail</a>
              {{-- <button class="btn btn-success checkout" data-id="{{$project->student->id}}" data-name="{{$project->student->name}}" data-photo="{{$project->student->photo}}" data-email="{{$project->student->email}}" data-description="{{$project->student->description}}">
              Scout
            </button> --}}
            


                </div>
              </div>
            </div>
          </div>
          @endforeach
          </section><!-- End Trainers Section -->

  </main><!-- End #main -->

@endsection

