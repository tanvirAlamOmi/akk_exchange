<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{ config('app.name', 'A.K. Khan Securities Ltd.') }}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="copyright" content="ariful islam">
        <meta name="robots" content="index, follow">
        <meta name="theme-color" content="#0180FF">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="icon" href="" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="{{ asset('web/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('web/css/resposive-style.css') }}">
        <link rel="stylesheet" href="{{ asset('web/css/custom.css') }}">

        @stack('styles')
        
        <meta property="og:image" content="" />
        <meta property="og:image:secure_url" content="" />
        <meta property="og:image:type" content="image/webp" />
        <meta property="og:image:width" content="" />
        <meta property="og:image:height" content="" />
        <meta property="og:image:alt" content="" />

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </head>
    <body>

        <div id="overlay">
            <div class="cv-spinner">
                <span class="spinner"></span>
            </div>
        </div>

        <!-- popup start -->

       
        @include('web.popup-modal')

        <!-- popup end -->

        @include('web.includes.navbar')

        @include('dashboard.includes.toast-alert')

        @yield('web_content')

        @include('web.includes.footer')
    </body>
    <script type="text/javascript" src="{{ asset('web/js/jquery-3.7.0.min.js') }}"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('web/js/script.js') }}" type="text/javascript">  </script>

    <script type="text/javascript">
        $('.lv-alert').delay(3000).fadeOut('slow');
    </script>

    <!-- JavaScript to show the modal -->
    <script>
        $(document).ready(function () {
            $('.numeric_input').attr('onkeyup',"this.value=this.value.replace(/[^0-9:]/g,'');");
            var fifteenMinutes = 15 * 60 * 1000; // 15 minutes in milliseconds
            var popupViewedTime = localStorage.getItem('popup_viewed_time');

            if (!popupViewedTime || (Date.now() - popupViewedTime > fifteenMinutes)) {
                localStorage.setItem('popup_viewed', 'true');
                localStorage.setItem('popup_viewed_time', Date.now());
                @if(isset($popup))
                    $('#popupModal').modal('show');
                @endif
            }

            // Close the modal when close button is clicked
            $('.close').click(function () {
                $('#popupModal').modal('hide');
            });
        });
    </script>
    @stack('scripts')
</html>
