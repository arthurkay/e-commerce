@extends('layouts.app')
@section('content')
	
	<section class="section-padding gray-bg">
		<div class="container">
			<div class="col-md-12">
				<h3><span class="color">{{ Auth::user()->name }}</span>'s Order</h3>
				<div class="col-md-8">
					<h3><span class="color">Your Details</span></h3>
					 	<div class="form-group">
					 		<label for="name">Name: </label>
					 		<input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}"/>
					 	</div>
					 	<div class="form-group">
					 		<label for="email">E-Mail: </label>
					 		<input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}"/>
					 	</div>
					 	<div class="form-group">
					 		<label for="address">Address: </label>
					 		<textarea class="form-control" name="address"></textarea>
					 	</div>
					 	<div class="form-group">
					 		<label for="zipcode">ZipCode: </label>
					 		<text type="text" class="form-control" name="zipcode">
					 	</div>
					 	<div class="form-group">
					 		<label for="country">Country: </label>
					 		<select class="form-control" name="country">
					 			@foreach($countries as $country)
					 			<option value="{{ $country->code }}">{{ $country->name }}</option>
					 			@endforeach
					 		</select>
					 	</div>
					 	
				</div>
				<div class="col-md-4">
					<h3><span class="color">Purchase Details</span></h3>
					  <table class="table">
        	<tr>
        		<th>Product Name</th><th>Price</th><th>Remove</th>
        	</tr>
        	
        	@php
        	use App\Product;
        	$prices = [];
        	@endphp
        	@foreach( $carts as $cart )
        	@php
        	$product = Product::find($cart->product_id);
        	array_push($prices, $product->price);
        	@endphp
        	<tr>
        		<td>{{ $product->name }}</td> 
        		<td>{{ $product->currency }} 
        		{{ $product->price }}</td> 
        		<td><a href="{{ route('removeCart', ['id' => $cart->id]) }}"><i class="fa fa-trash"></i></a></td>
        	</tr>
        	@endforeach
        	<td>Total: </td><td></td><td><span class="color">{{ array_sum($prices) }}</span></td>
        	
        </table>
				</div>
						<div class="form-group">
					 		<input type="buttom" class="btn btn-default" value="Proceed" />
					 	</div>
			</div>
		</div>
	</section>	  
	@endsection