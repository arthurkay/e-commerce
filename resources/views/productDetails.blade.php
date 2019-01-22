@extends('layouts.app')
@section('content')
<section id="content">
	
	<div class="container">
		<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>|<span class="color"> {{ $product->name }} </span></h3>
								</div>
					
									<div class="row col-md-6">

									<div class="slideshow-container">
										@php
										$no = 1;
										@endphp

										@foreach( $product->images()->where('product_id', $product->id)->get() as $image)
										
										@php
										$total = $product->images()->where('product_id', $product->id)->count()
										@endphp

										<div class="mySlides">
    									<div class="numbertext">{{ $no }}/ {{ $total }}</div>
    									@if ($image)
										<img src="{{ asset('storage/'.$image->image) }}" width="100%" />
										@endif
										<div class="text">{{ $product->name }}</div>
  										</div>
  										
										@php
										$no++;
										@endphp

										@endforeach

										<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
										<a class="next" onclick="plusSlides(1)">&#10095;</a>

										</div>
										<br>

										<div style="text-align:center">
											@php
											$slides = 1;
											@endphp
											@for( $i = 1; $i <= $total; $i++ )
  										<span class="dot" onclick="currentSlide({{ $i }})"></span>
  											@endfor 
										</div>
										<p> {{ $product->description }}</p><br />
										<label class="alert alert-success">Buy {{ $product->currency }} {{ $product->price }} &nbsp;</label>
									</div>  
						</div>
				
	</div>
	<div class="row">
						<h3>More<span class="color"> Products</span></h3>

									@foreach( $products as $offer)
									<div class="row col-md-6">
									<h3> {{ $offer->name }} </h3><br />
									@php
									 $image = $offer->images()->where('product_id', $offer->id)->first();
									@endphp
									<a href="{{ route('productDetails', ['id' => $offer->id, 'title' => $offer->name]) }}">
										@if ($image)
										<img src="{{ asset('storage/'.$image->image) }}" width="100%" />
										@endif
										<p> {{ $offer->description }}</p>
									</a>
									<br />
										<label class="alert alert-success">Buy {{ $offer->currency }} {{ $offer->price }} &nbsp;</label>
									</div>  
									@endforeach
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