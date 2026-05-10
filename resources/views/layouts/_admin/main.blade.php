<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="nxl-theme-light nxl-theme-default nxl-theme-rtl">


<!-- Mirrored from bestwpware.com/html/tf/duralux-demo/leads.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jul 2025 12:20:41 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="WRAPCODERS">
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>@yield('title')</title>
    <!--! END:  Apps Title-->

    {{-- Alerts Link --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/images/lillogo.png') }}">
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.min.css') }}">
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/daterangepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/jquery-jvectormap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/dataTables.bs5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/tagify.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/tagify-data.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/quill.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/select2-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/vendors/css/jquery.time-to.min.css') }}">
    <!--! END: Vendors CSS-->
    {{-- Font de Icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/fonts/feather-font/css/iconfont.css') }}">
    {{-- Fim da font de Icon --}}
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/theme.min.css') }}">
    <!--! END: Custom CSS-->
    <!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
    <!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
    <!--[if lt IE 9]>
   <script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
   <script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    {{-- Inicio das dependências do auhtentication --}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/myStyle.css') }}">
    {{-- fim das dependências do auhtentication --}}

    <style>
        .img-fluid {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
    <!--! BEGIN: Sweet Alert JS !-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="{{ url('assets/js/sweetalert-init.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--! END: Sweet Alert JS !-->

    {{-- editor de texto --}}

    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/46.0.2/ckeditor5.css" crossorigin>
    <link rel="stylesheet"
        href="https://cdn.ckeditor.com/ckeditor5-premium-features/46.0.2/ckeditor5-premium-features.css" crossorigin>

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
    @include('layouts._admin.header')
    @include('layouts._admin.menu')

    <main class="nxl-container">
        {{-- #------ Alerts ------# --}}
        @include('layouts._admin.alerts')

        {{-- Buscando todos os conteudos --}}
        @yield('content')

        {{-- Footer --}}
        @include('layouts._admin.footer')
    </main>
    @include('layouts._admin.theme')

     <script src="{{ url('assets/js/category.js') }}"></script>

    <!--! BEGIN: Vendors JS !-->
    <script src="{{ url('assets/vendors/js/vendors.min.js') }}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="{{ url('assets/vendors/js/daterangepicker.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/apexcharts.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/jquery.time-to.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/circle-progress.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/dataTables.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/dataTables.bs5.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/tagify.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/tagify-data.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/quill.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/select2.min.js') }}"></script>
    <script src="{{ url('assets/vendors/js/select2-active.min.js') }}"></script>

    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{ url('assets/js/common-init.min.js') }}"></script>
    <script src="{{ url('assets/js/analytics-init.min.js') }}"></script>
    {{-- <script src="{{ url('assets/js/leads-init.min.js') }}"></script>--}}
    <script src="{{ url('assets/js/proposal-init.min.js') }}"></script>
    <script src="{{ url('assets/js/dashboard-init.min.js') }}"></script>

    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{ url('assets/js/widgets-charts-init.min.js') }}"></script>
    <script src="{{ url('assets/js/theme-customizer-init.min.js') }}"></script>
    <!--! END: Theme Customizer !-->

    {{-- script do modal do relatorio --}}
    <script src="{{ url('assets/js/modal-relatorio.js') }}"></script>

</body>


<!-- Mirrored from bestwpware.com/html/tf/duralux-demo/leads.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Jul 2025 12:20:42 GMT -->

</html>
