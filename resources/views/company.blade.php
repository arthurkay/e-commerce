@extends('layouts.app')
@section('content')
@php

$faker = \Faker\Factory::create();

@endphp
<section id="content">
	<section class="section-padding">
		<div class="container">
			<div class="row showcase-section">
				<div class="col-md-6">
					<img src="img/img1.png" width="100%" alt="showcase image">
				</div>
				<div class="col-md-6">
					<div class="about-text">
						<h3>Our <span class="color">Company</span></h3>
						<p>Vicfirm Financial Consultancy Ltd is a platform of exposure founded to create an enabling environment for doing business. We support business to business, individuals, parastatals and Investors to navigate around and harness local and international opportunities timely and profitably.</p>
						<p>After rigorous check and researching both on local and international markets, we at Vicfirm Financial Consultancy Ltd concluded that the link between local and international investors was weak. We understood the gap and provided the much needed chain connector or link. Most business houses especially foreign based suffer from lack of a platform and genuine dealers to penetrate local markets. We are the safest link and secure platform. Due to the gap in linking local and international businesses, the global village concept is defeated, and as such, Vicfirm seeks to bring both worlds together and support the one world business place.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
					
					<div class="about">
				
						
						<div class="row" style="display: none;">
							<div class="col-md-6">
								<!-- Heading and para -->
								<div class="block-heading-two">
									<h3><span>Why Choose Us?</span></h3>
								</div>
								<p>
									It is hard enough to find the right business partner, its even harder to find one that will be there to listen and tailor soutions specifically for you.<br />
									Luckily, we are here to be that partner everyone longs for. That one special needle in a pile of needles...
								</p>
							</div>
						 		
<div class="about home-about" style="display: none;">
<div class="container">

<div class="row">
	<div class="col-md-4"> 
	<div class="block-heading-two">
			<h3><span>Features</span></h3>
		</div>	
	<div class="tab-section">
		<div class="s12">
		<ul class="tabs">
		<li class="tab col s4"><a href="#test1" class="waves-effect waves-dark">Test 1</a></li>
		<li class="tab col s4"><a class="waves-effect waves-dark active" href="#test2">Test 2</a></li>
		<li class="tab col s4"><a href="#test3" class="waves-effect waves-dark">Test 3</a></li> 
		</ul>
		</div>
		<div id="test1" class="col s12 container">Ande omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. </div>
		<div id="test2" class="col s12 container">Terspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. </div>
		<div id="test3" class="col s12 container">Perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. </div> 
		</div>
	</div>
	<div class="col-md-4">
		<div class="block-heading-two">
			<h3><span>Latest News</span></h3>
		</div>		
		<!-- Accordion starts -->
	  <ul class="collapsible" id="accordionSection" data-collapsible="accordion">
		<li>
		  <div class="collapsible-header active"><i class="material-icons">filter_drama</i>First</div>
		  <div class="collapsible-body"><p>Perspiciaatis unde omnis iste natus error Nemo enim ipsam voluptatem quia voluptas sit aspernatur. sit voluptatem accusanti</p></div>
		</li>
		<li>
		  <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
		  <div class="collapsible-body"><p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur. Perspiciaatis unde omnis iste natus error sit voluptatem accusanti</p></div>
		</li>
		<li>
		  <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
		  <div class="collapsible-body"><p>Perspiciaatis Nemo enim ipsam voluptatem quia voluptas sit aspernatur. unde omnis iste natus error sit voluptatem accusanti</p></div>
		</li>
	  </ul>
								 <!-- Accordion ends -->
		
	</div>
	
	<div class="col-md-4">
		<div class="block-heading-two">
			<h3><span>Testimonials</span></h3>
		</div>	
			 <div class="testimonials">
				<div class="active item">
				  <blockquote><p>Lorem ipsum dolor met consectetur adipisicing. Aorem psum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met.</p></blockquote>
				  <div class="carousel-info">
					<img alt="" src="img/arthur.png" class="pull-left">
					<div class="pull-left">
					  <span class="testimonials-name">Arthur Kalikiti</span>
					  <span class="testimonials-post">Software Developer</span>
					</div>
				  </div>
				</div>
			</div>
	</div>
	
</div>
						
<br> 
</div> 
</div>
		
					</div>
				</section>
@endsection