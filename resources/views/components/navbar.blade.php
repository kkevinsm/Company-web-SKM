<nav x-data="{ open: false }" class="text-white sticky top-0 z-50">
    <div class="container mx-auto px-6">
        <div class="flex items-center justify-between h-32"> {{-- Tinggi navbar 128px (h-32) --}}

            <div class="flex items-center gap-2">
                <img class="w-12 h-12" src="{{ asset('images/LOGO SKM ONLY WHITE (1) 1.png') }}" alt="Safari Karya Maju Logo" />
                <span class="text-xl font-bold tracking-wider">
                    SAFARI KARYA MAJU
                </span>
            </div>

            <div class="hidden md:flex items-center space-x-12">
                <a href="#" class="font-medium hover:text-blue-300 transition-colors">Beranda</a>
                <a href="#" class="font-medium hover:text-blue-300 transition-colors">Produk Kami</a>
                <a href="#" class="font-medium hover:text-blue-300 transition-colors">Pelanggan</a>
                <a href="#" class="font-medium hover:text-blue-300 transition-colors">Sertifikasi</a>
                <a href="#" class="font-medium hover:text-blue-300 transition-colors">Hubungi Kami</a>
                <a href="#" class="font-medium hover:text-blue-300 transition-colors">ID</a>
            </div>
            
            <div class="md:hidden">
                <button @click="open = !open" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path :class="{'hidden': open, 'inline-flex': !open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        <path :class="{'hidden': !open, 'inline-flex': open }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <div x-show="open" class="md:hidden px-6 pb-4" @click.away="open = false">
        <a href="#" class="block py-2 text-center font-medium hover:bg-gray-700 rounded">Beranda</a>
        <a href="#" class="block py-2 text-center font-medium hover:bg-gray-700 rounded">Produk Kami</a>
        <a href="#" class="block py-2 text-center font-medium hover:bg-gray-700 rounded">Pelanggan</a>
        <a href="#" class="block py-2 text-center font-medium hover:bg-gray-700 rounded">Sertifikasi</a>
        <a href="#" class="block py-2 text-center font-medium hover:bg-gray-700 rounded">Hubungi Kami</a>
        <a href="#" class="block py-2 text-center font-medium hover:bg-gray-700 rounded">ID</a>
    </div>
</nav>