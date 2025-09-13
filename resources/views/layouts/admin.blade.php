<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    {{-- Tombol Toggle Sidebar (hanya tampil di mobile) --}}
    @auth
        <!-- Tombol Toggle -->
        <button id="sidebarToggle" 
            class="btn btn-primary d-lg-none position-fixed m-3" 
            style="z-index: 1000;">
            <i class="bi bi-chevron-double-right"></i>
        </button>

        {{-- Sidebar --}}
        @include('components.sidebar')
    @endauth

    {{-- Konten Utama --}}
    <main class="main-content-admin">
        @yield('content')
    </main>
</body>
</html>
