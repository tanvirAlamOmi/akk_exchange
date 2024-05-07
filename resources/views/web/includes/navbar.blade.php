@php $menus = headerMenus(); @endphp
<div class="top_bar">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="top_bar_action text-start">
                    <li class="pe-2"><a href="#"><ion-icon name="call-outline"></ion-icon> (+88-02)-8831279</a></li>
                    <li class="pe-2"><a href="#"><ion-icon name="time-outline"></ion-icon> 10:00AM - 4:00PM</a></li>
                </ul>
            </div>
            <div class="col d-none d-md-block">
                <ul class="top_bar_action text-end">
                    <li><a href="https://www.facebook.com/p/AKKhan-Securities-Ltd-100063628177854/" target="_blank" class=""><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li><a href="" class=""><ion-icon name="logo-linkedin"></ion-icon></a></li>
                    <li><a href="" class=""><ion-icon name="logo-twitter"></ion-icon></a></li>
                    <li><a href="mailto:akkhan.corporateoffice@akkhan.com"><ion-icon name="mail-outline"></ion-icon> info@akkhansecurities.com</a></li>
                </ul>
            </div>
        </div>


    </div>
</div>

<nav class="main_nav">
    <div class="container">
        <div class="row">
            <div class="col-4 bottom-space">
                <a class="logo" href="{{ route('/') }}"> <img src="{{ asset('web/resources/images/Logo.png') }}" alt="AK Khan"> </a>
            </div>
            <div class="col-8">
                <button class="nav_mobile d-none" onclick="myFunction()">
                    <ion-icon name="menu-outline"></ion-icon>
                </button>
                <ul class="btn_fill_acount hide-mobile text-end">
                    @auth
                    @if (Auth::user()->type == 'user')
                    @php
                       $application = App\Models\BoAccount\Application::where('email', '=', Auth::user()->email)->first(); 
                    @endphp
                        <li><a href="{{ route('bo-form.client.view',$application->id) }}" class="button acount_btn">View BO Account</a></li> 
                    @else
                        <li><a href="{{ route('open-bo-account','intro') }}" class="button acount_btn">Open BO Account</a></li> 
                    @endif
                    @endauth
                    @guest
                        <li><a href="{{ route('login') }}" class="button login_btn">Login</a></li>
                    @endguest
                    @auth
                    @if(Auth::user()->type == 'system')
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                    @endif
                    @if (Auth::user()->type == 'user')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user text-light"> </i> {{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('user-profile')}}">Account</a></li>
                            <li><a class="dropdown-item" href="{{ route('view-bo-account') }}">Application</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @endauth
                </ul>
            </div>
        </div>


    </div>
    <hr>






    <div class="bottom-nav">
        <div class="container">
            <div class="row">
                <ul class="nav justify-content-end nav_web" id="megaMenu">
                <li class="nav-item">
                </li>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
                    <hr>
                    @if(!empty($menus) && count($menus) > 0)
                    @foreach($menus as $m => $menu)
                    @if(count($menu->submenus) > 0)
                    <li class="nav-item dropdown">
                        <a class="nav-link text-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">{{ $menu->name }}</a>
                        <ul class="dropdown-menu">
                            @foreach($menu->submenus as $s => $submenu)
                            @if($submenu->type == 'external_link')
                            <a class="nav-link dropdown-item text-secondary" target="_blank" aria-current="page" href="{{ $submenu->link_url }}">{{ $submenu->name }}</a>
                            @else
                            <a class="nav-link dropdown-item text-secondary" aria-current="page" href="{{ route('page',$submenu->slug) }}">{{ $submenu->name }}</a>
                            @endif
                            @endforeach

                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        @if($menu->type == 'external_link')
                        <a class="nav-link text-secondary" target="_blank" aria-current="page" href="{{ $menu->link_url }}">{{ $menu->name }}</a>
                        @else
                        <a class="nav-link text-secondary" aria-current="page" href="{{ route('page',$menu->slug) }}">{{ $menu->name }}</a>
                        @endif
                    </li>
                    @endif
                    @endforeach
                    <ul class="btn_fill_acount d-md-none d-lg-none d-xl-none d-sm-none mobile-nav text-end">
                        @guest
                        <li><a href="{{ route('open-bo-account','intro') }}" class="button acount_btn">Open BO Account</a></li>
                        <li><a href="{{ route('login') }}" class="button login_btn">Login</a></li>
                        @endguest
                        @auth
                        @if(Auth::user()->type == 'system')
                        <li class="nav-item">
                            <a class="nav-link text-danger" href="{{ route('dashboard') }}">Dashboard</a>
                        </li>
                        @endif
                        @endauth
                    </ul>
            </div>
            @endif
            <!-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                            <ul class="dropdown">
                                <li><a href="#">Corporate Profile</a></li>
                                <li><a href="#">Board of Directors</a></li>
                                <li><a href="#">Mangement Team</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                            <ul class="dropdown">
                                <li><a href="#">Brokerage Service</a></li>
                                <li><a href="#">IPO Application</a></li>
                                <li><a href="#">DP Services</a></li>
                                <li><a href="#">Margin Loan Facilities</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Platform</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Market Watch</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Download</a>
                        </li>  -->


            </ul>
        </div>
    </div>
    </div>
</nav>
<!-- ending nav -->
