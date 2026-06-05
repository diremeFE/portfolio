@extends('layouts.app')

@section('content')
    <x-navbar />


    <section class="relative overflow-hidden min-h-[calc(100vh-80px)] fade-up">

        <!-- Radial Gradient -->
        <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2
           w-[900px] h-[650px]
           pointer-events-none"
            style="
        background:
        radial-gradient(
            ellipse at center,
            rgba(182,189,209,.18) 0%,
            rgba(182,189,209,.08) 35%,
            rgba(2,11,30,0) 75%
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


    <section id="about" class="section fade-up">

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

                    <div>
                        <img src="{{ asset('icons/framer.svg') }}" class="h-16 mb-3">
                        <p>Framer</p>
                    </div>

                    <div>
                        <img src="{{ asset('icons/shopify.svg') }}" class="h-16 mb-3">
                        <p>Shopify</p>
                    </div>

                </div>

            </div>

            <!-- Educación -->
            <div class="mt-20">

                <h3 class="heading-3 uppercase mb-10">
                    Educación
                </h3>

                <div class="space-y-14">

                    <div class="fade-up">
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

                    <div class="fade-up">
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

                    <div class="fade-up">
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


    <section id="projects" class="section fade-up">

        <div class="container-custom">

            <h2 class="heading-2 mb-20">
                Casos reales
            </h2>

            <div class="space-y-24">

                <!-- DRAGON BOAT -->
                <article class="grid md:grid-cols-[120px_1fr] gap-8 items-start fade-up">

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

                        <div class="flex flex-wrap gap-4 mt-8">

                            <a href="https://webreal.com" target="_blank"
                                class="inline-flex items-center gap-3 px-6 py-3 bg-white text-black rounded-full">
                                Visitar web →
                            </a>

                            <a href="{{ route('projects.dragon-boat') }}"
                                class="inline-flex items-center gap-3 px-6 py-3 border border-white rounded-full">
                                Leer caso →
                            </a>

                        </div>

                    </div>

                </article>

                <!-- IRON SHARK -->
                <article class="grid md:grid-cols-[120px_1fr] gap-8 items-start fade-up">

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

                        <div class="flex flex-wrap gap-4 mt-8">

                            <a href="https://webreal.com" target="_blank"
                                class="inline-flex items-center gap-3 px-6 py-3 bg-white text-black rounded-full">
                                Visitar web →
                            </a>

                            <a href="{{ route('projects.ironshark') }}"
                                class="inline-flex items-center gap-3 px-6 py-3 border border-white rounded-full">
                                Leer caso →
                            </a>

                        </div>

                    </div>

                </article>

                <!-- ZAIRA -->
                <article class="grid md:grid-cols-[120px_1fr] gap-8 items-start fade-up">

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

                        <div class="flex flex-wrap gap-4 mt-8">

                            <a href="https://webreal.com" target="_blank"
                                class="inline-flex items-center gap-3 px-6 py-3 bg-white text-black rounded-full">
                                Visitar web →
                            </a>

                            <a href="{{ route('projects.zaira') }}"
                                class="inline-flex items-center gap-3 px-6 py-3 border border-white rounded-full">
                                Leer caso →
                            </a>


                        </div>

                    </div>

                </article>

                <!-- GEOLINDES -->
                <article class="grid md:grid-cols-[120px_1fr] gap-8 items-start fade-up">

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

                        <div class="flex flex-wrap gap-4 mt-8">

                            <a href="https://webreal.com" target="_blank"
                                class="inline-flex items-center gap-3 px-6 py-3 bg-white text-black rounded-full">
                                Visitar web →
                            </a>

                            <a href="{{ route('projects.geolindes') }}"
                                class="inline-flex items-center gap-3 px-6 py-3 border border-white rounded-full">
                                Leer caso →
                            </a>

                        </div>

                    </div>

                </article>

                <!-- GRUPO MARINA 1993 -->
                <article class="grid md:grid-cols-[120px_1fr] gap-8 items-start fade-up">

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

                        <div class="flex flex-wrap gap-4 mt-8">

                            <a href="https://webreal.com" target="_blank"
                                class="inline-flex items-center gap-3 px-6 py-3 bg-white text-black rounded-full">
                                Visitar web →
                            </a>

                            <a href="{{ route('projects.grupo-marina-1993') }}"
                                class="inline-flex items-center gap-3 px-6 py-3 border border-white rounded-full">
                                Leer caso →
                            </a>

                        </div>

                    </div>

                </article>

                <!-- MASÍA VISTALEGRE -->
                <article class="grid md:grid-cols-[120px_1fr] gap-8 items-start fade-up">

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

                        <div class="flex flex-wrap gap-4 mt-8">

                            <a href="https://webreal.com" target="_blank"
                                class="inline-flex items-center gap-3 px-6 py-3 bg-white text-black rounded-full">
                                Visitar web →
                            </a>

                            <a href="{{ route('projects.masia-vistalegre') }}"
                                class="inline-flex items-center gap-3 px-6 py-3 border border-white rounded-full">
                                Leer caso →
                            </a>

                        </div>
                    </div>

                </article>

            </div>

        </div>

    </section>


    <section id="contact" class="section fade-up">

        <div class="container-custom max-w-4xl">

            <div class="text-center mb-12">

                <h2 class="hero-title heading-2 font-extralight mb-4">
                    ¿Tienes un proyecto en mente?
                </h2>

                <p class="body-large text-text-secondary max-w-2xl mx-auto">
                    Estoy disponible para colaborar en proyectos de diseño UI,
                    diseño web y desarrollo web. Cuéntame tu idea y te responderé
                    lo antes posible.
                </p>

            </div>

            @if ($errors->any())
                <div class="mb-6 p-4 rounded-lg border border-red-500 text-red-400">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="mb-6 p-4 rounded-lg border border-green-500 text-green-400">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST" id="contact-form" class="space-y-6">
                @csrf

                <div class="grid md:grid-cols-2 gap-6">

                    <div>
                        <label class="block mb-2 text-sm">
                            Nombre
                        </label>

                        <input type="text" required name="name" value="{{ old('name') }}"
                            placeholder="Tu nombre"
                            class="w-full px-4 py-4 rounded-lg border border-white/15 bg-transparent focus:outline-none focus:border-accent">
                    </div>

                    <div>
                        <label class="block mb-2 text-sm">
                            Correo electrónico
                        </label>

                        <input type="email" required name="email" value="{{ old('email') }}"
                            placeholder="tu@email.com"
                            class="w-full px-4 py-4 rounded-lg border border-white/15 bg-transparent focus:outline-none focus:border-accent">
                    </div>

                </div>

                <div>
                    <label class="block mb-2 text-sm">
                        Empresa (Opcional)
                    </label>

                    <input type="text" name="company" value="{{ old('company') }}"
                        placeholder="Nombre de la empresa"
                        class="w-full px-4 py-4 rounded-lg border border-white/15 bg-transparent focus:outline-none focus:border-accent">
                </div>

                <div>
                    <label class="block mb-2 text-sm">
                        Mensaje
                    </label>

                    <textarea name="message" required rows="6" placeholder="Cuéntame sobre tu proyecto..."
                        class="w-full px-4 py-4 rounded-lg border border-white/15 bg-transparent resize-none focus:outline-none focus:border-accent">{{ old('message') }}</textarea>
                </div>

                <button type="submit"
                    class="inline-flex items-center justify-center px-8 py-4 border border-white rounded-lg font-medium hover:bg-white hover:text-bg-primary transition">
                    Enviar mensaje
                </button>

            </form>

            <div class="mt-12 pt-8 border-t border-white/15 text-center">

                <p class="text-text-secondary">
                    O escríbeme directamente a
                </p>

                <a href="mailto:reqquxui@gmail.com" class="text-accent font-medium mt-2 inline-block">
                    reqquxui@gmail.com
                </a>

            </div>

        </div>

    </section>


    <footer class="border-t border-white/15">

        <div class="container-custom py-12">

            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-8">

                <!-- Info -->
                <div>

                    <h3 class="text-xl font-semibold">
                        Diego Requena
                    </h3>

                    <p class="text-text-secondary mt-2">
                        UX/UI Designer & Web Designer
                    </p>

                </div>

                <!-- Navegación -->
                <div class="flex flex-wrap gap-6">

                    <a href="#about" class="hover:text-accent transition">
                        Sobre mí
                    </a>

                    <a href="#projects" class="hover:text-accent transition">
                        Casos reales
                    </a>

                    <a href="#contact" class="hover:text-accent transition">
                        Contacto
                    </a>

                </div>

                <!-- Redes -->
                <div class="flex items-center gap-4">

                    <a href="https://www.instagram.com/reqq.ux/" target="_blank">
                        <img src="{{ asset('icons/instagram.svg') }}" alt="Instagram" class="w-5 h-5">
                    </a>

                    <a href="https://www.linkedin.com/in/diegoreqmec/" target="_blank">
                        <img src="{{ asset('icons/linkedin.svg') }}" alt="LinkedIn" class="w-5 h-5">
                    </a>

                </div>

            </div>

            <div class="mt-8 pt-8 border-t border-white/15">

                <p class="text-sm text-text-secondary">
                    © {{ date('Y') }} Diego Requena. Todos los derechos reservados.
                </p>

            </div>

        </div>

    </footer>
@endsection
