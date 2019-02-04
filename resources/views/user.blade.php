@extends('layouts.app')
@section('content')
	
	<section class="section-padding gray-bg">
		<div class="container">
			<div class="col-md-10">
				<h3><span class="color">{{ Auth::user()->name }}</span>'s Profile</h3>
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
					<form action="{{ route('updateUser') }}" method="POST">
						@csrf
						<input type="hidden" name="id" value="{{ Auth::user()->id }}" />
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
					 		<textarea class="form-control" name="address">{{ Auth::user()->address }}</textarea>
					 	</div>
					 	<div class="form-group">
					 		<label for="zipcode">ZipCode: </label>
					 		<input type="text" class="form-control" name="zipCode" value="{{ Auth::user()->zipCode }}" />
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
					 	<div class="form-group">
					 			@if (count($errors) > 0)
					 			@foreach($errors->all() as $error)
					 			<div class="alert alert-danger form-control">
					 				{{ $error }}
					 			</div>
					 			@endforeach
					 			@endif
					 	</div>
					 	<div class="form-group">
					 		<input type="submit" class="btn btn-default" value="SUBMIT" />
					 	</div>
					 </form>
				</div>
				<div class="col-md-4">
					   <form class="form-horizontal" method="POST" action="{{route('changePassword')}}">
                        {{ csrf_field() }}
 
                        <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="col-md-4 control-label">Current Password</label>
 
                            <div class="col-md-12">
                                <input id="current-password" type="password" class="form-control" name="current-password" required placeholder="Current Password">
 
                                @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="col-md-4 control-label">New Password</label>
 
                            <div class="col-md-12">
                                <input id="new-password" type="password" class="form-control" name="new-password" placeholder="New Password" required>
 
                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                        <div class="form-group">
                            <label for="new-password-confirm" class="col-md-4 control-label">Confirm Password</label>
 
                            <div class="col-md-12">
                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" placeholder="Confirm Password" required>
                            </div>
                        </div>
 
                        <div class="form-group">
                            <div class="col-md-12">
                                 <button type="submit" class="btn btn-primary"><span>Change</span></button>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
			<div class="col-md-2">
			</div>
		</div>
	</section>	  
	@endsection
	@section('script')
	<script>
		$(() => {

		})
	</script>
	@endsection