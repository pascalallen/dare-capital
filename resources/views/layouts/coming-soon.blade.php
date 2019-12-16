<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/b05f5595ec.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="app">

    <main class="mb-5">
        <div class="container">
            <div class="col-4 offset-4 h-100 m-auto">
                <h1 class="display-4 text-muted">Coming Soon</h1>
            </div>
        </div>
    </main>

</div>
</body>
</html>
