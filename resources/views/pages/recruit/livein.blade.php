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
                        <h2>Live-in Carers</h2>
                       <p>
                           A job that fits around you and your lifestyle. Work as a live-in carer and earn 
                           between £525 to £650 per week! 
                       </p>

                       <p>
                          <strong> The Role </strong> <br>
                         We don’t just deliver good care at Helping Hands, we deliver amazing care across 
                         in The Mole Valley and Reigate and Banstead areas.
                       </p> 
                       <p>
                          We genuinely believe that care is one of the most amazing things you can provide 
                          for another person. 
                          Care is making sure their tea is made just as they like it. 
                          Care is taking the time to sit and listen. Care is making the effort to go the 
                          extra mile. Care is providing people with peace, comfort and happiness in their 
                          own home.
                       </p> 
                        <p>
                           The customers our carers work with every day have a diverse range of care needs, 
                           personalities and lifestyles. We’re looking for someone just like you, to provide 
                           the award-winning care we pride ourselves on, by living in your customers home, 
                           helping to maintain their independence and enriching their lives.
                        </p>
                         <p>
                             You might be a carer already, may have cared for a family member or friend or 
                             have worked for a care agency before. 
                             Our exprience as a live-in care provider has shown that previous care 
                             experience simply isn’t necessary to become an incredible carer.
                         </p>    
                          <p>
                            We  Will provide you with completely free, award-winning carer training a
                            which will set you up to be the best carer you can possibly be. 
                            After being carefully matched with a customer, then you’ll be ready to go and 
                            make a huge difference to someone’s life.
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