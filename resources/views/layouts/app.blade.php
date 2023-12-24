
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</head>
<body>

    <header>
        <nav>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>

    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
