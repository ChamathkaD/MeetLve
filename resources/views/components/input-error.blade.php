@props(['forError'])

@error($forError)
    <p class="text-red-500">{{ $message }}</p>
@enderror