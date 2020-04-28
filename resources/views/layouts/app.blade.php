<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sparkle Kids') }}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('modules/bootstrap-social/bootstrap-social.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- General CSS Files -->
    {{-- <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('modules/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/jquery-selectric/selectric.css') }}">

    <link rel="stylesheet" href="{{ asset('modules/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css') }}">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');

    </script>
    <!-- /END GA -->
</head>



<body class="layout-3">

    <div id="app">
        <div class="main-wrapper container">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar" style="border:0px solid red!important;">
                <a href="index.html" class="navbar-brand">Sparkle Kids Admin</a>


            </nav>
        </div>
        <div class="clearfix" style="clear:both; padding-top:100px;"></div>

        <nav class="navbar navbar-expand-md bg-dark navbar-dark ml-auto">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">

                <ul class="navbar-nav" style="height:auto!important;">
                     <li class="dropdown">
                        <a class="nav-link nav-link-lg nav-link-user"
                            href="{{ route('albums.index') }}">Albums</a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link nav-link-lg nav-link-user"
                            href="{{ route('testimonials.index') }}">Testimonial</a>
                    </li>

                </ul>
            </div>
        </nav>


    </div>



    <div class="container-fluid" style="padding-top:100px;">
        @yield('content')
    </div>
    <footer class="main-footer">
        <div class="footer-left">
            Copyright &copy; 2020 <div class="bullet"></div> Developed By <a href="http://hridhamtech.com/">Hridham
                Technologies</a>
        </div>
        <div class="footer-right">

        </div>
    </footer>

    <!-- General JS Scripts -->
    <script src="{{ asset('modules/jquery.min.js') }}"></script>
    <script src="{{ asset('modules/popper.js') }}"></script>
    <script src="{{ asset('modules/tooltip.js') }}"></script>
    <script src="{{ asset('modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('modules/moment.min.js') }}"></script>
    <script src="{{ asset('js/stisla.js') }}"></script>

    <script src="{{ asset('modules/datatables/datatables.min.js') }}"></script>
    <script
        src="{{ asset('modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}">
    </script>
    <script src="{{ asset('modules/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/page/modules-datatables.js') }}"></script>





</body>



</html>
