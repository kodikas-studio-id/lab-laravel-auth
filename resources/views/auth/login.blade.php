<x-guest-layout>
    <!-- Page Header -->
    <div class="text-center mb-8">
        <h2 class="text-2xl font-bold bg-gradient-to-r from-purple-400 to-cyan-400 bg-clip-text text-transparent">Welcome Back</h2>
        <p class="text-purple-200 mt-2">Sign in to your authentication portal</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-6" :status="session('status')" />

    <form method="POST" class="space-y-6">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email Address')" class="text-purple-200" />
            <x-text-input id="email" class="block mt-2 w-full bg-black/20 border-purple-500/30 text-white placeholder-purple-300 focus:border-purple-400 focus:ring-purple-400/20" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your email address" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" class="text-purple-200" />
            <x-text-input id="password" class="block mt-2 w-full bg-black/20 border-purple-500/30 text-white placeholder-purple-300 focus:border-purple-400 focus:ring-purple-400/20"
                            type="password"
                            name="password"
                            required autocomplete="current-password" 
                            placeholder="Enter your password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center">
            <input id="remember_me" type="checkbox" class="rounded bg-black/20 border-purple-500/30 text-purple-500 shadow-sm focus:ring-purple-500 focus:ring-2" name="remember">
            <label for="remember_me" class="ml-3 text-sm text-purple-200">{{ __('Remember me') }}</label>
        </div>

        <div class="flex flex-col space-y-4">
            <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-gradient-to-r from-purple-500 to-cyan-500 hover:from-purple-600 hover:to-cyan-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition-all duration-200 shadow-lg">
                Sign In
            </button>

            <div class="text-center">
                <span class="text-purple-300 text-sm">Don't have an account? </span>
                <a href="{{ route('register') }}" class="text-sm text-cyan-300 hover:text-cyan-200 font-semibold transition-colors duration-200">
                    Sign Up Here
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>
