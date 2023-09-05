<nav
    class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4">
    <div class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
        <h4 class="text-white text-sm uppercase hidden lg:inline-block font-semibold">{{
            Auth::user()->name }}</h4>

        <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
            <a class="text-blueGray-500 block" onclick="openDropdown(event,'user-dropdown')">
                <div class="items-center flex">
                    <span
                        class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"><img
                            alt="" class="w-full rounded-full align-middle border-none shadow-lg"
                            src="{{ asset('images/utils/user.png') }}" /></span>
                </div>
            </a>

            <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg w-[150px]"
                id="user-dropdown">

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
        </ul>
    </div>
</nav>