<x-guest-layout>

    <x-slot:title>
        Registro
        </x-slot>

        <div class="bg-white dark:bg-gray-900">
            <div class="flex justify-center h-screen">

                <div class="flex items-center w-full max-w-lg px-6 mx-auto lg:w-2/5">
                    <div class="flex-1">
                        <div class="text-center">
                            <div class="flex justify-center mx-auto">
                                <a href="{{ route('home') }}">
                                    <img class="w-auto h-[72px] sm:h-24"
                                        src="{{ asset('images/utils/untoquemagia-black.svg') }}"
                                        alt="Un Toque de Magia">
                                </a>
                            </div>

                            <p class="mt-3 text-gray-800">¡Sé parte de nuestra comunidad y experimenta la autenticidad y
                                el encanto de nuestras artesanías de pueblos mágicos!</p>
                        </div>

                        <div class="mt-8">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div>
                                    <x-input-label for="name" :value="__('Nombre')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                        :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-input-label for="email" :value="__('Correo electrónico')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Contraseña')" />

                                    <x-text-input id="password" class="block mt-1 w-full" type="password"
                                        name="password" required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <x-input-label for="password_confirmation" :value="__('Confirme su contraseña')" />

                                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="mt-6">
                                    <x-primary-button>
                                        {{ __('Registrarse') }}
                                    </x-primary-button>
                                </div>
                            </form>

                            <p class="mt-6 text-sm text-center text-gray-800">¿Ya tienes una cuenta? <a
                                    href="{{ route('login') }}"
                                    class="underline text-sm text-gray-600 hover:text-gray-900">Inicia sesión</a>.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="hidden bg-cover lg:block lg:w-2/4 bg-Slide2 opacity-85">
                    <div class="flex items-center justify-end h-full px-20 bg-gray-900 bg-opacity-40">
                        <div class="text-end">
                            <h2 class="text-2xl font-bold text-white sm:text-6xl">Un Toque de Magia</h2>

                            <p class="max-w-xl mt-3 text-base sm:text-lg md:text-xl text-white">
                                Sumérgete en la magia de Chignahuapan a través de nuestras artesanías únicas, donde cada
                                pieza cuenta una historia y cada
                                detalle revela un toque de encanto y tradición.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-guest-layout>