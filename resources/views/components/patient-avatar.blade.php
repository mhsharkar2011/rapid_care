@props(['user'])

@if ($user)
    <img src="{{ asset('storage/patients/avatars/'.$user) }}" {{ $attributes }} alt="Avatar">
@else
    <img src="{{ asset('images/default-avatar.png') }}" alt="{{ $user }}'s avatar" {{ $attributes }} >
@endif