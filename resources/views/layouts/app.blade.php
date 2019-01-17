<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>{{ $title }}</title>
<link type="image/png" rel="icon" href="{{asset('img/logo.png')}}" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="Arthur Kalikiti" />
<!-- css --> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('materialize/css/materialize.min.css') }}" media="screen,projection" />
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('css/fancybox/jquery.fancybox.css') }}" rel="stylesheet"> 
<link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" /> 
<link href="{{ asset('css/style.css') }}" rel="stylesheet" />
<link href="{{ asset('css/gallery-1.css') }}" rel="stylesheet">
<link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet"> 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=325936250917826&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="wrapper" class="home-page"> 
	<header class="topbar">
		<div class="container">
			<div class="row">
				<!-- social icon-->
				<div class="col-sm-3">
				   <ul class="social-network">
					<li><a class="waves-effect waves-dark" href="https://facebook.com/komakaliengineering/"><i class="fa fa-facebook"></i></a></li>
					<!--//<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-twitter"></i></a></li>//-->
					<li><a class="waves-effect waves-dark" href="https://www.linkedin.com/company/komakaliengineering"><i class="fa fa-linkedin"></i></a></li>
					<!--//<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-pinterest"></i></a></li>
					<li><a class="waves-effect waves-dark" href="#"><i class="fa fa-google-plus"></i></a></li>//-->
				</ul>
				</div>
				<div class="col-sm-9">
					<div class="row">
						<ul class="info"> 
							<li><i class="icon-info-blocks material-icons">question_answer</i><span>vicfirmfinance@gmail.com</span></li>
							<li><i class="icon-info-blocks material-icons">perm_phone_msg</i><span>+260953020005 or +260977714224</span></li>
						</ul>
						<div class="clr"></div>
					</div>
				</div>
				<!-- info -->

			</div>
		</div>
	</header>
		
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home')}}"><img class="logo" src="{{ asset('img/logo.png') }}" />VicFirm</i></a>
                </div>
                <!--// Active Page //-->
                @php
                (url()->current() == route('home')) ? $ah = 'active' : $ah = '';
                (url()->current() == route('company')) ? $ac = 'active' : $ac = '';
                (url()->current() == route('services')) ? $as = 'active' : $as = '';
                (url()->current() == route('gallery')) ? $ag = 'active' : $ag = '';
                (url()->current() == route('contact')) ? $aco = 'active' : $aco = '';
				(url()->current() == route('blog_list')) ? $ab = 'active' : $ab = '';
                @endphp
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="{{$ah}}"><a class="waves-effect waves-dark" href="{{route('home')}}">Home</a></li> 
                        <li class="{{$ac}}"><a class="waves-effect waves-dark" href="{{route('company')}}">Company</a></li>
						<li class="{{$as}}"><a class="waves-effect waves-dark" href="{{route('services')}}">Services</a></li>
                       <!-- <li class="{{$ag}}"><a class="waves-effect waves-dark" href="{{route('gallery')}}">Gallery</a></li> -->
                        <li class="{{$ab}}"><a class="waves-effect waves-dark" href="{{ route('blog_list') }}">News</a></li>
                        <li class="{{$aco}}"><a class="waves-effect waves-dark" href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	<section id="banner">
	 
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="{{ asset('img/slides/3.jpg') }}" alt="" />
                <div class="flex-caption">
                    <h3>Business  Accumen</h3> 
					<p>We are business savvy</p> 
					 
                </div>
              </li>
              <li>
                <img src="{{ asset('img/slides/2.jpg') }}" alt="" />
                <div class="flex-caption">
                    <h3>Business Growth</h3> 
					<p>Professional and Dependable</p> 
					 
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider --> 
	</section>  
	 
     @yield('content')
 
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong>VicFirm Financial Consultancy LTD</strong><br>
					P.O Box 0000 <br />
					Plot Number: 00, Somewhere,<br>
					Lusaka, Zambia</address>
					<p>
						<i class="icon-phone"></i> (260) 979-040-0735 <br>
						<i class="icon-envelope-alt"></i> VicFirmfinance@gmail.com
					</p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Quick Links</h5>
					<ul class="link-list">
						<li><a class="waves-effect waves-dark" href="#">Latest Events</a></li>
						<li><a class="waves-effect waves-dark" href="#">Terms and conditions</a></li>
						<li><a class="waves-effect waves-dark" href="#">Privacy policy</a></li>
						<li><a class="waves-effect waves-dark" href="#">Career</a></li>
						<li><a class="waves-effect waves-dark" href="{{route('contact')}}">Contact us</a></li>
					</ul>
				</div>
		
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; VicFirm Financial Consultancy LTD
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a class="waves-effect waves-dark" href="https://facebook.com/" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<!--//<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>//-->
						<li><a class="waves-effect waves-dark" href="https://www.linkedin.com/company/" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<!--//<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>//-->
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('materialize/js/materialize.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox-media.js') }}"></script>  
<script src="{{ asset('js/jquery.flexslider.js') }}"></script>
<script src="{{ asset('js/animate.js') }}"></script>
<!-- Vendor Scripts -->
<script src="{{ asset('js/modernizr.custom.js') }}"></script>
<script src="{{ asset('js/jquery.isotope.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/animate.js') }}"></script> 
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>