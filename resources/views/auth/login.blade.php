@extends('frontend.welcome')

@section('content')

<section class="no-margin grey-plain pad-bottom-5 mag-top-10 mb-no-margin">
        <div class="container">
            <div class="col-md-5 center-block mag-top-3 box-shadow mag-bottom-3">
                <div class="col-md-12 white-bg curved">
                    <div class="col-md-12 pad-3">
                      <h4 class="center-align">Sign In</h4>
                    </div>
                    <div class="col-md-12 bordered-down pad-2">

                        <form method="POST" action="{{ route('login') }}" id="validate-login-form">
            @csrf
            @if(count($errors->all()) > 0)
                  @foreach($errors->all() as $error)
                  <p class="alert alert-danger">{{$error}}</p>
                  @endforeach
                @endif
                            <div class="form-group col-md-12 pad-1-2">
                                <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Email Address" />
                            </div>
                            <div class="form-group col-md-12 pad-1-2">
                                <input type="password" name="password" id="password"  class="form-control" placeholder="Password" />
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-6 pad-1-2">
                                <label for="chk">Remember me</label>
                                <input type="checkbox" name="chk" id="chk" />
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-6 pad-1-2">
                              <a href="{{ route('password.request') }}" class="set-right no-padding sp-form-btn">forgot password?</a>
                            </div>
                            <div class="form-group col-md-12 pad-1-2">
                                <button class="btn btn-primary no-margin full-width">
                                    Sign In
                                </button>
                            </div>
                            <hr class="mag-10" />
                            <div class="col-md-12 pad-2 center-align">
                                <p class="center-align">
                                    Don't have an existing account?
                                    <a href="{{ route('register') }}" class="link sp-form-btn-2 center-block form-btn">Create Account</a>
                                </p>
                    
                                <!--h5 class="mag-bottom-2">Or Signup using</h5>
                                <a href="#" class="btn btn-primary full-width facebook-btn"><i class="fab fa-facebook"></i> Sign Up with
                                    Facebook</a><a href="#" class="btn btn-primary full-width google-btn secondary-color"><i
                                        class="fab fa-google-plus"></i> Sign Up with Google</a-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection