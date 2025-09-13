<x-app-layout>
    <div class="space-y-6">
        <!-- Page Header -->
        <div class="bg-gradient-to-r from-purple-500/10 to-cyan-500/10 border border-purple-500/20 rounded-2xl p-6">
            <h2 class="text-2xl font-bold bg-gradient-to-r from-purple-400 to-cyan-400 bg-clip-text text-transparent">
                Profile Settings
            </h2>
            <p class="text-purple-200 mt-2">Manage your account information and security</p>
        </div>

        <!-- Profile Sections -->
        <div class="space-y-6">
            <div class="bg-black/20 backdrop-blur-xl border border-purple-500/20 rounded-xl p-6 hover:border-purple-500/40 transition-all duration-200">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
