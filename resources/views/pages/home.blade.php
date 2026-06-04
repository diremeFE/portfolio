@extends('layouts.app')

@section('content')
    <x-navbar />


    <section class="relative overflow-hidden min-h-[calc(100vh-80px)]">

        <!-- Radial Gradient -->
        <div class="absolute inset-0 pointer-events-none"
            style="
            background:
            radial-gradient(
                circle at center,
                rgba(182,189,209,.25) 0%,
                rgba(182,189,209,.10) 35%,
                rgba(2,11,30,0) 70%
            );
        ">
        </div>

        <div class="container-custom relative z-10">

            <div class="grid lg:grid-cols-2 items-center min-h-[calc(100vh-80px)] gap-12">

                <!-- Left -->
                <div class="order-2 lg:order-1">

                    <p class="text-lg md:text-2xl font-medium uppercase mb-4">
                        Hola, soy Diego Requena
                    </p>

                    <h1 class="hero-title text-accent">
                        UI Designer
                    </h1>

                    <p class="body-large text-text-secondary
                           max-w-lg mt-6">
                        Diseñador UI especializado en interfaces web modernas,
                        sistemas de diseño y experiencias digitales centradas
                        en el usuario.
                    </p>

                    <a href="#projects"
                        class="inline-flex items-center justify-center
                           mt-10 px-8 py-4
                           border border-white
                           rounded-lg
                           font-medium
                           hover:bg-white hover:text-bg-primary
                           transition">
                        VER PROYECTOS
                    </a>

                </div>

                <!-- Right -->
                <div class="order-1 lg:order-2
                       flex justify-center lg:justify-end">

                    <img src="{{ asset('images/diego.png') }}" alt="Diego Requena"
                        class="w-[280px] md:w-[420px] lg:w-[520px]">

                </div>

            </div>

        </div>

    </section>


    <section id="about" class="section">

        <div class="container-custom">

            <!-- Título -->
            <h2 class="heading-2 mb-12">
                Sobre mi
            </h2>

            <!-- Descripción -->
            <p class="body-large text-text-secondary max-w-4xl">
                Soy diseñador UI y desarrollador web con formación en Desarrollo de
                Aplicaciones Web (DAW). Me especializo en la creación de interfaces
                modernas, funcionales y centradas en el usuario, combinando diseño y
                desarrollo para transformar ideas en experiencias digitales reales.
                He trabajado en proyectos para empresas y profesionales de distintos
                sectores, ayudándoles a mejorar su presencia online y alcanzar sus
                objetivos mediante soluciones web efectivas.
            </p>

            <!-- Tecnologías -->
            <div class="mt-20">

                <h3 class="heading-3 uppercase mb-8">
                    Tecnologías
                </h3>

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-10">

                    <div>
                        <img src="{{ asset('icons/figma.svg') }}" class="h-16 mb-3">
                        <p>Figma</p>
                    </div>

                    <div>
                        <img src="{{ asset('icons/laravel.svg') }}" class="h-16 mb-3">
                        <p>Laravel</p>
                    </div>

                    <div>
                        <img src="{{ asset('icons/wordpress.svg') }}" class="h-16 mb-3">
                        <p>WordPress</p>
                    </div>

                    <div>
                        <img src="{{ asset('icons/miro.svg') }}" class="h-16 mb-3">
                        <p>Miro</p>
                    </div>

                    <div>
                        <img src="{{ asset('icons/tailwind.svg') }}" class="h-16 mb-3">
                        <p>Tailwind</p>
                    </div>

                    <div>
                        <img src="{{ asset('icons/bootstrap.svg') }}" class="h-16 mb-3">
                        <p>Bootstrap</p>
                    </div>

                    <div>
                        <img src="{{ asset('icons/vscode.svg') }}" class="h-16 mb-3">
                        <p>VS Code</p>
                    </div>

                </div>

            </div>

            <!-- Educación -->
            <div class="mt-20">

                <h3 class="heading-3 uppercase mb-10">
                    Educación
                </h3>

                <div class="space-y-14">

                    <div>
                        <h4 class="font-bold uppercase mb-2">
                            Educación Secundaria Obligatoria
                        </h4>

                        <p class="text-sm text-text-secondary mb-4">
                            2019 - 2021
                        </p>

                        <p class="body-large text-text-secondary max-w-4xl">
                            Finalización de la Educación Secundaria Obligatoria,
                            adquiriendo una formación académica general y
                            desarrollando habilidades fundamentales como la
                            organización, el trabajo en equipo y la capacidad
                            de aprendizaje.
                        </p>
                    </div>

                    <div>
                        <h4 class="font-bold uppercase mb-2">
                            Grado Medio (Sistemas Microinformáticos y Redes)
                        </h4>

                        <p class="text-sm text-text-secondary mb-4">
                            2019 - 2021
                        </p>

                        <p class="body-large text-text-secondary max-w-4xl">
                            Formación centrada en la instalación, configuración y
                            mantenimiento de sistemas informáticos, redes y equipos.
                            Adquisición de conocimientos en soporte técnico,
                            seguridad informática y administración básica de sistemas.
                        </p>
                    </div>

                    <div>
                        <h4 class="font-bold uppercase mb-2">
                            Grado Superior (Desarrollo de Aplicaciones Web)
                        </h4>

                        <p class="text-sm text-text-secondary mb-4">
                            2021 - 2024
                        </p>

                        <p class="body-large text-text-secondary max-w-4xl">
                            Especialización en el desarrollo de aplicaciones web
                            utilizando tecnologías modernas de frontend y backend.
                            Formación en programación, bases de datos, diseño web,
                            experiencia de usuario y desarrollo de proyectos completos
                            orientados al entorno profesional.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <section id="projects" class="section">

        <div class="container-custom">

            <h2 class="heading-2 mb-20">
                Casos reales
            </h2>

            <div class="space-y-24">

                <!-- DRAGON BOAT -->
                <article class="grid md:grid-cols-[120px_1fr] gap-8 items-start">

                    <img src="{{ asset('images/projects/dragonboat.png') }}" alt="Dragon Boat Marina Valencia"
                        class="w-28 md:w-32 object-contain">

                    <div>

                        <h3 class="font-bold uppercase text-xl">
                            Dragon Boat Marina Valencia
                        </h3>

                        <p class="text-sm text-text-secondary mt-2">
                            2024
                        </p>

                        <p class="body-large text-text-secondary max-w-3xl mt-4">
                            Diseño y desarrollo de una web para una asociación de remo en Valencia
                            dedicada a apoyar la lucha contra el cáncer de mama, mejorando su
                            visibilidad online y facilitando la captación de nuevas integrantes y
                            colaboradoras.
                        </p>

                        <a href="#" target="_blank"
                            class="inline-flex items-center gap-3 mt-8 px-6 py-3 bg-white text-black rounded-full">
                            Visitar web →
                        </a>

                    </div>

                </article>

                <!-- IRON SHARK -->
                <article class="grid md:grid-cols-[120px_1fr] gap-8 items-start">

                    <img src="{{ asset('images/projects/ironshark.png') }}" alt="Iron Shark"
                        class="w-28 md:w-32 object-contain">

                    <div>

                        <h3 class="font-bold uppercase text-xl">
                            Iron Shark
                        </h3>

                        <p class="text-sm text-text-secondary mt-2">
                            2025
                        </p>

                        <p class="body-large text-text-secondary max-w-3xl mt-4">
                            Creación de una tienda online para una empresa de nutrición deportiva,
                            orientada a aumentar su visibilidad digital, presentar su catálogo de
                            productos y facilitar la venta directa a través de internet.
                        </p>

                        <a href="#" target="_blank"
                            class="inline-flex items-center gap-3 mt-8 px-6 py-3 bg-white text-black rounded-full">
                            Visitar web →
                        </a>

                    </div>

                </article>

                <!-- ZAIRA -->
                <article class="grid md:grid-cols-[120px_1fr] gap-8 items-start">

                    <img src="{{ asset('images/projects/zaira.png') }}" alt="Zaira Psicología"
                        class="w-28 md:w-32 object-contain">

                    <div>

                        <h3 class="font-bold uppercase text-xl">
                            Zaira Psicología
                        </h3>

                        <p class="text-sm text-text-secondary mt-2">
                            2025
                        </p>

                        <p class="body-large text-text-secondary max-w-3xl mt-4">
                            Diseño y desarrollo de una web profesional para una consulta de
                            psicología, enfocada en transmitir confianza, presentar sus servicios
                            y convertir visitantes en potenciales pacientes mediante una
                            comunicación clara y cercana.
                        </p>

                        <a href="#" target="_blank"
                            class="inline-flex items-center gap-3 mt-8 px-6 py-3 bg-white text-black rounded-full">
                            Visitar web →
                        </a>

                    </div>

                </article>

                <!-- GEOLINDES -->
                <article class="grid md:grid-cols-[120px_1fr] gap-8 items-start">

                    <img src="{{ asset('images/projects/geolindes.png') }}" alt="Geolindes"
                        class="w-28 md:w-32 object-contain">

                    <div>

                        <h3 class="font-bold uppercase text-xl">
                            Geolindes
                        </h3>

                        <p class="text-sm text-text-secondary mt-2">
                            2025
                        </p>

                        <p class="body-large text-text-secondary max-w-3xl mt-4">
                            Rediseño completo de la página web corporativa para modernizar su
                            imagen digital y comunicar de forma más clara sus servicios
                            especializados en delimitación de terrenos y resolución de conflictos
                            de lindes.
                        </p>

                        <a href="#" target="_blank"
                            class="inline-flex items-center gap-3 mt-8 px-6 py-3 bg-white text-black rounded-full">
                            Visitar web →
                        </a>

                    </div>

                </article>

                <!-- GRUPO MARINA 1993 -->
                <article class="grid md:grid-cols-[120px_1fr] gap-8 items-start">

                    <img src="{{ asset('images/projects/marina1993.png') }}" alt="Grupo Marina 1993"
                        class="w-28 md:w-32 object-contain">

                    <div>

                        <h3 class="font-bold uppercase text-xl">
                            Grupo Marina 1993
                        </h3>

                        <p class="text-sm text-text-secondary mt-2">
                            2025
                        </p>

                        <p class="body-large text-text-secondary max-w-3xl mt-4">
                            Desarrollo de una web corporativa para presentar los espacios,
                            servicios de catering y propuesta gastronómica del grupo, facilitando
                            la consulta de información y la captación de nuevos eventos y
                            celebraciones.
                        </p>

                        <a href="#" target="_blank"
                            class="inline-flex items-center gap-3 mt-8 px-6 py-3 bg-white text-black rounded-full">
                            Visitar web →
                        </a>

                    </div>

                </article>

                <!-- MASÍA VISTALEGRE -->
                <article class="grid md:grid-cols-[120px_1fr] gap-8 items-start">

                    <img src="{{ asset('images/projects/masia.png') }}" alt="Masía Vistalegre"
                        class="w-28 md:w-32 object-contain">

                    <div>

                        <h3 class="font-bold uppercase text-xl">
                            Masía Vistalegre
                        </h3>

                        <p class="text-sm text-text-secondary mt-2">
                            2025
                        </p>

                        <p class="body-large text-text-secondary max-w-3xl mt-4">
                            Diseño y desarrollo de una web corporativa para presentar una masía
                            especializada en bodas y eventos en Valencia, destacando sus espacios,
                            servicios y facilitando la captación de nuevos clientes.
                        </p>

                        <a href="#" target="_blank"
                            class="inline-flex items-center gap-3 mt-8 px-6 py-3 bg-white text-black rounded-full">
                            Visitar web →
                        </a>

                    </div>

                </article>

            </div>

        </div>

    </section>


    <x-footer />
@endsection
