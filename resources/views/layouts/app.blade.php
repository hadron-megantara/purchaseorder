<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KangKoding') }}</title>

    <!-- Styles -->
    <link rel="shortcut icon" type="image/png" href="/img/icon/icon.png"/>
    <!-- Styles -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/header.css" rel="stylesheet">
    <link href="/css/footer.css" rel="stylesheet">
    <link href="/css/jquery-ui.min.css" rel="stylesheet">
    <link href="/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="/css/highcharts.css" rel="stylesheet">
    <link href="/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="/css/core.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/login.css" rel="stylesheet">
    <link href="/css/magnific-popup.css" rel="stylesheet">
    <link href="/css/nivo-slider.css" rel="stylesheet">
    <link href="/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/style-customizer.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

    <script src="/js/jquery-1.12.4.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/jquery.priceformat.min.js"></script>
    <script src="/js/highstock.js"></script>
    <script src="/js/spin.min.js"></script>

    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body id="body">
    @include('includes.header')
    @yield('content')
    @include('includes.footer')

    <script src="/js/ajax-mail.js"></script>
    <script src="/js/moment.js"></script>
    <script src="/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/js/dataTables.bootstrap.min.js"></script>
    <script src="/js/dataTables.jqueryui.min.js"></script>
    <script src="/js/headroom.min.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/jquery.meanmenu.js"></script>
    <script src="/js/jquery.nivo.slider.pack.js"></script>
    <script src="/js/jquery.priceformat.min.js"></script>
    <script src="/js/moment-with-locales.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="/js/spin.min.js"></script>
    <script src="/js/style-customizer.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>
