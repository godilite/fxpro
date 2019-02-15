@extends('layouts.app')

@section('content')
<div id="pageTitle" class="HeaderAdjust" data-bg-src="img/background-img/page-title-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="section-title">
                    <h2>login</h2> </div>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Login</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div id="login">
    <div class="container">
            <form method="POST" action="{{ route('login') }}">
                    @csrf
            <div class="form-group col-md-5">
                <label for="loginEmail">Email address *</label>
                <input id="email" type="email" class="form-control col-5{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" width ="50px" required autofocus>
                @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif    
             </div>
            <div class="form-group col-md-5">
                <label for="loginPassword">Password *</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif    
            </div>

            <div class="col-md-12">
            <label for="remember" class="checkbox">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember</label>
            <p class="help-block clearfix">
                <button type="submit" class="btn submit-button btn-primary">login</button> 
                @if (Route::has('password.request'))
                    <a class="btn btn-link" style="color:green" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif</p>
            </div>
        </form>
    </div>
</div>

@endsection
