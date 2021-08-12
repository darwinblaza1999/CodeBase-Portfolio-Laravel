@extends('layouts_welcome.app')

@section('content')
    <div class="main-wrapper">
        <!-- Start Blog -->
        <section id="blog">
            <div class="container">
              <div class="row">
               <div class="col s12">
                 <div class="blog-inner">
                   <h2 class="title">Contact</h2>
                   <p>This content is all about how i build my portfolio and project</p>

                  <!-- Start Blog area -->
                  <div class="blog-area">
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
          </section>
    </div>
@endsection
