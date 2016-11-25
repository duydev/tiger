<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang={{ config( 'app.locale' ) }} > <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang={{ config( 'app.locale' ) }} > <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang={{ config( 'app.locale' ) }} > <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang={{ config( 'app.locale' ) }} > <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- SITE META -->
    <title> {{ Theme::config( 'page-title' ) ? Theme::config( 'page-title' ).' | ' : '' }} {{ config( 'settings.sitename' ) }}</title>
    <meta name="description" content="{{ config( 'settings.description' ) }}">
    <meta name="author" content="{{ config( 'app.author' ) }}">
    <meta name="keywords" content="{{ config( 'settings.keywords' ) }}">

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
    {!! Theme::css( 'css/bootstrap.css' ) !!}
    {!! Theme::css( 'css/font-awesome.min.css' ) !!}
    {!! Theme::css( 'css/style.css' ) !!}
    <!-- CUSTOM STYLES -->
    {!! Theme::css( 'css/custom.css' ) !!}
    {!! Asset::styles() !!}
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
	@include('components.social-block')
    <!-- START SITE -->
    <div id="wrapper">
        @include('components.logo')
        @include('components.header')
        <div class="container sitecontainer single-wrapper bgw">
            @yield('content')
        </div><!-- end container -->
		@include('components.footer')
		@include('components.footer-wrap')
    </div><!-- end wrapper -->
    <!-- END SITE -->
    {{!! Theme::js( 'js/jquery.min.js' ) !!}}
    {{!! Theme::js( 'js/bootstrap.js' ) !!}}
    {{!! Theme::js( 'js/plugins.js' ) !!}}
</body>
</html>