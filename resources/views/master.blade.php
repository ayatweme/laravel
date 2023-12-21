<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Master Page')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

    <header>
        <h1>Laravel Master Page</h1>
    </header>

    <nav>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2023 Laravel Master Page</p>
    </footer>

</body>
</html>
