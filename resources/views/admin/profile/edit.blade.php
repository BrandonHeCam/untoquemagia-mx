<x-admin-layout>

    <x-slot:title>
        Editar perfil
        </x-slot>

        <article class="px-4 md:px-10 -mt-24">
            <div class="w-full mx-auto px-4">
                <div
                    class="relative flex flex-col break-words  mb-6 shadow-lg rounded-lg bg-stone-100 border-0 lg:max-w-screen-xl">
                    <div class="rounded-t bg-white mb-0 px-6 py-6">
                        <div class="text-center flex justify-between">
                            <h6 class="text-blueGray-700 text-lg font-bold">
                                Mi Cuenta
                            </h6>
                        </div>
                    </div>

                    <div class="flex flex-col gap-6 xl:flex-row px-4 lg:px-10 py-10 w-full">

                        @include('admin.profile.partials.update-profile-information-form')

                        <hr class="border-b-1 border-blueGray-300" />

                        @include('admin.profile.partials.update-password-form')

                        <hr class="border-b-1 border-blueGray-300" />

                        @include('admin.profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </article>
</x-admin-layout>