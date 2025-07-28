<nav class="bg-gray-900/50 backdrop-blur-sm text-white sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">

            <!-- Logo and Brand Name -->
            <div class="flex items-center gap-3">
                <!-- You can replace this with your actual logo -->
                <img class="w-12 h-12 rounded-full" src="https://placehold.co/48x48/334155/ffffff?text=SKM" alt="Company Logo" />
                <span class="text-xl font-bold tracking-wider">
                    SAFARI KARYA MAJU
                </span>
            </div>

            <!-- Desktop Navigation Links -->
            <div class="hidden md:flex items-center space-x-12">
                <a href="#" class="font-medium hover:text-blue-300 transition-colors duration-300">Beranda</a>
                <a href="#" class="font-medium hover:text-blue-300 transition-colors duration-300">Produk Kami</a>
                <a href="#" class="font-medium hover:text-blue-300 transition-colors duration-300">Pelanggan</a>
                <a href="#" class="font-medium hover:text-blue-300 transition-colors duration-300">Sertifikasi</a>
                <a href="#" class="font-medium hover:text-blue-300 transition-colors duration-300">Hubungi Kami</a>
                <a href="#" class="font-medium hover:text-blue-300 transition-colors duration-300">ID</a>
            </div>
            
            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    {{-- <!-- Mobile Menu (hidden by default) -->
    <div id="mobile-menu" class="hidden md:hidden px-6 pb-4">
        <a href="#" class="block py-2 text-center font-medium hover:bg-gray-700 rounded">Beranda</a>
        <a href="#" class="block py-2 text-center font-medium hover:bg-gray-700 rounded">Produk Kami</a>
        <a href="#" class="block py-2 text-center font-medium hover:bg-gray-700 rounded">Pelanggan</a>
        <a href="#" class="block py-2 text-center font-medium hover:bg-gray-700 rounded">Sertifikasi</a>
        <a href="#" class="block py-2 text-center font-medium hover:bg-gray-700 rounded">Hubungi Kami</a>
        <a href="#" class="block py-2 text-center font-medium hover:bg-gray-700 rounded">ID</a>
    </div>
</nav>

<script>
    // JavaScript to toggle the mobile menu
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        var mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.remove('hidden');
        } else {
            mobileMenu.classList.add('hidden');
        }
    });
</script> --}}