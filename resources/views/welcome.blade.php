@extends('layouts_welcome.app')

@section('content')
<div class="main-wrapper">
    <main role="main">
          <!-- START ABOUT SECTION -->
          <section id="about">
            <div class="container">
              <div class="row">
                <div class="col s12">
                  <div class="about-inner">
                    <div class="row">
                      <div class="col s12 m4 l3">
                        <div class="about-inner-left">
                          <img class="profile-img" src="b-template/img/profile.jpg" alt="Profile Image">
                        </div>
                      </div>
                      <div class="col s12 m8 l9">
                        <div class="about-inner-right">
                          <h3>About Me</h3>
                          <p>I'm a Software Developer</p>
                          <div class="personal-information col s12 m12 l6">
                            <h3>Personal Information</h3>
                            <ul>
                              <li><span>Name : </span>Darwin Yamyamin </li>
                              <li><span>Age : </span>21 Years</li>
                              <li><span>Phone : </span>09664130327</li>
                              <li><span>Email : </span>dbyamyamin@gmail.com</li>
                              <li><span>Address : </span>Crosan Bulacao Talisay City</li>
                            </ul>
                          </div>
                          <div class="resume-download col s12 m12 l6">
                            <a href="{{ url('/download') }}" class="waves-effect waves-light btn-large resume-btn"><i class="mdi-content-archive left"></i> Download Resume</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Start Resume -->
          <section id="#">
            <!-- Start Skill -->
            <section id="skill">
              <div class="container">
                <div class="skill-inner">
                  <h2 class="title">Skills</h2>
                  <p>I currently using this languages as a Software Developer</p>

                  <!-- Start skills progress bar -->

                  <div class="skill-progress-bar">
                    <span>Html5</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-100 color-amethyst" data-pro-bar-percent="100"></div>
                    </div>
                    <span>CSS3</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-90 color-amethyst" data-pro-bar-percent="90" data-pro-bar-delay="100"></div>
                    </div>
                    <span>javascript</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-80 color-amethyst" data-pro-bar-percent="80" data-pro-bar-delay="200"></div>
                    </div>
                    <span>SQL</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-70 color-amethyst" data-pro-bar-percent="70" data-pro-bar-delay="300"></div>
                    </div>
                    <span>PHP</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-60 color-amethyst" data-pro-bar-percent="60" data-pro-bar-delay="400"></div>
                    </div>
                    <span>Photoshop</span>
                    <div class="pro-bar-container color-wisteria">
                      <div class="pro-bar bar-50 color-amethyst" data-pro-bar-percent="50" data-pro-bar-delay="500"></div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- Start Experience -->
            <section id="experience">
              <div class="container">
                <div class="experience-inner">
                  <h2 class="title">Experience</h2>
                  <p>I have experience using this languages</p>
                  <div id="owl-carousel" class="experience-slider row">
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title"><b>HTML5</b></h2>
                          <img class="activator" src="b-template/img/logo/html5.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator reveal-title">UX/UI Designer<i class="material-icons right">more_vert</i></span>

                          </div>
                          <div class="card-reveal">
                            <span class="card-title reveal-title">UX/UI Designer<i class="material-icons right">close</i></span>
                            <p>HTML5 is the latest evolution of the standard that defines HTML. The term represents two different concepts. It is a new version of the language HTML,
                                with new elements, attributes, and behaviors, and a larger set of technologies that allows the building of more diverse and powerful Web sites and applications.</p>
                          </div>
                      </div>
                    </div>
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">CSS3</h2>
                          <img class="activator" src="b-template/img/logo/CSS.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator reveal-title">UX/UI Designer<i class="material-icons right">more_vert</i></span>
                          </div>
                          <div class="card-reveal">
                            <span class="card-title reveal-title">UX/UI Designer<i class="material-icons right">close</i></span>
                            <p>CSS stands for Cascading Style Sheets. CSS is a standard style sheet language used for describing the presentation
                                 (i.e. the layout and formatting) of the web pages.</p>
                          </div>
                      </div>
                    </div>

                    <!-- Start Single Experience -->
                    <div class="col s12">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">PHP</h2>
                        <img class="activator" src="b-template/img/logo/php.png">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator reveal-title">NATIVE<i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title reveal-title">NATIVE<i class="material-icons right">close</i></span>
                            <p>The PHP Hypertext Preprocessor (PHP) is a programming language that allows web developers to create dynamic content that interacts
                                 with databases. PHP is basically used for developing web based software applications. This tutorial helps you to build your base with PHP.</p>
                        </div>
                    </div>
                    </div>

                    <!-- Start Single Experience -->
                    <div class="col s12">
                        <div class="card">
                          <div class="card-image waves-effect waves-block waves-light">
                          <h2 class="experience-title">MYSQL</h2>
                            <img class="activator" src="b-template/img/logo/mysql.png">
                          </div>
                          <div class="card-content">
                              <span class="card-title activator reveal-title">Database<i class="material-icons right">more_vert</i></span>
                              <!-- <p><a href="#">Windows Phone</a></p> -->
                            </div>
                            <div class="card-reveal">
                              <span class="card-title reveal-title">Database<i class="material-icons right">close</i></span>
                              <!-- <a href="#" class="card-subtitle">Windows Phone</a> -->
                              <p></p>
                            </div>
                        </div>
                      </div>

                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">JAVASCRIPT</h2>
                          <img class="activator" src="b-template/img/logo/javascript.png">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">ES6<i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">ES6<i class="material-icons right">close</i></span>
                          <p></p>
                        </div>
                      </div>
                    </div>

                    <!-- Start Single Experience -->
                    <div class="col s12">
                        <div class="card">
                          <div class="card-image waves-effect waves-block waves-light">
                          <h2 class="experience-title">JAVA</h2>
                            <img class="activator" src="b-template/img/logo/java.png">
                          </div>
                          <div class="card-content">
                            <span class="card-title activator reveal-title">Android<i class="material-icons right">more_vert</i></span>
                          </div>
                          <div class="card-reveal">
                            <span class="card-title reveal-title">Android<i class="material-icons right">close</i></span>
                            <p></p>
                          </div>
                        </div>
                      </div>

                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">LARAVEL</h2>
                          <img class="activator" src="b-template/img/logo/laravel.png">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">8.0<i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title"><i class="material-icons right">close</i></span>
                          <p></p>
                        </div>
                      </div>
                    </div>
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">VUE.JS</h2>
                          <img class="activator" src="b-template/img/logo/vuejs.png">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">3.0<i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title"><i class="material-icons right">close</i></span>
                          <p></p>
                        </div>
                      </div>
                    </div>
                     <!-- Start Single Experience -->
                     <div class="col s12">
                        <div class="card">
                          <div class="card-image waves-effect waves-block waves-light">
                          <h2 class="experience-title">NODE.JS</h2>
                            <img class="activator" src="b-template/img/logo/nodejs.png">
                          </div>
                          <div class="card-content">
                            <span class="card-title activator reveal-title"> <i class="material-icons right">more_vert</i></span>
                          </div>
                          <div class="card-reveal">
                            <span class="card-title reveal-title"><i class="material-icons right">close</i></span>
                            <p></p>
                          </div>
                        </div>
                      </div>
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">C#</h2>
                          <img class="activator" src="b-template/img/logo/csharp.png">
                        </div>
                        <div class="card-content">
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title"><i class="material-icons right">close</i></span>
                          <p></p>
                        </div>
                      </div>
                    </div>
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">ASP.NET CORE MVC</h2>
                          <img class="activator" src="b-template/img/logo/asp.net.png">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">WEB SERVICES<i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title"><i class="material-icons right">close</i></span>
                          <p></p>
                        </div>
                      </div>
                    </div>
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">ANGULAR</h2>
                          <img class="activator" src="b-template/img/logo/angular.png">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">8.0<i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title"><i class="material-icons right">close</i></span>
                          <p></p>
                        </div>
                      </div>
                    </div>
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">WORDPRESS</h2>
                          <img class="activator" src="b-template/img/logo/wordpress.png">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title"><i class="material-icons right">more_vert</i></span>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title"><i class="material-icons right">close</i></span>
                          <p></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- owl navigation -->
                  <div class="customNavigation">
                    <a class="btn prev btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                    <a class="btn next btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-right brand-text"></i></a>
                  </div>
                </div>
              </div>
            </section>
            <!-- Start Education -->
            <section id="edcuation">
              <div class="container">
                <div class="education-inner">
                  <h2 class="title">Education</h2>
                  <p>I graduated the degree of Bachelor of Science in Information Technology last March 2019 at Asian College of Technology</p>
                  <div id="owl-carousel1" class="experience-slider row">
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">2017 - 2019</h2>
                          <img class="activator" src="b-template/img/graduate-cap.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">BSIT<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">Asian College of Technology</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">Bachelor Of Science in Information Technology<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle">Asian College of Technology</a>
                          <p></p>
                        </div>
                      </div>
                    </div>
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">2015 - 2017</h2>
                          <img class="activator" src="b-template/img/graduate-cap.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">Associate IT<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">Datamex Institute of Com. Tech.</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title"><i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle"></a>
                          <p></p>
                        </div>
                      </div>
                    </div>
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">2011-2015</h2>
                          <img class="activator" src="b-template/img/graduate-cap.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">Secondary School<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">Sto. Rosario NHS</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">UX/UI Designer<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle"></a>
                          <p></p>
                        </div>
                      </div>
                    </div>
                    <!-- Start Single Experience -->
                    <div class="col s12">
                      <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <h2 class="experience-title">2005 - 2011</h2>
                          <img class="activator" src="b-template/img/graduate-cap.jpg">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator reveal-title">Primary School<i class="material-icons right">more_vert</i></span>
                          <p><a href="#">Sto. Rosario Elem. School</a></p>
                        </div>
                        <div class="card-reveal">
                          <span class="card-title reveal-title">Primary School<i class="material-icons right">close</i></span>
                          <a href="#" class="card-subtitle"></a>
                          <p></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- owl navigation -->
                  <div class="customNavigation">
                    <a class="btn prev1 btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                    <a class="btn next1 btn-floating waves-effect waves-light btn-large white"><i class="mdi-navigation-chevron-right brand-text"></i></a>
                  </div>
                </div>
              </div>
            </section>
          </section>
          <!-- Start Portfolio -->
          <section id="portfolio">
            <div class="portfolio-top">
              <div class="container">
                <div class="portfolio-top-inner">
                   <h2 class="title">Portfolio</h2>
                   <div class="controls">
                    <button class="filter waves-effect waves-light btn" data-filter="all">All</button>
                    <button class="filter waves-effect waves-light btn" data-filter=".design">Design</button>
                    <button class="filter waves-effect waves-light btn" data-filter=".design">System</button>
                    <button class="filter waves-effect waves-light btn" data-filter=".design">Videos</button>
                </div>
              </div>
            </div>
            </div>
            <div class="portfolio-bottom">
              <div class="container">
                <div class="portfolio-bottom-inner">
                  <div id="portfolio-list">
                    <div class="mix html" data-value="2">
                      <a href="#">
                        <img src="b-template/img/portfolio/design/console.jpg" alt="img">
                        <i class="material-icons view-icon">pageview</i>
                      </a>
                    </div>
                    <div class="mix fashion" data-value="4">
                      <a href="#">
                        <img src="b-template/img/portfolio/design/debugger.jpg" alt="img">
                        <i class="material-icons view-icon">pageview</i>
                      </a>
                    </div>
                    <div class="mix design" data-value="1">
                      <a href="#">
                        <img src="b-template/img/portfolio/design/devops.jpg" alt="img">
                        <i class="material-icons view-icon">pageview</i>
                      </a>
                    </div>
                    <div class="mix html" data-value="5">
                      <a href="#">
                        <img src="b-template/img/portfolio/design/background.png" alt="img">
                        <i class="material-icons view-icon">pageview</i>
                      </a>
                    </div>
                    <div class="mix fashion" data-value="3">
                      <a href="#">
                        <img src="b-template/img/portfolio/design/logo.png" alt="img">
                        <i class="material-icons view-icon">pageview</i>
                      </a>
                    </div>
                    <!-- <div class="mix design" data-value="9">
                      <a href="#">
                        <img src="img/portfolio/design/design-2.jpg" alt="img">
                        <i class="material-icons view-icon">pageview</i>
                      </a>
                    </div>
                    <div class="mix html" data-value="12">
                      <a href="#">
                        <img src="img/portfolio/html/html-3.jpg" alt="img">
                        <i class="material-icons view-icon">pageview</i>
                      </a>
                    </div>
                    <div class="mix fashion" data-value="7">
                      <a href="#">
                        <img src="img/portfolio/fashion/fashion-3.jpg" alt="img">
                        <i class="material-icons view-icon">pageview</i>
                      </a>
                    </div>
                    <div class="mix design" data-value="6">
                      <a href="#">
                        <img src="img/portfolio/design/design-3.jpg" alt="img">
                        <i class="material-icons view-icon">pageview</i>
                      </a>
                    </div> -->

                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Start Facts -->
          <section id="facts">
            <div class="facts-overlay">
              <div class="container">
              <div class="row">
                <div class="col s12">
                  <div class="facts-inner">
                    <div class="row">
                      <div class="col s12 m4 l4">
                        <div class="single-facts waves-effect waves-block waves-light">
                          <i class="material-icons">work</i>
                          <span class="counter">0</span>
                          <span class="counter-text">Project Completed</span>
                        </div>
                      </div>
                      <div class="col s12 m4 l4">
                        <div class="single-facts waves-effect waves-block waves-light">
                          <i class="material-icons">supervisor_account</i>
                          <span class="counter">0</span>
                          <span class="counter-text">Achievements</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </section>

          <!-- Start Blog -->
          <section id="blog">
            <div class="container">
              <div class="row">
               <div class="col s12">
                 <div class="blog-inner">
                   <h2 class="title">Blog</h2>
                   <p>This content is all about how i build my portfolio and project</p>

                  <!-- Start Blog area -->
                  <div class="blog-area">
                    <div class="row">
                      <!-- Start single blog post -->
                      <div class="col s12 m4 l4">
                        <div class="blog-post">
                          <div class="card">
                            <div class="card-image">
                              <img src="b-template/img/blog1.jpg">
                            </div>
                            <div class="card-content blog-post-content">
                              <h2><a href="blog-single.html"></a></h2>
                              <div class="meta-media">
                                <div class="single-meta">
                                  Post By <a href="#">Darwin Yamyamin</a>
                                </div>
                                <div class="single-meta">
                                  Category : <a href="#">Web/Design</a>
                                </div>
                              </div>
                              <p></p>
                            </div>
                            <div class="card-action">
                              <a class="post-comment" href="#"><i class="material-icons">comment</i><span>15</span></a>
                              <a class="readmore-btn" href="blog-single.html">Read More</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Start single blog post -->
                      <div class="col s12 m4 l4">
                        <div class="blog-post">
                          <div class="card">
                            <div class="card-image">
                              <img src="b-template/img/blog2.jpg">
                            </div>
                            <div class="card-content blog-post-content">
                              <h2><a href="blog-single.html"></a></h2>
                              <div class="meta-media">
                                <div class="single-meta">
                                  Post By <a href="#">Darwin Yamyamin</a>
                                </div>
                                <div class="single-meta">
                                  Category : <a href="#">Web/Design</a>
                                </div>
                              </div>
                              <p></p>
                            </div>
                            <div class="card-action">
                              <a class="post-comment" href="#"><i class="material-icons">comment</i><span>10</span></a>
                              <a class="readmore-btn" href="blog-single.html">Read More</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Start single blog post -->
                      <div class="col s12 m4 l4">
                        <div class="blog-post">
                          <div class="card">
                            <div class="card-image">
                              <img src="b-template/img/blog3.jpg">
                            </div>
                            <div class="card-content blog-post-content">
                              <h2><a href="blog-single.html"></a></h2>
                              <div class="meta-media">
                                <div class="single-meta">
                                  Post By <a href="#">Darwin Yayamin</a>
                                </div>
                                <div class="single-meta">
                                  Category : <a href="#">Web/Design</a>
                                </div>
                              </div>
                              <p></p>
                            </div>
                            <div class="card-action">
                              <a class="post-comment" href="#"><i class="material-icons">comment</i><span>15</span></a>
                              <a class="readmore-btn" href="blog-single.html">Read More</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- All Post Button -->
                    <a class="waves-effect waves-light btn-large allpost-btn" href="blog-archive.html">All Post</a>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </section>

          {{-- Login --}}
        <section id="resume">
            <div class="container">
              <div class="education-inner">
                <h2 class="title"><i>Signin / Signup</i></h2>
                <div id="" class="experience-slider row">
                    <div class="row">
                      <div class="col s12 m8 l6">
                        <div class="contact-form">
                            <p class="login-box-msg"><center><i>Sign in to start your session</i></center></p>
                            <form method="post" action="{{ url('/login') }}">
                                @csrf

                                <div class="input-group mb-12">
                                    <input type="email"
                                           name="email"
                                           value="{{ old('email') }}"
                                           placeholder="Email"
                                           class="form-control @error('email') is-invalid @enderror">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3" id="show_hide_password">
                                    <span class="input-group-btn pull-right" id="eyeSlash" style="margin-bottom: -50px;">
                                      <i class="fa fa-eye-slash" onclick="visibility3()" type="button" aria-hidden="true"></i>
                                    </span>
                                    <span class="input-group-btn pull-right" id="eyeShow" style="display: none; margin-bottom: -50px;">
                                        <i class="fa fa-eye" onclick="visibility3()" type="button" aria-hidden="true"></i></a>
                                      </span>
                                    <input type="password"
                                           name="password" id="login_password"
                                           placeholder="Password"
                                           class="form-control @error('password') is-invalid @enderror">
                                    @error('password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror

                                </div><br>

                                <div class="row pull-right">
                                    <div class="col-8" style="margin-left:-40px;">
                                        <div class="icheck-primary">
                                            <input type="checkbox" id="remember">
                                            <label for="remember">Remember Me</label>
                                        </div>
                                        <p class="mb-1">
                                            <a href="{{ route('password.request') }}">I forgot my password</a>
                                        </p>
                                    </div><br />

                                    <div class="col-3">
                                        <button type="submit" class="btn btn-primary btn-block ">Sign In</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                      </div>
                      <!--end login-->


                      <!--Register-->
                      <div class="col s12 m8 l6" style="margin-top:20px;">
                        <div class="contact-form">
                            <p class="login-box-msg"><center><i>Register a new membership</i></center></p>
                            <form method="post" action="{{ route('register') }}">
                                @csrf

                                <div class="input-group mb-3">
                                    <input type="text"
                                           name="name"
                                           class="form-control @error('name') is-invalid @enderror"
                                           value="{{ old('name') }}"
                                           placeholder="Full name">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><span class="fas fa-user"></span></div>
                                    </div>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <input type="email"
                                           name="email"
                                           value="{{ old('email') }}"
                                           class="form-control @error('email') is-invalid @enderror"
                                           placeholder="Email">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <input type="password"
                                           name="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           placeholder="Password">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="input-group mb-3">
                                    <input type="password"
                                           name="password_confirmation"
                                           class="form-control"
                                           placeholder="Retype password">
                                    <div class="input-group-append">
                                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
                                    </div>
                                </div><br />


                                {{-- <div class="pull-center">
                                    <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
                                </div> --}}

                                <div class="row pull-right">
                                    <div class="col-8" style="margin-left:-60px;">
                                        <div class="icheck-primary">
                                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                            <label for="agreeTerms">
                                                I agree to the <a href="#">terms</a>
                                            </label>
                                        </div>
                                    </div><br />

                                    <div class="col-3">
                                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                      </div>
                      <!--end register-->
                    </div>

                  </div>

                </div>
              </div>
        </section>

          <!-- Start Footer -->
          <footer id="footer" role="contentinfo">
            <!-- Start Footer Top -->
            <div class="footer-top">
              <div class="container">
                <div class="row">
                  <div class="col s12">
                    <div class="footer-top-inner">
                      <h2 class="title">Contact</h2>
                      <p>You can contact me through messages or call for my numbers provide also contact me through email for the past response. </p>
                      <div class="contact">
                        <div class="row">
                          <div class="col s12 m6 l6">
                            <div class="contact-form">
                              <form method="post" action="/contact" >
                                  @csrf
                                <div class="input-field">
                                  <input type="text" class="input-box" name="name" id="contact-name">
                                  <label class="input-label" for="contact-name">Name</label>
                                </div>
                                <div class="input-field">
                                  <input type="email" class="input-box" name="email" id="email">
                                  <label class="input-label" for="email">Email</label>
                                </div>
                                <div class="input-field">
                                  <input type="text" class="input-box" name="subject" id="subject">
                                  <label class="input-label" for="subject">Subject</label>
                                </div>
                                <div class="input-field textarea-input">
                                  <textarea class="materialize-textarea" name="message" id="textarea1"></textarea>
                                  <label class="input-label" for="textarea1">Message</label>
                                </div>
                                <button class="left waves-effect btn-flat brand-text submit-btn" type="submit">send message</button>
                              </form>
                            </div>
                          </div>
                          <div class="col s12 m6 l6">
                            <div class="contact-map">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.297314036103!2d-86.74954699999999!3d34.672444999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88626565a94cdb25%3A0x74c206053b6a97c9!2s305+Crosan+Bulcao%2C+Talisay,City%2C+AL+35758%2C+USA!5e0!3m2!1sen!2sbd!4v1431591462160" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
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
          </footer>
        </main>
      </div>
@endsection`

<script type="text/javascript">
   function visibility3() {
  var x = document.getElementById('login_password');
  if (x.type === 'password') {
    x.type = "text";
    $('#eyeShow').show();
    $('#eyeSlash').hide();
  }else {
    x.type = "password";
    $('#eyeShow').hide();
    $('#eyeSlash').show();
  }
}
</script>
