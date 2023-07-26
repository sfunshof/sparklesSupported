@extends('layouts.layout')
@section('title')
    Our Mission
@endsection
@section('contents')

 <!-- Inner Banner -->
 <div class="inner-banner inner-bg2">
    <div class="container">
        <div class="inner-title">
            <h3>Our Mission</h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Our Mission</li>
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
                    <img src="{{asset('img/custom/about/ourmission.jpg')}}" alt="Images">
                </div>
            </div>

            <div class="col-lg-7">
                <div class="about-content">
                    <div class="section-title">
                        <h2>Our Mission</h2>
                    </div>
                    Sparkles Healthcare will:
                    <div class="about-card">
                        <i class='flaticon-one bg-one'></i>
                        <div class="content">
                            Recognise the service users need for personal fulfilment and aim to offer personalised activities to meet the need of the service users.  
                        </div>
                    </div>

                    <div class="about-card">
                        <i class='flaticon-two-fingers bg-two'></i>
                        <div class="content">
                            Ensure that everyone who visit, everyone who are supported by and everyone that works 
                            with us will be treated with respect at all times  
                        </div>
                    </div>

                    <div class="about-card">
                        <i class='flaticon-three bg-three'></i>
                        <div class="content">
                            Aim to deliver highly skilled care that will help the people we support 
                            to achieve their best state of health and well – being
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-11">
                <div class="doctors-details-text">
                    <p>
                        Respect the citizenship and human rights of everyone who are supported by us and work for us
                     </p>
                     <p>
                        Ensure that the right of independence will be encouraged and respected for all service users
                     </p>
                     <p>
                        Ensure the uniqueness of service users and visitors will be acknowledged and everyone will be 
                        treated with respect and dignity always
                     </p>
                     <p>
                        Will ensure that all information relating to service users, the service user’s requirement 
                        for privacy will be treated in a confidential manner at all times
                     </p>
                     <p>
                        Recognise the service users need for personal fulfilment and aim to offer personalised 
                        activities to meet the need of the service users
                     </p>
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