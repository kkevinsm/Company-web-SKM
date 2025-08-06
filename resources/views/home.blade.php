@extends('layouts.guest')

@section('title', 'Beranda - PT Safari Karya Maju | Solusi Fabrikasi Metal')
@section('description', 'PT Safari Karya Maju menyediakan solusi fabrikasi metal dan laser cutting terdepan di Indonesia. Temukan teknologi dan layanan unggulan kami untuk proyek Anda.')

@section('content')
    <link rel="prefetch" href="{{ route(app()->getLocale() . '.produk') }}" as="document">
    <link rel="prefetch" href="{{ route(app()->getLocale() . '.pelanggan') }}" as="document">
    <link rel="prefetch" href="{{ route(app()->getLocale() . '.sertifikasi') }}" as="document">
    <link rel="prefetch" href="{{ route(app()->getLocale() . '.hubungi-kami') }}" as="document">

        <!-- HERO SECTION -->
        <section x-data="{ showModal: false, videoUrl: '' }" class="relative h-screen flex items-center justify-start overflow-hidden">
            
            <div class="absolute top-0 left-0 w-full h-full z-0">
                <video 
                    class="absolute top-1/2 left-1/2 w-full h-full min-w-full min-h-full object-cover -translate-x-1/2 -translate-y-1/2" 
                    src="{{ asset('images/teaser-web-skm.mp4') }}" 
                    poster="{{ asset('images/thumbnail-cover.png') }}"
                    autoplay 
                    loop 
                    muted 
                    playsinline>
                </video>
            </div>

            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50 z-10"></div>

            <div class="container mx-auto px-6">
                <div class="relative z-20 text-white max-w-4xl">
                    <h1 class="text-4xl md:text-6xl font-extrabold tracking-normal">
                        {{ __('home.hero_title') }}
                    </h1>
                    <p class="mt-4 text-2xl leading-normal text-white/75">
                        {{ __('home.hero_subtitle') }}
                    </p>

                    <button @click="showModal = true; videoUrl = 'https://www.youtube.com/embed/WT_AxXaOWrs?autoplay=1&mute=1&loop=1&playlist=WT_AxXaOWrs&controls=05'" class="mt-8 inline-flex items-center justify-center gap-2 h-12 py-5 px-8 border-2 border-white rounded-full text-white text-sm shadow-sm hover:px-12 hover:bg-white hover:text-gray-900 transition-all duration-300 ease-in-out">
                        <span class="leading-normal">{{ __('home.play_video') }}</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 5v14l11-7z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div x-show="showModal" x-transition class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50" style="display: none;">
                <div class="relative bg-black p-1 rounded-lg shadow-lg w-full max-w-6xl" @click.away="showModal = false; videoUrl = ''">
                    <button @click="showModal = false; videoUrl = ''" class="absolute -top-4 -right-4 w-10 h-10 bg-white rounded-full text-black flex items-center justify-center z-50">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe :src="videoUrl" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="w-full h-full"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 2 -->
        <section class="bg-white py-8 md:py-12">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row items-center gap-12 md:gap-24">

                    <div class="w-full md:w-1/2 flex justify-center">
                        <img src="{{ asset('images/logo-skm-color.png') }}" alt="Logo SKM Berwarna" class="w-full max-w-xs md:max-w-md" loading="lazy" decoding="async">
                    </div>

                    <div class="w-full md:w-1/2 text-left">
                        <div class="flex flex-col gap-10">
                            <div class="flex flex-col gap-4">
                                <h2 class="text-4xl md:text-5xl font-bold text-gray-800">
                                    {{ __('home.welcome_title') }}
                                </h2>
                                <p class="text-lg leading-relaxed text-gray-600 text-justify">
                                    {!! __('home.welcome_text') !!}
                                </p>
                            </div>

                            <div>
                                <a href="{{ route(app()->getLocale() . '.welcome') }}" class="inline-flex items-center justify-center gap-2 h-12 py-3 px-8 border-2 border-black rounded-full text-black text-base font-bold hover:bg-[#f96628] hover:border-[#f96628] hover:text-white hover:px-12 transition-all duration-300 ease-in-out">
                                    <span>{{ __('home.learn_more') }}</span>
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
            <img src="{{ asset('images/about-us-bg.png') }}" alt="Tentang Kami Background" class="absolute inset-0 w-full h-full object-cover z-0" loading="lazy" decoding="async">

            <div class="absolute inset-0 bg-black/60 z-10"></div>

            <div class="relative container mx-auto px-6 py-24 md:py-32 z-20">
                <div class="max-w-2xl text-left">
                    <div class="flex flex-col gap-8">

                        <h2 class="text-4xl md:text-5xl font-bold">{{ __('home.about_title') }}
                        </h2>

                        <p class="text-lg leading-normal text-justify">
                            {!! __('home.about_text') !!}
                        </p>

                        <div>
                            <a href="{{ route(app()->getLocale() . '.tentang') }}" class="inline-flex items-center justify-center gap-2 h-12 py-3 px-6 border border-white rounded-full text-white text-sm font-bold hover:bg-[#f96628] hover:border-[#f96628] hover:px-10 transition-all duration-300 ease-in-out">
                                <span>{{ __('home.learn_more') }}</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path>
                                </svg>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 4 -->
        <section class="overflow-hidden">
            <div x-data="{
                services: [
                    {
                        title: 'Laser Cutting',
                        description: `{{ __('home.services.laser_cutting.description') }}`,
                        image: '{{ asset('images/works/laser-cut.jpg') }}'
                    },
                    {
                        title: 'Laser Welding',
                        description: `{{ __('home.services.laser_welding.description') }}`,
                        image: '{{ asset('images/works/laser-weld.png') }}'
                    },
                    {
                        title: 'Metal Bending',
                        description: `{{ __('home.services.metal_bending.description') }}`,
                        image: '{{ asset('images/works/metal-bend.png') }}'
                    },
                    {
                        title: 'Metal Fabrication',
                        description: `{{ __('home.services.metal_fabrication.description') }}`,
                        image: '{{ asset('images/works/metal-fab.png') }}'
                    },
                    {
                        title: 'CNC Router',
                        description: `{{ __('home.services.cnc_router.description') }}`,
                        image: '{{ asset('images/works/non-metal.png') }}'
                    },
                    {
                        title: 'Bevelling',
                        description: `{{ __('home.services.bevelling.description') }}`,
                        image: '{{ asset('images/works/bevelling.png') }}'
                    },
                    {
                        title: 'Powder Coating',
                        description: `{{ __('home.services.powder_coating.description') }}`,
                        image: '{{ asset('images/works/powder-coat.png') }}'
                    }
                ],
                selectedIndex: 0,
                direction: 1, // 1 for next, -1 for prev
                get orderedServices() {
                    return [...this.services.slice(this.selectedIndex), ...this.services.slice(0, this.selectedIndex)];
                },
                next() {
                    this.direction = 1;
                    this.selectedIndex = (this.selectedIndex + 1) % this.services.length;
                },
                prev() {
                    this.direction = -1;
                    this.selectedIndex = (this.selectedIndex - 1 + this.services.length) % this.services.length;
                },
                select(service) {
                    const newIndex = this.services.findIndex(s => s.title === service.title);
                    this.direction = newIndex > this.selectedIndex ? 1 : -1;
                    this.selectedIndex = newIndex;
                }
            }"
            class="w-full">
                <div class="bg-white">
                    <div class="container mx-auto">
                        <h2 class="text-4xl sm:text-5xl font-bold text-black py-16 text-center lg:text-left px-4">{{ __('home.what_we_do_title') }}</h2>
                    </div>
                </div>
                <div class="bg-youngorange pt-24>
                     <div class="container mx-auto">
                        <div class="relative flex flex-col md:grid md:grid-cols-2 gap-6 items-center">
                            <!-- Image Section -->
                            <div class="relative w-full aspect-[4/3] md:h-[600px] overflow-hidden order-1">
                                <template x-for="(service, index) in services" :key="index">
                                    <div x-show="selectedIndex === index" 
                                         x-transition:enter="transition ease-in-out duration-500" 
                                         x-transition:enter-start="opacity-0" 
                                         x-transition:enter-end="opacity-100" 
                                         x-transition:leave="transition ease-in-out duration-300" 
                                         x-transition:leave-start="opacity-100" 
                                         x-transition:leave-end="opacity-0" 
                                         class="absolute inset-0">
                                        <img 
                                            :src="service.image" 
                                            :alt="service.title" 
                                            class="w-full h-full object-cover object-center shadow-lg sm:object-top" 
                                            loading="lazy" 
                                            decoding="async" 
                                            onerror="this.onerror=null;this.src='https://placehold.co/720x620/cccccc/ffffff?text=Image+Not+Found';">
                                    </div>
                                </template>
                            </div>

                            <!-- Cards Section -->
                            <div class="w-full md:w-auto px-0 md:absolute md:left-[30%] lg:left-[40%] md:right-0 md:top-1/2 md:-translate-y-1/2 z-10 order-2 -mt-56 md:-mt-0 py-10 md:py-0">
                                <div class="flex overflow-hidden gap-10 py-4 pl-[calc(50%-170px)] md:pl-0">
                                    <template x-for="(service, index) in orderedServices" :key="service.title">
                                        <div class="flex-shrink-0 w-[340px]" 
                                             x-show="index < 3" 
                                             x-transition:enter="transition ease-in-out duration-500"
                                             :x-transition:enter-start="direction === 1 ? 'opacity-0 transform translate-x-1/2' : 'opacity-0 transform -translate-x-1/2'"
                                             x-transition:enter-end="opacity-100 transform translate-x-0"
                                             x-transition:leave="transition ease-in-out duration-500"
                                             x-transition:leave-start="opacity-100 transform translate-x-0"
                                             :x-transition:leave-end="direction === 1 ? 'opacity-0 transform -translate-x-1/2' : 'opacity-0 transform translate-x-1/2'">
                                            <div @click="select(service)" 
                                                 :class="{
                                                     '!bg-[#f96628] text-white': selectedIndex === services.indexOf(service), 
                                                     'bg-white text-black': selectedIndex !== services.indexOf(service),
                                                     'opacity-50 scale-90': selectedIndex !== services.indexOf(service) && index > 0
                                                 }" 
                                                 class="card-content w-[340px] h-[420px] p-10 rounded-md shadow-lg gap-6 flex flex-col justify-between relative group hover:!bg-[#f96628] transition-all duration-300 cursor-pointer">
                                                <h3 class="text-2xl font-bold group-hover:text-white" :class="{'text-white': selectedIndex === services.indexOf(service)}" x-text="service.title"></h3>
                                                <div class="flex-none w-10 h-1 rounded group-hover:bg-white" :class="{'bg-white': selectedIndex === services.indexOf(service), 'bg-[#f96628]': selectedIndex !== services.indexOf(service)}"></div>
                                                <p class="text-sm group-hover:text-white flex-grow" :class="{'text-white': selectedIndex === services.indexOf(service)}" x-text="service.description"></p>
                                                <template x-if="service.title === 'Bevelling'">
                                                    <img src="{{ asset('images/works/bevel-icon.svg') }}" alt="Bevel Icon" class="mx-auto mt-4 w-64 h-64" loading="lazy" decoding="async">
                                                </template>
                                            </div>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                                 <!-- Navigation Buttons -->
                                <div class="flex justify-center md:justify-end gap-2 mt-4 items-center max-w-[620px] mx-auto">
                                    <button @click="prev()" class="group !static !w-12 !h-12 !m-0 flex items-center justify-center bg-white border border-slate-400 rounded-lg shadow hover:bg-[#f96628] transition-colors">
                                        <span class="sr-only">Prev</span>
                                        <svg class="w-6 h-6 text-slate-600 opacity-60 group-hover:text-white group-hover:opacity-100 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                    </button>
                                    <button @click="next()" class="group !static !w-12 !h-12 !m-0 flex items-center justify-center bg-white border border-slate-400 rounded-lg shadow hover:bg-[#f96628] transition-colors">
                                        <span class="sr-only">Next</span>
                                        <svg class="w-6 h-6 text-slate-600 opacity-60 group-hover:text-white group-hover:opacity-100 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 5 -->
        <section class="bg-white py-20 md:py-28">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 md:w-1/2">{{ __('home.technology_title') }}</h2>
                    <p class="text-base text-gray-600 md:w-1/2 mt-4 md:mt-0">
                        {{ __('home.technology_text') }}
                    </p>
                </div>

                <div
                    x-data="{
                        slider: null,
                        showModal: false,
                        videoUrl: ''
                    }"
                    x-init="
                        slider = tns({
                            container: $refs.slider,
                            items: 2,
                            slideBy: 1,
                            mouseDrag: true,
                            loop: true,
                            controls: false,
                            nav: false,
                            autoplay: false,
                            autoplayButtonOutput: false,
                            responsive: {
                                768: { items: 3 },
                                1024: { items: 6 }
                            }
                        });
                    "
                    class="relative"
                >
                    <div x-ref="slider">
                        @php
                            $cards = [
                                ['title' => 'FIBER LASER', 'subtitle' => 'GLORYSTAR 1500W', 'image' => '1.png', 'video_file' => 'video1.mp4'],
                                ['title' => 'FIBER LASER', 'subtitle' => 'KRRASS 6000W', 'image' => '2.png', 'video_file' => 'video2.mp4'],
                                ['title' => 'FIBER LASER', 'subtitle' => 'JIATAI XDP SERIES', 'image' => '3.png', 'video_file' => 'video3.mp4'],
                                ['title' => 'BENDING MACHINE', 'subtitle' => 'GLB - 16032', 'image' => '4.png', 'video_file' => 'video4.mp4'],
                                ['title' => 'BRAKE MACHINE', 'subtitle' => 'WC67Y', 'image' => '5.png', 'video_file' => 'video5.mp4'],
                                ['title' => 'CNC ROUTER MACHINE', 'subtitle' => 'A2 - 1325', 'image' => '6.png', 'video_file' => 'video6.mp4'],
                                ['title' => 'HYDRAULIC IRONWORKER', 'subtitle' => 'KRRASS', 'image' => '7.png', 'video_file' => 'video7.mp4'],
                                ['title' => 'LASER WELDING', 'subtitle' => 'BODOR 1500 PRO', 'image' => '8.png', 'video_file' => 'video8.mp4'],
                                ['title' => 'POWDER COATING', 'subtitle' => 'POWDER COATING', 'image' => '9.png', 'video_file' => 'video9.mp4'],
                            ];
                        @endphp

                        @foreach ($cards as $card)
                            <div class="px-3 flex-shrink-0 w-[calc((100%/6)-1.25rem)] snap-start py-4">
                                <div
                                    @click="showModal = true; videoUrl = '{{ asset('videos/' . $card['video_file']) }}'"
                                    class="group relative w-full aspect-[3/4] [perspective:1000px] cursor-pointer"
                                >
                                    <div class="relative h-full w-full rounded-2xl shadow-lg transition-all duration-700 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
                                        <div class="absolute inset-0 [backface-visibility:hidden]">
                                            <div class="relative h-full w-full rounded-2xl bg-gradient-to-t from-[#5c2c10] to-[#f96628] text-white p-4 flex flex-col justify-end text-center overflow-hidden">
                                                <img src="{{ asset('images/technology/' . $card['image']) }}" alt="{{ $card['title'] }}" class="absolute top-0 left-0 w-full h-full object-contain z-0 opacity-100" loading="lazy" decoding="async">
                                            </div>
                                        </div>
                                        <div class="absolute inset-0 h-full w-full rounded-2xl bg-gray-600 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                                            <img class="h-full w-full rounded-2xl object-cover" src="{{ asset('images/reverse-tech/' . $card['image']) }}" alt="{{ $card['title'] }}" loading="lazy" decoding="async" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="absolute top-1/2 -translate-y-1/2 w-full flex justify-between px-2">
                        <button @click="slider.goTo('prev')" class="w-12 h-12 bg-white rounded-full shadow-md flex items-center justify-center transition-opacity hover:opacity-75">
                            <svg class="w-6 h-6 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>
                        </button>
                        <button @click="slider.goTo('next')" class="w-12 h-12 bg-white rounded-full shadow-md flex items-center justify-center transition-opacity hover:opacity-75">
                            <svg class="w-6 h-6 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                        </button>
                    </div>

                    <div x-show="showModal" x-transition class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50" style="display: none;">
                        <div class="relative bg-black p-0.5 rounded-lg shadow-lg w-full max-w-xs sm:max-w-sm" @click.away="showModal = false; videoUrl = ''">
                            <button @click="showModal = false; videoUrl = ''" class="absolute -top-4 -right-4 w-10 h-10 bg-white rounded-full text-black flex items-center justify-center z-50">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12"></path></svg>
                            </button>
                            <div class="aspect-w-9 aspect-h-16">
                                <video x-show="videoUrl" :src="videoUrl" controls autoplay class="w-full h-full">
                                    {{ __('home.video_unsupported') }}
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 6 -->
        <section class="bg-[#f96628] py-20 md:h-[560px] md:flex md:items-center">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <!-- Kolom Kiri: Teks -->
                    <div class="md:w-1/2 text-white text-center md:text-left">
                        <h2 class="text-4xl md:text-5xl font-bold">{{ __('home.reels_title') }}</h2>
                        <p class="mt-4 text-lg leading-relaxed max-w-xl mx-auto md:mx-0">
                            {{ __('home.reels_text')}}
                        </p>
                        <a href="https://www.instagram.com/skm_lasercutting/" target="_blank" class="mt-8 inline-flex items-center gap-2 px-6 py-3 border-2 border-white rounded-full font-semibold hover:bg-white hover:text-[#f96628] hover:px-10 transition-all duration-300 ease-in-out">
                            <span>{{ __('home.our_instagram') }}</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"></path></svg>
                        </a>
                    </div>
                    <!-- Kolom Kanan: Mockup Mobile -->
                    <div class="md:w-2/5 flex justify-center">
                        <div class="relative mx-auto border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[500px] w-[250px] shadow-xl">
                            <div class="w-[140px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute"></div>
                            <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[17px] top-[124px] rounded-l-lg"></div>
                            <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[17px] top-[178px] rounded-l-lg"></div>
                            <div class="h-[64px] w-[3px] bg-gray-800 absolute -right-[17px] top-[142px] rounded-r-lg"></div>
                            <div class="rounded-[2rem] overflow-hidden w-full h-full bg-white">
                                <iframe src="https://www.instagram.com/reel/DK-8bYBzG2q/embed" class="w-full h-full" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
                            </div>
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
