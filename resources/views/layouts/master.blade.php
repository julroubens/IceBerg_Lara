<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{asset('img/fav.png')}}">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Sante Haiti</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('../css/linearicons.css')}}">
			<link rel="stylesheet" href="{{asset('../css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('../css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('../css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('../css/jquery-ui.css')}}">				
			<link rel="stylesheet" href="{{asset('../css/nice-select.css')}}">							
			<link rel="stylesheet" href="{{asset('../css/animate.min.css')}}">
			<link rel="stylesheet" href="{{asset('../css/owl.carousel.css')}}">			
			<link rel="stylesheet" href="{{asset('../css/jquery-ui.css')}}">			
			<link rel="stylesheet" href="{{asset('../css/main.css')}}">
		</head>
        <body >

        <div class="container">
         @yield('content') @include('layouts/_footer')
        </div>
        
            <script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
 			<script src="js/jquery-ui.js"></script>					
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>									
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>
            @yield('appCtrls')	
		</body>
	</html>