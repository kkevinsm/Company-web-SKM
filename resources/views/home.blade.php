@extends('layouts.guest')

@section('content')

    <div x-data="{ showModal: false, videoUrl: '' }">

        <!-- HERO SECTION -->
        <section class="relative h-screen flex items-center justify-start overflow-hidden">
            
            <div class="absolute top-0 left-0 w-full h-full z-0">
                <video 
                    class="absolute top-1/2 left-1/2 w-full h-full min-w-full min-h-full object-cover -translate-x-1/2 -translate-y-1/2" 
                    src="{{ asset('images/teaser-web-skm.mp4') }}" 
                    autoplay 
                    loop 
                    muted 
                    playsinline>
                </video>
            </div>

            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50 z-10"></div>

            <div class="container mx-auto px-6">
                <div class="relative z-20 text-white max-w-2.5xl">
                    <h1 class="text-5xl font-extrabold tracking-tight">
                        YOUR ALL METAL SHEET SOLUTION
                    </h1>
                    <p class="mt-4 text-2xl leading-normal text-white/75">
                        PT SAFARI KARYA MAJU
                    </p>

                    <button @click="showModal = true; videoUrl = 'https://www.youtube.com/embed/WT_AxXaOWrs?autoplay=1&mute=1&loop=1&playlist=WT_AxXaOWrs&controls=05'" class="mt-8 inline-flex items-center justify-center gap-2 h-12 py-5 px-8 border-2 border-white rounded-full text-white text-sm shadow-sm hover:px-12 hover:bg-white hover:text-gray-900 transition-all duration-300 ease-in-out">
                        <span class="leading-normal">Putar Video</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.ww3.org/2000/svg">
                            <path d="M8 5v14l11-7z"></path>
                        </svg>
                    </button>
                </div>
            </div>

        </section>

        <!-- SECTION 2 -->
        <section class="bg-white py-8 md:py-12">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row items-center gap-12 md:gap-24">

                    <div class="w-full md:w-1/2 flex justify-center">
                        <img src="{{ asset('images/logo-skm-color.png') }}" alt="Logo SKM Berwarna" class="w-full max-w-lg">
                    </div>

                    <div class="w-full md:w-1/2 text-left">
                        <div class="flex flex-col gap-10">
                            <div class="flex flex-col gap-4">
                                <h2 class="text-4xl font-bold text-gray-800">
                                    Selamat Datang di PT Safari Karya Maju
                                </h2>
                                <p class="text-lg leading-relaxed text-gray-600 text-justify">
                                    PT. Safari Karya Maju, kami menganggap integritas sebagai fondasi utama dalam setiap interaksi dengan pelanggan, mitra, dan stakeholder kami. Kami memegang teguh komitmen untuk selalu bertindak secara <strong>jujur, transparan, dan bertanggung jawab.</strong>
                                </p>
                            </div>

                            <div>
                                <a href="#" class="inline-flex items-center justify-center gap-2 h-12 py-3 px-8 border-2 border-black rounded-full text-black text-base font-bold hover:bg-[#f96628] hover:border-[#f96628] hover:text-white hover:px-12 transition-all duration-300 ease-in-out">
                                    <span>Selengkapnya</span>
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION 3 -->
        <section class="relative bg-gray-800 text-white">
            <img src="{{ asset('images/about-us-bg.png') }}" alt="Tentang Kami Background" class="absolute inset-0 w-full h-full object-cover z-0">

            <div class="absolute inset-0 bg-black/25 z-10"></div>

            <div class="relative container mx-auto px-6 py-24 md:py-32 z-20">
                <div class="max-w-2xl text-left">
                    <div class="flex flex-col gap-8">

                        <h2 class="text-5xl font-semibold">
                        </h2>

                        <p class="text-2xl leading-normal text-justify">
                            Sejak tahun 2000, CV. Safari Karya Maju yang kemudian bertransformasi menjadi PT. Safari Karya Maju telah menjadi pilar utama dalam industri pengolahan sheet metal dan fabrikasi di Indonesia. Kami bangga menyediakan solusi terbaik dengan kualitas unggul yang didasari oleh nilai-nilai inti perusahaan kami: <strong>INTEGRITY, INNOVATION,</strong> dan <strong>WINNING SPIRIT.</strong>
                        </p>

                        <div>
                            <a href="#" class="inline-flex items-center justify-center gap-2 h-12 py-3 px-6 border border-white rounded-full text-white text-sm font-bold hover:bg-[#f96628] hover:border-[#f96628] hover:px-10 transition-all duration-300 ease-in-out">
                                <span>Selengkapnya</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>


        <div 
            x-show="showModal" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50"
            style="display: none;">
            
                <div class="relative bg-black p-2 rounded-lg shadow-lg w-full max-w-4xl" @click.away="showModal = false; videoUrl = ''">
                    <button @click="showModal = false; videoUrl = ''" class="absolute -top-4 -right-4 w-10 h-10 bg-white rounded-full text-black flex items-center justify-center z-50">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                    
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe :src="videoUrl" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="w-full h-full"></iframe>
                    </div>
                </div>
        </div>

    </div>

@endsection