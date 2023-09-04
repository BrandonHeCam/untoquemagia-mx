{{-- @props(['active'])
<a class="py-1 hover:text-white/70"> {{ $slot }}</a> --}}

@props(['active'])

@php
$classes = ($active ?? false);
@endphp

<a class="py-1 border-b border-dashed hover:text-white/70" {{ $attributes->merge(['class' => $classes]) }}>
  {{ $slot }}
</a>