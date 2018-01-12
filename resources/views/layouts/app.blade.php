<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>#peace_data, it's my first laravel page! \(^_^)/</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Handlee&effect=anaglyph|3d-float" rel="stylesheet">
    <script src="https://intita.com/api/dist/intita-api-client.min.js" type="text/javascript"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/css_1.css') }}" rel="stylesheet" type="text/css">

</head>
<body>
    <div id="app">
        @include('layouts.header')
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{URL::to('js/js_1.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
