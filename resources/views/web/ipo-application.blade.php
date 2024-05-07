@extends('web.index')

@section('title', 'Ipo Application')

@section('web_content')

	<!-- Hedaer of Page -->
	<header class="page_header" style="background-image: url({{ asset('web/resources/images/equity/equity-banner.jpg'); 
}});">
		<div class="container">
			<!-- <h1 class="text-light text-center"> Equity </h1> -->
		</div>
	</header>

	<!-- page contents -->
	<main>
		<div class="container">
			<div class="row">
				<div class="col">
				<h1 class="equity-title">IPO Application</h1>
				</div>
			</div>
			<div class="row pb-5">
				<div class="col-md-6">
						<img class="img-fluid" src="{{asset('web/resources/images/services/IPO.png')}}" alt="equity-people">
				</div>
				<div class="col-md-6">
						
						<p class="equity-p">Embark on an investment journey in the flourishing stock market of Bangladesh with IPO Application - your ultimate gateway to accessing and applying for exciting Initial Public Offerings. Our intuitive platform allows you to effortlessly explore the latest IPOs, analyze company profiles, and submit applications seamlessly. Don't let this chance slip away to be a part of Bangladesh's thriving investment landscape. Join IPO Application now and confidently build your portfolio for a prosperous future.</p>
				
			
					</div>
			</div>
		
		</div>
	</main>

@endsection