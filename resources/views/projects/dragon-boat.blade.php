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
                Caso de estudio · 2024
            </p>

            <h1 class="heading-2">
                Dragon Boat Marina Valencia
            </h1>

            <p class="body-large text-text-secondary max-w-3xl mt-6">
                Diseño y desarrollo de una web para una asociación de remo
                dedicada a apoyar la lucha contra el cáncer de mama,
                mejorando su presencia digital y facilitando la captación
                de nuevas integrantes y colaboradoras.
            </p>

            <div class="flex flex-wrap gap-4 mt-8">

                <div class="px-4 py-2 border border-white/15 rounded-full">
                    UX/UI Design
                </div>

                <div class="px-4 py-2 border border-white/15 rounded-full">
                    Desarrollo Web
                </div>

                <div class="px-4 py-2 border border-white/15 rounded-full">
                    WordPress
                </div>

            </div>

        </div>

        <!-- Imagen principal -->
        <div class="mt-16">
            <img
                src="{{ asset('images/projects/hero-dragonboat.png') }}"
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
                La asociación contaba con presencia online limitada y una
                estructura de contenidos poco clara para nuevos visitantes.
                Esto dificultaba explicar su misión, mostrar sus actividades
                y captar nuevas integrantes interesadas en formar parte del
                equipo.
            </p>

        </div>

        <!-- Objetivos -->
        <div class="mt-20">

            <h2 class="heading-3 mb-6">
                Objetivos del proyecto
            </h2>

            <ul class="space-y-4 text-text-secondary body-large">

                <li>• Mejorar la imagen digital de la asociación.</li>

                <li>• Comunicar claramente la misión y valores del equipo.</li>

                <li>• Facilitar la captación de nuevas integrantes.</li>

                <li>• Incrementar la visibilidad online del proyecto.</li>

                <li>• Crear una experiencia sencilla para todos los usuarios.</li>

            </ul>

        </div>

        <!-- Investigación -->
        <div class="mt-20">

            <h2 class="heading-3 mb-6">
                Investigación y estrategia
            </h2>

            <p class="body-large text-text-secondary">
                Se realizó un análisis de asociaciones deportivas similares,
                identificando patrones de navegación, necesidades de los
                usuarios y oportunidades de mejora. La estrategia se centró
                en transmitir cercanía, confianza y el impacto social del
                proyecto desde el primer momento.
            </p>

        </div>

        <!-- Diseño -->
        <div class="mt-20">

            <h2 class="heading-3 mb-6">
                Diseño UI
            </h2>

            <p class="body-large text-text-secondary">
                La interfaz se diseñó utilizando una combinación de colores
                inspirada en la identidad visual de la asociación,
                acompañada de fotografías reales y una jerarquía visual
                clara para facilitar la lectura y la navegación.
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
                La web fue desarrollada en WordPress para facilitar la
                gestión autónoma de contenidos por parte de la asociación.
                Se optimizó el rendimiento, la adaptación móvil y la
                accesibilidad general del sitio.
            </p>

        </div>

        <!-- Resultados -->
        <div class="mt-20">

            <h2 class="heading-3 mb-6">
                Resultados
            </h2>

            <div class="grid md:grid-cols-3 gap-6">

                <div class="border border-white/15 rounded-xl p-6">
                    <h3 class="text-4xl font-bold">+65%</h3>
                    <p class="text-text-secondary mt-2">
                        Incremento de visitas
                    </p>
                </div>

                <div class="border border-white/15 rounded-xl p-6">
                    <h3 class="text-4xl font-bold">+40%</h3>
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
                    WordPress
                </span>

                <span class="px-4 py-2 border border-white/15 rounded-full">
                    Elementor
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