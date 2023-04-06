<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>Azures BootStrap</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('template/styles/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/styles/style.css') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/fonts/css/fontawesome-all.min.css') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('template/app/icons/icon-192x192.png') }}">

    @yield('styles')
</head>

<body class="theme-light" data-highlight="blue2">

    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>

    <div id="page">
{{-- 
        <!-- header and footer bar go here-->
        @include('partials.navbar') --}}
        <!-- div page content-->
        <div class="page-content">
          @include('partials.header')
            @yield('content')

            <!-- footer and footer card-->
            {{-- <div class="footer" data-menu-load="menu-footer.html"></div> --}}
        </div>
        <!-- end of page content-->


        {{-- <div id="menu-share" class="menu menu-box-bottom menu-box-detached rounded-m"
            data-menu-load="menu-share.html" data-menu-height="420" data-menu-effect="menu-over">
        </div>

        <div id="menu-highlights" class="menu menu-box-bottom menu-box-detached rounded-m"
            data-menu-load="menu-colors.html" data-menu-height="510" data-menu-effect="menu-over">
        </div>

        <div id="menu-main" class="menu menu-box-right menu-box-detached rounded-m" data-menu-width="260"
            data-menu-load="menu-main.html" data-menu-active="nav-welcome" data-menu-effect="menu-over">
        </div>

        <!-- Be sure this is on your main visiting page, for example, the index.html page-->
        <!-- Install Prompt for Android -->
        <div id="menu-install-pwa-android" class="menu menu-box-bottom menu-box-detached rounded-l"
            data-menu-height="350" data-menu-effect="menu-parallax">
            <div class="boxed-text-l mt-4">
                <img class="rounded-l mb-3" src="app/icons/icon-128x128.png" alt="img" width="90">
                <h4 class="mt-3">Azures on your Home Screen</h4>
                <p>
                    Install Azures on your home screen, and access it just like a regular app. It really is that simple!
                </p>
                <a href="#"
                    class="pwa-install btn btn-s rounded-s shadow-l text-uppercase font-900 bg-highlight mb-2">Add to
                    Home Screen</a><br>
                <a href="#"
                    class="pwa-dismiss close-menu color-gray2-light text-uppercase font-900 opacity-60 font-10">Maybe
                    later</a>
                <div class="clear"></div>
            </div>
        </div>

        <!-- Install instructions for iOS -->
        <div id="menu-install-pwa-ios" class="menu menu-box-bottom menu-box-detached rounded-l"
            data-menu-height="320" data-menu-effect="menu-parallax">
            <div class="boxed-text-xl mt-4">
                <img class="rounded-l mb-3" src="app/icons/icon-128x128.png" alt="img" width="90">
                <h4 class="mt-3">Azures on your Home Screen</h4>
                <p class="mb-0 pb-3">
                    Install Azures on your home screen, and access it just like a regular app. Open your Safari menu and
                    tap "Add to Home Screen".
                </p>
                <div class="clear"></div>
                <a href="#"
                    class="pwa-dismiss close-menu color-highlight font-800 opacity-80 text-center text-uppercase">Maybe
                    later</a><br>
                <i class="fa-ios-arrow fa fa-caret-down font-40"></i>
            </div>
        </div> --}}


    </div>


    <script type="text/javascript" src="{{ asset('template/scripts/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/scripts/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/scripts/custom.js') }}"></script>

    @yield('scripts')
</body>
