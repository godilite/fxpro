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
                <label for="first_name">First Name *</label>
                <input type="text" name="first_name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name') }}" required autofocus> 
                @if ($errors->has('first_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group col-md-6">
                <label for="last_name">Last Name *</label>
                <input type="text" name="last_name" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus> 
                @if ($errors->has('last_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('last_name') }}</strong>
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
                <input type="number" name="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus> 
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
