@extends('layouts.layout')
@section('title')
    Palliative Care
@endsection
@section('contents')
<!-- Inner Banner -->
 <div class="inner-banner inner-bg11">
    <div class="container">
        <div class="inner-title">
            <h3>Palliative Care</h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Palliative Care</li>
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

<!-- Palliative Details Area -->
<div class="doctors-details-area pt-100 pb-70">
    <div class="container">
        <div class="row align-top">
            <div class="col-lg-5">
                <div class="doctors-details-img">
                    <img src="{{asset('img/custom/services/palliative_large.jpg')}}" alt="Images">
                </div>
            </div>

            <div class="col-lg-5">
                <div class="doctors-details-content">
                    <h3>Palliative Care</h3>
                     <ul class="doctors-details-list">
                        <li>
                            We are here for you if you or someone you know has been informed that they need palliative care, 
                        </li>
                        <li>
                            At Sparkles Healthcare are here to support and help you at what can be a difficult time.
                        </li>  
                        <li>
                            Sometimes people choose to remain at home, instead of going to a hospice, hospital or residential 
                            environment, so they can spend time in a comfortable environment  with their loved ones.
                        </li>      
                      </ul>
                </div>
            </div>

            <div class="col-lg-10">
                <div class="doctors-details-text">
                  <p>
                    Sparkles healthcare has great care staff that will work hand in hand with yourself, your family, 
                    healthcare professionals, Palliative Care Nurses, District Nurses and other professionals 
                    as required, working together to ensure that you receive the best possible care,
                    keeping you comfortable making sure that all of your needs are met.
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

<!-- Palliative End -->
@endsection   