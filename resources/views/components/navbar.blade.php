<nav id="navbar" class="transition-all duration-300 bg-teal-300 flex items-center w-10/12 h-max px-7 py-4 rounded-xl">
    <ul class="flex items-center w-full gap-x-10 text-white font-semibold text-lg relative">
        <li class="cursor-pointer relative inline-block group">
            Beranda
            <span
                class="absolute left-0 bottom-0 h-0.5 w-0 bg-white transition-all duration-300 group-hover:w-full"></span>
        </li>

        <li class="relative group flex items-center gap-x-1 cursor-pointer">
            Tentang Kami
            <svg xmlns="http://www.w3.org/2000/svg"
                class="w-4 h-4 text-white mt-1 transition-transform duration-300 group-hover:rotate-180" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
            <span
                class="absolute left-0 bottom-0 h-0.5 w-0 bg-white transition-all duration-300 group-hover:w-full"></span>
            <!-- Submenu -->
            <ul
                class="absolute top-10 left-0 w-60 p-5 bg-teal-200 backdrop-blur-lg text-teal-800 rounded-lg shadow-lg opacity-100 group-hover:opacity-100 scale-y-0 group-hover:scale-y-100 origin-top transition-all duration-300 z-50">
                <li class="px-4 py-2 relative cursor-pointer group/sub opacity-50 hover:opacity-100 duration-200">
                    Visi & Misi
                    <span
                        class="absolute left-4 bottom-1 h-0.5 w-0 bg-white transition-all duration-300 group-hover/sub:w-[calc(100%-2rem)]">
                    </span>
                </li>
                {{-- <li class="px-4 py-2 relative cursor-pointer group/sub opacity-50 hover:opacity-100 duration-200">
                    Struktur Organisasi
                    <span
                        class="absolute left-4 bottom-1 h-0.5 w-0 bg-white transition-all duration-300 group-hover/sub:w-[calc(100%-2rem)]">
                    </span>
                </li> --}}
                <li class="px-4 py-2 relative cursor-pointer group/sub opacity-50 hover:opacity-100 duration-200">
                    Sejarah
                    <span
                        class="absolute left-4 bottom-1 h-0.5 w-0 bg-white transition-all duration-300 group-hover/sub:w-[calc(100%-2rem)]">
                    </span>
                </li>
            </ul>
        </li>

        <li class="cursor-pointer relative inline-block group">
            Galeri
            <span class="absolute left-0 bottom-0 h-0.5 w-0 bg-white transition-all duration-300 group-hover:w-full">
            </span>
        </li>

        <li class="relative group flex items-center gap-x-1 cursor-pointer">
            Halaman
            <svg xmlns="http://www.w3.org/2000/svg"
                class="w-4 h-4 text-white mt-1 transition-transform duration-300 group-hover:rotate-180" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
            <span class="absolute left-0 bottom-0 h-0.5 w-0 bg-white transition-all duration-300 group-hover:w-full">
            </span>
            <!-- Submenu -->
            <ul
                class="absolute top-10 left-0 w-60 p-5 bg-teal-200 backdrop-blur-lg text-teal-800 rounded-lg shadow-lg opacity-100 group-hover:opacity-100 scale-y-0 group-hover:scale-y-100 origin-top transition-all duration-300 z-50">
                {{-- <li class="px-4 py-2 relative cursor-pointer group/sub opacity-50 hover:opacity-100 duration-200">
                    Berita
                    <span
                        class="absolute left-4 bottom-1 h-0.5 w-0 bg-white transition-all duration-300 group-hover/sub:w-[calc(100%-2rem)]">
                    </span>
                </li> --}}
                <li class="px-4 py-2 relative cursor-pointer group/sub opacity-50 hover:opacity-100 duration-200">
                    Blog
                    <span
                        class="absolute left-4 bottom-1 h-0.5 w-0 bg-white transition-all duration-300 group-hover/sub:w-[calc(100%-2rem)]">
                    </span>
                </li>
                <li class="px-4 py-2 relative cursor-pointer group/sub opacity-50 hover:opacity-100 duration-200">
                    Program Unggulan
                    <span
                        class="absolute left-4 bottom-1 h-0.5 w-0 bg-white transition-all duration-300 group-hover/sub:w-[calc(100%-2rem)]">
                    </span>
                </li>
                <li class="px-4 py-2 relative cursor-pointer group/sub opacity-50 hover:opacity-100 duration-200">
                    Daftar Workshop
                    <span
                        class="absolute left-4 bottom-1 h-0.5 w-0 bg-white transition-all duration-300 group-hover/sub:w-[calc(100%-2rem)]">
                    </span>
                </li>

            </ul>
        </li>

        <li class="cursor-pointer relative inline-block group">
            Download
            <span class="absolute left-0 bottom-0 h-0.5 w-0 bg-white transition-all duration-300 group-hover:w-full">
            </span>
        </li>

        <li class="cursor-pointer relative inline-block group">
            Grafik
            <span class="absolute left-0 bottom-0 h-0.5 w-0 bg-white transition-all duration-300 group-hover:w-full">
            </span>
        </li>
    </ul>

    <!-- Search & Login -->
    <div class="w-max h-max flex gap-x-3">
        <button
            class="w-max h-max p-3 rounded-full border border-white text-white font-semibold hover:bg-teal-600 duration-200 cursor-pointer">
            <img src="/images/search.png" alt="cari" class="w-5 h-5">
        </button>
        <a href="{{ route('login.layout') }}"
            class="flex items-center px-9 py-1 rounded-full border border-white text-white font-semibold hover:bg-teal-600 duration-200 cursor-pointer">
            Login
        </a>
    </div>
</nav>

<script>
    const navbar = document.getElementById('navbar');
    const navbarOffsetTop = navbar.offsetTop;

    window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;

        if (scrollY > navbarOffsetTop) {
            navbar.classList.add(
                'fixed', 'top-5', 'left-28', 'z-50',
                'bg-teal-300/60', 'backdrop-blur-md', 'shadow-md'
            );
        } else {
            navbar.classList.remove(
                'fixed', 'top-0', 'left-0', 'z-50',
                'bg-teal-300/60', 'backdrop-blur-md', 'shadow-md'
            );
        }
    });
</script>
