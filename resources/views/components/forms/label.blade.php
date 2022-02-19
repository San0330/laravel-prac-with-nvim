@props(['name'])

<label for="{{ $name }}" class="block mb-2 uppercase font-bold text-xs text-gray-700">
    {{ ucwords($name) }}
</label>
