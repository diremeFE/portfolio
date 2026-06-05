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
            Masía Vistalegre
        </h1>

        <p class="body-large text-text-secondary max-w-3xl mt-6">
            Diseño y desarrollo de una web corporativa para una masía especializada
            en bodas, celebraciones y eventos en Valencia, con el objetivo de mejorar
            su presencia digital, transmitir la experiencia del espacio y generar
            nuevas solicitudes de información.
        </p>

        <div class="flex flex-wrap gap-4 mt-8">

            <div class="px-4 py-2 border border-white/15 rounded-full">
                UI Design
            </div>

            <div class="px-4 py-2 border border-white/15 rounded-full">
                WordPress
            </div>

            <div class="px-4 py-2 border border-white/15 rounded-full">
                SEO
            </div>

        </div>

    </div>

    <!-- Imagen principal -->
    <div class="mt-16">
        <img
            src="{{ asset('images/projects/hero-masia-vistalegre.png') }}"
            alt="Masía Vistalegre"
            class="rounded-2xl w-full"
        >
    </div>

    <!-- Problema -->
    <div class="mt-24">

        <h2 class="heading-3 mb-6">
            El problema
        </h2>

        <p class="body-large text-text-secondary">
            La empresa necesitaba una presencia digital más moderna y competitiva
            para destacar dentro del sector de bodas y eventos en Valencia.
            La web anterior no reflejaba adecuadamente la calidad de las
            instalaciones ni facilitaba la captación de nuevos clientes.
        </p>

    </div>

    <!-- Objetivos -->
    <div class="mt-20">

        <h2 class="heading-3 mb-6">
            Objetivos del proyecto
        </h2>

        <ul class="space-y-4 text-text-secondary body-large">

            <li>• Modernizar la imagen digital de la masía.</li>

            <li>• Mejorar el posicionamiento SEO en Valencia.</li>

            <li>• Mostrar los espacios y servicios de forma atractiva.</li>

            <li>• Incrementar las solicitudes de información.</li>

            <li>• Facilitar la navegación desde dispositivos móviles.</li>

        </ul>

    </div>

    <!-- Investigación -->
    <div class="mt-20">

        <h2 class="heading-3 mb-6">
            Investigación y estrategia
        </h2>

        <p class="body-large text-text-secondary">
            Se realizó un análisis de competidores del sector de bodas y eventos,
            estudiando tanto la experiencia de usuario como el posicionamiento SEO.
            La estrategia se centró en potenciar las búsquedas relacionadas con
            masías para eventos en Valencia y construir una experiencia visual que
            transmitiera exclusividad, elegancia y confianza.
        </p>

    </div>

    <!-- Diseño -->
    <div class="mt-20">

        <h2 class="heading-3 mb-6">
            Diseño UI
        </h2>

        <p class="body-large text-text-secondary">
            El diseño se construyó alrededor de una experiencia visual inmersiva,
            utilizando fotografía de gran formato, una jerarquía tipográfica clara
            y una estructura orientada a destacar los espacios y servicios de la
            masía. Se priorizó la emoción y la inspiración para conectar con futuros
            clientes que buscan celebrar eventos especiales.
        </p>

        <div class="grid md:grid-cols-2 gap-8 mt-10">

            <img
                src="{{ asset('images/projects/masia-figma-1.png') }}"
                class="rounded-xl"
            >

            <img
                src="{{ asset('images/projects/masia-figma-2.png') }}"
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
            La web fue desarrollada en WordPress utilizando una estructura flexible
            y fácilmente gestionable por el cliente. Se optimizó el rendimiento,
            la velocidad de carga, la experiencia responsive y la arquitectura SEO
            para mejorar la visibilidad orgánica del negocio en buscadores.
        </p>

    </div>

    <!-- Resultados -->
    <div class="mt-20">

        <h2 class="heading-3 mb-6">
            Resultados
        </h2>

        <div class="grid md:grid-cols-3 gap-6">

            <div class="border border-white/15 rounded-xl p-6">
                <h3 class="text-4xl font-bold">+120%</h3>
                <p class="text-text-secondary mt-2">
                    Tráfico orgánico
                </p>
            </div>

            <div class="border border-white/15 rounded-xl p-6">
                <h3 class="text-4xl font-bold">+65%</h3>
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
                WordPress
            </span>

            <span class="px-4 py-2 border border-white/15 rounded-full">
                Elementor
            </span>

            <span class="px-4 py-2 border border-white/15 rounded-full">
                SEO
            </span>

            <span class="px-4 py-2 border border-white/15 rounded-full">
                Google Search Console
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
