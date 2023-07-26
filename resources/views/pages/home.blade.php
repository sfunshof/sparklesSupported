       @extends('layouts.layout')
       @section('title')
           Home
       @endsection
       @section('contents')
       
      
       <!-- Banner Area -->
        <div class="banner-area banner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="banner-content">
                             <!--  
                            <span>The Home of Your Hope</span>
                             -->
                            <h1 style="text-shadow: 0 2px 0 black;">
                                We Care so <br>
                                You can Sparkle 
                            </h1>
                            <!--
                            <p>Get your appointment through online and remain safe at your home. Because your safety is our first priority.</p>
                            -->
                        </div>
                    </div>
                </div>
            </div>
         </div>
        
        <!-- Banner Area End -->

        <!-- Home Initial Area -->
        <section class="service-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Welcome to Sparkles Healthcare</h2>
                    <div class="section-icon">
                        <div class="icon">
                            <i class="flaticon-dna"></i>
                        </div>
                    </div>
                    <p>
                        At Sparkles Healthcare we provide and deliver high quality,
                         bespoke personalised holistic domiciliary care in the Surrey area.
                        We specialise in providing elderly care and well being care supported 
                        with high quality care for service users living in their own homes. 
                        
                        
                    </p>
                </div>
                <div class="section-title text-center">
                    <h2> </h2>
                    <!--
                    <div class="section-icon">
                        <div class="icon">
                            <i class="flaticon-dna"></i>
                        </div>
                    </div>
                    -->
                </div>   

                <div class="row align-bottom">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <!--
                            <img src="{{asset('img/about-img/about-img.png')}}" alt="Images">
                            -->
                            <img src="{{asset('img/custom/home.jpg')}}" alt="Images">
                        </div>
                    </div>

                    <div class="col-lg-6 ">
                        <div class="about-content">
                            <div class="section-title">
                                <h4 class="text-center">We will add sparkles to your life</h4>
                                 <p>
                                   Our care workers are kind, compassionate and caring
                                   individuals who pay great attention to every details 
                                   about your care.
                                 </P>
                                 <p>
                                   We will put you at the center of the care we provide
                                   and  ensure that every  of your needs are met
                                 </p>   
                                 <p>
                                    We provide great care in partnership with service users,
                                     their care workers and relatives, respecting and putting 
                                     into consideration their choices, diverse needs and 
                                     preferences
                                 </p>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-dots-2">
                <img src="{{asset('img/services/service-dots-2.png')}}" alt="Images">
            </div>
        </section>   
                   
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
                        We provide excellent services for your ultimate good health. 
                        These will enhance and sustain your overall quality of life and 
                        enable service users to stay in their own home for as long as possible. 
                    </p>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-card">
                            <a href="services/personal"><img src="{{asset('img/custom/services/personal_small.jpg')}}" alt="Images"></a>
                            <div class="service-content">
                                <h3><a href="{{url('services/personal')}}"> <span class="colorbkgrd">  Personal Care  </span>  </a></h3>
                                <div class="content">
                                    <a href="{{ url('services/personal')}}">
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
                                <h3><a href="{{ url('services/specialist')}}"><span class="colorbkgrd"> Specialist Care </span>   </a></h3>
                                <div class="content">
                                    <a href="{{ url('services/specialist')}}">
                                         <p>
                                            We provide support to people who need care  
                                            as a result of special medical conditions
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
                                <h3><a href="{{ url('services/dementia')}}"> <span class="colorbkgrd">  Dementia </span>   </a></h3>
                                <div class="content">
                                    <a href="{{url('services/dementia')}}">
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
                                <h3><a href="{{ url('services/respite')}}"> <span class="colorbkgrd">  Respite Care </span>   </a></h3>
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
                <div class="col-lg-12">
                    <div class="case-study-more">
                        <a href="{{url('services/services_all')}}" class="default-btn-two">
                            Explore our Home care services
                        </a>
                    </div>
                </div>

            </div>
           <!--
            <div class="service-dots">
                <img src="{{ asset('img/services/service-dots.png')}}" alt="">
            </div>
        -->
        </section>
        <!-- Service Area End -->
         
           <!-- Recruitment Area --> 
           <div class="about-area pt-100 pb-70">
            <div class="container">
                <div class="row align-top">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <h2>Joining our team</h2>
                                <p>
                                  If you are a care worker looking for a simulating opportunity where every
                                  day is different and you love to make positive impact in people's lives. 
                                  We would like to hear from you. 
                                </p>
                                 <!--
                                <div class="about-btn">
                                    <a href="#" class="default-btn">Explore More</a>
                                </div>
                                -->
                                <div class="case-study-more">
                                   <a href="{{url('recruit')}}" class="default-btn-two">
                                       Explore more
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img">
                            <!--
                            <img src="{{asset('img/about-img/about-img.png')}}" alt="Images">
                            -->
                            
                            <img src="{{asset('img/custom/recruit.jpg')}}" alt="Images">
                            
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- End Recruitment Area -->
        

        <!-- Contact Area -->
        <div class="emergency-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="emergency-content">
                            <h2>Get <b>Experienced</b> Care 24/7</h2>
                            <p>
                                We are always at your side. We are 24 hours available for you in emergency situation.
                            </p>
                            <div class="emergency-icon-content">
                                <i class="flaticon-24-hours"></i>
                                <h3> <a href="tel:+4407868083085">078-680-83085</a> </h3>
                            </div>
                            <br>
                        
                                <div class="about-btn">
                                    <a href="{{url('about/about_all')}}" class="default-btn-two">Explore More</a>
                                </div>
                               
                                
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="emergency-shape">
                <img src="{{asset('img/emergency/emergency-shape.png')}}" alt="Images">
            </div>
        </div>
        <!-- Contact Area End -->

        @endsection