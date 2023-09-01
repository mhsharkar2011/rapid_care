@props(['user'])

@if ($user)
    <img src="{{ asset('storage/employees/avatars/'.$user) }}" {{ $attributes }} alt="{{ $user }}'s avatar">
@else
    <img src="{{ asset('images/default-avatar.png') }}" alt="{{ $user }}'s avatar" {{ $attributes }} >
@endif