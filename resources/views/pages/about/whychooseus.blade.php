@extends('layouts.layout')
@section('title')
    Why choose us
@endsection
@section('contents')

 <!-- Inner Banner -->
 <div class="inner-banner inner-bg2">
    <div class="container">
        <div class="inner-title">
            <h3>Why choose us</h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Why choose us</li>
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
                    <img src="{{asset('img/custom/about/whychooseus.jpg')}}" alt="Images">
                </div>
            </div>

            <div class="col-lg-7">
                <div class="about-content">
                    <div class="section-title">
                        <h2>Why choose us</h2>
                    </div>
                    <div class="about-card">
                        <i class='flaticon-one bg-one'></i>
                        <div class="content">
                            We provide service users a secured, respectful, constant high quality 
                            care in the comfort of their homes at all times taking into account 
                            that the right of the service users are most important.     
                        </div>
                    </div>

                    <div class="about-card">
                        <i class='flaticon-two-fingers bg-two'></i>
                        <div class="content">
                            Our  policies and procedures are written in compliance with the Health 
                            and Social Care Act 2008, Care Act 2014 and the Care Quality Commission’s 
                            essential standards of Quality and Safety
                        </div>
                    </div>
                    
                    <div class="about-card">
                        <i class='flaticon-three bg-three'></i>
                        <div class="content">
                            At Sparkles Healthcare we are dedicated to fulfilling the requirements of 
                            the Health and Social Care Act 2008. We are registered and regulated by 
                            the Care Quality Commission (CQC)
                        </div>
                    </div>

                </div>
            </div>
        

            <div class="col-lg-11">
                <div class="doctors-details-text">
                    <p>
                        Our registered Manager has over 15 years’ experience in the health care sector, 
                        also a trained nutritionist with great understanding of nutrition and hydration, 
                        she has a diverse understanding of care sector. <br>
                        She is passionate about elderly care, monitoring the quality of care our service 
                        users receive and professionally accountable for its delivery.
                    </p>   
                    <p>
                        Our deputy Nurse Manager has worked as a District Nurse for over 10 years, 
                        making a difference every day to the lives of the people she visits at home. <br> 
                        Assessing the healthcare needs of patients and families making sure that 
                        they have responded well to treatment and calling in other services when 
                        help is needed, constantly providing increasingly complex care and 
                        support for service users and family members. 
                    </p>
                                         
                        
                      <p>
                        Our dedicated care staff are kind, caring and compassionate people who 
                        take pride in their role and always willing to help with any queries 
                        you may have. 
                      </p>
                      <p>
                        Our dedicated care staff are kind, caring and compassionate people who take pride in 
                        their role and always willing to help with any queries you may have. 
                        
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