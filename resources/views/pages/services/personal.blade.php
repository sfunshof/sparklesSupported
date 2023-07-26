@extends('layouts.layout')
@section('title')
    Personal Care
@endsection
@section('contents')
<!-- Inner Banner -->
 <div class="inner-banner inner-bg11">
    <div class="container">
        <div class="inner-title">
            <h3>Personal Care</h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Personal Care</li>
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

<!-- Personal Details Area -->
<div class="doctors-details-area pt-100 pb-70">
    <div class="container">
        <div class="row align-top">
            <div class="col-lg-5">
                <div class="doctors-details-img">
                    <img src="{{asset('img/custom/services/personal_large.jpg')}}" alt="Images">
                </div>
            </div>

            <div class="col-lg-5">
                <div class="doctors-details-content">
                    <h3>Personal care</h3>
                    <ul class="doctors-details-list">
                        <li>
                             Personal care can be sensitive and can sometimes make you feel uncomfortable. 
                             Help with personal care are delivered by our trained caring Care workers who will s
                             how sensitivity and kindness, respecting your right privacy and dignity every 
                             step of the way.
                        </li>
                        <li>
                             Our professional Care workers builds a great rapport with our service users to 
                             ensure that personal care is 100% personalised and person centred. 
                             We know that everyone’s needs are different that is why we provide
                              personalised care unique to each person.
                        </li>      
                    </ul>
                </div>
            </div>

            <div class="col-lg-10">
                <div class="doctors-details-text">
                  <p>
                    Our care and support are flexible taking into account when circumstances change due to 
                    frailties or health conditions. We tailor our personal care services to suit and meet 
                    your needs. 
                  </p>
                  <p>  
                     We can support you or your loved ones with the following personal care:
                    
                    <ul class="doctors-details-list">
                        <li> Bathing &amp; showering assistance </li>
                        <li> Washing &amp; bed baths </li>
                        <li> Taking medication </li>
                        <li> Personal grooming </li>
                        <li> Toilet assistance &amp; incontinence care </li>
                        <li> Oral hygiene </li>
                        <li> Assistance with meal taking </li>
                    </ul>
                   </p>
                   <p>
                    Our Care workers are effectively trained in the best safety techniques to help
                     and make Service users comfortable while giving personal care is given. 
                     All our Care workers undergo a induction training with regular refresher and 
                     quality checks to make sure that we consistently deliver high quality care. 
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

<!-- personal End -->
@endsection   