@extends('web.index')

@section('title', 'Brokerage Service')

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
				<h1 class="equity-title">Brokerage Service</h1>
				</div>
			</div>
			<div class="row pb-5">
				<div class="col-md-6">
						<img class="img-fluid" src="{{asset('web/resources/images/services/Broker.png')}}" alt="equity-people">
				</div>
				<div class="col-md-6">
						
						<p class="equity-p">A. K. Khan Securities Limited is dedicated to delivering excellence in brokerage services, offering exciting prospects to both individual and institutional investors. Regardless of your trading frequency or the size of your account, entrusting us with your investments ensures you receive the utmost care and attention. We are committed to providing unparalleled service and opportunities that align with your financial aspirations. With A. K. Khan Securities, your investment journey is in safe hands.</p>
				
				
					</div>
			</div>
		
		</div>
	</main>
@endsection