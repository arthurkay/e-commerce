@extends('layouts.app')
@section('content')
<section id="content">
	
	<div class="container">
		<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>Get<span class="color"> in Touch</span></h3>
									<p>
										We'd <i class="fa fa-heart"></i> to hear from you, if you have anything to say, give us a  <i class="fa fa-phone"></i><br />
										Alternatively, you can just send us a Direct <i class="fa fa-envelope"></i> and we'll get right back to you.
									</p>
								</div>  
							</div>
						</div>
	<div class="row">
								<div class="col-md-6">
									<p> </p>
								  	
		   <!-- Form itself -->
		   <form id="news_form" method="post" action="{{ route('message_store') }}">
                             {{ csrf_field() }} 
		 <div class="input-field"> 
			<input type="text" name="name" class="form-control" 
			   	   id="name" required
			           data-validation-required-message="Please enter your name" />
					   <label for="name" class="">   Name </label> 
			  <p class="help-block"></p>
		   
	         </div> 	
                <div class="input-field"> 
			<input type="email" class="form-control" id="email" required name="email"
			   		   data-validation-required-message="Please enter your email" /> 
					   <label for="name" class="">   Email </label> 
	    </div> 	
			  
               <div class="input-field"> 
				 <textarea rows="10" cols="100" required name="message" class="form-control materialize-textarea" 
                       idation-required-message="Please enter your message" minlength="5" 
                       data-validation-minlength-message="Min 5 characters" 
                        maxlength="999" style="resize:none"></textarea>
						 <label for="name" class="">   Message </label> 
		  </div> 		 
	     <div id="success">
		 @if (session('success'))
		 <div class="alert alert-success">
		 {{ session('success') }}
		 </div>
		 @endif
		 @if (session('fail'))
		 <div class="alert alert-danger">
		 {{ session('fail') }}
		 </div>
		 @endif
		  </div> <!-- For success/fail messages -->
	    <button type="submit" class="btn btn-primary waves-effect waves-dark pull-right">Send</button><br />
          </form>
								</div>
								<div class="col-md-6" style="display: none;">
								</div>
							</div>
	</div>
 
	</section>
@endsection