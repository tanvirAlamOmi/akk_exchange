@php $menus = headerMenus(); @endphp
        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="left_side">
                            <img class="img-fluid" src="{{ asset('web/resources/images/Logo.png') }}" alt="#">
                            <p class="text-light">Unlocking Your Investment Potential: A. K. Khan Securities Limited - Empowering Your Financial Journey.
                            </p>
                            <ul class="social_icon">
                                <li><a  href="https://www.facebook.com/p/AKKhan-Securities-Ltd-100063628177854/" target="_blank" class="item"><ion-icon name="logo-facebook"></ion-icon></a></li>
                                <li><a href="" class="item"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                                <li><a href="" class="item"><ion-icon name="logo-twitter"></ion-icon></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5 class="footer_block_title mt-5">Pages</h5>
                        <ul class="nav_items">
                            <li><a href="">About Us</a></li>
                            <li><a href="{{ route('page','contact-us') }}">Contact</a></li>
                            <li><a href="">Career</a></li>
                            <li><a href="https://www.cdbl.com.bd/downloads.php " target="blank">Download</a></li>
                            <li><a href="">Notices</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h5 class="footer_block_title mt-5">Services</h5>
                        <ul class="nav_items"> 
                            @foreach ($menus as $menu) 
                                @if ($menu->type === 'navigation' && $menu->name === 'Services')   
                                    @foreach ($menu->submenus as $submenu) 
                                        @if ($submenu->type == 'external_link') 
                                            <li><a href="{{ $submenu->link_url }}">{{$submenu->name}}</a></li>  
                                        @else
                                            <li><a href="{{ route('page',$submenu->slug) }}">{{$submenu->name}}</a></li>  
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-md-3">

                        <h5 class="footer_block_title mt-5">Head Office</h5>

                        <p class="ofc_location">
                          <span><img src="{{ asset('web/resources/images/icon/location-pin 1.png') }}" alt=""></span>
                          <span><img src="{{ asset('web/resources/images/icon/location-pin 1.png') }}" alt=""></span>
                            Bay's Galleria (2nd Floor), 57 Gulshan Avenue, Gulshan-1, Dhaka-1212. <br><br>
                            <span><img src="{{ asset('web/resources/images/icon/location-pin 1.png') }}" alt=""></span>
                            <span><img src="{{ asset('web/resources/images/icon/location-pin 1.png') }}" alt=""></span>
                            <b>Registered Office</b>: Batali Hills, Ambagan, Chittagong-400
                        </p>

                        <h5 class="footer_block_title">Our Stakeholders</h5>
                        <div class="stackeholders">
                            <li> <img src="{{ asset('web/resources/images/BSEC.png') }}" alt=""> </li>
                            <li> <img src="{{ asset('web/resources/images/DSE.png') }}" alt=""> </li>
                            <li> <img class="w100" src="{{ asset('web/resources/images/CSE.png') }}" alt=""> </li>
                            <li> <img src="{{ asset('web/resources/images/CDBL.png') }}" alt=""> </li>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                    <hr class="footer-hr">
                      <p class="copyright">  Copyright ©2023  A. K. Khan Securities Ltd.</p>
                    </div>
                </div>
            </div>
        </footer>
