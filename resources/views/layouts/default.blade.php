<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @stack('styles')
    <title>@yield('title', 'Valor padrão')</title>
</head>
<body>
    @section('sidebar')
        <div>
            <nav>
                sidebar padrao
            </nav>
        </div>
    @show

    @yield('content')

    <script src="{{ mix('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
