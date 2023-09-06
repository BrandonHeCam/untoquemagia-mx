<div class="px-4 md:px-10 mx-auto w-full -m-24">
    <div class="flex flex-wrap mt-4">
        <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-lg text-blueGray-700">
                                Mis Productos
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="block w-full overflow-x-auto">
                    <!-- Projects table -->
                    <table class="items-center w-full bg-transparent border-collapse">
                        <thead>
                            <tr class="text-sm">
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Nombre
                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Categoria
                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Stock
                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Precio
                                </th>

                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr class="text-sm">
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 text-left">
                                    {{ $product->name }}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">
                                    3,985
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">
                                    {{ $product->stock }}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">
                                    {{ $product->price }}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">
                                    <span class="inline-flex overflow-hidden rounded-md border bg-white shadow-sm">
                                        <button wire:click="Edit({{ $product->id }})"
                                            class="inline-block border-e p-3 text-gray-700 hover:bg-gray-50 focus:relative"
                                            title="Editar Producto">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </button>

                                        <button onclick="Confirm('{{$product->id}}')"
                                            class="inline-block p-3 text-gray-700 hover:bg-gray-50 focus:relative"
                                            title="Borrar Producto">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="w-full xl:w-4/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                <div class="rounded-t mb-0 px-4 py-3 border bottom-1">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-lg text-blueGray-700">
                                Nuevo Producto
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="block w-[90%] overflow-x-auto mx-auto py-6">
                    <!-- Projects table -->
                    <section class="flex flex-col gap-4">
                        <div class="w-full">
                            <label for="name" class="block mb-2 text-sm font-semibold text-gray-800">Nombre
                                del
                                producto</label>
                            <input wire:model.lazy="name" type="text" class="w-full border-gray-300 focus:border-blue-300
                                focus:ring-blue-300 rounded-md shadow-sm" required autofocus>
                            <span class="text-sm text-red-600 dark:text-red-400 space-y-1"></span>
                        </div>

                        <div class="w-full">
                            <label for="desc_product"
                                class="block mb-2 text-sm font-semibold text-gray-800">Descripción</label>
                            <textarea wire:model.lazy="description" class="w-full border-gray-300 focus:border-blue-300
                                                            focus:ring-blue-300 rounded-md shadow-sm"></textarea>
                            <span class="text-sm text-red-600 dark:text-red-400 space-y-1"></span>
                        </div>

                        <div class="w-full">
                            <label for="price_product"
                                class="block mb-2 text-sm font-semibold text-gray-800">Precio</label>
                            <input type="number" wire:model.lazy="price" class="w-1/2 border-gray-300 focus:border-blue-300
                                focus:ring-blue-300 rounded-md shadow-sm">
                            <span class="text-sm text-red-600 dark:text-red-400 space-y-1"></span>
                        </div>

                        <div class="w-full">
                            <label for="price_product"
                                class="block mb-2 text-sm font-semibold text-gray-800">Stock</label>
                            <input type="number" wire:model.lazy="stock" class="w-1/2 border-gray-300 focus:border-blue-300
                                focus:ring-blue-300 rounded-md shadow-sm">
                            <span class="text-sm text-red-600 dark:text-red-400 space-y-1"></span>
                        </div>

                        <div class="w-full">
                            <label for="image" class="block mb-2 text-sm font-semibold text-gray-800">Imagen</label>
                            <input type="file" wire:model.lazy="image"
                                class="block w-full px-3 py-2 mt-2 text-sm text-gray-600 bg-white border border-gray-300 rounded-lg file:bg-gray-200 file:text-gray-800 file:text-sm file:px-4 file:py-1 file:border-none file:rounded-full focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" />
                        </div>

                        {{-- <div class="w-full">
                            <label for="HeadlineAct" class="block text-sm font-medium text-gray-800">
                                Categoria
                            </label>
                            <select name="cat_product" id="cat_product"
                                class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-800 sm:text-sm">
                                <option value="">Please select</option>
                            </select>
                        </div> --}}

                        {{-- @if($selected_id < 1) <button type="button" wire:click.prevent="Store()"
                            class="btn btn-dark close-modal">
                            GUARDAR</button>
                            @else
                            <button type="button" wire:click.prevent="Update()"
                                class="btn btn-dark close-modal">ACTUALIZAR</button>
                            @endif --}}
                            <x-primary-button>{{ __('Guardar') }}</x-primary-button>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <footer class="block py-4">
        <div class="container mx-auto px-4">
            <hr class="mb-4 border-b-1 border-blueGray-200" />
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4">
                    <div class="text-sm text-blueGray-500 font-semibold py-1 text-center md:text-left">
                        Copyright © <span id="get-current-year"></span>
                        <a href="https://www.creative-tim.com?ref=njs-dashboard"
                            class="text-blueGray-500 hover:text-blueGray-700 text-sm font-semibold py-1">
                            Un Toque de Magia
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>