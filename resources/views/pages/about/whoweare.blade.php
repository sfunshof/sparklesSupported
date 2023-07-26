@extends('layouts.layout')
@section('title')
    Who we are
@endsection
@section('contents')

 <!-- Inner Banner -->
 <div class="inner-banner inner-bg1">
    <div class="container">
        <div class="inner-title">
            <h3>Who we are</h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Who we are</li>
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
                    <img src="{{asset('img/doctors/doctors-details.png')}}" alt="Images">
                </div>
            </div>

            <div class="col-lg-5">
                <div class="doctors-details-content  ">
                    <h3>Who we are</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque a dolor laoreet,
                        pretium eros commodo, molestie erat. Nullam convallis et odio feugiat egestas. Phasellus
                        nec tellus nisi. Cras bibendum, neque eget finibus luctus, nibh ligula ullamcorper dui, 
                        eu aliquet augue lacus nec lorem. Vivamus dictum nisi dictum ipsum dapibus, sit amet 
                        gravida nulla consequat. Donec eget neque ac nisi viverra commodo. Phasellus fermentum
                        urna sollicitudin finibus viverra. Duis ac ex risus. Morbi egestas arcu dapibus
                     </p>
                </div>
            </div>
            <div class="col-lg-1"> </div>

            <div class="col-lg-11">
                <div class="doctors-details-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque a dolor laoreet,
                        pretium eros commodo, molestie erat. Nullam convallis et odio feugiat egestas. Phasellus
                        nec tellus nisi. Cras bibendum, neque eget finibus luctus, nibh ligula ullamcorper dui, 
                        eu aliquet augue lacus nec lorem. Vivamus dictum nisi dictum ipsum dapibus, sit amet 
                        gravida nulla consequat. Donec eget neque ac nisi viverra commodo. Phasellus fermentum
                        urna sollicitudin finibus viverra. Duis ac ex risus. Morbi egestas arcu dapibus
                     </p>
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