<nav x-data="{ open: false }" class="text-white absolute top-0 w-full z-50">
    <div class="container mx-auto px-6">
        <div class="flex items-center justify-between h-32">

            <div class="flex items-center gap-2">
                <img class="w-12 h-12" src="{{ asset('images/LOGO SKM ONLY WHITE (1) 1.png') }}" alt="Safari Karya Maju Logo" />
                <span class="text-xl font-bold tracking-wider">
                    SAFARI KARYA MAJU
                </span>
            </div>

            <div class="hidden md:flex items-center space-x-12">
                <a href="/" class="font-medium hover:text-blue-300 transition-colors">Beranda</a>
                <a href="#" class="font-medium hover:text-blue-300 transition-colors">Produk Kami</a>
                <a href="{{ route('pelanggan') }}" class="font-medium hover:text-blue-300 transition-colors">Pelanggan</a>
                <a href="#" class="font-medium hover:text-blue-300 transition-colors">Sertifikasi</a>
                <a href="{{ route('hubungi-kami') }}" class="font-medium hover:text-blue-300 transition-colors">Hubungi Kami</a>
                <a href="#" class="font-medium hover:text-blue-300 transition-colors">ID</a>
            </div>
            
            <div class="md:hidden">
                <button @click="open = !open" :aria-pressed="open"
                    class="group inline-flex w-12 h-12 text-white items-center transition">
                    <span class="sr-only">Menu</span>
                    <svg class="w-6 h-6 fill-current pointer-events-none" viewBox="0 0 16 16"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect
                            class="origin-center -translate-y-[5px] translate-x-[7px] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.1)] group-[[aria-pressed=true]]:translate-x-0 group-[[aria-pressed=true]]:translate-y-0 group-[[aria-pressed=true]]:rotate-[315deg]"
                            y="7" width="9" height="2" rx="1"></rect>
                        <rect
                            class="origin-center transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.8)] group-[[aria-pressed=true]]:rotate-45"
                            y="7" width="16" height="2" rx="1"></rect>
                        <rect
                            class="origin-center translate-y-[5px] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.1)] group-[[aria-pressed=true]]:translate-y-0 group-[[aria-pressed=true]]:rotate-[135deg]"
                            y="7" width="9" height="2" rx="1"></rect>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 transform -translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform -translate-y-2"
        class="md:hidden absolute top-24 right-6 w-auto bg-white bg-opacity-95 shadow-lg rounded-lg"
        @click.away="open = false">
        <div class="px-4 py-2">
            <a href="/"
                class="block py-2 px-2 text-left font-medium text-gray-800 hover:bg-gray-200 rounded">Beranda</a>
            <a href="#"
                class="block py-2 px-2 text-left font-medium text-gray-800 hover:bg-gray-200 rounded whitespace-nowrap">Produk
                Kami</a>
            <a href="#"
                class="block py-2 px-2 text-left font-medium text-gray-800 hover:bg-gray-200 rounded">Pelanggan</a>
            <a href="#"
                class="block py-2 px-2 text-left font-medium text-gray-800 hover:bg-gray-200 rounded">Sertifikasi</a>
            <a href="#"
                class="block py-2 px-2 text-left font-medium text-gray-800 hover:bg-gray-200 rounded whitespace-nowrap">Hubungi
                Kami</a>
            <a href="#"
                class="block py-2 px-2 text-left font-medium text-gray-800 hover:bg-gray-200 rounded">ID</a>
        </div>
    </div>
</nav>
