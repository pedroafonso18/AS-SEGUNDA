<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicação Laravel</title>
</head>
<body>
    <header>
        <h1>Minha Aplicação Laravel</h1>
        <nav>
            <a href="{{ route('pessoas.index') }}">Pessoas</a>
            <a href="{{ route('carros.index') }}">Carros</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2024 - Minha Aplicação Laravel</p>
    </footer>
</body>
</html>
