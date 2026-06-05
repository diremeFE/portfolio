<nav x-data="{ open: false }" class="sticky top-4 z-50">

    <div class="container-custom">

        <!-- Desktop -->
        <div
            class="hidden md:flex mx-auto max-w-fit items-center gap-8 px-10 py-5 rounded-full border border-white/30 bg-bg-primary/80 backdrop-blur-md shadow-[0_8px_32px_rgba(0,0,0,.25)]">

            <!-- Logo -->
            <a href="/" class="font-medium">
                Diego
            </a>

            <!-- Links -->
            <ul class="flex items-center gap-8 body-medium">
                <li><a href="#about">Sobre mí</a></li>
                <li><a href="#projects">Proyectos</a></li>
                <li><a href="#contact">Contacto</a></li>
            </ul>

            <!-- Socials -->
            <div class="flex items-center gap-4 border-l border-white/15 pl-4">

                <a href="https://www.instagram.com/reqq.ux/" aria-label="Instagram">
                    <img src="{{ asset('icons/instagram.svg') }}" alt="Instagram" class="w-5 h-5">
                </a>

                <a href="https://www.linkedin.com/in/diegoreqmec/" aria-label="LinkedIn">
                    <img src="{{ asset('icons/linkedin.svg') }}" alt="LinkedIn" class="w-5 h-5">
                </a>

            </div>

        </div>

        <!-- Mobile -->
        <div
            class="md:hidden flex items-center justify-between px-5 py-4 rounded-full border border-white/10 bg-bg-primary/80 backdrop-blur-md shadow-[0_8px_32px_rgba(0,0,0,.25)]">

            <span>Diego</span>

            <button @click="open = true">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

        </div>

    </div>

    <!-- Mobile Menu -->
    <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 -translate-y-6"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-6"
        class="fixed inset-0 z-[999] bg-[#020B1E] md:hidden">

        <div class="container-custom">

            <div class="flex items-center justify-between h-20 border-b border-white/15">

                <span>Diego</span>

                <button @click="open = false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-width="2"
                            d="M6 6l12 12M18 6L6 18" />
                    </svg>
                </button>

            </div>

            <ul class="flex flex-col gap-8 py-10 heading-3">
                <li><a href="#about" @click="open = false">Sobre mí</a></li>
                <li><a href="#projects" @click="open = false">Proyectos</a></li>
                <li><a href="#contact" @click="open = false">Contacto</a></li>
            </ul>

            <div class="flex gap-4">

                <a href="https://www.instagram.com/reqq.ux/">
                    <img src="{{ asset('icons/instagram.svg') }}" class="w-5 h-5">
                </a>

                <a href="https://www.linkedin.com/in/diegoreqmec/">
                    <img src="{{ asset('icons/linkedin.svg') }}" class="w-5 h-5">
                </a>

            </div>

        </div>

    </div>

</nav>