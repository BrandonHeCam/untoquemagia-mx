<x-guest-layout>

    <x-slot:title>
        Login
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="bg-white dark:bg-gray-900">
            <div class="flex justify-center h-screen">
                <div class="hidden bg-cover lg:block lg:w-2/4 bg-Slide1 opacity-85">
                    <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                        <div>
                            <h2 class="text-2xl font-bold text-white sm:text-6xl">Un Toque de Magia</h2>

                            <p class="max-w-xl mt-3 text-base sm:text-lg md:text-xl text-white">
                                Sumérgete en la magia de Chignahuapan a través de nuestras artesanías únicas, donde cada
                                pieza cuenta una historia y cada
                                detalle revela un toque de encanto y tradición.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center w-full max-w-lg px-6 mx-auto lg:w-2/5">
                    <div class="flex-1">
                        <div class="text-center">
                            <div class="flex justify-center mx-auto">
                                <img class="w-auto h-[72px] sm:h-24"
                                    src="{{ asset('images/utils/untoquemagia-black.svg') }}" alt="">
                            </div>

                            <p class="mt-3 text-gray-800">¡Inicia sesión para experimentar una vez más la singularidad y
                                la tradición que nuestras artesanías llevan consigo desde
                                Chignahuapan, Puebla para todo el mundo!</p>
                        </div>

                        <div class="mt-8">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div>
                                    <x-input-label for="email" :value="__('Correo electrónico')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        :value="old('email')" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div class="mt-6">
                                    <div class="flex justify-between mb-2">
                                        <x-input-label for="password" :value="__('Contraseña')" />

                                        @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                            href="{{ route('password.request') }}">
                                            {{ __('¿Olvidaste tu contraseña?') }}
                                        </a>
                                        @endif
                                    </div>

                                    <x-text-input id="password" class="block mt-1 w-full" type="password"
                                        name="password" required autocomplete="current-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <div class="mt-6">
                                    <x-primary-button>
                                        {{ __('Iniciar Sesión') }}
                                    </x-primary-button>
                                </div>
                            </form>

                            <p class="mt-6 text-sm text-center text-gray-800">¿No tienes una cuenta? <a
                                    href="{{ route('register') }}"
                                    class="underline text-sm text-gray-600 hover:text-gray-900">Registrate</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-guest-layout>