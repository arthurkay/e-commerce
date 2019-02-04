@extends('layouts.app')
@section('content')
	
	<section class="section-padding gray-bg">
		<div class="container">
			<div class="col-md-12">
				<h3><span class="color">{{ Auth::user()->name }}</span>'s Order</h3>
				@if (session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
				@endif
				@if ( session('error') )
				<div class="alert alert-danger">
					{{ session('error') }}
				</div>
				@endif
				<div class="col-md-8">
					<h3><span class="color">Your Details</span></h3>
					<form action="{{ route('proceed') }}" method="POST">
						@csrf
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
					 		<textarea class="form-control" name="address">{{ Auth::User()->address }}</textarea>
					 	</div>
					 	<div class="form-group">
					 		<label for="zipcode">ZipCode: </label>
					 		<input type="text" class="form-control" name="zipCode" value="{{ Auth::User()->zipCode }}"/>
					 	</div>
					 	<div class="form-group">
					 		<label for="country">Country: </label>
					 		<select class="form-control" name="country">
					 			@foreach($countries as $country)
					 			<option 
					 			<?php echo (Auth::user()->country == $country->code) ? 'selected' : ''; ?>
					 			value="{{ $country->code }}">{{ $country->name }}</option>
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
        		<input type="hidden" name="products[]" value="{{ $product->id }}" />
        		<input type="hidden" name="currency[]" value="{{ $product->currency }}" />
        		<input type="hidden" name="amount[]" value="{{ $product->price }}" />
        		<td>{{ $product->currency }} 
        		{{ $product->price }}</td> 
        		<td><a href="{{ route('removeCart', ['id' => $cart->id]) }}"><i class="fa fa-trash"></i></a></td>
        	</tr>
        	@endforeach
        	<tr>
        	<td>Total: </td><td></td><td><span class="color">{{ array_sum($prices) }}</span></td>
        	</tr>
        </table>
				</div>
						<div class="form-group">
					 			@if (count($errors) > 0)
					 			@foreach($errors->all() as $error)
					 			<div class="alert alert-danger form-control">
					 				{{ $error }}
					 			</div>
					 			@endforeach
					 			@endif
					 	</div>
					 	@php
					 	$totalCost = array_sum($prices)
					 	@endphp
					 	@if ($totalCost > 0)
						<div class="form-group">
					 		<input type="submit" class="btn btn-default" value="Pay" />
					 	</div>
					 	@endif
					 </form>
					 @if (session('amount'))
					 	<form action="{{ session('url') }}" method="POST">
					 		<input type="hidden" name="amount" value="{{ session('amount') }}" />
					 		<input type="hidden" name="currency" value="{{ session('currency') }}" />
					 		<input type="hidden" name="signature" value="{{ session('signature') }}" />
					 		<input type="hidden" name="transaction_reference" value="{{ session('transaction_reference') }}" />
					 		<input type="hidden" name="channel_id" value="{{ session('channel_id') }}" />
					 		<input type="hidden" name="test" value="{{ session('test') }}" />
					 		<div class="form-group">
					 		<input type="submit" class="btn btn-default" value="Proceed" />
					 		</div>
					 	</form>
					 @endif
					</div>
					</div>
	</section>	  
	@endsection