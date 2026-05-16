<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from html.awaikenthemes.com/nextmind/ai-video-voiceover/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 May 2026 10:26:51 GMT -->

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <!-- Page Title -->
    <title>@yield('title')</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('site/images/favicon.png') }}">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="../../../fonts.googleapis.com/index.html">
    <link rel="preconnect" href="../../../fonts.gstatic.com/index.html" crossorigin>
    <link href="../../../fonts.googleapis.com/css2e409.css?family=Sora:wght@100..800&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ url('site/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="{{ url('site/css/slicknav.min.css') }}" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ url('site/css/swiper-bundle.min.css') }}">
    <!-- Font Awesome Icon Css-->
    <link href="{{ url('site/css/all.min.css') }}" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{ url('site/css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{ url('site/css/magnific-popup.css') }}">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="{{ url('site/css/mousecursor.css') }}">
    <!-- Main Custom Css -->
    <link href="{{ url('site/css/custom.css') }}" rel="stylesheet" media="screen">
</head>

<body>
    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="{{ url('site/images/loader.svg') }}" alt=""></div>
        </div>
    </div>
    <!-- Preloader End -->

    {{-- header --}}
    @include('layouts._site.header')

    {{-- #------ Alerts ------# --}}
    @include('layouts._site.alerts')

    {{-- conteudo --}}
    @yield('content')

    {{-- footer --}}
    @include('layouts._site.footer')

    <!-- Jquery Library File -->
    <script src="{{ url('site/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ url('site/js/bootstrap.min.js') }}"></script>
    <!-- Validator js file -->
    <script src="{{ url('site/js/validator.min.js') }}"></script>
    <!-- SlickNav js file -->
    <script src="{{ url('site/js/jquery.slicknav.js') }}"></script>
    <!-- Swiper js file -->
    <script src="{{ url('site/js/swiper-bundle.min.js') }}"></script>
    <!-- Counter js file -->
    <script src="{{ url('site/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ url('site/js/jquery.counterup.min.js') }}"></script>
    <!-- Magnific js file -->
    <script src="{{ url('site/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Parallax js -->
    <script src="{{ url('site/js/parallaxie.js') }}"></script>
    <!-- MagicCursor js file -->
    <script src="{{ url('site/js/gsap.min.js') }}"></script>
    <script src="{{ url('site/js/magiccursor.js') }}"></script>
    <!-- Text Effect js file -->
    <script src="{{ url('site/js/SplitText.js') }}"></script>
    <script src="{{ url('site/js/ScrollTrigger.min.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ url('site/js/SmoothScroll.js') }}"></script>
    <!-- YTPlayer js File -->
    <script src="{{ url('site/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ url('site/js/wow.min.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ url('site/js/function.js') }}"></script>

    <script>
        document.querySelectorAll('.alert-close').forEach(button => {
            button.addEventListener('click', function() {
                this.parentElement.remove();
            });
        });

        setTimeout(() => {
            document.querySelectorAll('.custom-alert').forEach(alert => {
                alert.remove();
            });
        }, 5000);
    </script>
</body>

<!-- Mirrored from html.awaikenthemes.com/nextmind/ai-video-voiceover/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 May 2026 10:27:42 GMT -->

</html>
