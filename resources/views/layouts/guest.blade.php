<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Lab Kodikas 8 - Authentication</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gradient-to-br from-slate-900 via-slat-900 to-slate-900 text-white min-h-screen">
        <div class="min-h-screen flex flex-col items-center justify-center p-6">
            <div class="w-full sm:max-w-md">
                <!-- Logo/Brand Section -->
                <div class="text-center mb-8">
                    <h1 class="text-3xl font-bold bg-gradient-to-r from-cyan-400 via-purple-400 to-pink-400 bg-clip-text text-transparent">
                        LAB-LARAVEL-AUTH-08
                    </h1>
                </div>
                
                <!-- Main Form Container -->
                <div class="bg-black/20 backdrop-blur-xl border border-purple-500/20 shadow-2xl overflow-hidden sm:rounded-2xl px-8 py-10">
                    {{ $slot }}
                </div>
                
                <!-- Footer -->
                <div class="text-center mt-6">
                    <p class="text-purple-200 text-sm">&copy; {{ date('Y') }} <a href="https://kodikas.id">kodikas.id</a></p>
                </div>
            </div>
        </div>
    </body>
</html>
