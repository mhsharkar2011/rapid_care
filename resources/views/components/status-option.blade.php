@props(['value', 'text', 'selected' => false])

<option value="{{ $value }}" {{ $selected ? 'selected' : '' }}>
    {{ $text }}
</option>
