@extends('layouts.app')
@section('content')
<div id="pageTitle" class="HeaderAdjust" data-bg-src="{{ asset('img/background-img/page-title-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="section-title">
                    <h2>contact</h2> </div>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div id="contact" class="page">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="contact-address">
                    <h2>Contact Address</h2> <address> <p><i class="fa fa-home"></i> House #14, Road #09, Sector #12, Dhaka-1203, Bangladesh.</p><p><i class="fa fa-envelope"></i> <a href="http://themelooks.us/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ed9e989d9d829f99ad88958c809d8188c38e8280">[email&#160;protected]</a></p><p><i class="fa fa-phone"></i> +000 000 000 000</p><p><i class="fa fa-fax"></i> +1-212-9876543</p></address>
                    <div class="contact-social-links">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 contact-form">
                    {!! Form::open(['route'=>'contactus.store']) !!}
 
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    {!! Form::label('Name:') !!}
                    {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    {!! Form::label('Email:') !!}
                    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                    
                    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                    {!! Form::label('Message:') !!}
                    {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                    </div>
                    
                    <div class="form-group">
                    <button class="btn btn-primary">Contact US!</button>
                    </div>
                    
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<div id="map"></div>
@stop
@section('scripts')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"></script>
@endsection