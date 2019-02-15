<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>FXPro</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,500,700,900' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('js/vn-plugin/vn.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colors/theme-color-1.css') }}" rel="stylesheet" id="changeColorScheme">
    <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script> <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <div id="preloader">
        <div class="preloader--spinners">
            <div class="preloader--spinner preloader--spinner-1"></div>
            <div class="preloader--spinner preloader--spinner-2"></div>
        </div>
    </div>
    <div id="menu">
        <div class="menu--topbar">
            <div class="container">
                <ul class="menu-topbar--social nav navbar-nav hidden-xs">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
                <div class="menu-topbar--contact clearfix">
                    <ul class="nav navbar-nav">
                        //<li><a href="tel:+4440000000"><i class="fa fa-phone"></i>+444 000 0000</a></li>
                        <li class="hidden-xs"><a href="mailto:info@fxpro.com.ng"><i class="fa fa-envelope"></i><span class="__cf_email__" data-cfemail="294c51484459454c694c51484459454c074a4644">info@fxpro.com.ng</span></a></li>
                    </ul>
                </div>
                <div class="menu-topbar--btn-group">
                    <ul class="clearfix">
                            @if (Route::has('login'))
                            @auth
                               <li><a href="{{ url('/home') }}">Dashboard</a></li>
                            @else
                               <li><a href="{{ route('login') }}"><i class="fa fa-user"></i>Login</a><li>
        
                                @if (Route::has('register'))
                                   <li><a href="{{ route('register') }}"><i class="fa fa-user-plus"></i>Signup</a></li>
                                @endif
                            @endauth
                    @endif
                    </ul>
                </div>
            </div>
        </div>
        <nav id="primaryMenu" class="navbar">
            <div class="container">
                <div class="primary--logo">
                    <a href="/"><img src="{{ asset('img/logo.png') }}" alt="FXPro Logo" /></a>
                </div>
                <div class="primary--info clearfix">
                    <div class="primary--info-item">
                        <div class="primary--icon"> <i class="fa fa-headphones"></i> </div>
                        <div class="primary--content">
                            <p class="count">24/7 Support</p>
                            <p>Lorem ipsum dolor</p>
                        </div>
                    </div>
                    <div class="primary--info-item">
                        <div class="primary--icon"> <i class="fa fa-mobile-phone"></i> </div>
                        <div class="primary--content">
                            <p class="count">Private Number</p>
                            <p>Lorem ipsum dolor</p>
                        </div>
                    </div>
                    <div class="primary--info-item">
                        <div class="primary--icon"> <i class="fa fa-dollar"></i> </div>
                        <div class="primary--content">
                            <p class="count">Free Calls</p>
                            <p>Lorem ipsum dolor</p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <nav id="secondaryMenu" class="navbar">
            <div class="container">
                <div class="secondary-menu--wrapper">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#secondaryNavbar" aria-expanded="false" aria-controls="secondaryNavbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <div class="login-btn hidden-lg hidden-md"> 
                            @if (Route::has('login'))
                            @auth

                            @else
        
                                @if (Route::has('register'))
                                   <a href="{{ route('register') }}"><i class="fa fa-user-plus"></i>Try for free</a>
                                @endif
                            @endauth
                            @endif
                               </div>

                    </div>
                    <div id="secondaryNavbar" class="reset-padding navbar-collapse collapse">
                        <ul class="secondary-menu-links nav navbar-nav">
                            <li class="active"><a href="/">HOME</a></li>
                            <li class="dropdown"> <a href="#" data-toggle="dropdown">ABOUT US<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('about') }}">WHY US</a></li>
                                </ul>
                            </li>
                            <li><a href="#">INVESTING</a></li>
                            <li><a href="#">TRADING</a></li>
                            <li><a href="#">BLOG</a></li>
                            <li><a href="#">COURSES</a></li>
                            <li><a href="{{ route('contact') }}">CONTACT</a></li>
                        </ul>
                        <ul class="secondary-menu-links nav navbar-nav navbar-right hidden-xs hidden-sm">
                            @if (Route::has('login'))
                            @auth
                               <li><a href="{{ url('/home') }}" class="btn">Home</a></li>
                            @else
                                @if (Route::has('register'))
                                   <li><a href="{{ route('register') }}" class="btn"><span>Try It Free</span></a></li>
                                @endif
                            @endauth
                            @endif 
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    @if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
    @endif
    @yield('slider')
    @yield('content')
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
                    <div class="footer-about">
                        <div class="footer-logo"> <a href="index-2.html"><img src="{{ asset('img/logo.png') }}" alt="FXPro Logo" /></a> </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quod mollitia quisquam. Architecto quam in atque sint voluptatem, consequatur consectetur ab ipsum maxime quod consequuntur excepturi illum dolorem ex modi...</p><a href="about.html" class="btn btn-custom-reverse">Read More</a> </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Acceptable Usage Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">DMCA Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
                    <h4>Links</h4>
                    <ul>
                        <li><a href="#">Lorem ipsum dolor sit</a></li>
                        <li><a href="#">Lorem ipsum dolor sit</a></li>
                        <li><a href="#">Lorem ipsum dolor sit</a></li>
                        <li><a href="#">Lorem ipsum dolor sit</a></li>
                        <li><a href="#">Lorem ipsum dolor sit</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 footer-widget">
                    <h4>Subscribe</h4>
                    <form action="{{ route('subscriber') }}" method="post" name="mc-embedded-subscribe-form" id="subscribeForm" novalidate="novalidate">
                        @csrf
                        <input type="text" name="name" placeholder="Enter your full name" class="input-box">
                        <input type="text" name="email" placeholder="Enter your email address" class="input-box">
                        <input type="submit" value="Subscribe" class="submit-button"> </form>
                </div>
            </div>
        </div>
        <div class="contact-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6"> <i class="fa fa-headphones"></i> <a href="#">24/7 Customer Support</a> </div>
                    <div class="col-md-3 col-xs-6"> <i class="fa fa-envelope-o"></i> <a href="#"><span class="__cf_email__" data-cfemail="e695939696899492a6839e878b968a83c885898b">[email&#160;protected]</span></a> </div>
                    <div class="col-md-3 col-xs-6"> <i class="fa fa-comments-o"></i> <a href="#">Click Here To Live Chat</a> </div>
                    <div class="col-md-3 col-xs-6"> <i class="fa fa-phone"></i> <a href="#">+44 000 000 000</a> </div>
                </div>
            </div>
        </div>
    </div>
    <div id="copyright">
        <div class="container">
            <p class="left">Copyright 2017 &copy; <a href="#">VOIP</a>. All Rights Reserved.</p>
            <p class="right">We Accept: <img src="{{ asset('img/payment-methods.png') }}" alt=""></p>
        </div>
    </div>
    <div id="backToTop"> <a href="#top"><i class="fa fa-angle-up"></i></a> </div>
    <script data-cfasync="false" src="{{ asset('../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/vn-plugin/vn.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    @yield('scripts')
    <script src="{{ asset('js/jquery.ui.touch-punch.min.js') }}"></script>
    <script src="{{ asset('js/retina.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
