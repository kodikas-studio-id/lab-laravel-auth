<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Lab Kodikas 8 - Authentication @kodikas.id</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div x-data="{ open: false }" class="min-h-screen bg-gradient-to-br from-slate-900 via-slate-900 to-slate-900 text-gray-100 flex">
            <!-- Sidebar -->
            <aside :class="{'-translate-x-full': !open}" class="bg-black/20 backdrop-blur-xl border-r border-slate-500/20 w-64 space-y-2 py-8 px-4 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition-all duration-300 ease-in-out shadow-2xl">
                <!-- Logo/Brand -->
                <div class="px-4 mb-8">
                    <div class="text-2xl font-bold bg-gradient-to-r from-cyan-400 via-slate-400 to-pink-400 bg-clip-text text-transparent">
                        Lab Kodikas 8
                    </div>
                    <div class="text-xs text-gray-400 mt-1">Authentication</div>
                </div>
                
                <!-- Navigation -->
                <nav class="space-y-2">
                    <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-200 hover:bg-slate-500/20 hover:shadow-lg hover:shadow-slate-500/25 group {{ request()->routeIs('dashboard') ? 'bg-gradient-to-r from-slate-500/20 to-cyan-500/20 border border-slate-500/30' : '' }}">
                        <svg class="w-5 h-5 text-slate-400 group-hover:text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5a2 2 0 012-2h4a2 2 0 012 2v6h-8V5z"></path>
                        </svg>
                        <span class="font-medium">Dashboard</span>
                    </a>
                    
                    <a href="{{ route('profile.edit') }}" class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-200 hover:bg-slate-500/20 hover:shadow-lg hover:shadow-slate-500/25 group {{ request()->routeIs('profile.edit') ? 'bg-gradient-to-r from-slate-500/20 to-cyan-500/20 border border-slate-500/30' : '' }}">
                        <svg class="w-5 h-5 text-slate-400 group-hover:text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span class="font-medium">Profile</span>
                    </a>
                    
                    <a href="#" class="flex items-center space-x-3 px-4 py-3 rounded-xl transition-all duration-200 hover:bg-slate-500/20 hover:shadow-lg hover:shadow-slate-500/25 group">
                        <svg class="w-5 h-5 text-slate-400 group-hover:text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="font-medium">Settings</span>
                    </a>
                </nav>
                
                <!-- User Info -->
                <div class="absolute bottom-6 left-4 right-4">
                    <div class="bg-gradient-to-r from-slate-500/10 to-cyan-500/10 border border-slate-500/20 rounded-xl p-4">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-gradient-to-r from-slate-400 to-cyan-400 rounded-full flex items-center justify-center">
                                <span class="text-black font-bold text-sm">{{ substr('Bayu Aji Pratama', 0, 1) }}</span>
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="text-sm font-medium text-white truncate">Bayu Aji Pratama</div>
                                <div class="text-xs text-gray-400 truncate">bayu@example.com</div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Content -->
            <div class="flex-1 flex flex-col">
                <!-- Top Navigation -->
                <nav class="bg-black/20 backdrop-blur-xl border-b border-purple-500/20 px-6 py-4 flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <button class="md:hidden p-2 rounded-lg hover:bg-purple-500/20 transition-colors" @click="open = !open">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                        <div class="text-xl font-semibold bg-gradient-to-r from-slate-400 to-cyan-400 bg-clip-text text-transparent">
                            Lab 8 - Kodikas Auth
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <form method="POST" action="">
                            @csrf
                            <button type="submit" class="flex items-center space-x-2 px-4 py-2 rounded-lg bg-red-500/20 border border-red-500/30 text-red-300 hover:bg-red-500/30 hover:text-red-200 transition-all duration-200">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                </svg>
                                <span>Logout</span>
                            </button>
                        </form>
                    </div>
                </nav>
                
                <!-- Main Content -->
                <main class="p-6 flex-1 overflow-auto">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
