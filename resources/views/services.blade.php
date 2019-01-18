@extends('layouts.app')
@section('content')
<section id="content">
	
	<div class="container">
		<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>Our<span class="color"> Services</span></h3>
									<p>
										Here is a sneak peak at our services
									</p>
								<div>
									<!-- Accordion starts -->
									<div class="panel-group" id="accordion-alt3">
								 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
								  <div class="panel">	
									<!-- Panel heading -->
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
											<i class="fa fa-angle-right"></i> FINANCIAL CONSULTANCY
										  </a>
										</h4>
									 </div>
									 <div id="collapseOne-alt3" class="panel-collapse collapse">
										<!-- Panel body -->
										<div class="panel-body">
											<img src="{{ asset('img/about.jpg') }}" width="100px" height="100px" />
										We provide financial consultancy to all at prices ranging from $7,500
										</div>
									 </div>
								  </div>
								   <div class="panel">	
									<!-- Panel heading -->
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt4" href="#collapseOne-alt4">
											<i class="fa fa-angle-right"></i> MINING EXPLORATIONS
										  </a>
										</h4>
									 </div>
									 <div id="collapseOne-alt4" class="panel-collapse collapse">
										<!-- Panel body -->
										<div class="panel-body">
											<img src="{{ asset('img/works/mining.jpg') }}" width="100px" height="100px" />
										Mining exploration opportunities in strategic areas $10,000,000
										</div>
									 </div>
								  </div>
								  <div class="panel">	
									<!-- Panel heading -->
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt5" href="#collapseOne-alt5">
											<i class="fa fa-angle-right"></i> DIRECT FOREIGN INVESTMENT
										  </a>
										</h4>
									 </div>
									 <div id="collapseOne-alt5" class="panel-collapse collapse">
										<!-- Panel body -->
										<div class="panel-body">
											<img src="{{ asset('img/images.jpeg') }}" width="100px" height="100px" />
										Direct Foreign Investments from $15,000
										</div>
									 </div>
								  </div>
								   <div class="panel">	
									<!-- Panel heading -->
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt6" href="#collapseOne-alt6">
											<i class="fa fa-angle-right"></i> WATER EXPLORATIONS
										  </a>
										</h4>
									 </div>
									 <div id="collapseOne-alt6" class="panel-collapse collapse">
										<!-- Panel body -->
										<div class="panel-body">
											<img src="{{ asset('img/water-exploration.jpg') }}" width="100px" height="100px" />
										We do water exploration from $50,000
										</div>
									 </div>
								  </div>
								   <div class="panel">	
									<!-- Panel heading -->
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt8" href="#collapseOne-alt8">
											<i class="fa fa-angle-right"></i> HOTEL BOOKINGS AND ACCOMODATION
										  </a>
										</h4>
									 </div>
									 <div id="collapseOne-alt8" class="panel-collapse collapse">
										<!-- Panel body -->
										<div class="panel-body">
											<img src="{{ asset('img/bookings.jpeg') }}" width="100px" height="100px" />
										RangeS from $100-$500
										</div>
									 </div>
								  </div>
							
								<!-- Accordion ends -->
								
							</div>
							

								</div>  
							</div>
						</div>
	<div class="row">
				
	</div>
 
	</section>
@endsection