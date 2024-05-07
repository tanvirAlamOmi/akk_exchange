<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{ route('home') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-globe"></i></div>
                    Website
                </a>
                <a class="nav-link {{ Route::currentRouteName() == 'application-center.index' ? 'active' : '' }}" href="{{ route('application-center.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Application Center
                </a>
                <a class="nav-link {{ Route::currentRouteName() == 'users.index' ? 'active' : '' }}" href="{{ route('users.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Users
                </a>
                <a class="nav-link {{ Route::currentRouteName() == 'notices.index' ? 'active' : '' }}" href="{{ route('notices.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    Notices
                </a>
                <a class="nav-link {{ Route::currentRouteName() == 'contact-messages.index' ? 'active' : '' }}" href="{{ route('contact-messages.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                    Contact Messages
                </a>
                
                <a class="nav-link {{ Route::currentRouteName() == 'popup.edit' ? 'active' : '' }} " href="{{ route('popup.edit') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-info-circle"></i></div>
                    Popup
                </a>
                
                <a class="nav-link {{ Route::currentRouteName() == 'menus.index' || Route::currentRouteName() == 'menus.create' || Route::currentRouteName() == 'menus.edit' || Route::currentRouteName() == 'pages.index' || Route::currentRouteName() == 'pages.create' || Route::currentRouteName() == 'pages.edit' ? '' : 'collapsed' }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSettings" aria-expanded="false" aria-controls="collapseSettings">
                    <div class="sb-nav-link-icon"><i class="fas fa-wrench"></i></div>
                    Settings
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Route::currentRouteName() == 'menus.index' || Route::currentRouteName() == 'menus.create' || Route::currentRouteName() == 'menus.edit' || Route::currentRouteName() == 'pages.index' || Route::currentRouteName() == 'pages.create' || Route::currentRouteName() == 'pages.edit' || Route::currentRouteName() == 'popup.edit'? 'show' : '' }}" id="collapseSettings" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link" href="{{ route('app-info') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-info-circle"></i></div>
                            App Info
                        </a>
                        <a class="nav-link {{ Route::currentRouteName() == 'menus.index' || Route::currentRouteName() == 'menus.create' || Route::currentRouteName() == 'menus.edit' ? 'active' : '' }}" href="{{ route('menus.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                            Menus
                        </a>
                        <a class="nav-link {{ Route::currentRouteName() == 'pages.index' || Route::currentRouteName() == 'pages.create' || Route::currentRouteName() == 'pages.edit' ? 'active' : '' }}" href="{{ route('pages.index') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </nav>
</div>