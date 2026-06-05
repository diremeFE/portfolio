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
                Geolindes
            </h1>

            <p class="body-large text-text-secondary max-w-3xl mt-6">
                Rediseño y desarrollo de la web corporativa de Geolindes para modernizar
                su imagen digital, comunicar de forma más clara sus servicios de topografía
                y delimitación de terrenos, y facilitar la captación de nuevos clientes.
            </p>

            <div class="flex flex-wrap gap-4 mt-8">

                <div class="px-4 py-2 border border-white/15 rounded-full">
                    UI Design
                </div>

                <div class="px-4 py-2 border border-white/15 rounded-full">
                    Laravel
                </div>

                <div class="px-4 py-2 border border-white/15 rounded-full">
                    Tailwind CSS
                </div>

            </div>

        </div>

        <!-- Imagen principal -->
        <div class="mt-16">
            <img
                src="{{ asset('images/projects/hero-geolindes.png') }}"
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
                La empresa disponía de una presencia digital desactualizada que no
                reflejaba adecuadamente la calidad de sus servicios ni la experiencia
                acumulada en el sector. La información estaba dispersa y los usuarios
                tenían dificultades para comprender rápidamente los servicios ofrecidos.
            </p>

        </div>

        <!-- Objetivos -->
        <div class="mt-20">

            <h2 class="heading-3 mb-6">
                Objetivos del proyecto
            </h2>

            <ul class="space-y-4 text-text-secondary body-large">

                <li>• Modernizar la imagen digital de la empresa.</li>

                <li>• Explicar los servicios de forma clara y profesional.</li>

                <li>• Mejorar la experiencia de navegación.</li>

                <li>• Incrementar la generación de contactos.</li>

                <li>• Reforzar la credibilidad y confianza de la marca.</li>

            </ul>

        </div>

        <!-- Investigación -->
        <div class="mt-20">

            <h2 class="heading-3 mb-6">
                Investigación y estrategia
            </h2>

            <p class="body-large text-text-secondary">
                Se analizaron empresas del sector de la topografía, ingeniería y
                delimitación de terrenos para identificar oportunidades de mejora
                en la comunicación de servicios y la estructura de contenidos.
                La estrategia se centró en transmitir profesionalidad, experiencia
                y claridad desde los primeros segundos de navegación.
            </p>

        </div>

        <!-- Diseño -->
        <div class="mt-20">

            <h2 class="heading-3 mb-6">
                Diseño UI
            </h2>

            <p class="body-large text-text-secondary">
                Se diseñó una interfaz moderna y profesional utilizando una jerarquía
                visual clara, espacios amplios y elementos gráficos alineados con el
                sector técnico. El objetivo fue facilitar la comprensión de los servicios
                y mejorar la percepción de marca de la empresa.
            </p>

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
                    <h3 class="text-4xl font-bold">+60%</h3>
                    <p class="text-text-secondary mt-2">
                        Incremento de visitas
                    </p>
                </div>

                <div class="border border-white/15 rounded-xl p-6">
                    <h3 class="text-4xl font-bold">+45%</h3>
                    <p class="text-text-secondary mt-2">
                        Nuevos contactos
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
                    Laravel
                </span>

                <span class="px-4 py-2 border border-white/15 rounded-full">
                    Tailwind CSS
                </span>

                <span class="px-4 py-2 border border-white/15 rounded-full">
                    PHP
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