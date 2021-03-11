<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', "Sistem Informasi Jalan Tol")</title>
    {{-- Styles --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/nav-icon.png') }}" type="image/x-icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Noto+Sans+HK&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    {{-- script --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <div class="root">
        @yield('content')
    </div>
</body>

</html>