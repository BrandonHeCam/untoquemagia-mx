<header>
    <nav x-data="{ isOpen: false }" class="bg-primaryColor shadow">
        <div class="container px-4 mx-auto md:flex md:justify-between md:items-center">
            <div class="flex items-center justify-between">
                <a href="{{ url('/') }}">
                    <img class="w-auto h-[72px] sm:h-24" src="{{ asset('images/utils/untoquemagia.svg') }}" alt="" />
                </a>

                <!-- Mobile menu button -->
                <div class="flex md:hidden">
                    <button x-cloak @click="isOpen = !isOpen" type="button" class="text-white hover:text-white/70"
                        aria-label="toggle menu">
                        <svg xmlns="http://www.w3.org/2000/svg" x-show="!isOpen" class="w-6 h-6" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 6l16 0"></path>
                            <path d="M4 12l16 0"></path>
                            <path d="M4 18l16 0"></path>
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" x-show="isOpen" class="w-6 h-6" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M18 6l-12 12"></path>
                            <path d="M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
                class="bg-secondColor absolute top-[104px] sm:top-[96px] inset-x-0 z-20 w-full transition-all duration-150 ease-in-out md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">

                <div class="font-medium text-white flex flex-col md:flex-row md:items-center md:gap-6">
                    <x-nav-link hoverBgColor="greenRegilet" :href="route('home')" :active="request()->routeIs('home')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="block md:hidden" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                        </svg>
                        {{__('Inicio') }}
                    </x-nav-link>

                    <x-nav-link hoverBgColor="roseRegilet" :href="route('dashboard')"
                        :active="request()->routeIs('dashboard')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="block md:hidden" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M6.331 8h11.339a2 2 0 0 1 1.977 2.304l-1.255 8.152a3 3 0 0 1 -2.966 2.544h-6.852a3 3 0 0 1 -2.965 -2.544l-1.255 -8.152a2 2 0 0 1 1.977 -2.304z">
                            </path>
                            <path d="M9 11v-5a3 3 0 0 1 6 0v5"></path>
                        </svg>
                        {{ __('Tienda') }}
                    </x-nav-link>

                    <x-nav-link hoverBgColor="blueRegilet" :href="route('about')" :active="request()->routeIs('about')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="block md:hidden" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                            <path d="M12 9v4"></path>
                            <path d="M12 16v.01"></path>
                        </svg>
                        {{__('Nosotros') }}
                    </x-nav-link>

                    <span class="hidden md:block">｜</span>

                    @if (Route::has('login'))
                    @auth
                    {{-- <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    --}}
                    @else
                    <x-nav-link hoverBgColor="primaryColor" :href="route('login')"
                        :active="request()->routeIs('login')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="block md:hidden" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                            </path>
                            <path d="M20 12h-13l3 -3m0 6l-3 -3"></path>
                        </svg>
                        {{__('Ingresa') }}
                    </x-nav-link>

                    @if (Route::has('register'))
                    <x-nav-link hoverBgColor="yellowRegilet" :href="route('register')"
                        :active="request()->routeIs('register')">
                        <svg xmlns="http://www.w3.org/2000/svg" class="block md:hidden" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                        </svg>
                        {{__('Crea tu cuenta') }}
                    </x-nav-link>
                    @endif
                    @endauth
                    @endif
                </div>

                <div class="flex justify-center md:block md:ml-6">
                    <a class="relative text-white hover:text-white/70 transition-colors duration-300 transform"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                            <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                            <path d="M17 17h-11v-14h-2"></path>
                            <path d="M6 5l14 1l-1 7h-13"></path>
                        </svg>
                        <span class="absolute top-0 left-0 p-1 text-xs text-white bg-blue-500 rounded-full"></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="bg-texture w-100 h-8"></div>