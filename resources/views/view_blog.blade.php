@extends('layouts.app')
@section('content')
<section id="content">
	
	<div class="container">
		<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>Read: <span class="color"> {{ $blog_title }}</span></h3>
									@php
									$image = asset("storage/".$blog->image);
									@endphp
									<div class="col-md-4">
									<img src="{{ $image }}" alt="main-image" class="blog-head-image img-responsive"/>
									<div class="image-overlay"></div>
                                <a href="{{ $image }}" title="Enlarge" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                                <br />
                                <p>Posted by: {{$blog->author}}<br />
                                On {{date_format(date_create($blog->created_at), 'd F, Y')}}<br />
								Edited on {{date_format(date_create($blog->updated_at), 'd F, Y')}} ({{$blog->editor}})<br />
								<a href="https://www.facebook.com/sharer/sharer.php?u={{route('view_blog', ['title' => $blog->slug, 'id' => $blog->id])}}" target="_blank">
                            <i class="fa fa-facebook"></i>
                             </a>

                             <a class="twitter-share-button"
                                href="https://twitter.com/intent/tweet?text={{route('view_blog', ['title' => $blog->slug, 'id' => $blog->id])}}" target="_blank">
                            <i class="fa fa-twitter"></i></a>
								</p>
									</div>
									<div class="col-md-6 blog-body">
										@php
										$no = 1;
										echo $blog->body;
										@endphp
										<br />
										<div class="fb-comments" data-href="{{url()->current()}}" data-numposts="5"></div>
									</div>
									<div class="col-md-2 articles">
									<h3>Our <span class="color"> Recent Articles</span></h3>
									@foreach($all_blogs as $blogs)
									{{ $no++}}
									<span><a href="{{ route('view_blog', ['title' => $blogs->slug, 'id' => $blogs->id]) }}">{{ $blogs->title }}</a></span><br />
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