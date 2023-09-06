<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/jpg" href="{{ asset('images/utils/untoquemagia-icon.svg') }}" />

    <title>{{ 'Un Toque de Magia ｜'. $title ?? 'Dashboard' }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="text-blueGray-700 antialiased">

    @include('admin.partials.sidebar')

    <section class="relative md:ml-64 bg-blueGray-50">
        @include('admin.partials.navbar')
        @include('admin.partials.header')

        {{ $slot }}
    </section>

    @livewireScripts
    <!-- Script JS -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script type="text/javascript">
        /* Make dynamic date appear */
      (function () {
        if (document.getElementById("get-current-year")) {
          document.getElementById("get-current-year").innerHTML =
            new Date().getFullYear();
        }
      })();
      /* Sidebar - Side navigation menu on mobile/responsive mode */
      function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("bg-white");
        document.getElementById(collapseID).classList.toggle("m-2");
        document.getElementById(collapseID).classList.toggle("py-3");
        document.getElementById(collapseID).classList.toggle("px-6");
      }
      /* Function for dropdowns */
      function openDropdown(event, dropdownID) {
        let element = event.target;
        console.log(element)
        while (element.nodeName !== "A") {
        console.log(element.nodeName)
          element = element.parentNode;
          console.log(element)
        }
        Popper.createPopper(element, document.getElementById(dropdownID), {
          placement: "bottom-start"
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
      }
    </script>
</body>

</html>