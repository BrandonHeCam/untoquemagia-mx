<nav class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6">
    <div class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto">
        <button class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" type="button" onclick="toggleNavbar('example-collapse-sidebar')">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>

        <!-- Logotipo Mobile-->
        <a class="md:block inline-block" href="{{ route('admin.dashboard') }}">
            <img class="w-auto h-[72px] sm:h-24" src="{{ asset('images/utils/untoquemagia-black.svg') }}" alt="Un Toque de Magia">
        </a>

        <ul class="md:hidden items-center flex flex-wrap list-none">

            <li class="inline-block relative">

                <!-- Avatar de Usuario - Vista Desktop -->
                <a class="text-blueGray-500 block" onclick="openDropdown(event,'user-responsive-dropdown')">
                    <div class="items-center flex">
                        <span class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"><img alt="" class="w-full rounded-full align-middle border-none shadow-lg" src="{{ asset('images/utils/user.png') }}" /></span>
                    </div>
                </a>

                <!-- Opciones de Sesión - Vista Desktop -->
                <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg w-[150px]" id="user-responsive-dropdown">
                    <x-dropdown-link :href="route('admin.profile.edit')">
                        {{ __('Mi Perfil') }}
                    </x-dropdown-link>

                    <div class="h-0 my-2 border border-solid border-blueGray-100"></div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                                            this.closest('form').submit();">
                            {{ __('Cerrar sesión') }}
                        </x-dropdown-link>
                    </form>
                </div>
            </li>
        </ul>

        <!-- Componente de Sidebar -->
        <div class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden" id="example-collapse-sidebar">
            <div class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200">
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a class="md:block inline-block" href="{{ route('admin.dashboard') }}">
                            <img class="w-auto h-[72px] sm:h-24" src="{{ asset('images/utils/untoquemagia-black.svg') }}" alt="Un Toque de Magia">
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button" class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent" onclick="toggleNavbar('example-collapse-sidebar')">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Heading -->
            <h6 class="md:min-w-full text-blueGray-500 text-lg font-bold flex items-center gap-2">
                Mi Administración
            </h6>

            <!-- Navigation -->
            <ul class="md:flex-col md:min-w-full flex flex-col gap-5 p-5 list-none">
                <li class="items-center">
                    <a href="{{ route('admin.dashboard') }}" class="flex gap-2 items-center text-base font-semibold hover:underline">
                        <svg class="w-6 h-6" viewBox="0 0 2048 2048" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#000000" d="M1024 1000v959l-64 32l-832-415V536l832-416l832 416v744h-128V680l-640 320zm-64-736L719 384l621 314l245-122l-625-312zm-64 1552v-816L256 680v816l640 320zM335 576l625 312l238-118l-622-314l-241 120zm1073 1216v-128h640v128h-640zm0-384h640v128h-640v-128zm-256 640v-128h128v128h-128zm0-512v-128h128v128h-128zm0 256v-128h128v128h-128zm-128 24h1h-1zm384 232v-128h640v128h-640z" />
                        </svg>
                        Productos
                    </a>
                </li>

                <li class="items-center">
                    <a href="{{ route('admin.categories') }}" class="flex gap-2 items-center text-base font-semibold hover:underline">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#000000" d="M11 13.5v8H3v-8h8m-2 2H5v4h4v-4M12 2l5.5 9h-11L12 2m0 3.86L10.08 9h3.84L12 5.86M17.5 13c2.5 0 4.5 2 4.5 4.5S20 22 17.5 22S13 20 13 17.5s2-4.5 4.5-4.5m0 2a2.5 2.5 0 0 0-2.5 2.5a2.5 2.5 0 0 0 2.5 2.5a2.5 2.5 0 0 0 2.5-2.5a2.5 2.5 0 0 0-2.5-2.5Z" />
                        </svg>
                        Categorias
                    </a>
                </li>

                {{-- <li class="items-center">
                    <a href="./settings.html"
                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                        <i class="fas fa-tools mr-2 text-sm text-blueGray-300"></i>
                        Settings
                    </a>
                </li>

                <li class="items-center">
                    <a href="./tables.html"
                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                        <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i>
                        Tables
                    </a>
                </li>

                <li class="items-center">
                    <a href="./maps.html"
                        class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
                        <i class="fas fa-map-marked mr-2 text-sm text-blueGray-300"></i>
                        Maps
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>