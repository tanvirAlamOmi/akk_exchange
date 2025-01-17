@extends('web.index')

@section('title', 'About Us')

@section('web_content')

	<!-- Hedaer of Page -->
	<header class="page_header" style="background-image: url({{ asset('web/resources/images/about/about_hd.jpg')  }});">
		<div class="container">
			<h1 class="text-light text-center"> About Us </h1>
		</div>
	</header>

	<!-- About Html Start -->
	<main class="about-us-area">
		<section class="about-top-info">
			<div class="container">
				<div class="row how-we-work-area align-items-center">
					<div class="col-md-6">
						<div class="section_title">
							<h6>How we work</h6>
							<h1>Best Approach to Security Consultancy</h1>
						</div>

						<div class="how-we-work">
							<p class="text-dark pb-5">Lorem ipsum dolor sit amet, ligula magna at etiam aliquip
								venenatis. Vitae sit Lorem ipsum dolor sit amet, ligula magna
								at etiam aliquip venenatis. Vitae sit
							</p>

							<div class="work-info mb-4 me-md-5 p-3">
								<img src="{{ asset('web/resources/images/about/appr-vis.png') }}"alt=""/>
								<div>
									<h4>Approach and Vision</h4>
									<small>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip </small>
								</div>
							</div>

							<div class="work-info mb-4 me-md-5 p-3">
								<img src="{{ asset('web/resources/images/about/fin-an.png') }}" alt=""/>
								<div>
									<h4>Financial Analysis</h4>
									<small>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<img
							src="{{ asset('web/resources/images/about/we-work.png') }}"
							alt=""
						/>
					</div>
				</div>

				<div class="background-info">
					<div class="section_title">
						<h1>Background</h1>
					</div>
					
					<p class="text-dark">
						Bangladesh is a young and developing nation with long history and
						culture. Over the last 20 years, Bangladesh has seen consistent
						GDP growth of above 5%. It is projected to become a middle income
						country by the year 2021. Today, Bangladesh is the 44th largest
						economy in the world. Goldman Sachs, a leading Investment Bank,
						has included Bangladesh in the next 11 countries known as the N-11
						as one of the emerging economies of the world after the BRIC
						nations of Brazil, Russia, India and China. Similarly, Price
						Waterhouse Coopers (PWC) has added Bangladesh in PWC30 list as one
						of the long term potential growth economy of the World by 2050. <br> <br>
						Its youthful 160 million people are extremely resilient and
						prepared to take on many challenges of life. Living in fertile
						riverine land, Bangladeshis are also natural entrepreneurs and
						traders. The story of one of Bangladesh’s oldest industrial
						groups, A.K. Khan & Company Ltd, is intimately woven into the
						nation’s past, present and future.
					</p>
				</div>

				<div class="row fin-consult">
					<div class="col-12 col-lg-6">
						<img src="{{ asset('web/resources/images/about/approach-img.jpg') }}" alt="" />
						<div class="play-vid">
							<svg
								width="15"
								height="18"
								viewBox="0 0 15 18"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									d="M15 9L-8.15666e-07 17.6603L-5.85621e-08 0.339745L15 9Z"
									fill="white"
								/>
							</svg>
						</div>
					</div>

					<div class="col-12 col-lg-6 mt-4 mt-lg-0 align-items-center">
						<div>
							<div class="section_title">
								<h6>About Us</h6>
								<h1>Best Approach to Financial Consultancy</h1>
							</div>

							<p>
								Its youthful 160 million people are extremely resilient and
								prepared to take on many challenges of life. Living in fertile
								riverine land, Bangladeshis are also natural entrepreneurs and
								traders. The story of one of Bangladesh’s oldest industrial
								groups, A.K. Khan & Company Ltd, is intimately woven into the
								nation’s past, present and future.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="about-insights">
			<small>Insights</small>
			<h3>What is really getting our foucs on</h3>
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-4">
						<div class="insights-info mb-4 mb-lg-0">
							<svg
								width="130"
								height="130"
								viewBox="0 0 130 130"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
							>
								<circle
									cx="65"
									cy="65"
									r="65"
									fill="#192989"
								/>
								<g clip-path="url(#clip0_692_365)">
									<path
										fill-rule="evenodd"
										clip-rule="evenodd"
										d="M43.2513 55.9375L50.6765 43.1875H80.2757L87.8587 55.9375H43.2513ZM87.8125 62.3125C87.7886 64.5135 85.2529 65.5016 83.0312 65.5C80.4701 65.4984 78.1624 63.9477 78.1624 62.3125H76.6562C76.6562 63.9206 73.8018 65.5 71.3443 65.5C68.9871 65.5 66.2459 63.8712 66.2459 62.3125H64.7015C64.7015 63.9206 61.9125 65.5 59.5569 65.5C57.0993 65.5 54.2943 64.3684 54.2943 62.3125H52.7851C52.7851 63.9158 50.3243 65.5494 47.9608 65.5494C45.5638 65.5494 43.1875 64.5135 43.1875 62.3125V59.125H87.8125V62.3125ZM86.2188 78.25H44.786L44.7812 68.6875H47.9114C49.623 68.6875 52.3372 67.1607 53.4863 64.8242C54.7757 67.0953 57.1822 68.6875 59.4804 68.6875C61.9077 68.6875 64.5804 67.2436 65.4729 65.1557C66.367 67.1942 68.984 68.6875 71.3618 68.6875C73.7206 68.6875 76.1638 66.9535 77.4005 64.5852C78.8461 66.9759 80.0127 68.6875 83.0312 68.6875C83.4982 68.6875 85.8107 68.764 86.2188 68.6875V78.25ZM86.2188 84.625C86.2188 86.3845 84.5453 87.8125 82.73 87.8125H48.2174C46.4021 87.8125 44.786 86.3845 44.786 84.625V81.4375H86.2188V84.625ZM81.6829 40H49.2645L40 55.9375V62.3125C40 64.0098 40.6104 65.865 41.5954 67.0938L41.6432 84.625C41.6432 88.1456 44.5868 91 48.2174 91H82.73C86.3606 91 89.4062 88.1456 89.4062 84.625V67.0938C90.5219 65.7805 91 64.4322 91 62.3125V55.9375L81.6829 40Z"
										fill="white"
									/>
								</g>
								<defs>
									<clipPath id="clip0_692_365">
										<rect
											width="51"
											height="51"
											fill="white"
											transform="translate(40 40)"
										/>
									</clipPath>
								</defs>
							</svg>
							<div class="focus-info">
								<span>Market Insights</span>
								<small
									>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip
									venenatis. Vitae sit Lorem ipsum dolor</small
								>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="insights-info mb-4 mb-lg-0">
							<svg
								width="130"
								height="130"
								viewBox="0 0 130 130"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
							>
								<circle
									opacity="0.2"
									cx="65"
									cy="65"
									r="65"
									fill="white"
								/>
								<path
									d="M88.8332 52L68.2498 72.5833L57.4165 61.75L41.1665 78"
									stroke="white"
									stroke-width="3"
									stroke-linecap="round"
									stroke-linejoin="round"
								/>
								<path
									d="M75.8335 52H88.8335V65"
									stroke="white"
									stroke-width="3"
									stroke-linecap="round"
									stroke-linejoin="round"
								/>
							</svg>

							<div class="focus-info">
								<div class="focus-info">
									<span>Future Insights</span>
									<small
										>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip
										venenatis. Vitae
									</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4 mb-4 mb-lg-0">
						<div class="insights-info">
							<svg
								width="130"
								height="130"
								viewBox="0 0 130 130"
								fill="none"
								xmlns="http://www.w3.org/2000/svg"
							>
								<circle
									opacity="0.2"
									cx="65"
									cy="65"
									r="65"
									fill="white"
								/>
								<path
									d="M57.2 42.4666C55.7752 42.4666 54.6 43.6418 54.6 45.0666V48.5332C54.6 49.6946 56.3507 49.6772 56.3333 48.5332V45.0666C56.3333 44.5708 56.7043 44.1999 57.2 44.1999H72.8C73.2957 44.1999 73.6667 44.5708 73.6667 45.0666V48.5332C73.6667 49.6772 75.4 49.6946 75.4 48.5332V45.0666C75.4 43.6418 74.2248 42.4666 72.8 42.4666H57.2ZM86.6528 54.5999C86.3963 54.5999 86.1588 54.7004 86.0063 54.9084L76.4729 66.1751C75.6756 67.1145 75.1643 67.7073 74.7049 68.0194C74.4172 68.2152 74.0809 68.3209 73.6649 68.3885V67.5999C73.6649 67.1197 73.2784 66.7332 72.7983 66.7332C72.3181 66.7332 71.9316 67.1197 71.9316 67.5999V68.4665H58.0649V67.5999C58.0649 67.1197 57.6784 66.7332 57.1983 66.7332C56.7181 66.7332 56.3316 67.1197 56.3316 67.5999V68.3885C55.9156 68.3192 55.5793 68.2152 55.2916 68.0194C54.8323 67.7073 54.3209 67.1145 53.5236 66.1751L43.9903 54.9084C43.8239 54.7039 43.5968 54.5964 43.3316 54.5999C42.6036 54.5999 42.1876 55.47 42.6729 56.0247L52.2063 67.2914C52.9932 68.2239 53.5531 68.9311 54.3175 69.4511C54.886 69.8376 55.5429 70.0629 56.3316 70.1531V71.0665C56.3316 71.5467 56.7181 71.9332 57.1983 71.9332C57.6784 71.9332 58.0649 71.5467 58.0649 71.0665V70.1999H71.9316V71.0665C71.9316 71.5467 72.3181 71.9332 72.7983 71.9332C73.2784 71.9332 73.6649 71.5467 73.6649 71.0665V70.1531C74.4536 70.0629 75.1105 69.8376 75.6791 69.4511C76.4417 68.9311 77.0033 68.2239 77.7937 67.2914L87.3271 56.0247C87.7951 55.5532 87.3964 54.5999 86.6511 54.5999H86.6528ZM41.6 51.1332C40.1752 51.1332 39 52.3084 39 53.7332V84.9332C39 86.358 40.1752 87.5332 41.6 87.5332H88.4C89.8248 87.5332 91 86.358 91 84.9332V53.7332C91 52.3084 89.8248 51.1332 88.4 51.1332H41.6ZM41.6 52.8666H88.4C88.8957 52.8666 89.2667 53.2375 89.2667 53.7332V84.9332C89.2667 85.4289 88.8957 85.7999 88.4 85.7999H41.6C41.1043 85.7999 40.7333 85.4289 40.7333 84.9332V53.7332C40.7333 53.2375 41.1043 52.8666 41.6 52.8666Z"
									fill="white"
								/>
							</svg>

							<div class="focus-info">
								<span>Company Insights</span>
								<small
									>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip
									venenatis</small
								>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="container">
			<div class="mission">
				<div class="row">
					<div class="col-md-6">
						<div class="section_title">
							<h1>Our Mission</h1>
						</div>
						<ul>
							<li>
								To create optimum value for all our stakeholders by adhering
								to the highest ethical standards.
							</li>
							<li>
								To pursue customer satisfaction relentlessly through
								deliverance of high quality products and services.
							</li>
							<li>
								To strive for providing employment opportunity to reduce
								unemployment.
							</li>
							<li>
								To create centers of excellence in industrial and service
								sectors through Joint Ventures.
							</li>
							<li>
								To contribute to the well being of the society by acting as a
								responsible corporate citizen through valuable CSR activities.
							</li>
						</ul>
					</div>
					<div class="col-md-6">
						<img class="img-thumbnail" src="{{ asset('web/resources/images/about/mission.png') }}" alt="" />
					</div>
				</div>
			</div>

			<div class="vision">
				<div class="row">
					<div class="col-md-6">
						<img class="img-thumbnail" src="{{ asset('web/resources/images/about/vision.png') }}" alt=""/>
					</div>
					<div class="col-md-6">
						<div class="section_title">
							<h1>Our Vision</h1>
						</div>
						<p>
							To strive for business excellence through Joint Ventures to
							match the state of the art technologies and R&D of our foreign
							partners coupled with the expertise and extensive industrial
							experience of our group to compete in the global economy. <br> <br>
							To strive for business excellence through Joint Ventures to
							match the state of the art technologies and R&D of our foreign
							partners coupled with the expertise and extensive industrial
							experience of our group to compete in the global economy. <br>	<br>
							To strive for business excellence through Joint Ventures to
							match the state of the art technologies and R&D of our
						</p>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- About Html End -->

@endsection