<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <title>Pensador</title>
    <link rel="stylesheet" type="text/css" href="mobile/css/bootstrap.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="mobile/css/fontawesome-all.min.css">
    <link rel="manifest" href="mobile/_manifest.json" data-pwa-version="mobile/set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="mobile/images/web.png">

    <meta name="theme-color" content="#6777ef"/>
<link rel="apple-touch-icon" href="{{ asset('mobile/images/web.png') }}">
<link rel="manifest" href="{{ asset('/manifest.json') }}">
</head>

<body class="theme-light">
    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>
    <div id="page">
        <div class="header header-auto-show header-fixed header-logo-center">
            <a href="/" class="header-title">Pensador</a>

            <a href="#" data-menu="menu-main" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>
            <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-dark"><i
                    class="fas fa-sun"></i></a>
            <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-light"><i
                    class="fas fa-moon"></i></a>
            <a href="#" data-menu="menu-share" class="header-icon header-icon-3"><i
                    class="fas fa-share-alt"></i></a>
        </div>

        {{-- <div id="footer-bar" class="footer-bar-6">
            <a href="index-components.html"><i class="fa fa-layer-group"></i><span>Features</span></a>
            <a href="index-pages.html" class="active-nav"><i class="fa fa-file"></i><span>Pages</span></a>
            <a href="index.html" class="circle-nav"><i class="fa fa-home"></i><span>Welcome</span></a>
            <a href="index-projects.html"><i class="fa fa-camera"></i><span>Projects</span></a>
            <a href="#" data-menu="menu-main"><i class="fa fa-bars"></i><span>Menu</span></a>
        </div> --}}

        <div class="page-content">
            <div class="page-title page-title-fixed">
                <h1>Pensador</h1>
                <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-share"><i
                        class="fa fa-share-alt"></i></a>

                <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light"
                    data-toggle-theme><i class="fa fa-moon"></i></a>
                <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark"
                    data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
                <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i
                        class="fa fa-bars"></i></a>
            </div>
            <div class="page-title-clear"></div>

            @foreach ($categorias as $item)
                <a href="frase{{ $item->id }}" class="card card-style">
                    <div class="content mt-3">
                        <div class="d-flex">
                            <div class="align-self-center">
                                <h3 class="font-24 mb-8">{{ $item->nome }}</h3>
                            </div>
                            <div class="align-self-center ms-auto">
                                <span
                                    class="btn btn-xs rounded-sm gradient-highlight font-700 text-uppercase mt-1">></span>
                            </div>
                        </div>

                    </div>
                </a>
            @endforeach

        </div>


        {{-- <div id="menu-main" class="menu menu-box-left rounded-0" data-menu-load="{{ route('menu') }}" data-menu-width="280"  data-menu-active="nav-pages"></div> --}}

        <div id="menu-share" class="menu menu-box-bottom rounded-m" data-menu-load="{{ route('menushare') }}" data-menu-height="370"></div>

        {{-- <div id="menu-colors" class="menu menu-box-bottom rounded-m" data-menu-load="menu-colors.html"  data-menu-height="480"></div> --}}
    </div>
    <script type="text/javascript" src="mobile/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="mobile/js/custom.js"></script>
    <script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>
</body>

</html>
