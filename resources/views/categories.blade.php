@extends('layouts.app')
@section('content')
	
	<section class="section-padding gray-bg">
		<div class="container">
			<h3>Our<span class="color"> {{ $category }} products</span></h3>
			<div class="col-md-10">
				@foreach( $products as $product)
									<div class="row col-md-3">
										<div class="card">
									<h3> {{ $product->name }} </h3><br />
									@php
									 $image = $product->images()->where('product_id', $product->id)->first();
									@endphp
									<a href="{{ route('productDetails', ['id' => $product->id, 'title' => $product->name]) }}">
										@if ($image)
										<div class="img" style="background-image:url('{{ asset('storage/'.$image->image) }}');"></div>
										@endif
										<p> </p>
									</a>
									<br />
										<label class="alert alert-success">{{ $product->currency }} {{ $product->price }} &nbsp;</label>
									</div>
									</div>  
									@endforeach
									{{ $products->render() }}
			</div>
			<div class="col-md-2">
			@foreach($categories as $category)
			<div class="row">
				<div class="card">
					<div class="card-header">
						<a href="{{ route('categories', ['id' => $category->id, 'name' => $category->name ]) }}">{{ $category->name }}</a>
					</div>
					<div class="card-body">
					</div>
				</div>
			</div>
			@endforeach
			</div>
		</div>
	</section>	  
	@endsection