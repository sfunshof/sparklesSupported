@extends('layouts.layout')
@section('title')
    Our Values
@endsection
@section('contents')

 <!-- Inner Banner -->
 <div class="inner-banner inner-bg2">
    <div class="container">
        <div class="inner-title">
            <h3>Our Values</h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Our Values</li>
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

 <!-- Doctors Details Area -->
 <div class="doctors-details-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-top">
            
            <div class="col-lg-5">
                <div class="doctors-details-img">
                    <img src="{{asset('img/custom/about/ourvalues.jpg')}}" alt="Images">
                </div>
            </div>

            <div class="col-lg-7">
                <div class="about-content">
                    <div class="section-title">
                        <h2>Our Values</h2>
                        <p>
                            We leave a Sparkle wherever we go, we treat our service users with compassion 
                            and kindness. 
                        </p>
                    </div>
                    <div class="about-card">
                        <i class='flaticon-one bg-one'></i>
                        <div class="content">
                            We run a person centred care services <br>
                            We are open to ideas and feedbacks                
                        </div>
                    </div>

                    <div class="about-card">
                        <i class='flaticon-two-fingers bg-two'></i>
                        <div class="content">
                            We treat people with love and care <br>
                            We respect people’s culture and belief
                        </div>
                    </div>

                    <div class="about-card">
                        <i class='flaticon-three bg-three'></i>
                        <div class="content">
                            We promote privacy and dignity <br>
                            We are accountable for our actions, and we learn from our mistakes by being open and honest
                        </div>
                    </div>

                </div>
            </div>
            

            <div class="col-lg-11">
                <div class="doctors-details-text">
                    <!--
                   <p>
                   </p>
                -->
                </div>
            </div>
        </div>
    </div>
    <div class="doctors-details-shape">
        <img src="{{asset('img/doctors/doctors-shape4.png')}}" alt="Images">
    </div>
</div>
<!-- Doctors Details Area End -->
@endsection