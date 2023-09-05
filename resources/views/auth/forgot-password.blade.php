<x-guest-layout>

    <x-slot:title>
        Olvide mi contraseña
        </x-slot>

        <section class="flex flex-col justify-center max-w-lg px-6 mx-auto lg:w-2/5 h-screen">

            <div class="flex justify-center mx-auto">

                <img class="w-auto h-[72px] sm:h-24" src="{{ asset('images/utils/untoquemagia-black.svg') }}"
                    alt="Un Toque de Magia">

            </div>

            <article class="shadow-md overflow-hidden px-6 py-4">
                <div class="mb-4 text-sm text-gray-600">
                    {{ __('¿Olvidaste tu contraseña? No hay problema. Solo indícanos tu dirección de correo
                    electrónico
                    y te enviaremos un enlace para resetearla') }}
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Correo electrónico')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button>
                            {{ __('Enviar enlace de restablecimiento de contraseña') }}
                        </x-primary-button>
                    </div>
                </form>
            </article>
        </section>
</x-guest-layout>