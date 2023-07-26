@extends('layouts.layout')
@section('title')
    Work for us
@endsection
@section('contents')

 <!-- Inner Banner -->
 <div class="inner-banner inner-bg12">
    <div class="container">
        <div class="inner-title">
            <h3>Work for us </h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Work for us</li>
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

  <!-- Service Area -->
  <section class="service-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Join our team</h2>
            <div class="section-icon">
                <div class="icon">
                    <i class="flaticon-dna"></i>
                </div>
            </div>
            <p>
                Sparkles Healthcare is always looking for experienced care workers. So, if you are
                looking for a new career or a different opportunity, we are keen to hear from you
            </p>
            <p>
               We offer excellent top pay, flexible working conditions and benefits such as work-life balance
            </p>
        </div>
    </div>   
</section>
<!-- Service Area End -->

<!-- services Area 2 -->
<section class="service-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Competitive Benefits </h2>
            <div class="section-icon">
                <div class="icon">
                    <i class="flaticon-dna"></i>
                </div>
            </div>
        </div>
        <div class="row pt-45">
            <div class="col-lg-3 col-md-6">
                <div  style="pointer-events:none;"  class="service-item service-item-bg1">
                    <a href="#" class="service-item-icon">
                        <i class="flaticon-profits"></i>
                    </a>
                    <p>
                        Top pay rates
                    </p>
                   
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div style="pointer-events:none;"  class="service-item service-item-bg2">
                    <a href="#" class="service-item-icon">
                        <i class="flaticon-flexible"></i>
                    </a>
                    <p>
                      Flexible working
                    </p> 
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div  style="pointer-events:none;"  class="service-item service-item-bg3">
                    <a href="#" class="service-item-icon">
                        <i class="flaticon-teaching"></i>
                    </a>
                    <p>
                        Vocational training
                    </p>
                 </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div style="pointer-events:none;" class="service-item service-item-bg4">
                    <a href="#" class="service-item-icon">
                        <i class="flaticon-piggy-bank"></i>
                    </a>
                    <p>
                        Pension scheme
                    </p>   
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div style="pointer-events:none;" class="service-item service-item-bg5">
                    <a href="#" class="service-item-icon">
                        <i class="flaticon-pound"></i>
                    </a>
                    <p>
                       Out of hours allowance
                    </p>  
                        
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div style="pointer-events:none;" class="service-item service-item-bg6">
                    <a href="#" class="service-item-icon">
                        <i class="flaticon-pound-1"></i>
                    </a>
                   <p>
                       Travel allowance
                   </p>   
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div style="pointer-events:none;" class="service-item service-item-bg5">
                    <a href="#" class="service-item-icon">
                        <i class="flaticon-money"></i>
                    </a>
                   <p>
                       Paid Holiday
                   </p>   
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div style="pointer-events:none;" class="service-item service-item-bg6">
                    <a href="#" class="service-item-icon">
                        <i class="flaticon-growth"></i>
                    </a>
                     <p>
                        Career prospects
                     </p>   
                </div>
            </div>


         </div>
    </div>
    <!--
    <div class="service-dots-2">
        <img src="{{asset('img/services/service-dots-2.png')}}" alt="Images">
    </div>
    -->
</section>
<!-- Service Area2 End -->





<!-- Doctors Area -->
<div class="doctors-area ptb-100">
    <div class="container">
        <div class="section-title text-center">
            <h2>View our current openings</h2>
            <div class="section-icon">
                <div class="icon">
                    <i class="flaticon-dna"></i>
                </div>
            </div>
         </div>
        
        <div class="tab_content current active pt-45">
            <div class="tabs_item current">
                <div class="doctor-tab-item">
                    <div class="row">
                        
                        <div class="col-lg-4 col-md-6">
                            <div class="doctors-item">
                                <div class="doctors-img">
                                    <img src="{{asset('img/custom/recruit/care-worker.jpg')}}" alt="Images">
                                </div>
                                <div class="content">
                                    <h3><a href="doctors-details.html">Care Assistants</a></h3>
                                    <div class="social-link">
                                        <a href="{{url('recruit/workers')}}" class="default-btn-two">Details</a>
                                    </div>
                                </div> 
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="doctors-item">
                                <div class="doctors-img">
                                    <img src="{{asset('img/custom/recruit/live-in.jpg')}}" alt="Images">
                                </div>
                                <div class="content">
                                    <h3><a href="doctors-details.html">Live in carers</a></h3>
                                    <div class="social-link">
                                        <a href="{{ url('recruit/livein')}}" class="default-btn-two">Details</a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                       
                        <div class="col-lg-4 col-md-6">
                            <div class="doctors-item">
                                <div class="doctors-img">
                                    <img src="{{asset('img/custom/recruit/care-coordinator.jpg')}}" alt="Images">
                                </div>
                                <div class="content">
                                    <h3><a href="doctors-details.html">Care coordinators </a></h3>
                                    <div class="social-link">
                                        <a href="{{ url('recruit/coordinator')}}" class="default-btn-two">Details</a>
                                    </div>
                                </div> 
                            </div>
                        </div>

                    </div>   
                </div>
            </div>
        </div>   
        

    </div>      
</div>
<!-- Doctors Area End -->

@endsection