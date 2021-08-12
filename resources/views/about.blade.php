@extends('layouts_welcome.app')

@section('content')
<div class="main-wrapper">
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
</div>

@endsection
