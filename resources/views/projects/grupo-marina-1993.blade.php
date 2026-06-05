@extends('layouts.app')

@section('content')

<x-navbar />



<section class="section">

    <div class="container-custom max-w-5xl">

        <!-- Volver -->
        <a href="/#projects"
           class="text-text-secondary hover:text-white transition">
            ← Volver a proyectos
        </a>

        <!-- Hero -->
        <div class="mt-12">

            <p class="text-accent font-medium uppercase mb-4">
                Caso de estudio · 2025
            </p>

            <h1 class="heading-2">
                Grupo Marina 1993
            </h1>

            <p class="body-large text-text-secondary max-w-3xl mt-6">
                Diseño y desarrollo de una web corporativa para presentar los espacios,
                servicios de catering y propuesta gastronómica del grupo, facilitando
                la captación de nuevos eventos y celebraciones.
            </p>

            <div class="flex flex-wrap gap-4 mt-8">

                <div class="px-4 py-2 border border-white/15 rounded-full">
                    UI Design
                </div>

                <div class="px-4 py-2 border border-white/15 rounded-full">
                    Framer
                </div>

                <div class="px-4 py-2 border border-white/15 rounded-full">
                    SEO
                </div>

            </div>

        </div>

        <!-- Imagen principal -->
        <div class="mt-16">
            <img
                src="{{ asset('images/projects/hero-grupomarina.png') }}"
                alt="Dragon Boat Marina Valencia"
                class="rounded-2xl w-full"
            >
        </div>

        <!-- Problema -->
        <div class="mt-24">

            <h2 class="heading-3 mb-6">
                El problema
            </h2>

            <p class="body-large text-text-secondary">
                Grupo Marina 1993 necesitaba una presencia digital capaz de reflejar
                la calidad de sus espacios y servicios. La información estaba dispersa
                y resultaba difícil transmitir la propuesta de valor del grupo de forma
                atractiva para potenciales clientes interesados en eventos y celebraciones.
            </p>

        </div>

        <!-- Objetivos -->
        <div class="mt-20">

            <h2 class="heading-3 mb-6">
                Objetivos del proyecto
            </h2>

            <ul class="space-y-4 text-text-secondary body-large">

                <li>• Modernizar la imagen digital de la marca.</li>

                <li>• Mostrar los espacios y servicios de forma atractiva.</li>

                <li>• Facilitar la captación de eventos y celebraciones.</li>

                <li>• Mejorar la experiencia de navegación.</li>

                <li>• Reforzar la percepción premium de la empresa.</li>

            </ul>

        </div>

        <!-- Investigación -->
        <div class="mt-20">

            <h2 class="heading-3 mb-6">
                Investigación y estrategia
            </h2>

            <p class="body-large text-text-secondary">
                Se analizaron referencias del sector de eventos, restauración y espacios
                para celebraciones con el objetivo de identificar patrones visuales y
                estrategias de conversión. La propuesta se centró en destacar la calidad
                de los espacios mediante una experiencia visual inmersiva.
            </p>

        </div>

        <!-- Diseño -->
        <div class="mt-20">

            <h2 class="heading-3 mb-6">
                Diseño UI
            </h2>

            <p class="body-large text-text-secondary">
                La interfaz fue diseñada priorizando el contenido visual, utilizando
                imágenes de gran formato, tipografía elegante y una estructura clara
                orientada a la conversión. El objetivo fue transmitir exclusividad,
                profesionalidad y confianza desde el primer momento.
            </p>

            <div class="grid md:grid-cols-2 gap-8 mt-10">

                <img
                    src="{{ asset('images/projects/dragon1.png') }}"
                    class="rounded-xl"
                >

                <img
                    src="{{ asset('images/projects/dragon2.png') }}"
                    class="rounded-xl"
                >

            </div>

        </div>

        <!-- Desarrollo -->
        <div class="mt-20">

            <h2 class="heading-3 mb-6">
                Desarrollo
            </h2>

            <p class="body-large text-text-secondary">
                El proyecto fue desarrollado utilizando Laravel y Tailwind CSS,
                permitiendo construir una plataforma rápida, escalable y totalmente
                personalizada. Se optimizó el rendimiento, la accesibilidad y la
                adaptación móvil para garantizar una experiencia consistente en
                cualquier dispositivo.
            </p>

        </div>

        <!-- Resultados -->
        <div class="mt-20">

            <h2 class="heading-3 mb-6">
                Resultados
            </h2>

            <div class="grid md:grid-cols-3 gap-6">

                <div class="border border-white/15 rounded-xl p-6">
                    <h3 class="text-4xl font-bold">+85%</h3>
                    <p class="text-text-secondary mt-2">
                        Incremento de visitas
                    </p>
                </div>

                <div class="border border-white/15 rounded-xl p-6">
                    <h3 class="text-4xl font-bold">+50%</h3>
                    <p class="text-text-secondary mt-2">
                        Solicitudes de eventos
                    </p>
                </div>

                <div class="border border-white/15 rounded-xl p-6">
                    <h3 class="text-4xl font-bold">100%</h3>
                    <p class="text-text-secondary mt-2">
                        Responsive
                    </p>
                </div>

            </div>

        </div>

        <!-- Tecnologías -->
        <div class="mt-20">

            <h2 class="heading-3 mb-6">
                Tecnologías utilizadas
            </h2>

            <div class="flex flex-wrap gap-4">

                <span class="px-4 py-2 border border-white/15 rounded-full">
                    Figma
                </span>

                <span class="px-4 py-2 border border-white/15 rounded-full">
                    Framer
                </span>

                <span class="px-4 py-2 border border-white/15 rounded-full">
                    CMS
                </span>

                <span class="px-4 py-2 border border-white/15 rounded-full">
                    SEO
                </span>

            </div>

        </div>

        <!-- CTA -->
        <div class="mt-24 border-t border-white/15 pt-16 text-center">

            <h2 class="heading-3">
                ¿Quieres un proyecto similar?
            </h2>

            <p class="text-text-secondary mt-4 max-w-2xl mx-auto">
                Diseño experiencias digitales enfocadas en resultados,
                combinando estrategia, diseño UI y desarrollo web.
            </p>

            <a href="/#contact"
               class="inline-flex mt-8 px-8 py-4 border border-white rounded-lg hover:bg-white hover:text-black transition">
                Hablemos
            </a>

        </div>

    </div>

</section>

@endsection