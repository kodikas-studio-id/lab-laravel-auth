<x-guest-layout>
    <div class="py-16 text-center">
        <h1 class="mb-4 text-4xl font-bold text-blue-400">Kodikas Auth Lab</h1>
        <p class="text-gray-300">Authentication, Session and Hash</p>
        <div class="mt-3 flex gap-3 justify-center">
        <a href="{{ route('login') }}" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
            Login
        </a>
        <a href="{{ route('register') }}" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
            Register
        </a>
        </div>
    </div>
</x-guest-layout>
