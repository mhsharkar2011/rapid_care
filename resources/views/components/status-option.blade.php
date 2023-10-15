@props(['value', 'name', 'selected' => false])

<option value="{{ $value }}" {{ $selected ? 'selected' : '' }}>
    {{ $name }}
</option>
