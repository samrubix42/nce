<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>{{ $title ?? 'NCE — Navodaya Council of Entrepreneurs' }}</title>
        <meta name="description" content="Shared roots. Growing together. Connect with the Navodayan entrepreneur community, explore NCE and register your business for review.">
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('images/nce-icon.png') }}">

        <!-- Authentic Typography from nceconnect.org: Satoshi, Josefin Sans & Raleway -->
        <link rel="preload" href="{{ asset('fonts/satoshi/Satoshi-Regular.woff2') }}" as="font" type="font/woff2" crossorigin>
        <link rel="preload" href="{{ asset('fonts/satoshi/Satoshi-Bold.woff2') }}" as="font" type="font/woff2" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

        <script>
            document.documentElement.classList.add('has-js');

            window.addEventListener('load', () => {
                window.setTimeout(() => {
                    if (!window.__nceMotionReady) {
                        document.documentElement.classList.remove('has-js');
                    }
                }, 2000);
            });
        </script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="bg-white text-[#102f43] font-sans antialiased min-h-screen flex flex-col selection:bg-[#147cb5] selection:text-white">
        
        <!-- Public Navigation Header -->
        <x-public.header.header />

        <!-- Main Page Content -->
        <main class="flex-1 w-full" id="main-content">
            {{ $slot }}
        </main>

        <!-- Public Footer -->
        <x-public.footer.footer />

        @livewireScripts
        <script>
            // Ensure Lucide icons render on initial load and Livewire updates
            document.addEventListener('DOMContentLoaded', () => {
                if (window.refreshLucide) window.refreshLucide();
            });
            document.addEventListener('livewire:navigated', () => {
                if (window.refreshLucide) window.refreshLucide();
            });
        </script>
    </body>
</html>
