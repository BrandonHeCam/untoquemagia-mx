@props(['imageSlide'])

@php
$classes = 'w-full bg-center bg-cover '.$imageSlide .' h-[43rem] md:h-[45rem] lg:h-[47rem]';
@endphp

<div class="swiper-slide opacity-85">
  <div {{ $attributes->merge(['class' => $classes]) }}>
    <div class="flex items-center justify-center lg:justify-end lg:w-10/12 h-full">
      <div class="flex flex-col gap-4 py-8 px-6 w-[90%] sm:w-3/4 md:w-2/3 lg:w-5/12 text-center bg-blurRose text-white">
        <h2 class="text-4xl font-bold">
          {{ $heading }}
        </h2>
        <p class="text-base md:text-lg font-normal">
          {{ $slot }}
        </p>
      </div>
    </div>
  </div>
</div>
