<div class="px-4 md:px-10 mx-auto w-full -m-24">
    <div class="flex flex-wrap mt-4">
        <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-lg text-blueGray-700">
                                Mis Categorias
                            </h3>
                        </div>
                    </div>
                </div>


                <div class="block w-full overflow-x-auto">
                    <!-- Projects table -->
                    <table class="items-center w-full bg-transparent border-collapse">
                        <thead>
                            <tr class="text-sm">
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Nombre
                                </th>
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Descripción
                                </th>
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Stock
                                </th>


                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                    /argon/index.html
                                </th>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    3,985
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    319
                                </td>

                            </tr>
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
                                Nueva Categoria
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="block w-[90%] overflow-x-auto mx-auto py-6">
                    <!-- Projects table -->
                    <section class="flex flex-col gap-4">
                        <div class="w-full">
                            <label for="name_product" class="block mb-2 text-sm font-semibold text-gray-800">Nombre
                                de la Categoria</label>
                            <input type="text" name="name_product" class="w-full border-gray-300 focus:border-blue-300
                                focus:ring-blue-300 rounded-md shadow-sm" required autofocus>
                            <span class="text-sm text-red-600 dark:text-red-400 space-y-1"></span>
                        </div>

                        <div class="w-full">
                            <label for="desc_product" class="block mb-2 text-sm font-semibold text-gray-800">Descripción</label>
                            <textarea name="desc_product" class="w-full border-gray-300 focus:border-blue-300
                                                            focus:ring-blue-300 rounded-md shadow-sm"></textarea>
                            <span class="text-sm text-red-600 dark:text-red-400 space-y-1"></span>
                        </div>



                        <div class="w-full">
                            <label for="price_product" class="block mb-2 text-sm font-semibold text-gray-800">Stock</label>
                            <input type="number" name="price_product" class="w-1/2 border-gray-300 focus:border-blue-300
                                focus:ring-blue-300 rounded-md shadow-sm">
                            <span class="text-sm text-red-600 dark:text-red-400 space-y-1"></span>
                        </div>


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
                        <a href="https://www.creative-tim.com?ref=njs-dashboard" class="text-blueGray-500 hover:text-blueGray-700 text-sm font-semibold py-1">
                            Un Toque de Magia
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>