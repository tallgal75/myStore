@extends('layouts.inner_page')

@section('title')
    TallChic - Login
@endsection

@section('header')
    @parent
@endsection

@section('content')
<div class="section login-register-form-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="login-form">
                    <h2>I am Already a Client</h2>
                    <hr>
                    <div class="form">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="col-sm-12{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 text-center">
                            <<button type="submit" class="btn btn-default send">Log in <i class="fa fa-caret-right" aria-hidden="true"></i> </buttom>
                            or
                            <a href="#" class="btn btn-default facebook"> <i class="fa fa-facebook" aria-hidden="true"></i> Log In With Facebook </a>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                            </a>
                        </div> 
                     </form>         
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="login-form">
                    <h2>I am New</h2>
                    <hr>
                    <div class="form">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="col-sm-12 text-center">                                   
                           <a href="#" class="btn btn-default facebook"> <i class="fa fa-facebook" aria-hidden="true"></i> Log In With Facebook </a>
                           or
                        </div>     
                        <div class="col=sm=12{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col=col-sm-12{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="checkbox">
                                <label><input type="checkbox">Remeber Me</label>
                                <label><input type="checkbox">Subscribe to Newsletter</label>
                                <label><input type="checkbox">I accept the Terms & Conditions</label>
                            </div>
                        </div> 

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-default send">Register <i class="fa fa-caret-right" aria-hidden="true"></i>>
                                    Register
                                </button>
                            </div>
                        </div>
                    </form> 
                    </div>

        </div>
    </div>
</div>
@endsection

@section('footer')
    @parent
@endsection