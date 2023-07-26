@extends('layouts.layout')
@section('title')
    Specialist Care
@endsection
@section('contents')
<!-- Inner Banner -->
 <div class="inner-banner inner-bg11">
    <div class="container">
        <div class="inner-title">
            <h3>Specialist Care</h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Specialist Care</li>
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

<!-- Specialist Details Area -->
<div class="doctors-details-area pt-100 pb-70">
    <div class="container">
        <div class="row align-top">
            <div class="col-lg-5">
                <div class="doctors-details-img">
                    <img src="{{asset('img/custom/services/specialist_large.jpg')}}" alt="Images">
                </div>
            </div>

            <div class="col-lg-5">
                <div class="doctors-details-content">
                    <h3>Specialist care</h3>
                    <p>
                        Sparkles healthcare has a dedicated team of specially trained care workers
                        to provide care support to people who are down with some medical conditions 
                        such as  
                            <ul class="doctors-details-list">
                        <li>
                            Cancer care
                        </li>
                        <li>
                            Neuro muscular disorder
                        </li>      
                        <li>
                            Spinal injuries
                        </li>
                        <li>
                            Diabetic support
                        </li>
                        <li>
                            24-hour support
                        </li>
                        <li> 
                            illness recovery
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-lg-10">
                <div class="doctors-details-text">
                  <p>
                     Our team will also provide care support for people with various long term  illnesses and provide 
                     a shoulder to lean on for for third party respite care workers 
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
<!-- Specialist  End -->
@endsection   