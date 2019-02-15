@extends('layouts.app')
@section('content')
<div id="pageTitle" class="HeaderAdjust" data-bg-src="{{ asset('img/background-img/page-title-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="section-title">
                    <h2>about us</h2> </div>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">About Us</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="about-description">
    <div class="container">
        <div class="about-desc-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quisquam omnis quia incidunt aliquid quam itaque libero, in, culpa tempora nesciunt neque eos similique, dolorem amet ipsa eius praesentium nihil. Blanditiis tenetur error enim incidunt et, molestias qui consequuntur ullam magnam quae aliquam, laudantium labore vel quam minima commodi? Perspiciatis veritatis, consectetur mollitia. Pariatur, possimus veritatis in eaque nobis, vitae!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quisquam omnis quia incidunt aliquid quam itaque libero, in, culpa tempora nesciunt neque eos similique, dolorem amet ipsa eius praesentium nihil. Blanditiis tenetur error enim incidunt et, molestias qui consequuntur ullam magnam quae aliquam, laudantium labore vel quam minima commodi? Perspiciatis veritatis, consectetur mollitia. Pariatur, possimus veritatis in eaque nobis, vitae!</p>
        </div>
    </div>
</div>
<div class="counter" data-bg-src="{{ asset('img/counter-img/bg.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-xs-6">
                <div class="counter-holder">
                    <div class="counter-icon"><img src="{{ asset('img/counter-img/01.png') }}" alt="" class="img-responsive"></div>
                    <p class="counter-text">VOIP Products Sold</p>
                    <div class="counter-number">400</div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6">
                <div class="counter-holder">
                    <div class="counter-icon"><img src="{{ asset('img/counter-img/02.png') }}" alt="" class="img-responsive"></div>
                    <p class="counter-text">Dedicated Servers Sold</p>
                    <div class="counter-number">2,500</div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6">
                <div class="counter-holder">
                    <div class="counter-icon"><img src="{{ asset('img/counter-img/03.png') }}" alt="" class="img-responsive"></div>
                    <p class="counter-text">VOIP App Downloads</p>
                    <div class="counter-number">9,815</div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-6">
                <div class="counter-holder">
                    <div class="counter-icon"><img src="{{ asset('img/counter-img/04.png') }}" alt="" class="img-responsive"></div>
                    <p class="counter-text">Happy Clients</p>
                    <div class="counter-number">1,815</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="team">
    <div class="container">
        <div class="section-title">
            <h2>our team</h2> </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="team-item">
                    <div class="team-img"> <img src="{{ asset('img/team-img/01.jpg') }}" alt="" class="img-responsive">
                        <div class="team-social-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-info">
                        <h2>Justin Farrugia</h2>
                        <p>Web Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="team-item">
                    <div class="team-img"> <img src="{{ asset('img/team-img/02.jpg') }}" alt="" class="img-responsive">
                        <div class="team-social-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-info">
                        <h2>Mohammad Al Omayer</h2>
                        <p>Project Manager</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="team-item">
                    <div class="team-img"> <img src="img/team-img/03.jpg" alt="" class="img-responsive">
                        <div class="team-social-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-info">
                        <h2>Jane Doe</h2>
                        <p>UI/UX Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="team-item">
                    <div class="team-img"> <img src="{{ asset('img/team-img/04.jpg') }}" alt="" class="img-responsive">
                        <div class="team-social-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-info">
                        <h2>Michael Dalim</h2>
                        <p>Web Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="history">
    <div class="container">
        <div class="section-title">
            <h2>our history</h2> </div>
        <ul class="timeline">
            <li>
                <div class="timeline-badge"> <i class="fa fa-circle"></i> </div>
                <div class="timeline-panel">
                    <div class="timeline--date">
                        <p>2016</p>
                    </div>
                    <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo accusantium dignissimos delectus veniam dolore eaque soluta, quam nostrum. Iste obcaecati, repellat impedit soluta.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge"> <i class="fa fa-circle"></i> </div>
                <div class="timeline-panel">
                    <div class="timeline--date">
                        <p>2015</p>
                    </div>
                    <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo accusantium dignissimos delectus veniam dolore eaque soluta, quam nostrum. Iste obcaecati, repellat impedit soluta.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge"> <i class="fa fa-circle"></i> </div>
                <div class="timeline-panel">
                    <div class="timeline--date">
                        <p>2014</p>
                    </div>
                    <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo accusantium dignissimos delectus veniam dolore eaque soluta, quam nostrum. Iste obcaecati, repellat impedit soluta.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge"> <i class="fa fa-circle"></i> </div>
                <div class="timeline-panel">
                    <div class="timeline--date">
                        <p>2013</p>
                    </div>
                    <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo accusantium dignissimos delectus veniam dolore eaque soluta, quam nostrum. Iste obcaecati, repellat impedit soluta.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-badge"> <i class="fa fa-circle"></i> </div>
                <div class="timeline-panel">
                    <div class="timeline--date">
                        <p>2012</p>
                    </div>
                    <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo accusantium dignissimos delectus veniam dolore eaque soluta, quam nostrum. Iste obcaecati, repellat impedit soluta.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-badge"> <i class="fa fa-circle"></i> </div>
                <div class="timeline-panel">
                    <div class="timeline--date">
                        <p>2011</p>
                    </div>
                    <div class="timeline-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo accusantium dignissimos delectus veniam dolore eaque soluta, quam nostrum. Iste obcaecati, repellat impedit soluta.</p>
                    </div>
                </div>
            </li>
            <li class="clearfix no-float"></li>
        </ul>
    </div>
</div>
<div id="testimonial" data-bg-src="img/testimonial-img/bg.jpg">
    <div class="section-title">
        <h2>testimonial</h2> </div>
    <div class="testimonial-slider">
        <div class="testimonial-item" data-recommender-thumb="img/testimonial-img/01.jpg">
            <div class="recommender-comment">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum similique ad, magnam, odit repellat reprehenderit. Consequatur consectetur aspernatur ad assumenda a. Aspernatur fugit numquam quod rerum sint facere ex ullam. A, blanditiis quod, tempore magni veniam perferendis aliquid vitae saepe.</p>
            </div>
            <div class="recommender-info"> <span class="recommender-name">Mohammad Al Omayer,</span> <span class="recommender-role">Company</span> </div>
        </div>
        <div class="testimonial-item" data-recommender-thumb="{{ asset('img/testimonial-img/02.jpg') }}">
            <div class="recommender-comment">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum similique ad, magnam, odit repellat reprehenderit. Consequatur consectetur aspernatur ad assumenda a. Aspernatur fugit numquam quod rerum sint facere ex ullam. A, blanditiis quod, tempore magni veniam perferendis aliquid vitae saepe.</p>
            </div>
            <div class="recommender-info"> <span class="recommender-name">Mohammad Al Omayer,</span> <span class="recommender-role">Company</span> </div>
        </div>
        <div class="testimonial-item" data-recommender-thumb="{{ asset('img/testimonial-img/03.jpg') }}">
            <div class="recommender-comment">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum similique ad, magnam, odit repellat reprehenderit. Consequatur consectetur aspernatur ad assumenda a. Aspernatur fugit numquam quod rerum sint facere ex ullam. A, blanditiis quod, tempore magni veniam perferendis aliquid vitae saepe.</p>
            </div>
            <div class="recommender-info"> <span class="recommender-name">Mohammad Al Omayer,</span> <span class="recommender-role">Company</span> </div>
        </div>
    </div>
</div>
@stop
@section('scripts')
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
@stop