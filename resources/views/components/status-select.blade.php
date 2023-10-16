@props(['status'])

<select name="{{ $attributes->get('name') }}" id="{{ $attributes->get('id') }}" {{ $attributes->except(['name', 'id']) }}>
    {{ $slot }}
</select>
