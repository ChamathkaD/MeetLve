@props(['value'])

<label {{ $attributes->merge(['class' => 'block']) }}>

    <span class="text-gray-700">{{ $value ?? $slot }}</span>
</label>
