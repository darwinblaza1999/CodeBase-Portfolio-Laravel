@extends('layouts_welcome.app')

@section('content')
    <div class="main-wrappers">
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

    </div>

@endsection

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
