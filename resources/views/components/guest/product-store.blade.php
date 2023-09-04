@props(['productImage', 'textColor'])

@php
$pathImage = 'images/about/'.$productImage;
$classes = 'font-bold text-xl sm:text-2xl ' .$textColor;
@endphp

<figure class="grid place-items-center w-full h-56 relative cursor-pointer transition group">
    <img src="{{ asset($pathImage) }}" alt="gallery"
        class="absolute inset-0 w-full h-full object-cover object-center" />
    <div
        class="flex flex-col justify-center gap-2 p-5 absolute inset-0 z-10 w-full h-full border-4 border-gray-200 bg-white opacity-0 transition group-hover:opacity-100">
        <h4 {{ $attributes->merge(['class' => $classes]) }}>{{ $title }}</h4>
        <p class="text-base">
            {{ $slot }}
        </p>
    </div>
</figure>