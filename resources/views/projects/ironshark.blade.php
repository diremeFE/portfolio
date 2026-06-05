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
            <div class="mt-12">

                <p class="text-accent font-medium uppercase mb-4">
                    Caso de estudio · 2025
                </p>

                <h1 class="heading-2">
                    Iron Shark
                </h1>

                <p class="body-large text-text-secondary max-w-3xl mt-6">
                    Creación de una tienda online para una empresa de nutrición deportiva,
                    orientada a aumentar su visibilidad digital, presentar su catálogo de
                    productos y facilitar la venta directa a través de internet.
                </p>

                <div class="flex flex-wrap gap-4 mt-8">

                    <div class="px-4 py-2 border border-white/15 rounded-full">
                        UI Design
                    </div>

                    <div class="px-4 py-2 border border-white/15 rounded-full">
                        Ecommerce
                    </div>

                    <div class="px-4 py-2 border border-white/15 rounded-full">
                        Shopify
                    </div>

                </div>

            </div>

            <!-- Imagen principal -->
            <div class="mt-16">
                <img src="{{ asset('images/projects/hero-ironshark.png') }}" alt="Iron Shark" class="rounded-2xl w-full">
            </div>

            <!-- Problema -->
            <div class="mt-24">

                <h2 class="heading-3 mb-6">
                    El problema
                </h2>

                <p class="body-large text-text-secondary">
                    La empresa contaba con una presencia digital limitada y no disponía
                    de una tienda online que permitiera mostrar su catálogo de productos
                    de forma profesional. Los clientes dependían principalmente de redes
                    sociales y contacto directo para realizar consultas o compras.
                </p>

            </div>

            <!-- Objetivos -->
            <div class="mt-20">

                <h2 class="heading-3 mb-6">
                    Objetivos del proyecto
                </h2>

                <ul class="space-y-4 text-text-secondary body-large">

                    <li>• Crear una tienda online moderna y profesional.</li>

                    <li>• Mejorar la confianza de los potenciales clientes.</li>

                    <li>• Facilitar la compra desde cualquier dispositivo.</li>

                    <li>• Organizar el catálogo de productos de forma intuitiva.</li>

                    <li>• Incrementar las ventas online.</li>

                </ul>

            </div>

            <!-- Investigación -->
            <div class="mt-20">

                <h2 class="heading-3 mb-6">
                    Investigación y estrategia
                </h2>

                <p class="body-large text-text-secondary">
                    Se analizaron diferentes ecommerce del sector fitness y nutrición
                    deportiva para identificar patrones de navegación, estructuras de
                    catálogo y elementos de confianza. La estrategia se centró en mejorar
                    la experiencia de compra y facilitar la conversión desde la primera visita.
                </p>

            </div>

            <!-- Diseño -->
            <div class="mt-20">

                <h2 class="heading-3 mb-6">
                    Diseño UI
                </h2>

                <p class="body-large text-text-secondary">
                    La interfaz fue diseñada utilizando una estética moderna inspirada en
                    el mundo del fitness y el alto rendimiento deportivo. Se priorizó una
                    navegación clara, llamadas a la acción visibles y una presentación visual
                    atractiva de los productos.
                </p>

                <div class="grid md:grid-cols-2 gap-8 mt-10">

                    <img src="{{ asset('images/projects/ironshark-ui-1.png') }}" class="rounded-xl">

                    <img src="{{ asset('images/projects/ironshark-ui-2.png') }}" class="rounded-xl">

                </div>

            </div>

            <!-- Desarrollo -->
            <div class="mt-20">

                <h2 class="heading-3 mb-6">
                    Desarrollo
                </h2>

                <p class="body-large text-text-secondary">
                    La tienda online fue desarrollada en Shopify, permitiendo una gestión
                    sencilla del catálogo, inventario, pedidos y promociones. Se configuró
                    una experiencia de compra optimizada para maximizar la conversión,
                    mejorando la velocidad de carga, la navegación móvil y la facilidad
                    de uso para los clientes.
                </p>

            </div>

            <!-- Resultados -->
            <div class="mt-20">

                <h2 class="heading-3 mb-6">
                    Resultados
                </h2>

                <div class="grid md:grid-cols-3 gap-6">

                    <div class="border border-white/15 rounded-xl p-6">
                        <h3 class="text-4xl font-bold">+80%</h3>
                        <p class="text-text-secondary mt-2">
                            Incremento de tráfico web
                        </p>
                    </div>

                    <div class="border border-white/15 rounded-xl p-6">
                        <h3 class="text-4xl font-bold">+55%</h3>
                        <p class="text-text-secondary mt-2">
                            Pedidos online
                        </p>
                    </div>

                    <div class="border border-white/15 rounded-xl p-6">
                        <h3 class="text-4xl font-bold">+35%</h3>
                        <p class="text-text-secondary mt-2">
                            Incremento de ventas
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
                        Shopify
                    </span>

                    <span class="px-4 py-2 border border-white/15 rounded-full">
                        Liquid
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
