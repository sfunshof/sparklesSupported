<!doctype html>
<html lang="zxx">
    <head>
       <!-- Required Meta Tags -->
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta name="csrf-token" content="{{ csrf_token() }}" />

       <!-- CSS Header -->
	    @include('inc.cssheader')
	   <!-- End CSS Header -->
       
       <title>
            @yield('title')
       </title>

       
       <!-- Favicon -->
       <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    </head> 
	
    <body>
        <!-- Top Header -->
		 @include('inc.topheader')
        <!-- Top Header End -->

        <!-- Start Navbar Area -->
         @include('inc.navbar')
        <!-- End Navbar Area -->

        <!-- Request callback -->
        @include('inc.callback')
         
		<!-- Page Content -->
 		 @yield('contents')
        <!-- End Page Content -->


        <!-- Footer Area -->
		 @include('inc.footer')
        <!-- End Footer Area -->  
        
    </body>
</html>