<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="twitter:widgets:csp" content="on">
        <meta property="og:title" content="Vertex"/>
        <meta property="og:image" content="http://sofia.local/2015/vertex/public/img/cftr/logo.png"/>
        <meta property="og:description" content="This is the description"/>

        <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
        <style>
            /*
             *   Language selector
             */
            .language-select {background: {{ $colors->colorBg }};}
            .language-select .language-selector #select-country {color: {{ $colors->colorBg }}; border: 1px solid {{ $colors->colorBg }};}
            .logout { border-bottom: 1px solid {{ $colors->colorBg }};  color: {{ $colors->colorBg }};}

            /*
             *  Header
             */
            .main-menu ul li.active a {color: {{ $colors->colorBg }};}
            .main-menu ul li.active .lines {background-color: {{ $colors->colorBg }};}
            .main-menu ul li:hover a {color: {{ $colors->colorBg }};}
            .main-menu ul li:hover .lines {background-color: {{ $colors->colorBg }};}
            .sub-nav {background-color: {{ $colors->colorBg }};}
            .sub-nav ul li.active a {background-color: {{ $colors->colorBg }};}
            .sub-nav ul li:hover a {background-color: {{ $colors->colorBg }};}

            /*
             *  Content
             */
            h2 {color: {{ $colors->colorBg }};}
            .color-main {color: {{ $colors->colorBg }};}
            .blog-infos {background-color: {{ $colors->colorBg }};}
            .text-overlay {background-color: {{ $colors->colorBg }};}
            .button-holder a {border: 2px solid {{ $colors->colorBg }}; color: {{ $colors->colorBg }};}
            .button-holder a:hover {border: 2px solid {{ $colors->colorBg }}; color: {{ $colors->colorBg }};}
            .categoryBox-container .categoryBox {border: 2px solid {{ $colors->colorBg }};}
            .categoryBox-container .videoBox {border: 2px solid {{ $colors->colorBg }};}
            .categoryBox-container .box-title {border: 2px solid {{ $colors->colorBg }};}
            .resource-container {border: 2px solid {{ $colors->colorBg }};}
            .icon-abs {border: 2px solid {{ $colors->colorBg }};}
            .icon-abs a {border: 2px solid {{ $colors->colorBg }}; color: {{ $colors->colorBg }};}
            .icon-abs a:hover {border: 2px solid {{ $colors->colorBg }}; color: {{ $colors->colorBg }};}
            .sitemap a {color: {{ $colors->colorBg }};}
            .content .h2-hr {color: {{ $colors->colorBgHover }}; border-color: {{ $colors->colorBgHover }}; background-color: {{ $colors->colorBgHover }};}
            .blog-infos span:hover {color: {{ $colors->colorBgHover }};}
            .text-overlay span:hover {color: {{ $colors->colorBgHover }};}
            .header-image {background: url('../img/{{ $page }}/header-img.png') no-repeat;}
            .parallax-insert {background-image: url('../img/{{ $site }}/parallax-image.png');
        </style>

        @if (isset($pageName))
            <style>
                .blog-infos {
                    height: 62px;
                }
            </style>
        @else
            <style>
                .blog-infos {
                    height: 82px;
                }
            </style>
        @endif
    </head>
<body class="{{ $pageClass }}@if(isset($pageName)) page @endif">
<div id="fb-root"></div>
<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->