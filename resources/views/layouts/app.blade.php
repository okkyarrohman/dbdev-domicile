<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Vite --}}
    @vite(['resources/js/app.js'])
</head>
<body>
    @include('components.navbar')

    <main class="w-100">
        @yield('content')
    </main>
</body>
</html>
