@extends('layouts_welcome.app')

@section('content')
    <div class="main-wrapper">
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
    </div>
@endsection
