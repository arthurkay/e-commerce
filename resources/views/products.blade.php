@extends('layouts.app')
@section('content')
<section id="content">
	
	<div class="container">
		<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>Our<span class="color"> Products</span></h3>
									<p>
										Preview of Our Offerings
									</p>
								</div>
									@foreach( $products as $product)
									<div class="row col-md-6">
									<h3> {{ $product->name }} </h3><br />
									@php
									 $image = $product->images()->where('product_id', $product->id)->first();
									@endphp
									<a href="{{ route('productDetails', ['id' => $product->id, 'title' => $product->name]) }}">
										<img src="{{ asset('storage/'.$image->image) }}" width="100%" />
										<p> {{ $product->description }}</p>
									</a>
									<br />
										<label class="alert alert-success">Buy {{ $product->currency }} {{ $product->price }} &nbsp;</label>
									</div>  
									@endforeach
						</div>
				
	</div>
</div>
 
	</section>
	<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
@endsection