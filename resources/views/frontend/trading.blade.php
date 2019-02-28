@extends('layouts.app')
@section('content')
<div class="single-feature" data-bg-src="{{ asset('img/background-img/single-feature-1-bg.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-7 single-feature--content">
                <h2>Trading Splash</h2>
                <p>Learn how to trade the forex market sucessfully by taking advantage of out trade splash promotional aimed at teaching and mentoring prospective forex traders the secret of becoming a sucessfull trade.</p>
                <ul>
                    <li> Trading signals</li>
                    <li>Counselling Forex</li>
                    <li>Fundamental Analysis</li>
                    <li>Trading Pshycology</li>
                  <li>Trade Canvass</li>
                  <li>Risk Management</li>  
                </ul></div>
            <div class="col-md-5 single-feature--image">
                <figure> <img src="img/single-feature-img/02.png" alt="" class="img-responsive">
                     <figcaption class="single-feature--price"> <span>Price</span>
                        <p>$47.65</p><span>USD</span> </figcaption>
                </figure>
            </div>
        </div>
    </div>
</div>
<div id="pricing">
    <div class="container">
        <div class="section-title">
            <h2>Trade Splash Pricing</h2> </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="pricing-table-item">
                    <div class="pt-head">
                        <div class="caption">Starting At</div>
                        <div class="pt-price-tag">$4.89 <br> <span></span></div>
                       <div>$4.89/session (40 sessions)</div> 
                        <div class="pt-plan">Basic</div>
                    </div>
                    <div class="pt-body">
                        <div class="pt-features">
                            <ul>                                    
                                <li>TS Webinar Single Session <i class="fa fa-check"></i></li>
                                <li>After Session Counselling <i class="fa fa-check"></i> </li>
                                <li>Trading Psychology <i class="fa fa-check"></i></li>
                                <li>Risk Management <i class="fa fa-check"></i></li>
                                <li>Trade Canvass <i class="fa fa-close"></i></li>
                                <li>Trading Signal Service <i class="fa fa-close"></i></li>
                                <li>Fundamental Analysis <i class="fa fa-close"></i></li>
                                <li>Pre-Scheduled One-On-One <br> Meeting (Once A Week) <i class="fa fa-close"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="pt-footer"> 
                            <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                    
                                        <input type="hidden" name="email" value="godilite@gmail.com"> {{-- required --}}
                                        <input type="hidden" name="orderID" value="123">
                                        <input type="hidden" name="amount" value="178485"> {{-- required in kobo --}}
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="metadata" value="{{ json_encode($array = [ 'Student_First_Name' => auth::user()->first_name, 'Student_Last_Name' => auth::user()->last_name, 'investor_Email' => auth::user()->email, 'course_id' => 1 ]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                        <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                                        {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
                            
                                         <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                                          <button class="btn btn-custom" type="submit" value="Pay Now!">
                                          <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                          </button>

                                </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="pricing-table-item popular">
                    <div class="pt-head">
                        <div class="popular-indicator"> <i class="fa fa-diamond"></i> </div>
                        <div class="caption">Starting At</div>
                        <div class="pt-price-tag">$88.02<span></span></div>
                        <div>(20 sessions)
                            10% discount
                            </div>
                        <div class="pt-plan">Standard</div>
                    </div>
                    <div class="pt-body">
                        <div class="pt-features">
                            <ul>
                                    <li>TS Webinar 20Sessions <i class="fa fa-check"></i></li>
                                    <li>After Session Counselling <i class="fa fa-check"></i> </li>
                                    <li>Trading Psychology <i class="fa fa-check"></i></li>
                                    <li>Risk Management <i class="fa fa-check"></i></li>
                                    <li>Trade Canvass <i class="fa fa-check"></i></li>
                                    <li>Trading Signal Service <i class="fa fa-close"></i></li>
                                    <li>Fundamental Analysis <i class="fa fa-close"></i></li>
                                    <li>Pre-Scheduled One-On-One <br> Meeting (Once A Week) <i class="fa fa-close"></i></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="pt-footer"> 
                            <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                    
                                    <input type="hidden" name="email" value="accounts@525system.com"> {{-- required --}}
                                    <input type="hidden" name="orderID" value="1234">
                                    <input type="hidden" name="amount" value="3212730"> {{-- required in kobo --}}
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="metadata" value="{{ json_encode($array = [ 'Student_First_Name' => auth::user()->first_name, 'Student_Last_Name' => auth::user()->last_name, 'investor_Email' => auth::user()->email, 'course_id' => 2 ]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                    <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                                    {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
                        
                                     <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                                      <button class="btn btn-custom" type="submit" value="Pay Now!">
                                      <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                      </button>

                            </form>    
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="pricing-table-item">
                    <div class="pt-head">
                        <div class="caption">Starting At</div>
                        <div class="pt-price-tag">$156.48<span></span></div>
                        <div>(40 sessions)
                            20% discount
                            </div>
                        <div class="pt-plan">Premium</div>
                    </div>
                    <div class="pt-body">
                        <div class="pt-features">
                            <ul>                      
                                <li>TS Webinar 40 Sessions <i class="fa fa-check"></i></li>
                                <li>After Session Counselling <i class="fa fa-check"></i> </li>
                                <li>Trading Psychology <i class="fa fa-check"></i></li>
                                <li>Risk Management <i class="fa fa-check"></i></li>
                                <li>Trade Canvass <i class="fa fa-check"></i></li>
                                <li>Trading Signal Service <i class="fa fa-check"></i></li>
                                <li>Fundamental Analysis <i class="fa fa-check"></i></li>
                                <li>Pre-Scheduled One-On-One <br> Meeting (Once A Week) <i class="fa fa-close"></i></li>
                            
                            </ul>
                        </div>
                    </div>
                    <div class="pt-footer"> <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                    
                            <input type="hidden" name="email" value="accounts@525system.com"> {{-- required --}}
                            <input type="hidden" name="orderID" value="12345">
                            <input type="hidden" name="amount" value="5711520"> {{-- required in kobo --}}
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="metadata" value="{{ json_encode($array = [ 'Student_First_Name' => auth::user()->first_name, 'Student_Last_Name' => auth::user()->last_name, 'investor_Email' => auth::user()->email, 'course_id' => 3 ]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
                
                             <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                              <button class="btn btn-custom" type="submit" value="Pay Now!">
                              <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                              </button>

                    </form> </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="pricing-table-item">
                    <div class="pt-head">
                        <div class="caption">Starting At</div>
                        <div class="pt-price-tag">$199.87<span></span></div>
                        <div>(40 sessions)
                            </div>
                        <div class="pt-plan">Enterprise</div>
                    </div>
                    <div class="pt-body">
                        <div class="pt-features">
                            <ul>
                                    <li>Trade Splash Webinar <i class="fa fa-check"></i></li>
                                    <li>After Session Counselling <i class="fa fa-check"></i> </li>
                                    <li>Trading Psychology <i class="fa fa-check"></i></li>
                                    <li>Risk Management <i class="fa fa-check"></i></li>
                                    <li>Trade Canvass <i class="fa fa-check"></i></li>
                                    <li>Trading Signal Service <i class="fa fa-check"></i></li>
                                    <li>Fundamental Analysis <i class="fa fa-check"></i></li>
                                    <li>Pre-Scheduled One-On-One <br> Meeting (Once A Week) <i class="fa fa-check"></i></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="pt-footer"> <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                    
                            <input type="hidden" name="email" value="godilite@gmail.com"> {{-- required --}}
                            <input type="hidden" name="orderID" value="123">
                            <input type="hidden" name="amount" value="7295255"> {{-- required in kobo --}}
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="metadata" value="{{ json_encode($array = [ 'Student_First_Name' => auth::user()->first_name, 'Student_Last_Name' => auth::user()->last_name, 'investor_Email' => auth::user()->email, 'course_id' => 4 ]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
                
                             <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                              <button class="btn btn-custom" type="submit" value="Pay Now!">
                              <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                              </button>

                    </form> </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop