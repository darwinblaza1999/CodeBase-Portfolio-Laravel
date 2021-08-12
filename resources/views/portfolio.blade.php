@extends('layouts_welcome.app')

@section('content')
<div class="main-wrapper">
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
</div>

@endsection
