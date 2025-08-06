<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="@yield('description', 'PT Safari Karya Maju adalah perusahaan terkemuka di bidang fabrikasi metal dan laser cutting di Indonesia, menyediakan solusi presisi dengan teknologi modern.')">
        <title>@yield('title', 'PT Safari Karya Maju')</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800,900&display=swap" rel="stylesheet" />
        <link rel="dns-prefetch" href="http://googleusercontent.com/youtube.com/">
        <link rel="dns-prefetch" href="http://googleusercontent.com/maps.google.com/">  
        
        <link rel="prefetch" href="{{ route(app()->getLocale() . '.home') }}" as="document">
        <link rel="prefetch" href="{{ route(app()->getLocale() . '.produk') }}" as="document">
        <link rel="prefetch" href="{{ route(app()->getLocale() . '.pelanggan') }}" as="document">
        <link rel="prefetch" href="{{ route(app()->getLocale() . '.sertifikasi') }}" as="document">
        <link rel="prefetch" href="{{ route(app()->getLocale() . '.hubungi-kami') }}" as="document">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        
        @include('components.navbar')
        
        <main class="relative">
            @yield('content')
        </main>

        @include('components.whatsapp')
        @include('components.footer')

        <script async src="https://www.tiktok.com/embed.js"></script>

    </body>
</html>
