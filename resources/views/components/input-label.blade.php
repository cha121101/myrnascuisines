@props(['value'])

<label {{ $attributes->merge(['class' => 'block mb-2 text-sm font-bold text-gray-800 font-Geologica']) }}>
    {{ $value ?? $slot }}
</label>
