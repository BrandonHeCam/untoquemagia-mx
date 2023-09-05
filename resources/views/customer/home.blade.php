<x-customer-layout>
    <x-slot:title>
        Mi inicio
        </x-slot>

        <x-slot:header>
            @include('layouts.header')
            </x-slot>

            <h3>Hola, {{ Auth::user()->name }}</h3>

            <x-slot:footer>
                @include('layouts.footer')
                </x-slot>
</x-customer-layout>