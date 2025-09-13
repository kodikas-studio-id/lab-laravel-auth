@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'bg-white/20 border border-white/30 text-white placeholder-white/60 focus:border-indigo-400 focus:ring-indigo-400 focus:ring-2 rounded-lg shadow-sm px-4 py-3 transition-all duration-200 backdrop-blur-sm']) }}>
