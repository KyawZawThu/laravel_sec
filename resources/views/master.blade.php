
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend_asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend_asset/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend_asset/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend_asset/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend_asset/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend_asset/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('frontend_asset/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend_asset/css/style.css')}}" rel="stylesheet">

  <i class="fas fa-check-double"></i>
  <title>Success With Us</title>

  <!-- =======================================================
  * Template Name: Mentor - v2.1.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{route('mainpage')}}">Mentor</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="{{route('detailc')}}">Student</a></li>

          <li><a href="#popular-courses">Courses</a></li>
          {{-- <li><a href="#teachers">Trainers</a></li> --}}
          <li><a href="{{route( 'teacher_register' )}}">Teacher</a></li>
          <li><a href="{{route( 'company_register' )}}">Company</a></li>
          {{-- <li><a href="#footer">Contact</a></li> --}}
                    

      
       @auth
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('mainpage') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                  
              </div>
          </li>
          @else
          <li><a href="{{route('login')}}">Login</a></li>
          <li><a href="{{route( 'student_registration' )}}">Sign Up</a></li>
          @endauth

      @role('student')
      <li><a href="{{route('uploadpj')}}" class="get-started-btn">Upload Project</a></li>
      @endrole

        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header><!-- End Header -->

  @yield('content')

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Success With Us</h3>
            <p>
              Myanmar, Yangon <br><br>
              <strong>Phone:</strong> +959 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          {{-- <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#home">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div> --}}

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Laravel</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">PHP</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Success With Us</h4>
           {{--  <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> --}}
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{  asset('frontend_asset/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{  asset('frontend_asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{  asset('frontend_asset/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{  asset('frontend_asset/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{  asset('frontend_asset/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{  asset('frontend_asset/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{  asset('frontend_asset/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{  asset('frontend_asset/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend_asset/js/main.js')}}"></script>
  <script src="{{ asset('frontend_asset/js/kzt.js')}}"></script>
  <script src="{{ asset('frontend_asset/js/kzt2.js')}}"></script>

</body>

</html>

