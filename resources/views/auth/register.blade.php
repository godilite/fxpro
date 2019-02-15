@extends('layouts.app')

@section('content')
<div id="pageTitle" class="HeaderAdjust" data-bg-src="img/background-img/page-title-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="section-title">
                    <h2>Signup</h2> </div>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Register</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div id="signup text-center">
    <div class="container">
        <br>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group col-md-6">
                <label for="firstName">First Name *</label>
                <input type="text" name="firstName" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName') }}" required autofocus> 
                @if ($errors->has('firstName'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('firstName') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group col-md-6">
                <label for="lastName">Last Name *</label>
                <input type="text" name="lastName" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" required autofocus> 
                @if ($errors->has('lastName'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('lastName') }}</strong>
                    </span>
                @endif 
            </div>
            <div class="form-group col-md-6">
                <label for="email">Email address *</label>
                <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus> 
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif    
            </div>
            <div class="form-group col-md-6">
                <label for="phone">Phone Number *</label>
                <input type="phone" name="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus> 
                @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif    
            </div>
            
            <div class="form-group col-md-6">
                <label for="signupPassword">Password *</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif    
            </div>
            <div class="form-group col-md-6">
                <label for="password_confirm">Confirm Password *</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>   
                
                <div class="text-right">
                <button type="submit" class="btn submit-button btn-primary">Signup</button> Already Registered? <a href="/login" style="color:green" >Login</a> </div>
        </form>
        <br>
    </div>
</div>
@endsection
