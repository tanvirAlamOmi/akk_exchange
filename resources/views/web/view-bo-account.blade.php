@extends('web.index')

@section('title', 'Products')

@section('web_content')

		<!-- Hedaer of Page -->
		<header class="page_header" style="background-image: url({{ asset('web/resources/images/equity/equity-banner.jpg'); }});">
		<div class="container">
			<h1 class="text-light text-center"> Application </h1> 
		</div>
	</header>

	<!-- page contents -->
	<main>
		<div class="container mt-5">
            <div class="row justify-content-center">
                <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-intro-tab" data-bs-toggle="pill" data-bs-target="#pills-intro" type="button" role="tab" aria-controls="pills-intro" aria-selected="true">DP & BO Type</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-basic-tab" data-bs-toggle="pill" data-bs-target="#pills-basic" type="button" role="tab" aria-controls="pills-basic" aria-selected="false">Basic Information</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-bank-tab" data-bs-toggle="pill" data-bs-target="#pills-bank" type="button" role="tab" aria-controls="pills-bank" aria-selected="false">Bank Account</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-nominee-tab" data-bs-toggle="pill" data-bs-target="#pills-nominee" type="button" role="tab" aria-controls="pills-nominee" aria-selected="false">Nominee</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-response-tab" data-bs-toggle="pill" data-bs-target="#pills-response" type="button" role="tab" aria-controls="pills-response" aria-selected="false">Response</button>
                      </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-intro" role="tabpanel" aria-labelledby="pills-intro-tab"> 
                        @include('dashboard.bo-account-forms.application-details._intro')
                    </div>

                    <div class="tab-pane fade" id="pills-basic" role="tabpanel" aria-labelledby="pills-basic-tab"> 
                        @include('dashboard.bo-account-forms.application-details._first-applicant')
                        @include('dashboard.bo-account-forms.application-details._second-applicant')
                    </div>

                    <div class="tab-pane fade" id="pills-bank" role="tabpanel" aria-labelledby="pills-bank-tab">
                        @include('dashboard.bo-account-forms.application-details._bank-details')
                    </div>

                    <div class="tab-pane fade" id="pills-nominee" role="tabpanel" aria-labelledby="pills-nominee-tab">
                        @include('dashboard.bo-account-forms.application-details._first-nominee')
                        @include('dashboard.bo-account-forms.application-details._second-nominee')
                    </div>
                    
                    <div class="tab-pane fade" id="pills-response" role="tabpanel" aria-labelledby="pills-response-tab"> 
                        @include('dashboard.bo-account-forms.application-details._response') 
                    </div>
                  </div>
            </div>
		</div>
	</main>

@endsection