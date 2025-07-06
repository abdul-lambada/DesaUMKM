<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- FontAwesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-green-50 via-blue-50 to-purple-50">
            <div class="text-center mb-8">
                <a href="/" class="inline-block">
                    <div class="w-24 h-24 bg-gradient-to-r from-green-500 to-blue-600 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <i class="fas fa-home text-white text-3xl"></i>
                    </div>
                </a>
                <h1 class="text-2xl font-bold text-gray-800 mt-4">Desa UMKM</h1>
                <p class="text-gray-600 mt-2">Portal Digital Desa</p>
            </div>

            <div class="w-full sm:max-w-md px-8 py-8 bg-white/80 backdrop-blur-sm shadow-2xl overflow-hidden sm:rounded-2xl border border-white/20">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
