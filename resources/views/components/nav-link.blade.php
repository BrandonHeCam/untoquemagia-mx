@props(['active', 'hoverBgColor'])

@php
$hoverBgColor = $hoverBgColor;
$classes = ($active ?? false)
? 'flex gap-3 items-center hover:text-white/80 border-b border-[rgba(0,0,0,.1)] px-4 py-3 md:border-none md:p-0
hover:bg-'.$hoverBgColor .' md:hover:bg-inherit' : 'flex gap-3 items-center hover:text-white/80 border-b
border-[rgba(0,0,0,.1)] px-4 py-3 md:border-none md:p-0
hover:bg-'.$hoverBgColor. ' md:hover:bg-inherit';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
  {{ $slot }}
</a>