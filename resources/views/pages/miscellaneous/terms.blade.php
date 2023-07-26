@extends('layouts.layout')
@section('title')
    Terms &amp; Conditions
@endsection
@section('contents')

 <!-- Inner Banner -->
 <div class="inner-banner inner-bg2">
    <div class="container">
        <div class="inner-title">
            <h3>Terms &amp; Conditions </h3>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>Terms &amp; Conditions</li>
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

 <!-- Privacy-Policy Area -->
 <div class="privacy-policy-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
             <h2>Terms and Conditions</h2>
             <p>This document on Terns and Conditions Was Last Updated November 25, 2020.</p>
         </div>
        <div class="row pt-45">
            <div class="col-lg-12">
                <div class="single-content">
                    <h3>Introduction</h3>
                    <p>
                        These terms and conditions set out the terms and conditions between you, the service user 
                        or service userr's representative, and Sparkles Healthcare  Ltd trading as sparkleshealthcare.co.uk (“us”), 
                        governing the use of our website and our home care services including the content therein (the “products”). Your use of our website, and purchase, download and use of our products, constitutes your full acceptance of these terms and conditions. If you do not agree with these terms and conditions, you should not use our website or purchase, download or use any of our products.
                    </p>
                </div>

                <div class="single-content">
                    <h3>Our services</h3>
                    <p>
                       Sparkles Healthcare is a provider of home care services to the aged and people
                       with disabilities. 
                    </p>
                    <p>
                        The information provided in this Website is not intended to, nor should it in any way,
                         replace medical consultations with qualified health or medical professionals to meet your 
                         individual health or medical needs, or those of your loved ones. 
                         Any information obtained through The Website, pertaining to any care matter, 
                         is provided without the benefit of a thorough professional assessment and evaluation and 
                         therefore cannot be relied upon as a professional opinion or a recommended course of action 
                         in your specific situation. 
                         Please keep this in mind while making use of The Website and the information, documents and 
                         content provided on The Website.                   
                     </p>
                </div>

                <div class="single-content">
                    <h3>License to use website</h3>
                    <p>
                        Unless otherwise indicated, the website is our proprietary property and all 
                        information, website designs, audio, video, text, photographs, and graphics on 
                        this site (collectively, the “Content”) and the trademarks, service marks, and logos 
                        contained therein (the “Marks”) are owned or controlled by us or licensed to us, 
                        and are protected by copyright and trademark laws and various other intellectual 
                        property rights <br> 
                        
                        The Content and the Marks are provided on the Site “AS IS” for your information and personal use only. Except as expressly provided in these Terms and Conditions, no part of the Site and no Content or Marks may be copied, reproduced, aggregated, republished, uploaded, posted, publicly displayed, encoded, translated, transmitted, distributed, sold, licensed, or otherwise exploited for any commercial purpose whatsoever, without our express prior written permission.

                    </p>
                 </div>

                <div class="single-content">
                    <h3>Limitations of liability</h3>
                    <p>
                        The information on this website is provided free-of-charge, and you acknowledge that it would be 
                        unreasonable to hold us liable in respect of this website and the information on this website.
                    </p>
                    <p>   
                        Whilst we endeavour to ensure that the information on this website is correct, we do 
                        not warrant its completeness or accuracy; nor do we not commit to ensuring that 
                        the website remains available or that the material on this website is 
                        kept up-to-date.
                    </p>  
                    <p> 
                        To the maximum extent permitted by applicable law we exclude all representations, 
                        warranties and conditions (including, without limitation, the conditions implied
                         by law of satisfactory quality, fitness for purpose and the use of reasonable 
                         care and skill).
                    </p>
                    <p>  
                        Our liability is limited and excluded to the maximum extent permitted under 
                        applicable law. We will not be liable for any direct, indirect or consequential 
                        loss or damage arising under these terms and conditions or in connection with 
                        our website, whether arising in tort, contract, or otherwise – including, 
                        without limitation, any loss of profit, contracts, business, goodwill, data, 
                        income, revenue or anticipated savings.
                    </p>
                    <p>   
                        However, nothing in these terms and conditions shall exclude or limit our 
                        liability for fraud, for death or personal injury caused by our negligence, 
                        or for any other liability which cannot be excluded or limited under 
                        applicable law.
                    </p>
                </div>

                <div class="single-content">
                    <h3> Variation</h3>
                    <p>
                        We may revise these terms and conditions from time-to-time. Please check 
                        this page regularly to ensure you are familiar with the current version.
                    </p>
                </div>

                <div class="single-content">
                    <h3>Entire agreement</h3>
                    <p>
                        These terms and conditions, together with our <a href="{{ url('miscellaneous/privacy') }}">  privacy policy </a> 
                        constitute the entire agreement between you the service user  and us in relation to your use of 
                        our website, and supersede all previous agreements in respect of your use of this website.
                    </p>
                </div>

                <div class="single-content">
                    <h3> Law and jurisdiction</h3>
                    <p>
                        This notice will be governed by and construed in accordance with English law, 
                        and any disputes relating to this notice shall be subject to the exclusive 
                        jurisdiction of the courts of England.
                    </p>
                </div>
                <div class="single-content">
                    <h3> How to contact us</h3>
                    <p>
                        Should you have a complaint regarding any part or any information or any aspect 
                        of the service found on this website, 
                        Please feel free to contact Sparkles Healthcare 
                        via the  following webpage <a href="{{ url('contact') }}" >  https://www.sparkleshealthcare.co.uk/contact  </a> 
                        <br>
                        Email: <a href="mailto:info@sparkleshealthcare.co.uk">info@sparkleshealthcare.co.uk </a>
                        <br>
                        Phone: <a href="tel:+044-137-236-5793">+044-137-236-5793</a>
                        <br>
                        Snail Mail:
                        Sparkles Healthcare LTD <br>
                        Riverbridge House <br>
                        Guildford Road, Fetcham <br>
                        Leatherhead <br>
                        KT22 9AD
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Privacy-Policy Area End -->

@endsection