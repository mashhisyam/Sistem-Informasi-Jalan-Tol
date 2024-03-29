<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', "Sistem Informasi Jalan Tol")</title>

    {{-- Styles --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="shortcut icon" href="{{ asset('assets/images/nav-icon.png') }}" type="image/x-icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/footerStyle.css')}}">    
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />    	

    {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}



</head>

<body>
    <div class="root">

        @yield('content')

    </div>
</body>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/index.js') }}" defer></script>
<script type="text/javascript" src="jquery.js"></script>
{{-- <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script> --}}
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNhDtTH7sJu6oiEykwmloD3En7NFst9Y4&callback=initMap"
    type="text/javascript">
</script>
<script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
{{-- Fonts --}}
<link rel="preconnect" href="https://fonts.gstatic.com">
<link
    href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Noto+Sans+HK&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet">

</html>