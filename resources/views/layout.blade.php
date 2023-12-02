<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="antialiased bg-black text-white">
    <div class="p-4 sticky top-0 w-full bg-gray-300 text-gray-800">
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </nav>
    </div>

    @yield('content')
</body>

</html>
