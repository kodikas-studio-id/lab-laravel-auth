@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-300 space-y-1 bg-red-500/20 border border-red-400/30 rounded-lg px-3 py-2 mt-2']) }}>
        @foreach ((array) $messages as $message)
            <li class="flex items-center">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                </svg>
                {{ $message }}
            </li>
        @endforeach
    </ul>
@endif
