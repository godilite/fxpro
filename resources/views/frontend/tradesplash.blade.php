@extends('layouts.app')
@section('content')
<div id="pageTitle" class="HeaderAdjust" data-bg-src="{{ asset('img/background-img/page-title-bg.jpg') }}"> 
    <div class="container"> 
        <br><br>
        <div class="row"> 
        <div class="col-md-6 col-md-offset-3"> 
            <div class="section-title"> 
                <h2>{{ $title }}</h2> </div>
                <ol class="breadcrumb"> 
                    <li><a href="#">Home</a></li>
                    <li class="active">{{ $title }}</li></ol> 
                </div>
            </div>
            </div>
            </div>
                <div id="blog" class="page"> 
                    <div class="container"> 
                        <div class="row"> 
                            <div class="col-md-8 blog-page-content"> 
                                <div class="blog-item">                                         
                                    @php
                                    $ext = pathinfo($first_post->featured, PATHINFO_EXTENSION);     
                                    @endphp                                         
                                     @if($ext=='mp4')                                
                                                       <div class="blog-page-post-video embed-responsive embed-responsive-16by9"> 
                                                         <video class="embed-responsive-item" src="{{ $first_post->featured }}" controls></video> 
                                                     </div>
                                                     @else
                                                     <div class="blog-item-img"> <a href="{{ route('post.single',['slug'=>$first_post->slug]) }}"> <img src="{{ $first_post->featured }}" alt="" class="img-responsive"> </a> 
                                                     </div>
                                                 @endif
                                                                                          
                                    <div class="blog-item-content">
                                         <h2><a href="#">{{ $first_post->title }}</a></h2> 
                                         <div class="metadata"> 
                                             <i class="fa fa-calendar"></i><a href="{{ route('post.single',['slug'=>$first_post->slug]) }}">{{ $first_post->created_at->toFormattedDateString()}}</a> <span class="divider"> | </span> <i class="fa fa-user"></i><a href="#">{{ $first_post->category->name}}</a> </div>
                                                    {!! str_limit($first_post->content,100) !!}   
                                             <a href="{{ route('post.single',['slug'=>$first_post->slug]) }}" class="btn btn-custom-reverse">Read More</a> 
                                                    </div>
                                                </div>
                                                <hr> 
                                                @foreach($category as $post)
                                                <div class="blog-item">
                                                     <div class="row"> <div class="col-md-6">
                                                       @php
                                                       $ext = pathinfo($post->featured, PATHINFO_EXTENSION);     
                                                       @endphp                                         
                                                        @if($ext=='mp4')                                                   
                                                                      <div class="blog-page-post-video embed-responsive embed-responsive-16by9"> 
                                                                        <video class="embed-responsive-item" src="{{ $post->featured }}" controls></video> 
                                                                    </div>
                                                            @else
                                                                <div class="blog-item-img"> <a href="{{ route('post.single',['slug'=>$post->slug]) }}"> <img src="{{ $post->featured }}" alt="" class="img-responsive"> </a> 
                                                                </div>
                                                            @endif
                                                    
                                                    </div>
                                                    <div class="col-md-6"> 
                                                        <div class="blog-item-content"> <h2><a href="#">{{ $post->title }}</a></h2> 
                                                            <div class="metadata"> <i class="fa fa-calendar"></i><a href="#">{{ $post->created_at->toFormattedDateString()}}</a> <span class="divider"> | </span> <i class="fa fa-user"></i><a href="#">{{ $post->category->name}}</a>
                                                             </div>
                                                                 {!! str_limit($post->content,50) !!}
                                                             
                                                                  <a href="{{ route('post.single',['slug'=>$post->slug]) }}" class="btn btn-custom-reverse">Read More</a> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    @endforeach  
                                                                 </div>
                                                                         <div class="col-md-4 blog-page-sidebar"> 
                                                                             <div class="widget search"> 
                                                                                 <form action="#" method="post"> 
                                                                                    <div class="input-group"> 
                                                                                        <input type="text" placeholder="Search" class="form-control"> 
                                                                                        <span class="input-group-addon"> 
                                                                                            <button type="submit"><i class="fa fa-search"></i></button> </span> 
                                                                                        </div>
                                                                                    </form> 
                                                                                </div>
                                                                                <div class="widget recent-items"> 
                                                                                    <h2 class="widget-title">recent posts</h2> 
                                                                                    <div class="footer-thumb m-t-15"> 
                                                                                        <div class="row-holder"> 
                                                                                            <div class="right-col"> 
                                                                                                <a class="footer-thumb-link" href="#">You shouldn't have to</a> 
                                                                                                <p class="footer-thumb-text">You shouldn't have to take our word for it. You sdfd read what iYo
                                                                                                    u shouldn't have to take our word for it. You sdfd read what i 
                                                                                                </p><span class="footer-thumb-date">Published ON: <span class="footer-thumb-text-italic">10 dec</span></span> 
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row-holder"> 
                                                                                            <div class="right-col"> 
                                                                                                <a class="footer-thumb-link" href="#">You shouldn't have to</a> 
                                                                                                <p class="footer-thumb-text">You shouldn't have to take our word for it. You sdfd read what 
                                                                                                    iYou shouldn't have to take our word for it. You sdfd read what i 
                                                                                                </p><span class="footer-thumb-date">Published ON: <span class="footer-thumb-text-italic">10 dec</span></span> 
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget categories"> 
                                                                                    <h3 class="widget-title">categories</h3> 
                                                                                    <ul> 
                                                                                        <li><a href="#">Web Design</a></li>
                                                                                        <li><a href="#">UX Design</a></li>
                                                                                        <li><a href="#">UI Design</a></li>
                                                                                        <li><a href="#">UI Design</a></li>
                                                                                        <li><a href="#">Flat Design</a></li>
                                                                                    </ul> 
                                                                                </div>
                                                                                <div class="widget archives"> 
                                                                                    <h3 class="widget-title">archives</h3> 
                                                                                    <ul> 
                                                                                        <li><a href="#">September 2015</a></li>
                                                                                        <li><a href="#">October 2015</a></li>
                                                                                        <li><a href="#">November 2015</a></li>
                                                                                        <li><a href="#">December 2015</a></li>
                                                                                        <li><a href="#">January 2016</a></li>
                                                                                    </ul> 
                                                                                </div>
                                                                                <div class="widget tags"> 
                                                                                    <h3 class="widget-title">tags</h3> 
                                                                                    <ul> 
                                                                                        <li><a href="#">business</a></li>
                                                                                        <li><a href="#">agency</a></li>
                                                                                        <li><a href="#">creative</a></li>
                                                                                        <li><a href="#">portfolio</a></li>
                                                                                        <li><a href="#">coporate</a></li>
                                                                                        <li><a href="#">website</a></li>
                                                                                        <li><a href="#">business website</a></li>
                                                                                        <li><a href="#">coporate website</a></li>
                                                                                    </ul> 
                                                                                </div>
                                                                                <div class="widget latest-tweets-widget"> 
                                                                                    <h4 class="widget-title">Latest Tweets</h4> 
                                                                                    <div id="sidebarTwitter" data-user-name="themelooks"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @stop
                                                                @section('scripts')
                                                                     <script data-cfasync="false" src="{{ asset('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
                                                                     <script src="{{ asset('platform.twitter.com/widgets.js') }}"></script> 
                                                                     <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script> 
                                                                     <script src="{{ asset('js/jquery.counterup.min.js') }}"></script> 
                                                        
                                                                @stop