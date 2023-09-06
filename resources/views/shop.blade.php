<x-guest-layout>
    <x-slot:title>
        Productos
        </x-slot>

        <x-slot:header>
            @include('layouts.header')
            </x-slot>

            <section>
                <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
                    <header>
                        <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">
                            Nuestra Colección de Productos
                        </h2>

                        <p class="max-w-md mt-4 text-gray-500">
                            Conoce la gran diversidad de productos artesanales con los que contamos en un Toque de Magia
                        </p>
                    </header>

                    <ul class="grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-4">
                        <li>
                            <a href="#" class="block overflow-hidden group">
                                <img src="{{ asset('images/categories/1653065610_img85.jpg') }}" alt=""
                                    class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                                <div class="relative pt-3 bg-white">
                                    <h3
                                        class="text-xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                        Accesorios
                                    </h3>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="block overflow-hidden group">
                                <img src="{{ asset('images/categories/image (3).jpg') }}" alt=""
                                    class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                                <div class="relative pt-3 bg-white">
                                    <h3
                                        class="text-xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                        Juguetes
                                    </h3>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="block overflow-hidden group">
                                <img src="{{ asset('images/categories/image (3).png') }}" alt=""
                                    class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                                <div class="relative pt-3 bg-white">
                                    <h3
                                        class="text-xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                        Talavera
                                    </h3>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="block overflow-hidden group">
                                <img src="{{ asset('images/categories/img14.jpeg') }}" alt=""
                                    class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                                <div class="relative pt-3 bg-white">
                                    <h3
                                        class="text-xl text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                        Bebidas Artesanales
                                    </h3>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="text-gray-600 body-font">
                <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 lg:px-8">
                    <header>
                        <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">
                            Nuestra Colección de Productos
                        </h2>

                        <p class="max-w-md mt-4 text-gray-500">
                            Conoce la gran diversidad de productos artesanales con los que contamos en un Toque de Magia
                        </p>
                    </header>
                    <div class="container py-12 mx-auto">
                        <div class="flex flex-wrap -m-4">
                            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                <a class="block relative h-48 rounded overflow-hidden">
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                        src="{{ asset('images/products/product (1).jpeg') }}">
                                </a>
                                <div class="mt-4">
                                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Accesorios</h3>
                                    <h2 class="text-gray-900 title-font text-lg font-medium">Bolso de Mano</h2>
                                    <p class="mt-1">$160.00</p>
                                </div>
                            </div>
                            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                <a class="block relative h-48 rounded overflow-hidden">
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                        src="{{ asset('images/products/product (1).jpg') }}">
                                </a>
                                <div class="mt-4">
                                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Accesorios</h3>
                                    <h2 class="text-gray-900 title-font text-lg font-medium">Sombrero de Piel Color Café
                                    </h2>
                                    <p class="mt-1">$170.00</p>
                                </div>
                            </div>

                            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                <a class="block relative h-48 rounded overflow-hidden">
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                        src="{{ asset('images/products/product (13).jpg') }}">
                                </a>
                                <div class="mt-4">
                                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Accesorios</h3>
                                    <h2 class="text-gray-900 title-font text-lg font-medium">Sombrero Tejido para Dama
                                    </h2>
                                    <p class="mt-1">$180.00</p>
                                </div>
                            </div>

                            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                <a class="block relative h-48 rounded overflow-hidden">
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                        src="{{ asset('images/products/product (16).jpg') }}">
                                </a>
                                <div class="mt-4">
                                    <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Accesorios</h3>
                                    <h2 class="text-gray-900 title-font text-lg font-medium">Sombrero Tejido para Dama
                                        con Girasoles
                                    </h2>
                                    <p class="mt-1">$180.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <x-slot:footer>
                @include('layouts.footer')
                </x-slot>
</x-guest-layout>