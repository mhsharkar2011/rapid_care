<button {{ $attributes->merge(['class' => 'btn btn-primary rounded-3']) }}>
    {{ $slot }}
  </button>