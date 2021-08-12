<!DOCTYPE html>
  <html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
      <title>{{ __('DEVPORTFOLIO') }}</title>

       <!-- CSS  -->
      <link href="{{asset('b-template/css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
      <!-- Font Awesome -->
      <link href="{{asset ('b-template/css/font-awesome.css') }}" rel="stylesheet">
      <!-- Skill Progress Bar -->
      <link href="{{asset ('b-template/css/pro-bars.css') }}" rel="stylesheet" type="text/css" media="all" />
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="{{asset ('b-template/css/owl.carousel.css') }}">
      <!-- Default Theme CSS File-->
      <link id="switcher" href="{{asset ('b-template/css/themes/lite-blue-theme.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
      <!-- Main css File -->
      <link href="{{asset ('b-template/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

      <!-- Font -->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>

    <body>
      <!-- BEGAIN PRELOADER -->
      {{-- <div id="preloader">
        <div class="progress">
          <div class="indeterminate"></div>
        </div>
      </div> --}}
      <!-- END PRELOADER -->
      <header id="header" role="banner">
        <div class="navbar-fixed">
          <nav>
            <div class="container">
              <div class="nav-wrapper">

                <!-- LOGO -->

                <!-- TEXT BASED LOGO -->
                <a href="#" class="brand-logo">{{ config('app.name') }}</a>

                <!-- Image Based Logo -->
                 <!-- <a href="index.html" class="brand-logo"><img src="img/" alt="logo img"></a>  -->
                <ul class="right hide-on-med-and-down custom-nav menu-scroll">
                  <li><a href="{{ route('about.index') }}">About Me</a></li>
                  <li><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
                  <li><a href="{{ route('blog.index') }}">Blog</a></li>
                  <li><a href="{{ route('contact.index') }}">Contact</a></li>&nbsp;
                  <li><a href="{{ route('login.index') }}">Login | Register</a></li>
                </ul>
                <!-- For Mobile View -->
                <ul id="slide-out" class="side-nav menu-scroll">
                    <li><a href="{{ route('about.index') }}">About Me</a></li>
                    <li><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
                    <li><a href="{{ route('blog.index') }}">Blog</a></li>
                    <li><a href="{{ route('contact.index') }}">Contact</a></li>&nbsp;
                    <li><a href="{{ route('login.index') }}">Login | Register</a></li>

                </ul>
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
              </div>
            </div>
          </nav>
        </div>
      </header>

      <div class="main-wrapper">
        <main role="main">
            <!-- START HOME SECTION -->
            <section id="home">
                <div class="overlay-section">
                <div class="container">
                    <div class="row">
                    <div class="col s12">
                        <div class="home-inner">
                        <h1 class="home-title">HI! I'm <span>Darwin  Yamyamin</span></h1>
                        <p>I'm a Software Developer</p>
                        <a class="hire-me-btn btn waves-effect waves-light btn-large" href="#login">Hire me<i class="mdi-content-send left"></i>
                        </a>
                        <!-- Call to About Button -->
                        <button class="btn btn-floating waves-effect waves-light btn-large white call-to-about"><i class="material-icons">play_for_work</i></button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </section>

            @yield('content')
        </main>
         <!-- Start Footer Bottom -->
         <div class="footer-bottom" style="background-color:#dbe4eb ">
            <div class="container">
              <div class="row">
                <div class="col s12">
                  <div class="footer-inner">
                    <!-- Bottom to Up Btn -->
                    <button class="btn-floating btn-large up-btn"><i class="mdi-navigation-expand-less"></i></button>
                   <p class="design-info">Copyright &copy; 2021  <a href="#">Portfolio.net</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>

      <!-- jQuery Library -->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <!-- Materialize js -->
      <script type="text/javascript" src="{{ asset('b-template/js/materialize.min.js') }}"></script>
      <!-- Skill Progress Bar -->
      <script src="{{ asset('b-template/js/appear.min.js') }}" type="text/javascript"></script>
      <script src="{{ asset('b-template/js/pro-bars.min.js') }}" type="text/javascript"></script>
      <!-- Owl slider -->
      <script src="{{ asset('b-template/js/owl.carousel.min.js') }}"></script>
      <!-- Mixit slider  -->
      <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
      <!-- counter -->
      <script src="{{ asset('b-template/js/waypoints.min.js') }}"></script>
      <script src="{{ asset('b-template/js/jquery.counterup.min.js') }}"></script>

      <!-- Custom Js -->
      <script src="{{ asset('b-template/js/custom.js') }}"></script>
    </body>
  </html>
