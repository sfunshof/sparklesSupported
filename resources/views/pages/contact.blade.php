@extends('layouts.layout')
@section('title')
    Contact Us
@endsection
@section('contents')

 <!-- Inner Banner -->
 <div class="inner-banner inner-bg13">
    <div class="container">
        <div class="inner-title">
            <h3>Contact Us</h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Contact Us</li>
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
            <div class="col-lg-4">
                <div class="contact-widget-right text-center lightgrey">
                    
                    <h5> Call us on: </h5> 
                    <h2 style="display:inline;" > <a style="color: black;"   href="tel:+441372365793"> 01372-365793</a></h2>
                     <br>
                     (9am-5pm Mon-Fri )
                     <p>&nbsp;</p>

                    <h2 style="display:inline;"> <a style="color: black;" href="tel:+4407868083085">078-680-83085</a></h2>
                    <br>
                    (Out of hours)
                    <p>&nbsp;</p>
                     
                    <h5> Sparkles Healthcare Ltd </h5>
                    <strong>
                       Riverbridge House <br>
                       Guildford Road, Fetcham <br>
                       Leatherhead <br>
                       KT22 9AD
                    </strong>  
                </div>
            </div>

            <div class="col-lg-8" style="padding-top:10px; border-width:1px;border-style: ridge;border-color:lightgray">
                <div class="contact-form" id="contactID" >
                    <p style="color:#007C5A"> 
                        Kindly fill this form to enable our team respond to your enquiries as soon as possible 
                    </p>    
                    <form id='contactFormID'>
                        {{-- @honeypot --}} 
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                 <div class="form-group">
                                    <input type="text" name="name" id="nameID" class="form-control" placeholder="Name"  autocomplete="off">
                                    <span class="help-block with-errors name_err"></span>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="emailID" class="form-control"  placeholder="Email"  autocomplete="off">
                                    <span class="help-block with-errors email_err"></span>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_numberID" class="form-control" placeholder="Phone" autocomplete="off">
                                    <span class="help-block with-errors phone_number_err"></span>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subjectID" class="form-control"  placeholder="Your Subject" autocomplete="off">
                                    <span class="help-block with-errors msg_subject_err"></span>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="messageID" cols="30" rows="8" placeholder="Your Message"></textarea>
                                    <span class="help-block with-errors message_err"></span>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="button" class="default-btn-two" id="submitBtnID">
                                    Send Message
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
        
                </div>
                <div id="msgSentID" style="display:none;">
                    <h3> Message succefully sent </h3>
                    <p>
                       Thank you for contacting us. We will shortly get back to you as soon as possible
                    </p>   
                </div>   
            </div>
        </div>
    </div>
    <div class="contact-shape">
        <img src="{{asset('img/shape/shape2.png')}}" alt="Images">
    </div>
</div>
<!-- Contact Area End -->

<!-- Map Area -->
<div class="map-area">
    <div class="container-fluid m-0 p-0">
        <!--
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.387759539821!2d-74.0094841843446!3d40.709479645706075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a18049ba121%3A0x51924d7e3a9cb794!2zMTIzIFdpbGxpYW0gU3QgIzgwMSwgTmV3IFlvcmssIE5ZIDEwMDM4LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1601377497844!5m2!1sbn!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2494.9568312894567!2d-0.33588038423787114!3d51.29351847960061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x25624c5f2dcaf43c!2sSparkles%20Healthcare%20LTD!5e0!3m2!1sen!2suk!4v1611538551803!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
<!-- Map Area End -->
@endsection


<script>
    var contact_post =   "{{ url('contact/post')}}";
    var token = "{{ csrf_token() }}";
    //var_my_name="<?php echo config('honeypot.name_field_name'); ?>";
    //my_name will be used in ajax and got from store
    //var my_name=get_honeyPotName('#contactFormID',var_my_name);
 </script>




<!--
<script src="{{asset('js/jquery-3.5.1.slim.min.js')}}"></script>
<script>
    $(document).ready(function() {
       // $("*[name= my_name ]").val("test");
       //$('#'+my_name).val('test')          
    })
 </script>   
-->
