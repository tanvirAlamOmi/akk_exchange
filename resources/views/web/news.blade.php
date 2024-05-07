@extends('web.index')

@section('title', 'News')

@php
	$limit = 10;
    $notices = getAllNotices($limit);
@endphp

@section('web_content')

<!-- Hedaer of Page -->
<header class="page_header" style="background-image: url({{ asset('web/resources/news/newsbg.jpg'); 
}});">
	<div class="container">
		<h1 class="text-light text-center"> News </h1>
	</div>
</header>

<!-- page contents -->
<main>
	<div class="container mt-5">

		<div class="row">
				
			@if(!empty($notices) && count($notices) > 0)
				@foreach ($notices as $i => $notice)

					<!-- Featured Blog Post --> 
					@if ($i == 0) 
						<div class="row mb-5">
							<a href="{{ route('notice-show', $notice->id) }}">  
								<div class="col">
									<div class="f-news-card">
										<img src="{{ !empty($notice->image) ? asset('img-contents/notice-images/'.$notice->image) : '' }}" alt="Featured Blog" class="f-news-img img-fluid">
										<div class="f-news-card-body">
											<span class="f-news-time">{{dateTimeAsReadable($notice->updated_at, 'F d, Y')}}</span>
											<h1 class="f-news-card-title"> {{$notice->title}} </h1>
											<p class="f-news-card-text"> {!!Str::limit( $notice->description, 150) !!} </p>
											<a href="#" class="f-news-readmore">Read More</a>
										</div>
									</div>
								</div>
							</a>
						</div>
						@else

					<!-- News Cards -->
						<div class="col-md-4 mb-4 row">
							<a href="{{ route('notice-show', $notice->id) }}">  
								<div class="news-card">
									<img src="{{ !empty($notice->image) ? asset('img-contents/notice-images/'.$notice->image) : '' }}" alt="Featured Blog" class="f-news-img img-fluid">
									<div class="news-card-body">
										<span class="news-time">{{dateTimeAsReadable($notice->updated_at, 'F d, Y')}}</span>
										<h5 class="news-card-title"> {{$notice->title}} </h5>
										<p class="news-card-text">{!!Str::limit( $notice->description, 150) !!} </p>
									</div>
								</div>
							</a>
						</div>  
					@endif      
				@endforeach
			@endif
			
		</div>
	
	<!-- Pagination -->
	{{  $notices->links('web.pagination') }}

	</div>
</main>

@endsection