@extends('layouts.layout')
@section('title')
    Support &amp; Companionship
@endsection
@section('contents')
<!-- Inner Banner -->
 <div class="inner-banner inner-bg11">
    <div class="container">
        <div class="inner-title">
            <h3>Support &amp; Companionship</h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Support &amp; Companionship</li>
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

<!-- Support Details Area -->
<<div class="doctors-details-area pt-100 pb-70">
    <div class="container">
        <div class="row align-top">
            <div class="col-lg-5">
                <div class="doctors-details-img">
                    <img src="{{asset('img/custom/services/support_large.jpg')}}" alt="Images">
                </div>
            </div>

            <div class="col-lg-5">
                <div class="doctors-details-content">
                    <h3>Companionship</h3>
                    
                    <p>
                        Our companionship services include:
                     <ul class="doctors-details-list">
                        <li>
                            Company whilst doing hobbies
                        </li>
                        <li>
                            Escorting on journeys and support with using public transport.
                        </li>  
                        <li>
                            Social interaction and community activities
                        </li>   
                        <li>
                            Help with everyday tasks, shopping for food or clothes
                        </li>
                        <li>
                            Food preparation and light house keeping
                        </li>  
                        <li>
                            A friend to listen and talk to
                        </li>         
                      </ul>
                    </p>
                </div>
            </div>

            <div class="col-lg-10">
                <div class="doctors-details-text">

                    <p>
                        <h5> Why companionship is important? </h5>
                       <ul class="doctors-details-list">
                          <li>
                              Companionship is known to have huge benefits to the physical health 
                              and wellbeing of a person. Loneliness and isolation in the elderly can 
                              be prevented by regular social interaction.
                          </li>
                          <li>
                              Sparkles Healthcare recognises the importance of companionship, the need to carry out 
                              daily activity and also have a trusted, caring and friendly face to interact with. 
                          </li>  
                          <li>
                              This can really improve the mood of individuals and can put them in a happier place. 
                          </li>      
                        </ul>
                    </p>



                   <p>
                      <h5> Benefits of support and companionship? </h5>
                      At Sparkles Healthcare, our support staff are always ready to support you whenever you 
                      need. Companionship can help with getting you out in the community which can aid 
                      your independence and boost your self esteem.
                    </p>
                    <p>
                        Sparkles Healthcare provides trusted reliable companionship and support services to
                         many families like yours.<br>
                        Services are tailored around your need to provide a person centred support, great 
                        companionship, a friend that can listen to you and you can share with, 
                        help with household tasks and routines. 
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
<!-- Support End -->
@endsection   