@extends('layouts.layout')
@section('title')
    Areas we cover
@endsection
@section('contents')

 <!-- Inner Banner -->
 <div class="inner-banner inner-bg2">
    <div class="container">
        <div class="inner-title">
            <h3>Areas we cover</h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Areas we cover</li>
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


 <!-- Doctors Details Area -->
 <div class="doctors-details-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-top">
            
            <div class="col-lg-5">
                <div class="doctors-details-img">
                    <img src="{{asset('img/custom/about/areaswecover.jpg')}}" alt="Images">
                </div>
            </div>

            <div class="col-lg-7">
                <div class="about-content">
                    <div class="section-title">
                        <h2>Areas we cover</h2>
                    </div>
                    Sparkles healthcare care workers are hand-picked, vetted and offer exceptional
                    homecare services to service users in these areas
                    <div class="about-card">
                        <i class='flaticon-map bg-one'></i>
                        <div class="content">
                            Leatherhead which is where we are based and its surronding areas. <br> 
                            Its borough,  which is The Mole Valley region and also Reigate
                            and Banstead  <br>
                            and different areas of  Surrey county council
                        </div>
                    </div>
                    <div class="col-lg-11">
                        <div class="doctors-details-text">
                            <p> 
                                Please <a href="{{ url('contact')}}">  contact  </a> our friendly team today for more details 
                             
                            </p>  
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <div class="doctors-details-shape">
        <img src="{{asset('img/doctors/doctors-shape4.png')}}" alt="Images">
    </div>
</div>

<!-- Doctors Details Area End -->
@endsection