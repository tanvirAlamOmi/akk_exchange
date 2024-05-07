@extends('web.index')

@section('title', 'Corporate Profile')

@section('web_content')

	<!-- Hedaer of Page -->
	<header class="page_header" style="background-image: url({{ asset('web/resources/images/banner_static.png')  }});">
		<div class="container">
			<h1 class="text-light text-center"> Corporate Profile </h1>
		</div>
	</header>

	<!-- page contents -->
	<main>
		<section class="profile_company">
            <div class="container">
                <div class="section_title text-center p-3 mb-5">
                    <h6 class="">About our</h6>
                    <h1 class=""> Corporate Profile</h1>
                </div>	


                <div class="p-5 mb-5 rounded" style="background-image: url({{ asset('web/resources/images/profile-company.jpg')  }});">
                    <p class="text-dark">
                        At A. K. Khan Securities Limited, we offer a seamless trading experience for investors. Here is why investors like you should choose us as your trusted partner in making investments in capital market: 
                    </p>
                        <ul class="d-block text-dark">
                            <li>Expertise and Support: Our seasoned financial experts provide guidance for informed investment decisions.;</li>
                            <li>Personalized Approach: Your financial goals are unique, and so is our approach. We take the time to understand your objectives, risk tolerance, and preferences. Our tailored investment strategies are designed to align with your aspirations, ensuring a personalized path to success.;</li>
                            <li>Transparency and Trust: We value transparency as the cornerstone of our relationship with clients. Your trust is our most important asset, and we work tirelessly to maintain it. Our robust security measures protect your investments and personal information.;</li>
                            <li>Diverse Investment Options: Access a wide range of investment opportunities, including equities, mutual funds, bonds, ETFs, and more in the Main Board, SME Board, ATB of both stock exchanges- DSE and CSE.;</li>
                            <li>IPO Participation: Get access to upcoming Initial Public Offerings (IPOs) to invest in promising companies.;</li>
                            <li>Competitive Pricing: Transparent and competitive brokerage fees to maximize your returns on investments.; </li>
                            <li>Customer Support: Your investment success is our priority. Our dedicated customer support team is available to assist you with any inquiries, technical issues, or investment-related questions, ensuring a seamless and hassle-free experience.; </li>
                        </ul>   
                    <p class="text-dark">
                        Start your investment journey with A. K. Khan Securities Limited today!
                    </p>
                </div>
 
            </div>
        </section>
	</main>

@endsection