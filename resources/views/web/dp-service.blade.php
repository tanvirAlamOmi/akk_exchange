@extends('web.index')

@section('title', 'Dp Service')

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
				<h1 class="equity-title">Dp Service</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
						<img class="img-fluid" src="{{asset('web/resources/images/equity/equity-people.png')}}" alt="equity-people">
				</div>
				<div class="col-md-6">
						<h2 class="equity-h2 mt-3">Best Approach to Security Consultancy</h2>
						<p class="equity-p">Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit .Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit </p>
				
						<div class="equity-card">
						<h3>Financial Analysis</h3>
						<p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit </p>
						</div>

						<div class="equity-card">
						<h3>Financial Analysis</h3>
						<p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit </p>
						</div>
					</div>
			</div>
			<div class="row">
				<div class="col-md-12 equity-dark-bg">
					<p>If you correspond with us via e-mail, we may gather the information in a file specific to you. We only collect the information that you provide to us. We will not sell, share, or rent the information that you share with us to others. Like many other websites,  collects information about users’ utilization and navigation of our site. This information helps us to design our site to better suit our users” needs and create a better user experience.</p>
					<p>If you correspond with us via e-mail, we may gather the information in a file specific to you. We only collect the information that you provide to us. We will not sell, share, or rent the information that you share with us to others. Like many other websites,  collects information about users’ utilization and navigation of our site. This information helps us to design our site to better suit our users” needs and create a better user experience.</p>
				</div>
			</div>
		</div>
	</main>
@endsection