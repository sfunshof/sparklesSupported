@extends('layouts.layout')
@section('title')
    About Us
@endsection
@section('contents')
<!-- Inner Banner -->
 <div class="inner-banner inner-bg2">
    <div class="container">
        <div class="inner-title">
            <h3>About Us</h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>About Us</li>
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
            <h2>About us</h2>
            <div class="section-icon">
                <div class="icon">
                    <i class="flaticon-dna"></i>
                </div>
            </div>
            <p>
                We provide great care in partnership with service users, their careers and relatives, 
                respecting and putting into consideration their choices, diverse needs and preferences.
            </p>
            <p>   
                It is standard practice for a member of our management team to visit and access each service 
                user before commencing the service in order for us to understand the individual situation and
                 then provide the best package to meet their needs accordingly.
            </p>
        </div>
        <div class="row pt-45">
         <!--   
            <div class="col-lg-4 col-md-6">
                 <div class="service-item service-item-bg1">
                    <a href="{{ url('about/whoweare')}}" class="service-item-icon">
                        <i class="flaticon-doctor"></i>
                    </a>
                    <h3>
                        <a href="{{ url('about/whoweare')}}"> Who we are</a>
                    </h3>
                    <p>We provide  wide range of medical counselling by the professional doctor & therapist.</p>
                    <div class="service-shape-1">
                        <img src="{{ asset('img/services/service-shape1.png')}}" alt="Images">
                    </div>
                    <div class="service-shape-2">
                        <img src="{{ asset('img/services/service-shape2.png')}}" alt="Images">
                    </div>
                </div>
            </div>
        -->
            <div class="col-lg-4 col-md-6">
                <div class="service-item service-item-bg1">
                    <a href="{{ url('about/whychooseus') }}" class="service-item-icon">
                        <i class="flaticon-nurse"></i>
                    </a>
                    <h3>
                        <a href="{{ url('about/whychooseus') }}"> Why choose us</a>
                    </h3>
                    <a href="{{ url('about/whychooseus') }}">  
                        <p>
                            Our senior managers are professionals with many 
                            years of experience in the care industry
                        </p>
                        <p>
                            &nbsp;
                        </p>   
                        <div class="service-shape-1">
                             <img src="{{asset('img/services/service-shape1.png')}}" alt="Images">
                        </div>
                        <div class="service-shape-2">
                            <img src="{{asset('img/services/service-shape2.png')}}" alt="Images">
                         </div>
                    </a>
                </div>
            </div>

            
            <div class="col-lg-4 col-md-6">
                <div class="service-item service-item-bg1">
                    <a href="{{ url('about/faq') }}" class="service-item-icon">
                        <i class="flaticon-faq"></i>
                    </a>
                    <h3>
                        <a href="{{ url('about/faq') }}"> FAQ</a>
                    </h3>
                    <a href="{{ url('about/faq') }}">
                        <p>
                           We provide you with some responses to enquiries made for 
                           your loved ones
                        </p>
                        <p>
                            <br>
                        </p>    
                    
                         <div class="service-shape-1">
                             <img src="{{ asset('img/services/service-shape1.png')}}" alt="Images">
                        </div>
                        <div class="service-shape-2">
                            <img src="{{asset('img/services/service-shape2.png')}}" alt="Images">
                         </div>
                    </a>    
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item service-item-bg1">
                    <a href="{{ url('about/ourmission') }}" class="service-item-icon">
                        <i class="flaticon-medal"></i>
                    </a>
                    <h3>
                        <a href="{{ url('about/ourmission') }}"> Our Mission</a>
                    </h3>
                    <a href="{{ url('about/ourmission') }}">
                        <p>
                        We aim to deliver highly skilled care that will help the people we support
                         achieve their best state of health.
                        </p>
                        <div class="service-shape-1">
                             <img src="{{ asset('img/services/service-shape1.png')}}" alt="Images">
                        </div>
                        <div class="service-shape-2">
                            <img src="{{ asset('img/services/service-shape2.png')}}" alt="Images">
                        </div>
                    </a>   
                </div>
            </div>
          
            <div class="col-lg-4 col-md-6">
                <div class="service-item service-item-bg1">
                    <a href="{{ url('about/ourvalues') }}" class="service-item-icon">
                        <i class="flaticon-old"></i>
                    </a>
                    <h3>
                        <a href="{{ url('about/ourvalues') }}">Our Values </a>
                    </h3>
                    <a href="{{ url('about/ourvalues') }}">
                        <p>
                           We treat people with love and care <br>
                           We respect people’s culture  <br>
                           We promote privacy and dignity
                        </p>
                       <div class="service-shape-1">
                            <img src="{{ asset('img/services/service-shape1.png')}}" alt="Images">
                        </div>
                        <div class="service-shape-2">
                            <img src="{{ asset('img/services/service-shape2.png')}}" alt="Images">
                        </div>
                    </a>    
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="service-item service-item-bg1">
                    <a href="{{ url('about/ourvalues') }}" class="service-item-icon">
                        <i class="flaticon-map-1"></i>
                    </a>
                    <h3>
                        <a href="{{ url('about/areaswecover') }}">Areas we cover </a>
                    </h3>
                    <a href="{{ url('about/areaswecover') }}">
                        <p>
                            We cover leatherhead and different areas in Surrey
                        </p>
                        <p>
                            &nbsp;
                        </p>   

                        <div class="service-shape-1">
                            <img src="{{ asset('img/services/service-shape1.png')}}" alt="Images">
                        </div>
                        <div class="service-shape-2">
                            <img src="{{ asset('img/services/service-shape2.png')}}" alt="Images">
                        </div>
                    </a>    
                </div>
            </div>


        </div>
    </div>
    
    <div class="service-dots-2">
        <img src="{{asset('img/services/service-dots-2.png')}}" alt="Images">
    </div>

</section>
<!-- Service Area End -->
            
      

@endsection   