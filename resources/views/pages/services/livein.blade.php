@extends('layouts.layout')
@section('title')
   Live-in Care
@endsection
@section('contents')
<!-- Inner Banner -->
 <div class="inner-banner inner-bg11">
    <div class="container">
        <div class="inner-title">
            <h3>Live-in Care</h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Live-in Care</li>
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

<!-- Live in Details Area -->
<div class="doctors-details-area pt-100 pb-70">
    <div class="container">
        <div class="row align-top">
            <div class="col-lg-5">
                <div class="doctors-details-img">
                    <img src="{{asset('img/custom/services/live_in_large.jpg')}}" alt="Images">
                </div>
            </div>

            <div class="col-lg-5">
                <div class="doctors-details-content">
                    <h3>Live-in Carer</h3>
                    <p>
                        Sparkles healthcare has a dedicated team that is highly trained to give you
                        a live in care service. 
                    </p>
                    <p>
                        While with you, we can agree on flexibility of our stay, times or hours 
                        we may be needed and for how long. 
                    </p>                  
                    <p>   
                        We can provide you with the support you need such as:
                     <ul class="doctors-details-list">
                        <li>
                            House keeping
                        </li>
                        <li>
                          Running errands
                        </li>  
                        <li>
                            Emergency assistance
                        </li>      
                      </ul>
                    </p> 
                </div>
            </div>

            <div class="col-lg-10">
                <div class="doctors-details-text">
                  <p>
                   We start by designing a great care plan for you using your inputs, 
                  that of your loved ones and also from the local authorities
                  </p>
                  <p>
                  Your care plan is personalised for you to achieve your aspirations and goals
                   which should put your mind at rest
                  </p>  

                  <p>
                    This is a great service as you do not have to move to a care home but instead stay in
                     a familiar environment and knowing fully well that there is a 
                   care worker who would give you the one-to-one support you need while not
                    giving up your independence
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
<!-- Live in End -->
@endsection   