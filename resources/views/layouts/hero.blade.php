<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TaskHERO') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
    <header>
        @include('components.header')
    </header>

    <div class="container-fluid mt-5">
        <div class="row mt-2">
            <nav class="d-none d-md-block col-md-2 bg-light sidebar">
                @include('components.sidenav')
            </nav>
            <!-- Begin page content -->
            <main role="main" class="col-md-9 flex-shrink-0 px-1">
                @yield('content')
            </main>
        </div>
    </div>

    <footer class="footer mt-auto py-3">
        @include('components.footer')
    </footer>

    <script
        src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"
    ></script>
    <script>
        window.jQuery ||
            document.write(
                '<script src="/docs/4.4/assets/js/vendor/jquery-slim.min.js"><\/script>'
            );
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
