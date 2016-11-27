<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="{{ config( 'app.locale' ) }}"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="{{ config( 'app.locale' ) }}"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="{{ config( 'app.locale' ) }}"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="{{ config( 'app.locale' ) }}"> <!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title>Techmag | Responsive Magazine Site Template</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">

    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ Theme::url( 'css/font-awesome.min.css' ) }}">
    <link rel="stylesheet" type="text/css" href="{{ Theme::url( 'css/bootstrap.css' ) }}">
    <link rel="stylesheet" type="text/css" href="{{ Theme::url( 'css/style.css' ) }}">
    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ Theme::url( 'css/custom.css' ) }}">
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
    <!-- START SITE -->
    <div id="wrapper">
        @include( 'inc.logo' )
        @include( 'inc.header' )
        @yield( 'content' )
        @include( 'inc.footer' )
        @include( 'inc.footer-wrap' )
    </div><!-- end wrapper -->
    <!-- END SITE -->
    <script src="{{ Theme::url( 'js/jquery.min.js' ) }}"></script>
    <script src="{{ Theme::url( 'js/bootstrap.js' ) }}"></script>
    <script src="{{ Theme::url( 'js/plugins.js' ) }}"></script>
</body>
</html>