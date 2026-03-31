<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Default titel')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

     @include('partials.header')

    <main class="max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
       @yield('content')
    </main>

</body>
</html>