@extends('layouts.app')
@section('content')
	
	<section class="section-padding gray-bg">
		<div class="container">
			<div class="col-md-10">
				@foreach($categories as $category)
				<div class="row">
				<div class="card">
					<div class="card-header">
						{{ $category->name }}
					</div>
					<div class="card-body">
						@php
						$products = App\Product::where('category', $category->id)->limit(6)->get();
						@endphp
						@foreach($products as $product)
						<div class="col-md-2">
							<h3> {{ $product->name }} </h3><br />
									@php
									 $image = $product->images()->where('product_id', $product->id)->first();
									@endphp
									<a href="{{ route('productDetails', ['id' => $product->id, 'title' => $product->name]) }}">
										@if ($image)
										<img src="{{ asset('storage/'.$image->image) }}" width="100%" height="100%" />
										@endif
									</a>
									<br />
										<label class="alert alert-success">Buy {{ $product->currency }} {{ $product->price }} &nbsp;</label>
						</div>
						@endforeach
					</div>
				</div>
			</div>
				@endforeach
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