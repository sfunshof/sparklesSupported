@extends('layouts.layout')
@section('title')
    Work for us
@endsection
@section('contents')

 <!-- Inner Banner -->
 <div class="inner-banner inner-bg2">
    <div class="container">
        <div class="inner-title">
            <h3>Work for us </h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Work for us</li>
            </ul>
        </div>
    </div>
    <div class="inner-banner-shape">
        <div class="shape1">
            <img src="{{asset('img/inner-banner/inner-banner-shape1.png')}}" alt="Images">
        </div>
        <div class="shape2">
            <img src="{{asset('img/inner-banner/inner-banner-shape2.png')}}" alt="Images">
        </div>
    </div>
 </div>
 <!-- Inner Banner End -->
    
    <!-- Details Area -->
    <div class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="about-content">
                        <div class="section-title">
                            <h2>Care Assistants (Full or Part time)</h2>
                            <p>
                                A job that provides excellent work - life balance and pays between 
                                £9 to £12 per hour. 
                            </p>
                            <p>
                               As a Care Worker you will perform duties and tasks to enable people to
                               continue living within the comfort of their own homes in a safe and secure way. 
                            </p>
                            <p>
                               You will offer a level of care which promotes dignity, respect and choice to clients
                               within the Mole Valley and Reigate and Banstead areas.
                            </p>   
                            <p>  
                               
                                Some key responsibilities will include:
                                <ul>
                                    <li>
                                        Deliver companionship and personal care to clients
                                    </li>
                                    <li>   
                                        Assist with mealtimes and social activities
                                    </li>
                                    <li>    
                                        Light domestic tasks and general household duties
                                    </li>   
                                    <li>
                                        Write and maintain accurate records of care on a daily basis
                                    </li>
                                    <li>   
                                       Support in any other areas of their daily living
                                    </li> 
                                </ul>
                            </p>      
                               
                        </div>
                        <div class="about-btn">
                            Looks interesting?
                            <a href="{{ url('recruit/applyform')}}" class="default-btn-two">Apply now</a>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
    <!-- End Details Areas ==>     

@endsection