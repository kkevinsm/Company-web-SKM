<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800,900&display=swap" rel="stylesheet" />      
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
                    
        @include('components.navbar')

        <main>
            @yield('content')
        </main>

        @include('components.footer')

        <!-- Floating WhatsApp Icon -->
        <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer" class="fixed bottom-3 left-4 z-50 flex hover:scale-110 transition-transform">
            <img src="{{ asset('images/whatsapp-icon.svg') }}" alt="WhatsApp" class="w-14 h-14">
        </a>

    </body>
</html>