@extends('layouts.app')
@section('content')
@php
use App\PurchaseOrder;
use App\Product;
@endphp
	<section class="section-padding gray-bg">
		<div class="container">
			<div class="row">
				<h3><span class="color">Purchase History</span></h3>
				<div class="col-md-4">
				</div>
				<div class="col-md-8">
					<table class="table">
						<tr>
							<th>Order ID</th><th>Date/Time</th><th>Product</th><th>Price</th>
						</tr>
						@foreach( $orders as $order ) 
						
							@foreach( PurchaseOrder::where('order_id', $order->id)->get() as $purchase )
							<tr>
							<td>{{ $order->id }}</td>
							<td>{{ $order->created_at }}</td>
							<td>{{ Product::find($purchase->product_id)->name }}</td>
							<td>{{ Product::find($purchase->product_id)->price }}</td>
							</tr>
							@endforeach
						
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</section>	  
	@endsection