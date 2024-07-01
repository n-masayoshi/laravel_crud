<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config("app.name"), 'Laravel' }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <header class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="/" class="navbar-brand">{{ config("app.name") }}</a>
        </div>
    </header>
    <div class="container py-4">
        @yield("content")
    </div>
</body>
</html>
