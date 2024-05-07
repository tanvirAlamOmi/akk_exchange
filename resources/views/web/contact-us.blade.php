@extends('web.index')

@section('title', 'Contact Us')

@section('web_content')

<!-- Hedaer of Page -->
<header class="page_header" style="background-image: url({{ asset('web/resources/images/contact/contact_hd.jpg');
}});">
	<div class="container">
		<h1 class="text-light text-center"> Contact Us </h1>
	</div>
</header>






<section class="contact-us-area">
	<div class="container">
		<div class="contact-infos row">
			<div class="col-12 col-lg-4">
				<div class="contact-info">
					<div class="contact-info-icon">
						<svg width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M29.9688 20C29.9688 20.203 29.9298 20.395 29.8739 20.578L20.9781 11L29.9688 4V20ZM3.5523 21.946L12.5669 12.33L15.9833 14.915L19.2519 12.314L28.4144 21.946C28.2715 21.979 3.69515 21.979 3.5523 21.946ZM1.99792 20V4L10.9885 11L2.09282 20.578C2.03688 20.395 1.99792 20.203 1.99792 20ZM28.9698 2L15.9833 12L2.99688 2H28.9698ZM27.9708 0H3.99583C1.78913 0 0 1.791 0 4V20C0 22.209 1.78913 24 3.99583 24H27.9708C30.1775 24 31.9667 22.209 31.9667 20V4C31.9667 1.791 30.1775 0 27.9708 0Z" fill="white" />
						</svg>
					</div>
					<h3 class="contact-info-title">Mail Address</h3>
					<div class="contact-info-details">
						akkhan.corporateoffice@akkhan.com
						<br />
						(+88-02)-8833510
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="contact-info">
					<div class="contact-info-icon">
						<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M11.1019 13.5238C10.2984 12.7195 11.795 10.0135 11.795 10.0135C12.2539 8.97357 12.0284 7.4324 11.2862 6.56524L7.96265 2.68199C7.22275 1.81748 5.97123 1.76904 5.17106 2.57005L2.88154 4.86196C1.47309 6.27187 2.00497 8.97096 2.73519 10.8082C2.73519 10.8082 3.66057 13.889 10.8774 21.1134C18.0942 28.3377 21.1718 29.264 21.1718 29.264C23.0071 29.995 25.7034 30.5275 27.1119 29.1175L29.4014 26.8256C30.2015 26.0246 30.1532 24.7718 29.2895 24.0311L25.4103 20.7041C24.5441 19.9611 23.0045 19.7354 21.9657 20.1948C21.9657 20.1948 19.1443 21.5747 18.3408 20.7703L14.7804 17.2062L11.1019 13.5238Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</div>
					<h3 class="contact-info-title">Phone Number</h3>
					<div class="contact-info-details">
						(+88-02)-8833510
						<br />
						+ (13) 8833578
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="contact-info">
					<div class="contact-info-icon">
						<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M28 13.3333C28 22.6666 16 30.6666 16 30.6666C16 30.6666 4 22.6666 4 13.3333C4 10.1507 5.26428 7.09847 7.51472 4.84803C9.76516 2.59759 12.8174 1.33331 16 1.33331C19.1826 1.33331 22.2348 2.59759 24.4853 4.84803C26.7357 7.09847 28 10.1507 28 13.3333Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
							<path d="M16 17.3333C18.2091 17.3333 20 15.5425 20 13.3333C20 11.1242 18.2091 9.33331 16 9.33331C13.7909 9.33331 12 11.1242 12 13.3333C12 15.5425 13.7909 17.3333 16 17.3333Z" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</div>
					<h3 class="contact-info-title">Location</h3>
					<div class="contact-info-details">
						Bay’s Galleria (2nd Floor),57, Gulshan Avenue,
						<br />Gulshan-1 Dhaka-1212, Bangladesh
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-8">
				<div class="contact-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7299.561747358249!2d90.37506720000003!3d23.826389899999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1677567998814!5m2!1sen!2sbd" width="100%" height="100%" style="border-radius: 12px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					<div class="address-card-info row">
						<div class="col-12 col-lg-6">
							<div class="address-card">
								<h4>Office Address:</h4>
								<div>
									<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M28 13.3333C28 22.6666 16 30.6666 16 30.6666C16 30.6666 4 22.6666 4 13.3333C4 10.1507 5.26428 7.09847 7.51472 4.84803C9.76516 2.59759 12.8174 1.33331 16 1.33331C19.1826 1.33331 22.2348 2.59759 24.4853 4.84803C26.7357 7.09847 28 10.1507 28 13.3333Z" stroke="black" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M16 17.3333C18.2091 17.3333 20 15.5425 20 13.3333C20 11.1242 18.2091 9.33331 16 9.33331C13.7909 9.33331 12 11.1242 12 13.3333C12 15.5425 13.7909 17.3333 16 17.3333Z" stroke="black" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
									</svg>

									<span>Fazlur Rahman Center (7th floor) Plot # 72, Dilkhusha
										C/A. Dhaka – 1000</span>
								</div>
								<div>
									<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M11.1019 13.5238C10.2984 12.7195 11.795 10.0135 11.795 10.0135C12.2539 8.97357 12.0284 7.4324 11.2862 6.56524L7.96265 2.68199C7.22275 1.81748 5.97124 1.76904 5.17106 2.57005L2.88154 4.86196C1.47309 6.27187 2.00497 8.97096 2.73519 10.8082C2.73519 10.8082 3.66057 13.889 10.8774 21.1134C18.0942 28.3377 21.1718 29.264 21.1718 29.264C23.0071 29.995 25.7034 30.5275 27.1119 29.1175L29.4014 26.8256C30.2015 26.0246 30.1532 24.7718 29.2896 24.0311L25.4103 20.7041C24.5441 19.9611 23.0045 19.7354 21.9657 20.1948C21.9657 20.1948 19.1443 21.5747 18.3408 20.7703L14.7804 17.2062L11.1019 13.5238Z" stroke="black" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
									</svg>

									<span>(88 02) 7123509, 7123520, 7114818</span>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="address-card address-card-sm">
								<h4>Chittagong Office :</h4>
								<div>
									<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M28 13.3333C28 22.6666 16 30.6666 16 30.6666C16 30.6666 4 22.6666 4 13.3333C4 10.1507 5.26428 7.09847 7.51472 4.84803C9.76516 2.59759 12.8174 1.33331 16 1.33331C19.1826 1.33331 22.2348 2.59759 24.4853 4.84803C26.7357 7.09847 28 10.1507 28 13.3333Z" stroke="black" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M16 17.3333C18.2091 17.3333 20 15.5425 20 13.3333C20 11.1242 18.2091 9.33331 16 9.33331C13.7909 9.33331 12 11.1242 12 13.3333C12 15.5425 13.7909 17.3333 16 17.3333Z" stroke="black" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
									</svg>

									<span>As-Salam Tower (2nd floor) 57, Agrabad C/A
										Chittagong</span>
								</div>
								<div>
									<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M11.1019 13.5238C10.2984 12.7195 11.795 10.0135 11.795 10.0135C12.2539 8.97357 12.0284 7.4324 11.2862 6.56524L7.96265 2.68199C7.22275 1.81748 5.97124 1.76904 5.17106 2.57005L2.88154 4.86196C1.47309 6.27187 2.00497 8.97096 2.73519 10.8082C2.73519 10.8082 3.66057 13.889 10.8774 21.1134C18.0942 28.3377 21.1718 29.264 21.1718 29.264C23.0071 29.995 25.7034 30.5275 27.1119 29.1175L29.4014 26.8256C30.2015 26.0246 30.1532 24.7718 29.2896 24.0311L25.4103 20.7041C24.5441 19.9611 23.0045 19.7354 21.9657 20.1948C21.9657 20.1948 19.1443 21.5747 18.3408 20.7703L14.7804 17.2062L11.1019 13.5238Z" stroke="black" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
									</svg>

									<span>(88 031) 2526939, 2526940, 2526941</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="contact-form">
					<h4>We are here to help</h4>
					<span>Please call or email contact form and we will be happy to
						assist you.</span>
					<form class="d-inline" method="POST" action="{{ route('contact_message_store') }}">
						@csrf
						<div class="form-inputs ">
							<div class="input-container"> 
								<input class="input-field" name="name" type="text" />
								<label class="input-label">Full Name</label>
							</div>
							<div class="input-container">
								<input class="input-field" name="email" type="email" />
								<label class="input-label">Email Address</label>
							</div>
							<div class="input-container">
								<input class="input-field" name="phone" type="phone" />
								<label class="input-label">Phone Number</label>
							</div>
							<div class="input-container">
								<input class="input-field" name="bo_id" type="text" />
								<label class="input-label">BO ID Number (optional)</label>
							</div>
							<div class="input-container"> <textarea class="input-field" name="message" rows="4"></textarea>
								<label class="input-label">Your Message</label>
							</div>
							<button type="submit">Send message</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection