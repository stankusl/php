<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Finer Vision">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="twitter:widgets:csp" content="on">

        <title>Finer Vision</title>
        <link rel="shortcut icon" href="{{ asset('assets/img/logos/favicon.ico') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        <script>var $url = '{{ url('/') }}';</script>
    </head>

    <body class="int-errors">
        @yield('content')
    </body>
</html>