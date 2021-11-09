<select {{ $attributes->merge(['class' => 'block
    w-full
    mt-1
    border
    px-4
    py-3
    border-gray-200
    focus:ring-0 focus:outline-none focus:border-pink-400']) }}>
    {{ $slot }}
</select>