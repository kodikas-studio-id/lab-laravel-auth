@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-semibold text-sm text-white mb-2']) }}>
    {{ $value ?? $slot }}
</label>
