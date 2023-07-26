@extends('layouts.layout')
@section('title')
    Elderly Care
@endsection
@section('contents')
<!-- Inner Banner -->
 <div class="inner-banner inner-bg11">
    <div class="container">
        <div class="inner-title">
            <h3>Elderly Care</h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Elderly Care</li>
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

<!-- Elder Details Area -->
<div class="doctors-details-area pt-100 pb-70">
    <div class="container">
        <div class="row align-top">
            <div class="col-lg-5">
                <div class="doctors-details-img">
                    <img src="{{asset('img/custom/services/elderly_large.jpg')}}" alt="Images">
                </div>
            </div>

            <div class="col-lg-5">
                <div class="doctors-details-content">
                    <h3>Elderly Care</h3>
                    <p>
                        We maintain confidentiality privacy and dignity at the same time promoting independence and 
                        physical well-being for all service users. <br>  
                        Our specially trained and caring team of carers provide support with a wide-range of tasks, 
                        including

                     <ul class="doctors-details-list">
                        <li>
                           Personal care
                        </li>
                        <li>
                            Shopping
                        </li>  
                        <li>
                          House work
                        </li>    
                        <li>
                            Cooking meals
                        </li>   
                      </ul>
                    </p> 
                </div>
            </div>

            <div class="col-lg-10">
                <div class="doctors-details-text">
                  <p>
                    Either you or a family member requires assistance in the morning and the evening, 
                    a bit of extra help in the house, or a 24 – hour support to continue living in your 
                    own home, Sparkles Healthcare will provide you with the right care. 
                  </p>
                   <p>
                      Our range of services can support the elderly with daily tasks that might be difficult
                       to manage. Daily activities like cooking, personal care, shopping will easily be
                       managed for you by our dedicated carers. 
                   </p>
                   <p>
                      We provide services that are flexible, reliable and centred around our clients’ needs. 
                      Our consistent high standards of care are delivered by selections of dedicated and 
                      compassionate team of people that are selected to match our clients’ profile which 
                      gives room for genuine friendship to blossom between client and carers.
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
<!-- Elderly End -->
@endsection   