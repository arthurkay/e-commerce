@extends('layouts.app')
@section('content')
<section id="content">
	
	<div class="container">
		<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>Stay <span class="color"> up to speed with our recent posts</span></h3>

									<div class="col-md-10 flex-container">
										@php
										$no = 1;
										@endphp
                                        @foreach($all_blogs as $blogs)
									    <span><a href="{{ route('view_blog', ['title' => $blogs->slug, 'id' => $blogs->id]) }}"><h4>{{ $blogs->title }}</h4><p>Posted by: {{$blogs->author}}<br />On {{date_format(date_create($blogs->created_at), 'd F, Y')}}</p><br /> 
                                        <img src="{{ asset('/storage/'.$blogs->image) }}" alt="main-image" class="blog-head-image img-responsive"/></a></span><br />
									    @endforeach
										{{ $all_blogs->render() }}
									</div>
									<div class="col-md-2 articles">
									<h3>Our <span class="color"> Articles</span></h3>
									@foreach($all_blogs as $blogs)
									{{ $no++}}
									<span><a href="{{ route('view_blog', ['title' => $blogs->title, 'id' => $blogs->id]) }}">{{ $blogs->title }}</a></span><br />
									@endforeach
									{{ $all_blogs->render() }}
									</div>
								</div>  
							</div>
						</div>
	<div class="row">
				
	</div>
 
	</section>
@endsection