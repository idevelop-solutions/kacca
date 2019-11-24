<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KACCA | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/animate.css')}}">
    
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{URL::asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{URL::asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{URL::asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
  </head>
  <body>
    <div class="py-md-5 py-4 border-bottom">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
    			<div class="col-md-4 order-md-2 mb-2 mb-md-0 align-items-center text-center">
		    		<!-- <span class="navbar-brand" href="index.html">KACCA<span></span></a> -->
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{URL::asset('images/logo.png')}}" /><span></span></a>
	    		</div>
	    		<div class="col-md-4 order-md-1 d-flex topper mb-md-0 mb-2 align-items-center text-md-right">
	    			<div class="icon d-flex justify-content-center align-items-center order-md-last">
	    				<span class="icon-map"></span>
	    			</div>
	    			<div class="pr-md-4 pl-md-0 pl-3 text">
					    <p class="con"><span>Call Us</span> <span>0765549118 - 0781888077</span></p>
					    <p class="con">4th floor,Rahman Tower,Shahr-e-Naw,Kabul,Afghanistan</p>
				    </div>
			    </div>
			    <div class="col-md-4 order-md-3 d-flex topper mb-md-0 align-items-center">
			    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
			    	<div class="text pl-3 pl-md-3">
					    <p class="hr"><span>Open Hours</span></p>
					    <p class="time"><span>Sat - Tue:</span> <span>8:00am - 4:00pm</span> Friday: Closed</p>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto" id="menu">
	        	<li class="nav-item active" id="home"><a href="{{url('/')}}" class="nav-link pl-0">Home</a></li>
            <li class="nav-item dropdown" id="about">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About
              </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
              <a class="dropdown-item" href="{{url('/kacca-history')}}">History</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('/kacca-mission-vision')}}">Mission & Vision</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('/kacca-our-team')}}">Our Team</a>
            </div>
            </li>
            <li class="nav-item dropdown" id="assurance">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Assurance Services
              </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
              <a class="dropdown-item" href="{{url('/kacca-audit-accounting')}}">Audit & Accouting</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('/kacca-information-system-assurance')}}">Information system assurance</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('/kacca-management-assurance')}}">Management Assurance</a>
            </div>
            </li>
            <li class="nav-item dropdown" id="tax">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Taxation Services
              </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
              <a class="dropdown-item" href="{{url('/kacca-tax-compilance')}}">Tax-Compilance</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('/kacca-business-tax-service')}}">Business Tax Service</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('/kacca-business-receipt-tax')}}">Business Receipt Tax</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('/kacca-international-tax')}}">International Tax</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('/kacca-transfer-pricing')}}">Transfer Pricing</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('/kacca-indirect-tax')}}">Indirect Tax</a>
            </div>
            </li>
            <li class="nav-item dropdown" id="advisor">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Advisory Services
              </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
              <a class="dropdown-item" href="{{url('/kacca-advisory-services')}}">Advisory Services</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('/kacca-corporate-advisory')}}">Corporate Advisory</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('/kacca-environment-management-advisory')}}">Environment Management Advisory</a>
            </div>
            </li>
            <li class="nav-item dropdown" id="transaction">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Transaction Services
              </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
              <a class="dropdown-item" href="{{url('/kacca-transaction-support')}}">Transaction Support</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('/kacca-transaction-tax')}}">Transaction Tax</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{url('/kacca-valuation-and-business-modeling')}}">Valuation & Business Modeling</a>
            </div>
            </li>
	          <li class="nav-item" id="contact"><a href="{{url('/contact')}}" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    @section('top')
    @show

    @section('content')
    @show
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
              <img src="{{URL::asset('images/logo.png')}}" />
              <h2 class="ftco-heading-2 logo">KACCA</h2>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel inventore ex numquam harum provident! Maxime qui accusamus delectus laboriosam, voluptas libero excepturi iure quae, architecto dolor placeat optio saepe voluptatibus!</p>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">4th floor,Rahman Tower,Shahr-e-Naw,Kabul,Afghanistan</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">0765549118 - 0781888077</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@kacca.af</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{url('/')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="{{url('/kacca-history')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="{{url('/kacca-our-team')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Our Team</a></li>
                <li><a href="{{url('/contact')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="{{url('/kacca-audit-accounting')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Assurance Services</a></li>
                <li><a href="{{url('/kacca-tax-compilance')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Taxation Services</a></li>
                <li><a href="{{url('/kacca-advisory-services')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Advisory Services</a></li>
                <li><a href="{{url('/kacca-transaction-support')}}"><span class="ion-ios-arrow-round-forward mr-2"></span>Transaction Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md d-none">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept. 20, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept. 20, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md">
          	<div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Opening Hours</h2>
            	<h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>Saturday-Tuesday (open) (8:00AM - 4:00PM)</h3>
            	<h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>Fridays (Closed)</h3>
            	<h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>Official Holiday: (Closed)</h3>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Follow Us!</h2>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-youtube"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;2019- {{date('Y')}} All rights reserved | Powered By:<a href="https://idevelopgroup.com" target="_blank" title="Software & Technology Services company">iDevelop</a>
 </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{URL::asset('js/jquery.min.js')}}"></script>
  <script src="{{URL::asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{URL::asset('js/popper.min.js')}}"></script>
  <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('js/jquery.easing.1.3.js')}}"></script>
  <script src="{{URL::asset('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{URL::asset('js/jquery.stellar.min.js')}}"></script>
  <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{URL::asset('js/aos.js')}}"></script>
  <script src="{{URL::asset('js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{URL::asset('js/bootstrap-datepicker.js')}}"></script>
  <script src="{{URL::asset('js/jquery.timepicker.min.js')}}"></script>
  <script src="{{URL::asset('js/scrollax.min.js')}}"></script>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{URL::asset('js/google-map.js')}}"></script> -->
  <script src="{{URL::asset('js/main.js')}}"></script>

  @section('script')
  @show
    
  </body>
</html>