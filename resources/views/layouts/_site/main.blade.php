<!DOCTYPE html>
<html class="no-js" data-theme="light" lang="en">
<!-- Mirrored from themeholy.com/html/tnews/demo/home-gadget.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Aug 2025 11:51:41 GMT -->

<head>
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="Tnews">
    <meta name="description" content="Tnews - News & Magazine HTML Template">
    <meta name="keywords" content="Tnews - News & Magazine HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('site/assets/img/lillogo.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('site/assets/img/lillogo.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('site/assets/img/lillogo.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('site/assets/img/lillogo.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('site/assets/img/lillogo.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('site/assets/img/lillogo.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('site/assets/img/lillogo.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('site/assets/img/lillogo.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('site/assets/img/lillogo.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ url('site/assets/img/lillogo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('site/assets/img/lillogo.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url('site/assets/img/lillogo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('site/assets/img/lillogo.png') }}">
    <link rel="manifest" href="{{ url('site/assets/img/lillogo.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ url('site/assets/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('site/assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ url('site/assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('site/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('site/assets/css/newStyle.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B1XKM4ZK2W"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-B1XKM4ZK2W');
    </script>

</head>

<body>
    @include('layouts._site.header')
    {{-- @include('layouts._site.menu') --}}
    @include('layouts._site.sidemenu')
    @include('layouts._site.search')
    @include('layouts._site.switcher')
    {{-- @include('layouts._site.popupSubscribe') --}}

    {{-- pegando todos os conteudos --}}
    @yield('content')
    {{-- fim  pegando todos os conteudos --}}
    @include('layouts._site.mobileMenu')
    @include('layouts._site.footer')
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div>


    {{-- script para o modal flipbook --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/turn.js@4/turn.min.js"></script> --}}
    <script type="text/javascript" src="{{ url('flipbook/assets/turn.js') }}"></script>
    <script type="text/javascript" src="{{ url('flipbook/assets/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.4.120/pdf.min.js"></script>

    {{-- Link para a publication js --}}
    <script type="text/javascript" src="{{ url('site/assets/js/publication.js') }}"></script>

    <script type="text/javascript" src="{{ url('site/assets/js/app.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('site/assets/js/main.js') }}"></script>


    {{-- Link para o video.js --}}
    <script type="text/javascript" src="{{ url('site/assets/js/video.js') }}"></script>
    {{-- Link para o modal de subscrição e para o processo de comentários --}}
    <script type="text/javascript" src="{{ url('site/assets/js/subscription.js') }}"></script>
    <script type="text/javascript" src="{{ url('site/assets/js/comments.js') }}"></script>

</body>

</html>
