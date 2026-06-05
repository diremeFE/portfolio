@extends('layouts.app')

@section('content')
    <x-navbar />



    <section class="section">

        <div class="container-custom max-w-5xl">

            <!-- Volver -->
            <a href="/#projects" class="text-text-secondary hover:text-white transition">
                ← Volver a proyectos
            </a>

            <!-- Hero -->
            <p class="text-accent font-medium uppercase mb-4">
                Caso de estudio · 2025
            </p>

            <h1 class="heading-2">
                Zaira Psicología
            </h1>

            <p class="body-large text-text-secondary max-w-3xl mt-6">
                Diseño y desarrollo de una web profesional para una consulta de psicología,
                enfocada en transmitir confianza, presentar sus servicios y convertir
                visitantes en potenciales pacientes mediante una comunicación clara y cercana.
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

            <!-- Imagen principal -->
            <div class="mt-16">
                <img src="{{ asset('images/projects/hero-zaira.png') }}" alt="Dragon Boat Marina Valencia"
                    class="rounded-2xl w-full">
            </div>

            <!-- Problema -->
            <div class="mt-24">

                <h2 class="heading-3 mb-6">
                    El problema
                </h2>

                <p class="body-large text-text-secondary">
                    La consulta necesitaba una presencia digital profesional que reflejara
                    confianza, cercanía y profesionalidad. La información sobre los servicios
                    no estaba estructurada de forma clara y los usuarios encontraban dificultades
                    para comprender el proceso terapéutico y solicitar una primera cita.
                </p>

            </div>

            <!-- Objetivos -->
            <div class="mt-20">

                <h2 class="heading-3 mb-6">
                    Objetivos del proyecto
                </h2>

                <ul class="space-y-4 text-text-secondary body-large">

                    <li>• Transmitir confianza desde el primer contacto.</li>

                    <li>• Explicar claramente los servicios psicológicos.</li>

                    <li>• Facilitar la reserva de citas.</li>

                    <li>• Mejorar la presencia digital de la consulta.</li>

                    <li>• Crear una experiencia intuitiva y accesible.</li>

                </ul>

            </div>

            <!-- Investigación -->
            <div class="mt-20">

                <h2 class="heading-3 mb-6">
                    Investigación y estrategia
                </h2>

                <p class="body-large text-text-secondary">
                    Se analizaron diferentes webs de psicología y bienestar para identificar
                    patrones de navegación, necesidades de los usuarios y elementos que generan
                    confianza. La estrategia se centró en una comunicación cercana, una estructura
                    sencilla y llamadas a la acción visibles para facilitar el contacto.
                </p>

            </div>

            <!-- Diseño -->
            <div class="mt-20">

                <h2 class="heading-3 mb-6">
                    Diseño UI
                </h2>

                <p class="body-large text-text-secondary">
                    La interfaz se diseñó utilizando una estética limpia y minimalista,
                    apoyada por una paleta de colores suaves y una jerarquía visual clara.
                    El objetivo fue transmitir tranquilidad y profesionalidad sin generar
                    fricción durante la navegación.
                </p>

            </div>

            <!-- Desarrollo -->
            <div class="mt-20">

                <h2 class="heading-3 mb-6">
                    Desarrollo
                </h2>

                <p class="body-large text-text-secondary">
                    La plataforma fue desarrollada utilizando Laravel y Tailwind CSS,
                    permitiendo construir una solución personalizada, rápida y escalable.
                    Se optimizó el rendimiento, la accesibilidad y la experiencia responsive
                    para garantizar una navegación fluida en cualquier dispositivo.
                </p>

            </div>

            <!-- Resultados -->
            <div class="mt-20">

                <h2 class="heading-3 mb-6">
                    Resultados
                </h2>

                <div class="grid md:grid-cols-3 gap-6">

                    <div class="border border-white/15 rounded-xl p-6">
                        <h3 class="text-4xl font-bold">+70%</h3>
                        <p class="text-text-secondary mt-2">
                            Incremento de visitas
                        </p>
                    </div>

                    <div class="border border-white/15 rounded-xl p-6">
                        <h3 class="text-4xl font-bold">+50%</h3>
                        <p class="text-text-secondary mt-2">
                            Solicitudes de cita
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
