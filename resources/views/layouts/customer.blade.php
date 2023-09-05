<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/jpg" href="{{ asset('images/utils/untoquemagia-icon.svg') }}" />

    <title>{{ 'Un Toque de Magia ｜'. $title ?? 'Un Toque de Magia' }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles Swipper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body>
    {{ $header ?? '' }}
    <main class="flex flex-col gap-12 md:gap-20 lg:gap-24">
        {{ $slot }}
    </main>
    {{ $footer ?? '' }}
</body>

</html>