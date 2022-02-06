@extends('layouts.welcome')

@section('content')

<section class="no-margin grey-plain pad-bottom-5 mag-top-10 mb-no-margin">
        <div class="container">
            <div class="col-md-5 center-block mag-top-3 box-shadow mag-bottom-3">
                <div class="col-md-12 white-bg curved">
                    <div class="col-md-12 pad-2">
                        <img src="img/logo.png" alt="" class="center-block width-10" />
                    </div>
                    <h4 class="center-align">Create Account</h4>
                    <div class="col-md-12 bordered pad-2">
                        <form method="POST" action="{{ route('register') }}" id="validate-register-form">
                        	@csrf
            @if(count($errors->all()) > 0)
                  @foreach($errors->all() as $error)
                  <p class="alert alert-danger">{{$error}}</p>
                  @endforeach
                @endif
                            <div class="form-group col-md-12 pad-1-2">
                                <input type="" name="name" id="name" value="{{ old('name') }}" class="form-control" placeholder="Name" />
                            </div>
                            <div class="form-group col-md-12 pad-1-2">
                                <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Email Address" />
                            </div>
                            <!--div class="form-group col-md-12 pad-1-2">
                                <input type="" name="" id="" class="form-control" placeholder="Address" />
                            </div>
                            <div class="form-group col-md-6 pad-1-2">
                                <input type="" name="" id="" class="form-control" placeholder="Select Country" />
                            </div>
                            <div class="form-group col-md-6 pad-1-2">
                                <input type="" name="" id="" class="form-control" placeholder="Phone No." />
                            </div-->
                            <div class="form-group col-md-6 pad-1-2">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" />
                            </div>
                            <div class="form-group col-md-6 pad-1-2">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm Password" />
                            </div>
                            <!--div class="form-group col-md-6 pad-1-2">
                                <input type="" name="" id="" class="form-control" placeholder="Security" />
                            </div-->
                            <div class="form-group col-md-6 pad-1-2"></div>
                            <div class="form-group col-md-12 pad-1-2">
                            	<input type="checkbox" name="tos" id="checkbox" />
                                <label for="checkbox">by registering you agree to the terms and conditions and
                                    privacy</label>
                            </div>
                            <div class="form-group col-md-12 pad-1-2">
                            	<input type="hidden" name="usertype" value="2">
                                <button data-sitekey="6LfFcQQaAAAAAL9uC5w_ty6zvOwbK3p_bJ9w054h" 
        data-callback='onRegisterSubmit' 
        data-action='submit' class="g-recaptcha btn btn-primary no-margin full-width">
                                    Sign Up
                                </button>
                            </div>
                            <hr class="mag-10" />
                            <div class="col-md-12 pad-2 center-align">
                                <p class="center-align">
                                    Already a member? <a href="{{ route('login') }}" class="link sp-form-btn-2 center-block form-btn">Sign In here</a>
                                </p>
                    
                                <!--h5 class="mag-bottom-2">Signup using social account</h5>
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