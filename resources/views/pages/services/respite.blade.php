@extends('layouts.layout')
@section('title')
    Respite Care
@endsection
@section('contents')
<!-- Inner Banner -->
 <div class="inner-banner inner-bg11">
    <div class="container">
        <div class="inner-title">
            <h3>Respite Care</h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Respite Care</li>
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

<!-- Respite Details Area -->
<div class="doctors-details-area pt-100 pb-70">
    <div class="container">
        <div class="row align-top">
            <div class="col-lg-5">
                <div class="doctors-details-img">
                    <img src="{{asset('img/custom/services/respite_large.jpg')}}" alt="Images">
                </div>
            </div>

            <div class="col-lg-5">
                <div class="doctors-details-content">
                    <h3>Respite Care</h3>
                     <ul class="doctors-details-list">
                        <li>
                            At Sparkles Healthcare we know the importance of respite support for those who 
                            have become full time carers of loved ones. 
                        </li>
                        <li>
                            We know you can be very busy looking after your loved ones that you ignore taking time 
                            out for yourself which at the long run can result to burn out which might interfere with 
                            caring for your love ones
                        </li>  
                        <li>
                            We give you a break to re energise yourself enough to carry on with the care for your loved ones. 
                        </li>      
                      </ul>
                </div>
            </div>

            <div class="col-lg-10">
                <div class="doctors-details-text">
                  <p>
                    We know that it is not easy to trust someone to care for your loved ones. <br>
                    We are passionate about the services we provide, the respite service we provide is tailored
                    to meet individuals needs. Whether the respite is for hospital appointments, holidays, or emergencies.
                  </p>
                 
                    <p> 
                        Please <a href="{{ url('contact')}}">  contact  </a> our friendly team today for more details 
                     
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="doctors-details-shape">
        <img src="{{asset('img/doctors/doctors-shape4.png')}}" alt="Images">
    </div>
</div>
<!-- Respite End -->
@endsection   