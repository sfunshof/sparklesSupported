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
    
   <!-- Contact Area -->
<div class="contact-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"> </div>   
            <div class="col-lg-6"   style="padding-top:10px;padding-left:10px;border-width:1px; border-style: ridge;">
                <div class="contact-form" id="applyID" >
                    <form id='contactFormID'>
                        <div class="row">
                            <p style="color:#007C5A; padding-left:10px"> 
                                Thank you for your interest to join us. Please fill in the form and submit
                                it. We will get back to you as soon as possible.                       
                            </p>    
                            <p style="color:#007C5A;padding-left:10px">
                                In the alternative we would be happy to receive a call from you
                            </p>   
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                 <div class="form-group">
                                    <input type="text" name="name" id="nameID" class="form-control" placeholder="Name"  autocomplete="off">
                                    <span class="help-block with-errors name_err"></span>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <input type="email" name="email" id="emailID" class="form-control"  placeholder="Email"  autocomplete="off">
                                    <span class="help-block with-errors email_err"></span>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_numberID" class="form-control" placeholder="Phone" autocomplete="off">
                                    <span class="help-block with-errors phone_number_err"></span>
                                </div>
                            </div>

                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <select class="form-control"  name="job_wanted" id="job_wantedID">
                                        <option selected="true" disabled="disabled"value="-1">Select the role </option>
                                        <option value="Care Assistants">Care Assistants</option>
                                        <option value="Live-in Carers">Live-in Carers</option>
                                        <option value="Care Coordinators">Care Coordinators</option>
                                    </select>
                                    <span class="help-block with-errors job_wanted_err"></span>	
                                </div>
                            </div>
                            

                            <div class="col-lg-12 col-sm-12">
                                <div class="form-group">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!--
                            <div class="col-lg-6 col-sm-12">
                                <div class="about-btn">
                                     <span class="default-btn-two"  id="applyBtnID" >Apply now</span>
                                </div>
                            </div>
                            -->

                            <div class="col-lg-6 col-md-12">
                                <button type="button" class="default-btn" id="applyBtnID">
                                    Apply Now
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                            
                        </div>
                    </form>
        
                </div>
                <div id="applySentID" style="display:none;">
                    <h3> Message succefully sent </h3>
                    <p style="color:#007C5A">
                       Thank you for contacting us. We will shortly get back to you as soon as possible
                    </p>   
                </div>   
            </div>
          
            <div class="col-lg-4">
                <div class="contact-widget-right text-center lightgrey">
                    
                    <h5> Call us on </h5> 
                    
                    <h2> 01372 365793 </h2>
                     
                    <h5> Sparkles Healthcare Ltd </h5>
                    <!--
                    Riverbridge House <br>
                    Guildford Road, Fetcham <br>
                    Leatherhead <br>
                    KT22 9AD
                    -->
                </div>
            </div>

            <div class="col-lg-1"></div>

        </div>

    </div>
    <div class="contact-shape">
        <img src="{{asset('img/shape/shape2.png')}}" alt="Images">
    </div>
</div>
<!-- Contact Area End -->

@endsection

<script>
    var apply_post =   "{{ url('recruit/post')}}";
    var apply_token = "{{ csrf_token() }}";
    //var_my_name="<?php echo config('honeypot.name_field_name'); ?>";
    //my_name will be used in ajax and got from store
    //var my_name=get_honeyPotName('#contactFormID',var_my_name);
</script>