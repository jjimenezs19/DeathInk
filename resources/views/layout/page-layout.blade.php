<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="ie9">    <![endif]-->

<head>
    <meta charset="utf-8">
    <title>DeathlessInk Tattoo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="format-detection" content="telephone=no">
    <!-- Style Sheet-->
    <link rel="stylesheet" type="text/css" href="/css/style.min.css" media="screen">
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;subset=latin-ext" rel="stylesheet">
    <script src="/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="/js/scripts.js"></script>
    <link href='/css/simplelightbox.css' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="/js/simple-lightbox.js"></script>

    <!--[if lt IE 9]>
    <script src="/js/html5.js"></script>
    <![endif]-->
</head>

<!-- Body -->
<body>

<!-- Header -->
@include('partials.header')

@yield('slider-image')

<!-- END Header -->

<!-- Content -->
@yield('page-content')

<!--End content -->

<!--Footer -->
@include('partials.footer')
<!--End footer -->

</body>
<!-- /Body -->
</html>
