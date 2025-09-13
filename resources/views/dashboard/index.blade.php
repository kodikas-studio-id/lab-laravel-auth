<x-app-layout>
    <div class="space-y-6">
        <!-- Welcome Header -->
        <div class="bg-gradient-to-r from-purple-500/10 to-cyan-500/10 border border-purple-500/20 rounded-2xl p-6">
            <h1 class="text-3xl font-bold bg-gradient-to-r from-purple-400 to-cyan-400 bg-clip-text text-transparent">
                Welcome to Lab Kodikas 8
            </h1>
            <p class="mt-2 text-purple-200">You're successfully authenticated! @kodikas.id</p>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-black/20 backdrop-blur-xl border border-purple-500/20 rounded-xl p-6 hover:border-purple-500/40 transition-all duration-200">
                <div class="flex items-center">
                    <div class="p-2 bg-purple-500/20 rounded-lg">
                        <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-400">Status</p>
                        <p class="text-lg font-semibold text-purple-300">Active</p>
                    </div>
                </div>
            </div>

            <div class="bg-black/20 backdrop-blur-xl border border-cyan-500/20 rounded-xl p-6 hover:border-cyan-500/40 transition-all duration-200">
                <div class="flex items-center">
                    <div class="p-2 bg-cyan-500/20 rounded-lg">
                        <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-400">Security</p>
                        <p class="text-lg font-semibold text-cyan-300">Secured</p>
                    </div>
                </div>
            </div>

            <div class="bg-black/20 backdrop-blur-xl border border-pink-500/20 rounded-xl p-6 hover:border-pink-500/40 transition-all duration-200">
                <div class="flex items-center">
                    <div class="p-2 bg-pink-500/20 rounded-lg">
                        <svg class="w-6 h-6 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm text-gray-400">Version</p>
                        <p class="text-lg font-semibold text-pink-300">8.0</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Activity Panel -->
        <div class="bg-black/20 backdrop-blur-xl border border-purple-500/20 rounded-2xl p-6">
            <h2 class="text-xl font-semibold text-white mb-4">Authentication Activity</h2>
            <div class="space-y-3">
                <div class="flex items-center justify-between py-3 px-4 bg-green-500/10 border border-green-500/20 rounded-lg">
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                        <span class="text-green-300">Successfully logged in</span>
                    </div>
                    <span class="text-sm text-gray-400">{{ now()->format('M d, Y H:i') }}</span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
