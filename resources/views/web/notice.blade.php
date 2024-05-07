@extends('web.index')

@section('title', 'Corporate Profile')

@section('web_content')

	<!-- Hedaer of Page -->
	<header class="page_header" style="background-image: url({{ asset('web/resources/images/banner_static.png')  }});">
		<div class="container">
			<h1 class="text-light text-center"> Notice </h1>
		</div>
	</header>

	<!-- page contents -->
	<main>
		<section class="profile_company">
            <div class="container">
                <div class="section_title text-center p-3 mb-5"> 
                    <h1 class=""> {{$notice->title}}</h1> 
                </div>	

                <div class="text-center m-4">
                    <img src="{{ !empty($notice->image) ? asset('img-contents/notice-images/'.$notice->image) : '' }}" alt="{{ !empty($notice->image) ? 'Image' : 'No Image Found' }}" class="img-fluid shadow" width="750rem">
                    {{dateTimeAsReadable($notice->updated_at, 'F d, Y')}}
                </div>
                <div class="p-5 mb-5 rounded" style="background-image: url({{ asset('web/resources/images/profile-company.jpg')  }});">
                    <p class="text-dark">
                        {!!$notice->description!!}
                     </p> 
                </div>
 
            </div>
        </section>
	</main>

@endsection