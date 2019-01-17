@extends('layouts.app')
@section('content')

@php

$faker = \Faker\Factory::create();

@endphp
	  <!-- Start Gallery 1-2 -->
    <section id="gallery-1" class="content-block section-wrapper gallery-1">
    	 	<div class="container">

			<div class="editContent">
	            <ul class="filter">
	                <li class="active"><a href="#" data-filter="*">All</a></li>
	                <li><a class="waves-effect waves-dark" href="#" data-filter=".technology">technology</a></li>
	                <li><a class="waves-effect waves-dark" href="#" data-filter=".packaging">packaging</a></li>
	                <li><a class="waves-effect waves-dark" href="#" data-filter=".business">Business</a></li>
	                <li><a class="waves-effect waves-dark" href="#" data-filter=".client">Client</a></li>
	                <li><a class="waves-effect waves-dark" href="#" data-filter=".works">Works</a></li>
	            </ul>
			</div>
            <!-- /.gallery-filter -->
            
            <div class="row">
                <div id="isotope-gallery-container">
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper technology">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{ asset('img/Bar Codes Infographics.jpg') }}" class="img-responsive" alt="1st gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="{{ asset('img/Bar Codes Infographics.jpg') }}" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
	                                <h5>BarCodes</h5>
                            	</div>
                            	<div class="editContent">
	                                <p>We do all sorts of QR/Barcodes.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper technology">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{ asset('img/Screenshot from 2018-04-10 10-46-25.png') }}" class="img-responsive" alt="2nd gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="{{ asset('img/Screenshot from 2018-04-10 10-46-25.png') }}" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>Software Development</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Web/Desktop/Mobile We have you covered.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper business client">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{ asset('img/IMG-20180910-WA0002.jpg') }}" class="img-responsive" alt="3rd gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="{{ $faker->image('/home/arthur/Documents/Dev/vicfirm/public/img/', 400, 300) }}" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>Phils Number Plates</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Vehicle Stamps Shop.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper packaging client works">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{ asset('img/shoe cleaner.jpg') }}" class="img-responsive" alt="4th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="{{ asset('img/shoe cleaner.jpg') }}" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>Pine Innovations Limited</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Our personal touch and service delivery.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper business client">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{ asset('img/IMG-20180910-WA0004.jpg')}}" class="img-responsive" alt="5th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="{{ asset('img/IMG-20180910-WA0004.jpg')}}" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>Up Close & Personal</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>Client Meetup.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    <!-- /.gallery-item-wrapper -->
                    <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper client packaging works">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img src="{{ asset('img/Product packaging and labelling.jpg') }}" class="img-responsive" alt="6th gallery Thumb">
                                <div class="image-overlay"></div>
                                <a href="{{ asset('img/Product packaging and labelling.jpg') }}" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                
                            </div>
                            <div class="gallery-details">
                            	<div class="editContent">
                                	<h5>Packaging</h5>
                            	</div>
                            	<div class="editContent">
                                	<p>For all your labeling and packaging needs.</p>
                            	</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- /.isotope-gallery-container -->
            </div>
            <!-- /.row --> 
        <!-- /.container -->
		</div>
    </section>
    <!--// End Gallery 1-2 -->   
@endsection