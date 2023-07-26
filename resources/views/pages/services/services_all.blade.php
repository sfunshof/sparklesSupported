@extends('layouts.layout')
@section('title')
    Services
@endsection
@section('contents')
<!-- Inner Banner -->
 <div class="inner-banner inner-bg11">
    <div class="container">
        <div class="inner-title">
            <h3>Services</h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Services</li>
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
            <h2>Services That We Provide</h2>
            <div class="section-icon">
                <div class="icon">
                    <i class="flaticon-dna"></i>
                </div>
            </div>
            <p>
                We provide excellent services for your ultimate good health. Here some of the services are included
                for your better understand that we are always at your side.
            </p>
        </div>
        <!-- start of row -->
        <div class="row pt-45">
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <a href="services/personal"><img src="{{asset('img/custom/services/personal_small.jpg')}}" alt="Images"></a>
                    <div class="service-content">
                        <h3><a href="{{ url('services/personal')}}"><span class="colorbkgrd">  Personal Care </span>   </a></h3>
                        <div class="content">
                            <a href="{{url('services/personal')}}">
                                <p>
                                    We always provide personal care with kindness, dignity and great sensitivity
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="service-shape-1">
                        <img src="{{asset('img/services/service-shape1.png')}}" alt="Images">
                    </div>
                    <div class="service-shape-2">
                        <img src="{{asset('img/services/service-shape2.png')}}" alt="Images">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <a href="services/specialist"><img src="{{asset('img/custom/services/specialist_small.jpg')}}" alt="Images"></a>
                    <div class="service-content">
                        <h3><a href="{{ url('services/specialist')}}"> <span class="colorbkgrd"> Specialist Care </span>   </a></h3>
                        <div class="content">
                            <a href="{{ url('services/specialist')}}">
                                <p>
                                  We provide support to people who need care  as a result of special medical conditions
                                </p>
                            </a>       
                        </div>
                    </div>
                    <div class="service-shape-1">
                        <img src="{{asset('img/services/service-shape1.png')}}" alt="Images">
                    </div>
                    <div class="service-shape-2">
                        <img src="{{asset('img/services/service-shape2.png')}}" alt="Images">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <a href="services/dementia"><img src="{{asset('img/custom/services/dementia_small.jpg')}}" alt="Images"></a>
                    <div class="service-content">
                        <h3><a href="{{ url('services/dementia')}}"> <span class="colorbkgrd">  Dementia </span>    </a></h3>
                        <div class="content">
                            <a href="{{ url('services/dementia')}}" >
                                <p>
                                    We recognise that having Dementia can be both frightening and frustrating
                                </p>
                            </a>    
                        </div>
                    </div>
                    <div class="service-shape-1">
                        <img src="{{asset('img/services/service-shape1.png')}}" alt="Images">
                    </div>
                    <div class="service-shape-2">
                        <img src="{{asset('img/services/service-shape2.png')}}" alt="Images">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <a href="services/respite"><img src="{{asset('img/custom/services/respite_small.jpg')}}" alt="Images"></a>
                    <div class="service-content">
                        <h3><a href="{{ url('services/respite')}}"> <span class="colorbkgrd"> Respite Care </span>   </a></h3>
                        <div class="content">
                            <a href="{{ url('services/respite')}}">
                                <p>
                                    As you take care of your loved ones yourself, we will provide a shoulder to lean on
                                </p>
                            </a>   
                        </div>
                    </div>
                    <div class="service-shape-1">
                        <img src="{{asset('img/services/service-shape1.png')}}" alt="Images">
                    </div>
                    <div class="service-shape-2">
                        <img src="{{asset('img/services/service-shape2.png')}}" alt="Images">
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->
        
        <div class="row pt-45">
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <a href="services/palliative"><img src="{{asset('img/custom/services/palliative_small.jpg')}}" alt="Images"></a>
                    <div class="service-content">
                        <h3><a href="{{ url('services/palliative')}}"><span class="colorbkgrd">  Palliative Care </span>  </a></h3>
                        <div class="content">
                            <a href="{{ url('services/palliative')}}">
                                <p>
                                    This is a difficult time, so we will provide you the neccessary support
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="service-shape-1">
                        <img src="{{asset('img/services/service-shape1.png')}}" alt="Images">
                    </div>
                    <div class="service-shape-2">
                        <img src="{{asset('img/services/service-shape2.png')}}" alt="Images">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <a href="services/support"><img src="{{asset('img/custom/services/support_small.jpg')}}" alt="Images"></a>
                    <div class="service-content">
                        <h3><a href="{{ url('services/support')}}"> <span class="colorbkgrd">  Support &amp; Companionship </span>   </a></h3>
                        <div class="content">
                            <a href="{{ url('services/support')}}">
                                <p>
                                    Companionship provides huge benefits to one's physical well being  
                                </p>
                            </a>       
                        </div>
                    </div>
                    <div class="service-shape-1">
                        <img src="{{asset('img/services/service-shape1.png')}}" alt="Images">
                    </div>
                    <div class="service-shape-2">
                        <img src="{{asset('img/services/service-shape2.png')}}" alt="Images">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <a href="services/elderly"><img src="{{asset('img/custom/services/elderly_small.jpg')}}" alt="Images"></a>
                    <div class="service-content">
                        <h3><a href="{{ url('services/elderly')}}"> <span class="colorbkgrd">   Elderly Care    </span></a></h3>
                        <div class="content">
                            <a href="{{ url('services/elderly')}}">
                                <p>
                                    We provide  personalised one-to-one care support to the elderly
                                </p>
                            </a>    
                        </div>
                    </div>
                    <div class="service-shape-1">
                        <img src="{{asset('img/services/service-shape1.png')}}" alt="Images">
                    </div>
                    <div class="service-shape-2">
                        <img src="{{asset('img/services/service-shape2.png')}}" alt="Images">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <a href="services/hospital"><img src="{{asset('img/custom/services/hospital_small.jpg')}}" alt="Images"></a>
                    <div class="service-content">
                        <h3><a href="{{url('services/hospital')}}"> <span class="colorbkgrd"> Hospital to Home </span>   </a></h3>
                        <div class="content">
                            <a href="{{ url('services/hospital')}}">
                                <p>
                                   We support your recovery at home after getting discharged from the hospital
                                </p>
                            </a>   
                        </div>
                    </div>
                    <div class="service-shape-1">
                        <img src="{{asset('img/services/service-shape1.png')}}" alt="Images">
                    </div>
                    <div class="service-shape-2">
                        <img src="{{asset('img/services/service-shape2.png')}}" alt="Images">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row pt-45">
            <div class="col-lg-3 col-md-6">
                <div class="service-card">
                    <a href="services/livein"><img src="{{asset('img/custom/services/live_in_small.jpg')}}" alt="Images"></a>
                    <div class="service-content">
                        <h3><a href="{{url('services/livein')}}"> <span class="colorbkgrd"> Live in care  </span> </a></h3>
                        <div class="content">
                            <a href="{{ url('services/livein')}}">
                                <p>
                                    Get all the care you need 24/7 from the comfort of your home
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="service-shape-1">
                        <img src="{{asset('img/services/service-shape1.png')}}" alt="Images">
                    </div>
                    <div class="service-shape-2">
                        <img src="{{asset('img/services/service-shape2.png')}}" alt="Images">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service-dots">
        <img src="{{ asset('img/services/service-dots.png')}}" alt="">
    </div>
</section>
 <!-- Service Area End -->

@endsection   