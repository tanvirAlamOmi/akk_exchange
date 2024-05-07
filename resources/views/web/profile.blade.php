@extends('web.index')

@section('title', 'Products')

@section('web_content')

		<!-- Hedaer of Page -->
		<header class="page_header" style="background-image: url({{ asset('web/resources/images/equity/equity-banner.jpg'); }});">
		<div class="container">
			<h1 class="text-light text-center"> Profile </h1> 
		</div>
	</header>

	<!-- page contents -->
	<main> 
        <div class="container m-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">User Profile</h5>
                            <p class="card-text">Username: {{Auth::user()->name}}</p>
                            <p class="card-text">Mobile: {{Auth::user()->mobile_no}}</p>
                            <p class="card-text">Email: {{Auth::user()->email}}</p>
                         </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Change Name and Password</h5>
                            <form method="POST" action="{{ route('profile-update') }}">
                                @csrf
                                {{-- <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{Auth::user()->id}}"> --}}

                                <div class="mb-3">
                                    <label for="name" class="form-label">New Username</label>
                                    <input type="text" class="form-control" id="name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="currentPassword" class="form-label">Current Password</label>
                                    <input type="password" class="form-control" id="currentPassword" name="currentPassword">
                                </div>
                                <div class="mb-3">
                                    <label for="newPassword" class="form-label">New Password</label>
                                    <input type="password" class="form-control" id="newPassword" name="newPassword">
                                </div>
                                <div class="mb-3">
                                    <label for="confirmPassword" class="form-label">Confirm New Password</label>
                                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                                </div>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</main> 
@endsection