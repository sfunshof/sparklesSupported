@extends('layouts.layout')
@section('title')
    Hospital to home
@endsection
@section('contents')
<!-- Inner Banner -->
 <div class="inner-banner inner-bg11">
    <div class="container">
        <div class="inner-title">
            <h3>Hospital to home</h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Hospital to home</li>
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

<!-- Hospital Details Area -->
<div class="doctors-details-area pt-100 pb-70">
    <div class="container">
        <div class="row align-top">
            <div class="col-lg-5">
                <div class="doctors-details-img">
                    <img src="{{asset('img/custom/services/hospital_large.jpg')}}" alt="Images">
                </div>
            </div>

            <div class="col-lg-5">
                <div class="doctors-details-content">
                    <h3>Hospital to home</h3>
                    <p>
                        The care team at Sparkles healthcare is highly trained to provide care support 
                        for people
                        who have recently been discharged from the hospital and need to settle back in 
                        their homes as soon as posible
                    </p>
                    Our care workers will offer support in 
                     <ul class="doctors-details-list">
                        <li>
                            House keeping
                        </li>
                        <li>
                            Assisting with medication
                        </li>  
                        <li>
                            Accompaning clients to appointments
                        </li>  
                        <li>
                            Shopping
                        </li>    
                      </ul>
                </div>
            </div>

            <div class="col-lg-10">
                <div class="doctors-details-text">
                  <p>
                    With this service, people can be discarged as soon as possible with medical staff and families
                    not getting worried because the risk to re-addmission or injuring themselves again is very low while
                    we support your recovery process
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
<!-- Hospital End -->
@endsection   