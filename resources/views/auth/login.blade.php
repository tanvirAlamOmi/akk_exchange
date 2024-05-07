@extends('web.index')

@section('web_content')

	<section class="login_screen">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex align-items-center justify-content-start">
                    <img class="login_img  img-fluid" src="{{ asset('web/resources/images/Login/Login.png') }}" alt="#">
                </div>

                <div class="col-12 col-md-6">
                    <form class="login_form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="section_title mb-4">
                            <h6>Welcome back</h6>
                            <h1>Account Log In</h1>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email Address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email address" required autofocus>
                            <div id="emailHelp" class="form-text"> <small>We'll never share your email with anyone else.</small> </div>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Remember Me</label>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        </div>
                        <button type="submit" class="btn site_btn btn_login_submit">Continue to Account</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
