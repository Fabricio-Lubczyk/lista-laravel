<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Lista Laravel')</title>
</head>
<body>
    <header>
        <h1>Lista Laravel</h1>
        @include('partials.menu')
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
