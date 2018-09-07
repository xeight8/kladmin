<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'KL Admin')</title>

        <link rel="stylesheet" type="text/css" href="{{ kladmin_asset('css/kladmin.css')}} ">
        <link rel="stylesheet" type="text/css" href="{{ kladmin_asset('css/custom.kladmin.css')}} ">
        @stack('styles')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>
    <body>

    	@yield('body')

    </body>

    <script type="text/javascript" src="{{ kladmin_asset('js/kladmin.js') }}"></script>
    @stack('scripts')
</html>
