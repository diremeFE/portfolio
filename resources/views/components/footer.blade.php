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

                <a href="TU_INSTAGRAM" target="_blank">
                    <img
                        src="{{ asset('icons/instagram.svg') }}"
                        alt="Instagram"
                        class="w-5 h-5"
                    >
                </a>

                <a href="TU_LINKEDIN" target="_blank">
                    <img
                        src="{{ asset('icons/linkedin.svg') }}"
                        alt="LinkedIn"
                        class="w-5 h-5"
                    >
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