<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="description"
        content="Explore uma coleção inspiradora de frases e citações com nosso aplicativo pensador">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">
    <title>Pensador</title>
    <link rel="stylesheet" type="text/css" href="mobile/css/bootstrap.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="mobile/css/fontawesome-all.min.css">
    <!--<link rel="manifest" href="mobile/_manifest.json" data-pwa-version="mobile/set_in_manifest_and_pwa_js">-->

       <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">

    <meta name="theme-color" content="#6777ef"/>
        <link rel="manifest" href="_manifest.json">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<!--<link rel="apple-touch-icon" href="{{ asset('mobile/images/web.png') }}">-->
<!--<link rel="manifest" href="manifest.json">-->
<!-- Coloque esta linha antes do </head> -->
<script>
  if ('Notification' in window) {
    Notification.requestPermission().then(permission => {
      if (permission === 'granted') {
        console.log('Permissão para notificações push concedida.');
      } else {
        console.log('Permissão para notificações push negada.');
      }
    });
  }
</script>

</head>


<body class="theme-light">
    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>
    <div id="page">
        <div class="header header-auto-show header-fixed header-logo-center">
            <a href="/" class="header-title">Pensador</a>

            <a href="#" data-menu="menu-main" id="install-button" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>
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
                 <button class="btn btn-primary btn-sn" id="install-button" style="display: none;">Instalar o App</button>
                <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-share"><i
                        class="fa fa-share-alt"></i></a>

                <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light"
                    data-toggle-theme><i class="fa fa-moon"></i></a>
                <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark"
                    data-toggle-theme><i class="fa fa-lightbulb color-yellow-dark"></i></a>
                <a href="#" class="page-title-icon shadow-xl bg-theme color-theme"id="install-button" data-menu="menu-main"><i
                        class="fa fa-bars"></i></a>
            </div>
            <div class="page-title-clear"></div>
             <button class="btn btn-primary btn-sn" id="install-button" style="display: none;">Instalar o App</button>


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
        
        <button class="btn btn-primary btn-sn" id="install-button" style="display: none;">Instalar o App</button>

        <div id="menu-install-pwa-android" class="menu menu-box-bottom rounded-m">
            <img class="mx-auto mt-4 rounded-m" src="apple-touch-icon.png" alt="img" width="90">
            <h4 class="text-center mt-4 mb-2">Pensador no seu ecrã inicial</h4>
            <p class="text-center boxed-text-xl">
                Instale o Pensador na sua tela inicial e acesse-o como um aplicativo normal. Realmente é simples assim!
            </p>
            <div class="boxed-text-l">
                <a href="#" class="pwa-install mx-auto btn btn-m font-600 bg-highlight">Adicionar ao ecrã inicial</a>
                <a href="#"
                    class="pwa-dismiss close-menu btn-full mt-3 pt-2 text-center text-uppercase font-600 color-red-light font-12 pb-4 mb-3">Talvez
                    tarde</a>
            </div>
        </div>

        <div id="menu-install-pwa-ios" class="menu menu-box-bottom rounded-m">
            <div class="boxed-text-xl top-25">
                <img class="mx-auto mt-4 rounded-m" src="apple-touch-icon.png" alt="img" width="90">
                <h4 class="text-center mt-4 mb-2">Pensador no seu ecrã inicial</h4>
                <p class="text-center ms-3 me-3">
                Instale o Pensador na sua tela inicial e acesse-o como um aplicativo normal. Realmente é simples assim!
                </p>
                <a href="#"
                    class="pwa-dismiss close-menu btn-full mt-3 text-center text-uppercase font-700 color-red-light opacity-90 font-110 pb-5">Talvez
                    tarde</a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="mobile/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="mobile/js/custom.js"></script>
    <script src="sw.js"></script>
    <script>
        // Verificar se o navegador suporta Service Workers
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/sw.js').then(registration => {
                    console.log('Service Worker registrado com sucesso:', registration);
                }).catch(error => {
                    console.error('Falha ao registrar o Service Worker:', error);
                });
            });
        }

        // Verificar se a instalação é possível e mostrar o botão de instalação
        window.addEventListener('beforeinstallprompt', event => {
            event.preventDefault(); // Evitar que o prompt de instalação padrão seja exibido
            const installButton = document.getElementById('install-button');
            installButton.style.display = 'block';

            installButton.addEventListener('click', () => {
                event.prompt(); // Exibir o prompt de instalação customizado
                event.userChoice.then(choiceResult => {
                    if (choiceResult.outcome === 'accepted') {
                        console.log('Usuário aceitou instalar o PWA.');
                        installButton.style.display = 'none'; // Esconder o botão após a instalação
                    } else {
                        console.log('Usuário recusou instalar o PWA.');
                    }
                });
            });
        });
    </script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script>

<!-- Adicione esta linha no <head> ou no final do <body> -->
<script>
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('/sw.js').then(registration => {
        console.log('Service Worker registrado com sucesso:', registration);
      }).catch(error => {
        console.error('Falha ao registrar o Service Worker:', error);
      });
    });
  }
</script>

<!-- Adicione esta linha antes do </head> -->
<script>
  if ('Notification' in window) {
    Notification.requestPermission().then(permission => {
      if (permission === 'granted') {
        // Permissão concedida, registre o serviço worker
        if ('serviceWorker' in navigator) {
          window.addEventListener('load', () => {
            navigator.serviceWorker.register('/sw.js').then(registration => {
              console.log('Service Worker registrado com sucesso:', registration);
            }).catch(error => {
              console.error('Falha ao registrar o Service Worker:', error);
            });
          });
        }
      }
    });
  }
</script>



</body>

</html>
