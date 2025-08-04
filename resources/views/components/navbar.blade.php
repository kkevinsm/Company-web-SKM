<nav x-data="{ open: false }" class="text-white absolute top-0 w-full z-50">
    <div class="container mx-auto px-6">
        <div class="flex items-center justify-between h-32">

            <a href="/" class="flex items-center gap-2">
                <img class="w-12 h-12" src="{{ asset('images/LOGO SKM ONLY WHITE (1) 1.png') }}" alt="Safari Karya Maju Logo" />
                <span class="text-xl font-bold tracking-wider">SAFARI KARYA MAJU</span>
            </div>

            @php
                $currentLocale = app()->getLocale();
                $currentRouteName = request()->route()->getName();
                $routeParameters = request()->route()->parameters();

                // Ubah nama rute saat ini ke versi bahasa lain
                if ($currentLocale === 'id') {
                    $switchToLocale = 'en';
                    $switchToRouteName = 'en.' . substr($currentRouteName, 3);
                } else {
                    $switchToLocale = 'id';
                    $switchToRouteName = 'id.' . substr($currentRouteName, 3);
                }
            @endphp

            <div class="hidden md:flex items-center space-x-12">
                <a href="{{ route($currentLocale . '.home') }}" class="font-medium hover:text-blue-300 transition-colors">{{ __('navbar.home') }}</a>
                <a href="{{ route($currentLocale . '.produk') }}" class="font-medium hover:text-blue-300 transition-colors">{{ __('navbar.our_products') }}</a>
                <a href="{{ route($currentLocale . '.pelanggan') }}" class="font-medium hover:text-blue-300 transition-colors">{{ __('navbar.clients') }}</a>
                <a href="{{ route($currentLocale . '.sertifikasi') }}" class="font-medium hover:text-blue-300 transition-colors">{{ __('navbar.certification') }}</a>
                <a href="{{ route($currentLocale . '.hubungi-kami') }}" class="font-medium hover:text-blue-300 transition-colors">{{ __('navbar.contact_us') }}</a>
                
                <!--  LANG DROPDOWN -->
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="font-medium hover:text-blue-300 transition-colors uppercase flex items-center gap-1">
                        <span>{{ $currentLocale }}</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="open" @click.away="open = false" x-transition class="absolute right-0 mt-2 w-32 bg-white rounded-md shadow-lg py-1 z-50 text-black" style="display: none;">
                        <a href="{{ route('id.' . substr($currentRouteName, 3), $routeParameters) }}" class="flex items-center gap-2 px-4 py-2 text-sm hover:bg-gray-100">
                            <img src="{{ asset('images/icon_id.png') }}" alt="ID Flag" class="w-5 h-auto">
                            <span>ID</span>
                        </a>
                        <a href="{{ route('en.' . substr($currentRouteName, 3), $routeParameters) }}" class="flex items-center gap-2 px-4 py-2 text-sm hover:bg-gray-100">
                            <img src="{{ asset('images/icon_en.png') }}" alt="EN Flag" class="w-5 h-auto">
                            <span>EN</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="md:hidden">
                <button @click="open = !open" :aria-pressed="open" class="group inline-flex w-12 h-12 text-white items-center transition">
                    <span class="sr-only">Menu</span>
                    <svg class="w-6 h-6 fill-current pointer-events-none" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <rect class="origin-center -translate-y-[5px] translate-x-[7px] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.1)] group-[[aria-pressed=true]]:translate-x-0 group-[[aria-pressed=true]]:translate-y-0 group-[[aria-pressed=true]]:rotate-[315deg]" y="7" width="9" height="2" rx="1"></rect>
                        <rect class="origin-center transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.8)] group-[[aria-pressed=true]]:rotate-45" y="7" width="16" height="2" rx="1"></rect>
                        <rect class="origin-center translate-y-[5px] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.1)] group-[[aria-pressed=true]]:translate-y-0 group-[[aria-pressed=true]]:rotate-[135deg]" y="7" width="9" height="2" rx="1"></rect>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="open" x-transition class="md:hidden absolute top-24 right-6 w-auto bg-white bg-opacity-95 shadow-lg rounded-lg" @click.away="open = false" style="display: none;">
        <div class="px-4 py-2">
            <a href="{{ route($currentLocale . '.home') }}" class="block py-2 px-2 text-left font-medium text-gray-800 hover:bg-gray-200 rounded">{{ __('navbar.home') }}</a>
            <a href="{{ route($currentLocale . '.produk') }}" class="block py-2 px-2 text-left font-medium text-gray-800 hover:bg-gray-200 rounded whitespace-nowrap">{{ __('navbar.our_products') }}</a>
            <a href="{{ route($currentLocale . '.pelanggan') }}" class="block py-2 px-2 text-left font-medium text-gray-800 hover:bg-gray-200 rounded">{{ __('navbar.clients') }}</a>
            <a href="{{ route($currentLocale . '.sertifikasi') }}" class="block py-2 px-2 text-left font-medium text-gray-800 hover:bg-gray-200 rounded">{{ __('navbar.certification') }}</a>
            <a href="{{ route($currentLocale . '.hubungi-kami') }}" class="block py-2 px-2 text-left font-medium text-gray-800 hover:bg-gray-200 rounded whitespace-nowrap">{{ __('navbar.contact_us') }}</a>
            <hr class="my-1">
            <a href="{{ route('id.' . substr($currentRouteName, 3), $routeParameters) }}" class="flex items-center gap-2 py-2 px-2 text-left font-medium text-gray-800 hover:bg-gray-200 rounded">
                <img src="{{ asset('images/icon_id.png') }}" alt="ID Flag" class="w-5 h-auto">
                <span>ID</span>
            </a>
            <a href="{{ route('en.' . substr($currentRouteName, 3), $routeParameters) }}" class="flex items-center gap-2 py-2 px-2 text-left font-medium text-gray-800 hover:bg-gray-200 rounded">
                <img src="{{ asset('images/icon_en.png') }}" alt="EN Flag" class="w-5 h-auto">
                <span>EN</span>
            </a>
        </div>
    </div>
</nav>
