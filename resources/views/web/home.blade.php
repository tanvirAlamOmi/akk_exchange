@extends('web.index')

@section('title', 'Home')

@php
    $notices = getNotices(3);
@endphp

@section('web_content')

    <!-- header -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
            <img src="{{ asset('web/resources/images/Status-1.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h2>Unlock your investment potential now!</h2>
                    <p>A.K. Khan Securities Ltd.  is your gateway to success in the stock market. As a member of both Dhaka Stock Exchange Ltd. & Chittagong Stock Exchange Ltd., we have the expertise and experience to provide quality-driven brokerage services to both individual and institutional investors.</p>
                    <a class="open_account_btn" href="#">Open Account</a>
                </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('web/resources/images/Status-2.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h2>Start your journey towards financial success today!</h2>
                        <p>No matter the size of your account or how often you trade, choose A.K. Khan Securities Ltd. for reliable and trustworthy brokerage services that will help you thrive in the stock market.</p>
                        <a class="open_account_btn" href="#">Open Account</a>
                </div>
          </div>
          <div class="carousel-item">
                <img src="{{ asset('web/resources/images/Status-3.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h2>Discover a trusted partner for your investment needs!</h2>
                            <p>Our strong reputation as a sister concern of A.K. Khan & Company Ltd., one of Bangladesh's oldest and most renowned private sector organizations, speaks for itself.</p>
                            <a class="open_account_btn" href="#">Open Account</a>
                    </div>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- service Section -->
    <section class="services">
        <div class="container">
            <div class="section_title text-center">
                <!-- <h6>Services</h6> -->
                <h1>Our Services</h1>
            </div>

            <!-- Tab content -->
            <div class="services_tab ">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-one-tab" data-bs-toggle="pill" data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one" aria-selected="false"> <ion-icon name="person-circle-outline" role="img" class="md hydrated"></ion-icon> Brokerage Service</button>
                    </li>
                    {{-- <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-two-tab" data-bs-toggle="pill" data-bs-target="#pills-two" type="button" role="tab" aria-controls="pills-two" aria-selected="false"><ion-icon name="flag-outline" role="img" class="md hydrated"></ion-icon> DP Service</button>
                    </li> --}}
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-three-tab" data-bs-toggle="pill" data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-three" aria-selected="false"><ion-icon name="stats-chart-outline" role="img" class="md hydrated"></ion-icon> IPO Application</button>
                    </li>
                    {{-- <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-four-tab" data-bs-toggle="pill" data-bs-target="#pills-four" type="button" role="tab" aria-controls="pills-four" aria-selected="true"><ion-icon name="pie-chart-outline" role="img" class="md hydrated"></ion-icon> Margin Loan Facilities</button>
                    </li> --}}
                </ul>

                <div class="tab-content" id="pills-tabContent">

                    <!-- Tab 1 -->
                    <div class="tab-pane fade active show" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <img class="img-fluid" src="{{ asset('web/resources/images/services/Broker.png') }}" alt="">
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="section_text m-md-5 mt-4">
                                    <h4>Brokerage Service</h4>
                                    <p class="mb-3">
                                        A. K. Khan Securities Ltd. is working to provide quality driven brokerage services to the clients as well as new opportunities for individual and institutional investors. No matter how often you trade or how large your account is, when you trust us with your money, we promise to treat you right.                                    </p>
                                    <div class="pt-3"><a class="site_btn" href="#">Learn More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Tab 2 -->
                    {{-- <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <img class="img-fluid" src="{{ asset('web/resources/images/services/IPO-1.png') }}" alt="">
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="section_text m-md-5 mt-4">
                                    <h4>DP Service</h4>
                                    <p class="mb-3">
                                        Join thousands of satisfied investors who trust DP Service to navigate the complex world of stocks with ease. Don't miss out on lucrative opportunities - start your journey toward financial freedom today with DP Service.                                    </p>
                                    <div class="pt-3"><a class="site_btn" href="#">Learn More</a></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <!-- Tab 3 -->
                    <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <img class="img-fluid" src="{{ asset('web/resources/images/services/IPO.png') }}" alt="">
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="section_text m-md-5 mt-4">
                                    <h4>IPO Application</h4>
                                    <p class="mb-3">
                                        Looking to invest in the booming stock market of Bangladesh? Look no further than IPO Application, your gateway to accessing and applying for exciting Initial Public Offerings. With our user-friendly platform, you can easily browse through the latest IPOs, analyze company profiles, and submit your applications hassle-free. Don't miss out on this opportunity to be a part of the thriving investment landscape in Bangladesh. Join IPO Application today and start building your portfolio with confidence.                                    </p>
                                    <div class="pt-3"><a class="site_btn" href="#">Learn More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 4 -->
                    {{-- <div class="tab-pane fade active show" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <img class="img-fluid" src="{{ asset('web/resources/images/services/Margin loan.png') }}" alt="">
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="section_text m-md-5 mt-4">
                                    <h4>Margin Loan Facilities</h4>
                                    <p class="mb-3">
                                        Unlock the potential of your stock market investments with our cutting-edge Margin Loan Facilities. Designed specifically for the dynamic stock market in Bangladesh, our facilities empower you to seize profitable opportunities and maximize your returns. With flexible terms and competitive interest rates, you can leverage your existing portfolio to amplify your investment power. Don't let financial constraints hold you back from capitalizing on the market's potential - take advantage of our Margin Loan Facilities today and elevate your investment journey to new heights.                                    </p>
                                    <div class="pt-3"><a class="site_btn" href="#">Learn More</a></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Products -->
    <section class="products">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="section_title">
                        <!-- <h6>Products</h6> -->
                        <h1>Our Products</h1>
                    </div>

                    <div class="products_accordion">
                        <div class="accordion_item">
                            <div class="icon">
                                <img src="{{ asset('web/resources/images/Equity.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h4>Equity</h4>
                                <p>Equity is the amount of money that a company's owner has put into it or owns</p>
                            </div>
                        </div>

                        <div class="accordion_item">
                            <div class="icon">
                                <img src="{{ asset('web/resources/images/Bonds.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h4>Bonds</h4>
                                <p>Equity is the amount of money that a company's owner has put into it or owns</p>
                            </div>
                        </div>

                        <div class="accordion_item">
                            <div class="icon">
                                <img src="{{ asset('web/resources/images/Mutual.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h4>Mutual Funds</h4>
                                <p>Equity is the amount of money that a company's owner has put into it or owns</p>
                            </div>
                        </div>

                        <div class="accordion_item">
                            <div class="icon">
                                <img src="{{ asset('web/resources/images/Others.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h4>Others</h4>
                                <p>Equity is the amount of money that a company's owner has put into it or owns</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 col-md-6">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{ asset('web/resources/images/products/Bonds.png')}}" class="d-block w-100" alt="Bonds">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ asset('web/resources/images/products/Equity.png')}}" class="d-block w-100" alt="Equity">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ asset('web/resources/images/products/Mutual-funds.png')}}" class="d-block w-100" alt="Mutual">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ asset('web/resources/images/products/Others.png')}}" class="d-block w-100" alt="Mutual">
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Board -->
    @if(!empty($notices) && count($notices) > 0)

    <section class="news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <!-- <h6>News</h6> -->
                        <h1>Notice Board</h1>
                    </div>
                </div>

            </div>

            <div class="row">
                @if(!empty($notices) && count($notices) > 0)
                    @foreach ($notices as $notice)
                        <div class="col-md-4">
                            <a href="{{ route('notice-show', $notice->id) }}"> 
                                <div class="news_card">
                                    <img class="news_thumb" src="{{ asset('img-contents/notice-images/'.$notice->image) ?? '' }}" alt="">
                                    <div class="content">
                                        <small class="date">{{dateTimeAsReadable($notice->updated_at, 'F d, Y')}}</small>
                                        <h5 class="title">{{$notice->title}}</h5>
                                        <p class="description">{!! Str::limit( $notice->description, 150) !!}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
            @if(!empty($notices) && count($notices) >= 3)
            <div class="row mt-4">
                <div class="col-12">
                    <div class="text-center d-flex justify-content-center">
                        <a class="site_btn" href="{{ route('page','news') }}">See More ></a>
                    </div>
                </div>
            </div> 
            @endif
        </div>
    </section>
    @endif

    <!-- Management -->
    <section class="management">
        <div class="container">
            <div class="section_title text-center">
                <!-- <h6 class="text-light">Board</h6> -->
                <h1 class="text-light">Board of Directors</h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="managment_card">
                        <div class="img_thumb">
                            <img src="{{ asset('web/resources/images/management/ziauddin_khan.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h6 class="title">Chairman</h6>
                            <h5 class="name">Mr. A. M. Ziauddin Khan</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="managment_card">
                        <div class="img_thumb">
                            <img src="{{ asset('web/resources/images/management/Shamsuddin_khan.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h6 class="title">Director</h6>
                            <h5 class="name">Mr. A. K. Shamsuddin Khan</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="managment_card">
                        <div class="img_thumb">
                            <img src="{{ asset('web/resources/images/management/salahuddin_khan.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h6 class="title">Managing Director</h6>
                            <h5 class="name">Mr. Salahuddin Kasem Khan</h5>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="managment_card">
                        <div class="img_thumb">
                            <img src="{{ asset('web/resources/images/management/Abdul_mazid.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h6 class="title">Independent Director</h6>
                            <h5 class="name">Dr. Muhammad Abdul Mazid</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Direcotors -->
    <section class="directors">
        <div class="container">
            <div class="section_title text-center">
                <!-- <h6 class="">Board</h6> -->
                <h1 class="">Our Management</h1>
            </div>

            <div class="row">
                <div class="col-12 text-center p-5">
                    <div class="directors_card">
                        <img src="{{ asset('web/resources/images/directors/Photo_Moniruzzaman_New_1.png') }}" alt="#">
                        <div class="content">
                            <h4>CEO</h4>
                            <h5 class="text-dark">Muhammad Moniruzzaman Miah, CFA</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why us Section -->
    <section class="why_us">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 d-flex align-items-center">
                    <div>
                        <div class="section_title">
                            <h6 class="">A. K. Khan Securities Ltd.</h6>
                            <h1 class="">Why Us</h1>
                        </div>
                        <p class="text-dark">
                            A. K. Khan Securities Limited is dedicated to offering quality-driven brokerage services to clients, along with providing new opportunities for individual and institutional investors.</p>
                        <a class="site_btn" href="#">Open Account</a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <img class="img-fluid" src="{{ asset('web/resources/images/why/why-us.png') }}" alt="#">
                </div>
            </div>
        </div>
    </section>

@endsection
