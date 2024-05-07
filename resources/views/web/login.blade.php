@extends('web.index')

@section('web_content')

<section class="login_screen">
    <div class="container">
        <div class="row">
            <div class="col d-flex align-items-center justify-content-end">
                <img class="login_img  img-fluid" src="resources/images/login_illustratioin.jpg" alt="#">
            </div>


            <div class="col">
                <form class="login_form">
                    <div class="section_title mb-4">
                        <h6>Welcome back</h6>
                        <h1>Account Log In</h1>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text"> <small>We'll never share your email with anyone else.</small> </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn site_btn btn_login_submit">Continue to Account</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
