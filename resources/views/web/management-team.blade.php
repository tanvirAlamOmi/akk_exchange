@extends('web.index')

@section('title', 'Management Team')

@section('web_content')

	<!-- Hedaer of Page -->
	<header class="page_header" style="background-image: url({{ asset('web//resources/images/management/mg-bg.jpg')  }});">
		<div class="container">
			<h1 class="text-light text-center"> Our Management </h1>
		</div>
	</header>

	<!-- page contents -->
	<main>
		<section class="management_top">
            <!-- <div class="container mb-5"> 
                <div class="section_title">
                    <h6>Personality</h6>
                    <h1>Who is the Changemaker at A. K. Khan</h1>
                </div>

                <p class="section_text">
                    Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit 
                </p>


                <div class="row">
                    <div class="col-md-6">                        
                        <div class="row mt-5 pt-5">
                            <div class="col-1">
                                <img src="{{ asset('web//resources/images/management/mbri-question 1.png') }}" alt="">
                            </div>
                            <div class="col-8">
                              <h5 class="card-title">How this happen?</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>                           
                        
                        <div class="row mt-5">
                            <div class="col-1">
                                <img src="{{ asset('web/resources/images/management/mbri-idea 1.png') }}" alt="">
                            </div>
                            <div class="col-8">
                              <h5 class="card-title">How this happen?</h5>
                              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            </div>
                        </div>                    
                    </div>


                    <div class="col-md-6">
                        <div class="polygon_shapes">
                            <div class="text-center">
                                <img src="{{ asset('web/resources/images/management/Shamsuddin_khan.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!--  -->
            <div class="container">
                <!-- <div class="rounded bg-dark">
                    <div class="section_title text-center text-light p-3">
                        <h6 class="text-light">Board</h6>
                        <h1 class="text-light">Our Management</h1>
                    </div>
                </div> -->

               
            <!-- Profile 1-->
            <div class="row profile_card pt-5 pb-5">
                <div class="col-3">
                    <div class="img_profile">
                        <img class="circle img-fluid" src="{{ asset('web/resources/images/management/Photo_Moniruzzaman.png') }}" alt="">
                    </div>
                </div>
                <div class="col-9 align-self-center">
                    <div class="profile_book">
                        <h3>Muhammad Moniruzzaman Miah, CEO</h3>
                        <p class="text-dark">
                            
                        </p>
                        <div class="pt-2">
                            <a class="site_btn" href="javascript:void(0);" onclick="togglePopup('five');">SEE DETAILS</a>

                        </div>
                    </div>

                    <div id="popup-five" class="popup">
                        <div class="popup-content">
                            <span class="close" onclick="togglePopup('five');">&times;</span>
                            <h4>Muhammad Moniruzzaman Miah, CEO</h4>
                            <ul>
                       

                            </ul>
                        </div>
                    </div>


                </div>
            </div>
            </div>
        </section>
	</main>

@endsection