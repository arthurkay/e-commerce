<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>{{ $title }}</title>
<link type="image/png" rel="icon" href="{{asset('img/logo.png')}}" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="Arthur Kalikiti" />
<!-- FONT-AWESOME ICON CSS -->
<link rel="stylesheet" href="{{asset('/Admin/css/font-awesome.min.css')}}">
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
                    <a class="navbar-brand" href="{{ route('home')}}">Matre Logistics</i></a>
                </div>
@php
use App\Cart;
use App\Product;
if (Auth::user())  {
$carts = Cart::where('user_id', Auth::user()->id)->get();
}
@endphp
                <!--// Active Page //-->
                @php
                (url()->current() == route('home')) ? $ah = 'active' : $ah = '';
                (url()->current() == route('company')) ? $ac = 'active' : $ac = '';
                (url()->current() == route('services')) ? $as = 'active' : $as = '';
                (url()->current() == route('products')) ? $ag = 'active' : $ag = '';
                (url()->current() == route('contact')) ? $aco = 'active' : $aco = '';
				(url()->current() == route('blog_list')) ? $ab = 'active' : $ab = '';
                @endphp
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                    	@if ( Auth::guest() )
                        <li class="{{$ah}}"><a class="waves-effect waves-dark" href="{{route('login')}}">Login</a></li> 
                        @endif
                        @if( Auth::Check() )
                         <li class="{{$ah}}">
                         	<a class="waves-effect waves-dark" href="{{ route('user') }}">{{ Auth::user()->name }}</a>
                         	</li> 
                         	<li><a class="waves-effect waves-dark" href="" data-toggle="modal" data-target="#myModal">Cart <i class="fa fa-shopping-cart">{{ count($carts) }}</i></a></li>
                         	<li><a class="waves-effect waves-dark" href="">Orders</a></li>
                         	<li><a class="waves-effect waves-dark" onclick="logout()">Logout</a></li>
                        @endif
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
                    <h3>One Store, Global Reach</h3> 
					<p>We are everywhere</p> 
					 
                </div>
              </li>
              <li>
                <img src="{{ asset('img/slides/2.jpg') }}" alt="" />
                <div class="flex-caption">
                    <h3>Distance is illusive</h3> 
					<p>Bluring the notion of distance</p> 
					 
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider --> 
	</section>

<section>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Shopping Cart</h4>
      </div>
      <div class="modal-body">
        <table class="table">
        	<tr>
        		<th>Product Name</th><th>Price</th><th>Remove</th>
        	</tr>
        	@if (isset($carts))
        	@php
        	$prices = [];
        	@endphp
        	@foreach( $carts as $cart )
        	@php
        	$product = Product::find($cart->product_id);
        	array_push($prices, $product->price);
        	@endphp
        	<tr>
        		<td>{{ $product->name }}</td> 
        		<td>({{ $product->currency }} 
        		{{ $product->price }})</td> 
        		<td><a href="{{ route('removeCart', ['id' => $cart->id]) }}"><i class="fa fa-trash"></i></a></td>
        	</tr>
        	@endforeach
        	<td>Total: </td><td></td><td><span class="color">{{ array_sum($prices) }}</span></td>
        	@endif
        </table>
      </div>
      <div class="modal-footer">
      	<form action="{{ route('checkout') }}" method="get">
        <button type="submit" class="btn btn-default">Checkout</button>
    	</form>
      </div>
    </div>

  </div>
</div>
										
</section>
										@if (session('ok'))
										<div class="alert alert-success">
											{{ session('success') }}
										</div>
										@endif
										@if (session('fail'))
										<div class="alert alert-danger">
											{{ session('error') }}
										</div>
										@endif	 
     @yield('content')

	 <!-- Logout form -->>
	 <form action="{{ route('logout') }}" method="post" id="logout_form">
		{{ csrf_field() }}
	 </form>
	<script>
		function logout() {
			$("#logout_form").submit();
		}
	</script>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong>Matre Logistics LTD</strong><br>
					Carosel complex, <br /> 2<sup>nd</sup> Floor<br />
					P/bag15 Rw Lusaka.</address>
					<p>
						<i class="fa fa-phone"></i> +260977548124 <br>
						<i class="fa fa-phone"></i> +260953016121 <br>
						<i class="fa fa-envelope"></i> matrelogistics@gmail.com
					</p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="widget">
					<h5 class="widgetheading">Quick Links</h5>
					<ul class="link-list">
						<li><a class="waves-effect waves-dark" href="#">Latest Events</a></li>
						<li><a class="waves-effect waves-dark" href="#">Terms and conditions</a></li>
						<li><a class="waves-effect waves-dark" href="{{ route('policies') }}">Privacy policy</a></li>
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
							<span>&copy; Matre Logistics LTD
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
    @yield('script')
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