@extends('layouts.guest')

@section('content')

<div x-data="{ showModal: false }" @keydown.escape.window="showModal = false">

    <!-- SECTION 1 -->
    <section class="relative h-[400px] flex items-center justify-start overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full z-0">
            <img class="w-full h-full object-cover" src="{{ asset('images/hubkami-hero.png') }}" alt="Latar Belakang Workshop">
        </div>
        <div class="absolute top-0 left-0 w-full h-full bg-black/25 z-10"></div>
        <div class="container mx-auto px-6">
            <div class="relative z-20 text-white max-w-4xl">
                <h1 class="text-5xl font-extrabold tracking-tight">
                    Workshop PT. Safari Karya Maju
                </h1>
            </div>
        </div>
    </section>

    <!-- SECTION 2 -->
    <section class="bg-white py-20 md:py-28">
        <div class="container mx-auto px-6">
            <div class="max-w-5xl mx-auto bg-white shadow-2xl rounded-lg overflow-hidden">
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15816.62340547457!2d112.686023!3d-7.666388!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d949c172c4e3%3A0xde9f5c989738ea0d!2sSafari%20karya%20maju%20manufacture!5e0!3m2!1sid!2sus!4v1753968958458!5m2!1sid!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                
                <div class="bg-gray-50 p-8 md:p-12">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
                        <div class="md:col-span-2 space-y-4">
                            <h2 class="text-4xl font-bold text-gray-900">Workshop Safari Karya Maju</h2>
                            <a href="https://maps.app.goo.gl/oHs6VHPeXhuDN3nM8" target="_blank" class="inline-flex items-center justify-center gap-2 h-12 py-3 px-8 border-2 border-black rounded-full text-black text-base font-bold hover:bg-[#f96628] hover:border-[#f96628] hover:text-white transition-colors duration-300">
                                <span>{{ __('hubungi.get_direction') }}</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                            </a>
                        </div>
                        <div class="space-y-4 text-gray-700">
                            <div class="flex items-start gap-3">
                                <img src="{{ asset('images/marker.svg') }}" alt="Alamat" class="w-6 h-6 mt-1">
                                <div>
                                    <p class="leading-relaxed">Dsn. Bakalan RT 001 RW 002, Durensewu, Kec. Pandaan, Pasuruan, Jawa Timur 67156</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('images/phone.svg') }}" alt="Telepon" class="w-6 h-6">
                                <span>(0343) 633 704</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('images/fax.svg') }}" alt="Fax" class="w-6 h-6">
                                <span>(0343) 633 704</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3 -->
    <section class="relative py-24 text-white text-center">
        <img src="{{ asset('images/solusi-section.png') }}" alt="Latar Belakang Fabrikasi" class="absolute inset-0 w-full h-full object-cover z-0">
        <div class="relative container mx-auto px-6 z-10">
            <div class="max-w-4xl mx-auto flex flex-col items-center gap-8">
                <h2 class="text-5xl font-bold">{{ __('hubungi.section_title') }}</h2>
                <p class="text-lg text-white/80 leading-relaxed">
                    {{ __('hubungi.section_subtitle') }}
                </p>
                <button @click="showModal = true" class="inline-flex items-center justify-center gap-2 h-12 py-3 px-8 border-2 border-white rounded-full text-white text-base font-bold hover:bg-white hover:text-black transition-colors duration-300">
                    <span>{{ __('hubungi.contact_us') }}</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                </button>
            </div>
        </div>
    </section>


    <!-- MODAL FORMULIR -->
    <div x-show="showModal" x-transition.opacity.duration.300 class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 p-4" style="display: none;">
        <div x-show="showModal" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" @click.away="showModal = false" class="relative bg-white/20 backdrop-blur-lg border border-white/30 rounded-2xl shadow-xl w-full max-w-2xl text-white">
            
            <button @click="showModal = false" class="absolute -top-3 -right-3 w-10 h-10 bg-white/30 hover:bg-white/50 rounded-full text-white shadow-lg flex items-center justify-center transition-colors duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
            
            <div class="p-8 md:p-12">
                <h2 class="text-3xl font-bold mb-6">Hubungi Kami</h2>
                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    <div class="relative">
                        <label for="name" class="block text-sm font-medium text-white/80 mb-1">Nama Lengkap</label>
                        <input type="text" name="name" id="name" required class="mt-1 block w-full bg-white/10 border-white/30 rounded-md shadow-sm text-white placeholder-white/50 focus:ring-2 focus:ring-[#f96628] focus:border-[#f96628] sm:text-sm transition-all duration-300">
                    </div>
                    <div class="relative">
                        <label for="email" class="block text-sm font-medium text-white/80 mb-1">Alamat Email</label>
                        <input type="email" name="email" id="email" required class="mt-1 block w-full bg-white/10 border-white/30 rounded-md shadow-sm text-white placeholder-white/50 focus:ring-2 focus:ring-[#f96628] focus:border-[#f96628] sm:text-sm transition-all duration-300">
                    </div>
                    <div class="relative">
                        <label for="subject" class="block text-sm font-medium text-white/80 mb-1">Subjek</label>
                        <input type="text" name="subject" id="subject" required class="mt-1 block w-full bg-white/10 border-white/30 rounded-md shadow-sm text-white placeholder-white/50 focus:ring-2 focus:ring-[#f96628] focus:border-[#f96628] sm:text-sm transition-all duration-300">
                    </div>
                    <div class="relative">
                        <label for="message" class="block text-sm font-medium text-white/80 mb-1">Pesan Anda</label>
                        <textarea name="message" id="message" rows="4" required class="mt-1 block w-full bg-white/10 border-white/30 rounded-md shadow-sm text-white placeholder-white/50 focus:ring-2 focus:ring-[#f96628] focus:border-[#f96628] sm:text-sm transition-all duration-300"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="w-full inline-flex items-center justify-center gap-2 h-12 py-3 px-8 bg-[#f96628] border-2 border-transparent rounded-full text-white text-base font-bold hover:bg-opacity-90 transition-all duration-300 ease-in-out">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
