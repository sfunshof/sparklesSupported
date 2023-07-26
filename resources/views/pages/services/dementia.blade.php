@extends('layouts.layout')
@section('title')
    Dementia Support
@endsection
@section('contents')
<!-- Inner Banner -->
 <div class="inner-banner inner-bg11">
    <div class="container">
        <div class="inner-title">
            <h3>Dementia Support</h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Dementia Support</li>
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

<!-- Dementia Details Area -->
<<div class="doctors-details-area pt-100 pb-70">
    <div class="container">
        <div class="row align-top">
            <div class="col-lg-5">
                <div class="doctors-details-img">
                    <img src="{{asset('img/custom/services/dementia_large.jpg')}}" alt="Images">
                </div>
            </div>

            <div class="col-lg-5">
                <div class="doctors-details-content">
                    <h3>Dementia Support</h3>
                    <p>
                        <h5> We understand dementia: </h5> <br>
                        A stable company, a friendly environment and consistent routines are what makes up a
                         good dementia care. These are confirmed to help people with Alzheimer’s or other
                        dementia to manage their condition. 
                    </p>   
                    <p>
                        Our support for demential includes:   
                        <ul class="doctors-details-list">
                           <li>
                            Specialist Alzheimer’s care from Sparkles Healthcare
                           </li>
                        <li>
                            Assisting you to remain in your own home
                        </li>  
                        <li>
                            High quality specialist care
                        </li>      
                      </ul>
                    </p>
                </div>
            </div>

            <div class="col-lg-10">
                <div class="doctors-details-text">
                    <p>
                        At Sparkles Healthcare, our reliable and caring team will make sure that you are well 
                        informed of any modification that will make life easier for you and will ensure that 
                        your home remains safe and comfortable.
                     </p>
                     <p>   
                         Many of our clients are living with Dementia, we continue to work with clients 
                         and their relatives to provide respite and emotional support,
                     </p>    
                    <p>
                        We also work with Service users and their loved ones to provide emotional support
                         and respite, to access local services and to adapt their care package to ensure
                        changing needs are anticipated and always met.
                    </p>
                    <p>  
                        Many of our service users are people with dementia who continue to live independently
                         at home. We also have official Dementia Champions who have been trained by Alzheimer’s 
                         Society to deliver free information and awareness sessions to businesses and 
                         individuals across the local community, helping more people understand what it 
                         is like living with dementia.
                    </p>
                    <p>   
                         We understand, we care and we can help by supporting you to remain living 
                         independently in the comfort of your own home.
                    </p>  
                    
                    <p>
                        <h5> What is Alzheimer’s disease? </h5>
                         Alzheimer’s disease is a physical disease that affects the brain. The nerve cells 
                         are disrupted by ‘plaques’ and ‘tangles’ that build up inside the brain. The 
                         communication between the nerve cells changes and messages don’t travel around as 
                         well as they should. Eventually the cells die. 
                    </p>
                    <p>    
                        Alzheimer’s disease is a progressive condition and symptoms develop over s
                        everal years which can include confusion, problems with speech, personality 
                        changes and difficulty making decisions.
                    </p>
                    <p>   
                        <h5>  What is dementia? </h5>
                           Dementia is caused by different diseases that affect the brain and 
                           Alzheimer’s disease is the most common of these. Dementia is not a disease 
                           in its own right and is actually the name for a group of symptoms that 
                           commonly include problems with memory, thinking, problem solving, 
                           language and perception.
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
<!-- Dementia End -->
@endsection   