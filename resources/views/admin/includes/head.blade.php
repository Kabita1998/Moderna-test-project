<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('public/adminpanel/assets/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('public/adminpanel/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css' ) }}  }}" rel="stylesheet"/>
    <link href="{{ asset('public/adminpanel/assets/plugins/simplebar/css/simplebar.css' ) }} " rel="stylesheet" />
    <link href="{{ asset('public/adminpanel/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css' ) }} " rel="stylesheet" />
    <link href="{{ asset('public/adminpanel/assets/plugins/metismenu/css/metisMenu.min.css' ) }} " rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('public/adminpanel/assets/css/bootstrap.min.css' ) }} " rel="stylesheet" />
    <link href="{{ asset('public/adminpanel/assets/css/bootstrap-extended.css' ) }} " rel="stylesheet" />
    <link href="{{ asset('public/adminpanel/assets/css/style.css' ) }} " rel="stylesheet" />
    <link href="{{ asset('public/adminpanel/assets/css/icons.css' ) }} " rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <!-- loader-->
    <link href="{{ asset('public/adminpanel/assets/css/pace.min.css' ) }} " rel="stylesheet" />

    <!-- Sweetalert -->
    <link rel="stylesheet" href="{{ asset('public/adminpanel/assets/css/sweetalert.css') }}">

    <!--Theme Styles-->
    <link href="{{ asset('public/adminpanel/assets/css/dark-theme.css' ) }} " rel="stylesheet" />
    <link href="{{ asset('public/adminpanel/assets/css/light-theme.css' ) }} " rel="stylesheet" />
    <link href="{{ asset('public/adminpanel/assets/css/semi-dark.css' ) }} " rel="stylesheet" />
    <link href="{{ asset('public/adminpanel/assets/css/header-colors.css' ) }} " rel="stylesheet" />

    <title>@yield('site_title')</title>
</head>
