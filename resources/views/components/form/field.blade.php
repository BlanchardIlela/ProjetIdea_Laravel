//Les données que le composant attend à l'exterieur
@props(['label', 'name', 'type' => 'text'])

<div class="space-y-2">
    <label for="{{ $name }}" class="label">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name) }}" {{ $attributes }} class="input">
</div>

@error($name)
    <p class="error">{{ $message }}</p>
@enderror
