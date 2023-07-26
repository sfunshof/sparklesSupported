@extends('layouts.layout')
@section('title')
    Work for us
@endsection
@section('contents')

 <!-- Inner Banner -->
 <div class="inner-banner inner-bg2">
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
     <!-- Details Area -->
     <div class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="about-content">
                        <div class="section-title">
                            <h2>Care Coordinators</h2>
                            <p>
                                A job that provides excellent work - life balance and pays between 
                                £20,000 to £22,000 p.a. 
                            </p>
                            <p>
                               This is a full time post that requires someone with exceptional communication
                               and organisational skills.
                            </p>
                            <p>    
                               Experience within the care industry is essential as well as knowledge of 
                               scheduling software such as Homecare Care Roster etc.
                            </p>
                            <p>
                               We do require a candidate that has experience of co-ordinating homecare <br> 
                            
                            The Focus of the role is to:
                            <ul>
                                <li>
                                     Accept, allocate and process new referrals for care and support promptly
                                </li>    
                                <li> 
                                     Process changes to customers care and support plans
                                </li>
                                <li>    
                                      Make sure there is sufficient cover to deliver care and support on time
                                </li>
                                <li>     
                                      Monitor the allocation of carers to maximise efficiency whilst 
                                      supporting them through the use of IT systems
                                </li>
                                <li>      
                                      Take part in the out of hours emergency on-call rota. This will only
                                       be required after the post holder has received full training and 
                                       has been assessed as competent to provide appropriate guidance and 
                                       advice in emergency situations
                                </li>     
                                <li>
                                       Work with the office team to maintain up to date electronic and 
                                      handwritten records.
                                </li>
                                <li>
                                       Work with the Care team and other health and social care professionals 
                                       to deliver high quality homecare services and to make improvements 
                                       where necessary
                                </li>
                            </ul>      
                            </p> 
                        </div>
                        <div class="about-btn">
                            Looks interesting?
                            <a href="{{ url('recruit/applyform')}}" class="default-btn-two">Apply now</a>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>
    <!-- End Details Areas ==>
    

@endsection