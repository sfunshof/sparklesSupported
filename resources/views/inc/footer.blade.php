 
<footer class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h3>Contact Info</h3>
                    <p>Sparkles Healthcare Ltd</p>
                    <ul class="footer-contact-list">
                        <li>
                            <i class='flaticon-map-1'></i>
                            <div class="content">
                                Riverbridge House <br>
                                Guildford Road, Fetcham <br>
                                Leatherhead <br>
                                KT22 9AD
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <i class='flaticon-phone-ringing'></i>
                                <a href="tel:+441372365793">0137-236-5793</a>
                                <a href="tel:+4407868083085">078-680-83085</a>
                                (Out of hours)
                             </div>
                        </li>
                        <li>
                            <i class='bx bxs-envelope'></i>
                            <div class="content">
                                <a href="mailto:info@sparkleshealthcare.co.uk">info@sparkleshealthcare.co.uk</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <div class="footer-widget">
                    <h3>Important Link</h3>
                    <ul class="footer-list">
                        <li>
                            <a href="/">
                                Home
                            </a>
                        </li> 
                        <li>
                            <a href="{{url('services/services_all') }}" >
                                Services
                            </a>
                        </li> 
                        <li>
                            <a href="{{ url('miscellaneous/terms') }}" > 
                                Terms &amp; Conditions
                            </a>
                        </li> 
                        <li>
                            <a href="{{ url('miscellaneous/privacy')  }}" >
                               Privacy Statements
                            </a>
                        </li> 
                         <li>
                            <a href="{{url('contact')}}" >
                                Contact Us
                            </a>
                        </li> 
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-5">
                <div class="footer-widget">
                    <h3>Office Hours</h3>
                    <ul class="open-hours-list">
                        <li>
                            Mon-Fri
                            <span>9:00 am - 5:00 pm</span>
                        </li>
                        <li>
                            Weekend
                            <span class="text-danger">Closed</span>
                        </li> 
                    </ul>
                </div>
                <!-- Space No 1 -->
                <div class="row">
                    <br>
                 </div>

                 <!-- Brand Area1 -->
                 <div class="row">
                     <div class="col-lg-6">
                        <img src="{{asset('img/custom/cqc.jpg')}}" alt="Images">
                     </div>
                     <div class="col-lg-6">   
                        <img src="{{asset('img/custom/sfc.png')}}" alt="Images">
                     </div> 
                 </div>   
                 <!-- Brand Area1 End -->
                  <!-- Space No 1 -->
                <div class="row">
                    <br>
                 </div>

                 <!-- Brand Area2 -->
                 <div class="row">
                    <div class="col-lg-7">
                       <img src="{{asset('img/custom/sca.jpg')}}" alt="Images">
                    </div>
                    <div class="col-lg-5">   
                       <img src="{{asset('img/custom/ukca.jpg')}}" alt="Images">
                    </div> 
                 </div>   
                 <!-- Brand Area1 End -->  
					
            </div>

            <div class="col-lg-4 col-md-7">
                <div class="footer-widget pl-2">
				    <h3>CQC Inspection</h3> 
                    <!--
					<div class="footer-logo">
                        <a href="index.html">
                            <img src="{{asset('img/logo.png')}}" alt="Images">
                        </a>
                    </div>
                    <p>
                        Sparkles Healthcare team uses the power of social media to communicate
                        with our service users, families and the local council
                    </p>
                    -->
			       </div>		
				   <!-- CQC Ratings -->
				   <div class="row">
                        <div class="col-lg-8">
						    <script type="text/javascript" src="https://www.cqc.org.uk/sites/all/modules/custom/cqc_widget/widget.js?data-id=1-10205034750&data-host=https://www.cqc.org.uk&type=location"></script>
					     </div>
					</div>	 
					 
					  <!-- Space No2
                      <div class="row">
                          <p>&nbsp;</p>
                      </div>
                     -->					
                     
                        

                <!-- Brand Area2 
                 <div class="row">
                    <div class="col-lg-7">
                       <img src="{{asset('img/custom/sca.jpg')}}" alt="Images">
                    </div>
                    <div class="col-lg-5">   
                       <img src="{{asset('img/custom/ukca.jpg')}}" alt="Images">
                    </div> 
                </div>   
				-->
                <!-- Brand Area2 End -->
            </div>
        </div>
    </div>
</footer>

<!-- Copy-Right Area -->
<div class="copy-right-area">
    <div class="container">
        <div class="copy-right-text text-center">
            <p>
                Copyright @<?php echo date("Y"); ?> Sparkles Healthcare LTD. All Rights Reserved
            </p>
        </div>
    </div>
</div>
<!-- Copy-Right Area End -->

<!-- Footer Area End -->

<!-- Mobile Request callback 
 <div class="callback_btn d-md-none" id="callback_btnID">
    <i class='flaticon-phone-ringing'></i>
    &nbsp;
    Request Callback 
 </div>
-->

<!-- Mobile Request form -->
<div class="callback_form d-md-none" id="callback_formID" style="display:none">
    
    <div class="callback_top_form">
        <i class='flaticon-phone-ringing'></i>
        &nbsp;
        Request Callback 
    </div>   
    @include('inc.callbackform')
</div>   






<!-- Jquery Min JS -->
<script src="{{asset('js/jquery-3.5.1.slim.min.js')}}"></script>
<!-- Popper Min JS -->
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap Min JS -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Magnific Popup Min JS -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<!-- Owl Carousel Min JS -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- Nice Select Min JS -->
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<!-- Wow Min JS -->
<script src="{{asset('js/wow.min.js')}}"></script>
<!-- Meanmenu JS -->
<script src="{{asset('js/meanmenu.js')}}"></script>
<!-- Datepicker JS -->
<script src="{{asset('js/datepicker.min.js')}}"></script>
<!-- Ajaxchimp Min JS -->
<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<!-- Form Validator Min JS -->
<script src="{{asset('js/form-validator.min.js')}}"></script>
<!-- Contact Form JS -->
<script src="{{asset('js/contact-form-script.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('js/custom.js')}}"></script>
<!-- Custom Js2 filling the forms and sending them as email -->
<script src="{{asset('js/custom/jquery-ui.js')}}"></script>
<script src="{{asset('js/custom/sidebar_menu.js')}}"></script>
<script src="{{asset('js/custom/contactform.js')}}"></script>
<script src="{{asset('js/custom/applyform.js')}}"></script>
<script src="{{asset('js/custom/callbackform.js')}}"></script>

<!-- Consent tool -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.1/cookieconsent.min.js" integrity="sha512-yXXqOFjdjHNH1GND+1EO0jbvvebABpzGKD66djnUfiKlYME5HGMUJHoCaeE4D5PTG2YsSJf6dwqyUUvQvS0vaA==" crossorigin="anonymous"></script>
<script src="{{asset('js/custom/cookie.js')}}"></script>
