<x-guest-layout>
    <x-slot:title>
        Nosotros
        </x-slot>

        <x-slot:header>
            @include('layouts.header')
            </x-slot>

            <!-- Section Carousel -->
            <section>
                <!-- Swiper -->
                <div class="swiper carouselUs w-full relative">
                    <div class="bg-blurRose absolute z-20 w-[108%] h-[165px] -bottom-20 -left-[5%] rotate-[3deg]"></div>

                    <div class="swiper-wrapper">
                        <x-guest.content-slide imageSlide="bg-Slide4">
                            <x-slot:heading>
                                ¿Quienes somos?
                                </x-slot>
                                Un Toque de Magia nació del corazón de la familia Calva
                                Rios con el deseo que a través de nuestra tienda podamos
                                ser el vínculo entre el artesano y los hogares de las
                                personas que gustan de los productos elaborados con manos
                                trabajadoras y llenas de amor, poniendo en cada artículo
                                un toque de magia de su tierra.
                        </x-guest.content-slide>

                        <x-guest.content-slide imageSlide="bg-Slide5">
                            <x-slot:heading>
                                Misión
                                </x-slot>
                                Nuestra misión con Un Toque de Magia es que cada artesano
                                sea valuado con el mismo peso que él elabora sus
                                productos, en calidad, creación, diseño y sobre todo el
                                cariño para que llegue a ti. Que conozcas un poco la raíz
                                del talento que nuestra gente, su tierra, costumbres y su
                                rostro.
                        </x-guest.content-slide>

                        <x-guest.content-slide imageSlide="bg-Slide6">
                            <x-slot:heading>
                                Visión
                                </x-slot>
                                La visión de Un Toque de Magia no solo es llegar a las
                                fronteras cercanas de los artesanos, si no llegar cada vez
                                más lejos con los productos que emanan del corazón y manos
                                de nuestros artesanos, tú y yo somos parte importante para
                                que sea así.
                        </x-guest.content-slide>
                    </div>
                </div>
                <div class="bg-texture w-100 h-8"></div>
            </section>

            <!-- Information -->
            <section class="container mx-auto flex flex-col gap-10">
                <article class="flex flex-col gap-5 text-center w-[90%] mx-auto">
                    <h3 class="font-bold text-2xl sm:text-3xl md:text-4xl">
                        Algunos de Nuestros Productos
                    </h3>
                    <p class="mx-auto text-base sm:text-lg md:text-xl lg:w-3/5">
                        En <b class="text-roseRegilet">Un Toque de Magia</b> todo es hecho
                        con amor para ti ❤ ofreciendote desde pulseras, aretes, broches para
                        cabello, separadores para libros, gorras, collares para mascotas con
                        miles de colores para elegir.
                    </p>
                </article>

                <article class="grid w-[90%] mx-auto gap-8 grid-cols-[repeat(auto-fit,_minmax(300px,_1fr))]">
                    <x-guest.product-store productImage="123608541_387083045987521_3555941473611440826_n.webp"
                        textColor="text-greenRegilet">
                        <x-slot:title>
                            Cafe D'Luisa
                            </x-slot>
                            "El mejor café y ahora con su nueva presentación de un tostado
                            ligero en grano y molido listo para preparar."
                    </x-guest.product-store>

                    <x-guest.product-store productImage="135764316_151524846740746_2858761570087342226_n.webp"
                        textColor="text-primaryColor">
                        <x-slot:title>
                            Sombreros Bordados
                            </x-slot>
                            "Sofisticados sombreros pintados a mano en gamuza con diseños
                            únicos. ¡Tu estilo se destacará!"
                    </x-guest.product-store>

                    <x-guest.product-store productImage="135875354_151521416741089_7393331221815806701_n.webp"
                        textColor="text-blueRegilet">
                        <x-slot:title>
                            Bolsas Artesanales
                            </x-slot>
                            "Descubre el encanto artesanal de nuestras bolsas confeccionadas
                            con esmero por hábiles artesanos."
                    </x-guest.product-store>

                    <x-guest.product-store productImage="136960748_153421766551054_8856586565114833277_n.webp"
                        textColor="text-yellowRegilet">
                        <x-slot:title>
                            Collares para Mascotas
                            </x-slot>
                            "Descubre collares para mascotas súper lindos y encantadores.
                            Dale estilo a tu mejor amigo."
                    </x-guest.product-store>

                    <x-guest.product-store productImage="122248081_112187960674435_3316223404922568845_n-_1_.webp"
                        textColor="text-secondColor">
                        <x-slot:title>
                            Dulces Típicos
                            </x-slot>
                            "Descubre nuestros deliciosos dulces típicos, una explosión de
                            sabores auténticos que te transportarán a tradiciones
                            especiales."
                    </x-guest.product-store>

                    <x-guest.product-store productImage="137508750_153421689884395_8811188862257885927_n.webp"
                        textColor="text-primaryColor">
                        <x-slot:title>
                            Pulseras Tejidas
                            </x-slot>
                            "Arte y tradición en tu muñeca. Eleva tu estilo con auténticas
                            piezas hechas a mano, cada una con un encanto único que destaca
                            tu personalidad."
                    </x-guest.product-store>
                </article>
            </section>

            <!-- Location -->
            <section class="container mx-auto flex flex-col gap-10">
                <article class="flex flex-col gap-5 text-center w-[90%] mx-auto">
                    <h3 class="font-bold text-2xl sm:text-3xl md:text-4xl">
                        ¿Cómo llegar a Un Toque de Magia?
                    </h3>
                    <p class="mx-auto text-base sm:text-lg md:text-xl lg:w-3/5">
                        Cada artículo refleja el arte y la tradición, diseñado con pasión y
                        dedicación para brindarte autenticidad en cada detalle. Te invitamos
                        a descubrir y deleitarte con nuestra gama de productos, donde la
                        calidad y el encanto se fusionan en una experiencia única para ti y
                        tus seres queridos. ¡Visítanos y sumérgete en la magia de lo
                        artesanal!
                    </p>
                </article>

                <div class="w-[90%] lg:w-[80%] xl:w-3/4 h-[40rem] mx-auto">
                    <div
                        class="w-full h-full flex sm:flex-nowrap flex-wrap relative bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 items-end justify-start">
                        <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map"
                            marginheight="0" marginwidth="0" scrolling="no"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235.37259230324312!2d-98.43994586627042!3d19.284041400025114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfd54beff0c023%3A0x870b7ade988c1594!2sUn%20toque%20de%20magia!5e0!3m2!1ses!2smx!4v1690500102850!5m2!1ses!2smx"></iframe>
                        <div
                            class="flex flex-wrap gap-4 lg:gap-0 p-6 rounded shadow-md bg-white absolute w-[90%] mx-auto xl:w-1/2 left-0 right-0 bottom-8 lg:left-8 lg:mx-0">
                            <div class="lg:w-1/2">
                                <h4 class="text-xl font-bold">Dirección</h4>
                                <p>
                                    A. Serdán 107, Col Alvaro Obregón, 74060 San Martín Texmelucan
                                    de Labastida, Pue.
                                </p>
                            </div>

                            <div class="lg:w-1/2">
                                <h4 class="text-xl font-bold">Correo electrónico</h4>
                                <a href="mailto:untoquedemagia3@gmail.com"
                                    class="text-indigo-500">untoquedemagia3@gmail.com</a>
                                <h4 class="text-xl font-bold mt-4">Teléfono</h4>
                                <a href="tel:248 115 2776">248 115 2776</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="bg-texture w-100 h-8"></div>

            <x-slot:footer>
                @include('layouts.footer')
                </x-slot>
</x-guest-layout>
