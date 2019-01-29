@extends('layouts.app')
@section('content')
	
	<section class="section-padding gray-bg">
		<div class="container">
			<div class="col-md-10">
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
					 	<div class="form-group">
					 		<input type="buttom" class="btn btn-default" value="SUBMIT" />
					 	</div>
				</div>
				<div class="col-md-4">
					<h3><span class="color">Purchase Details</span></h3>
					
				</div>
			</div>
			<div class="col-md-2">
				
			</div>
		</div>
	</section>	  
	@endsection