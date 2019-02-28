@extends('layouts.app')
@section('content')
<div id="pageTitle" class="HeaderAdjust" data-bg-src="{{ asset('img/background-img/page-title-bg.jpg') }}"> 
    <div class="container"> 
        <br> <br>
        <div class="row"> 
        <div class="col-md-6 col-md-offset-3">
        <div class="section-title"> <h2>{{ $title }}</h2> 
        </div>
        <ol class="breadcrumb"> 
        <li><a href="#">Home</a></li>
        <li class="active">{{ $title }}</li>
    </ol> 
</div>
</div>
</div>
</div>
<div id="blog" class="page"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-md-8 blog-page-content"> 
                <div class="blog-item full-post">
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
                    <div class="blog-item-content"> 
                        <h2>{{ $post->title }}</h2> 
                        <div class="metadata"> <i class="fa fa-calendar"></i><a href="#">{{ $post->created_at->toFormattedDateString()}}</a> <span class="divider"> | </span> <i class="fa fa-user"></i><a href="#">{{ $post->category->name}}</a> 
                        </div>
                        {!! $post->content !!}
                    </div>
                    <p><span class="post-category-text">Category:</span><a href="#" class="category-link">{{ $post->category->name}}</a></p>
                    <div class="tags"> <ul> <li><strong>Tags:</strong></li>
                        @foreach($post->tags as $tag)   
                        <li><a href="#" class="btn btn-custom">{{ $tag->tag }}</a></li>
                        @endforeach
                    </ul> 
                </div>
                <div class="row"> 
                    <div class="col-sm-6"> 
                        <div class="post-author-metadata"> 
                            <img src="img/blog-img/author.jpg" alt=""> 
                            <a href="#" class="post-author-name">Admin</a> 
                        </div>
                    </div>
                    <div class="col-sm-6"> 
                        <div class="post-social-links"> 
                            <ul> 
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-feed"></i></a></li>
                            </ul> 
                        </div>
                    </div>
                </div>
                <div class="post-comments"> 
                    <h2 class="post-comments-title"> Comments</h2> 
                    @include('includes.disqus')
                </div>
            </div>
        </div>
        <div class="col-md-4 blog-page-sidebar"> 
                                     <div class="widget search"> 
                                         <form action="#" method="post"> 
                                            <div class="input-group"> <input type="text" placeholder="Search" class="form-control">
                                                 <span class="input-group-addon"> 
                                                     <button type="submit"><i class="fa fa-search"></i></button> </span> 
                                                </div>
                                            </form> 
                                        </div>
                                        <div class="widget recent-items"> 
                                            <h2 class="widget-title">recent posts</h2> 
                                        </div>
        </div>
        </div>
    </div>
</div>
                                            @stop
                                            @section('scripts')
                                            <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
                                            <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
                                            @stop