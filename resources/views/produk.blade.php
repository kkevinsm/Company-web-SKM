@extends('layouts.guest')

@section('content')

        <!-- HERO SECTION -->
        <section class="relative h-[720px] flex items-center justify-start overflow-hidden">
            
            <div class="absolute top-0 left-0 w-full h-full z-0">
                <img 
                    class="w-full h-full object-cover" 
                    src="{{ asset('images/hero-image-produk.png') }}" 
                    alt="Latar Belakang Halaman Produk"
                    >
            </div>

            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50 z-10"></div>

            <div class="container mx-auto px-6">
                <div class="relative z-20 text-white max-w-4xl">
                    <h1 class="text-4xl md:text-6xl font-extrabold tracking-normal">
                        {{ __('produk.hero_title') }}
                    </h1>
                    <p class="mt-4 text-xl md:text-2xl leading-normal text-gray-200">
                        {{ __('produk.hero_subtitle') }}
                    </p>
                </div>
            </div>

        </section>

        <!-- SECTION 2 -->
        <section class="bg-white py-20 md:py-28">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 md:w-1/2">{{ __('produk.section_1_title') }}</h2>
                    <p class="text-base text-gray-600 md:w-1/2 mt-4 md:mt-0 text-justify">
                        {{ __('produk.section_1_description') }}
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
                                ['title' => 'ROUTER MACHINE', 'subtitle' => 'A2 - 1325', 'image' => '6.png', 'video_file' => 'video6.mp4'],
                                ['title' => 'FIBER LASER', 'subtitle' => 'GLORYSTAR 1500W', 'image' => '7.png', 'video_file' => 'video7.mp4'],
                                ['title' => 'FIBER LASER', 'subtitle' => 'KRRASS 6000W', 'image' => '8.png', 'video_file' => 'video8.mp4'],
                                ['title' => 'FIBER LASER', 'subtitle' => 'JIATAI XDP SERIES', 'image' => '9.png', 'video_file' => 'video9.mp4'],
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
                                                <img src="{{ asset('images/products/' . $card['image']) }}" alt="{{ $card['title'] }}" class="absolute top-0 left-0 w-full h-full object-contain z-0 opacity-100" loading="lazy" decoding="async">
                                            </div>
                                        </div>
                                        <div class="absolute inset-0 h-full w-full rounded-2xl bg-gray-600 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                                            <img class="h-full w-full rounded-2xl object-cover" src="{{ asset('images/products/' . $card['image']) }}" alt="{{ $card['title'] }}" loading="lazy" decoding="async" />
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
                        <div class="relative bg-black p-2 rounded-lg shadow-lg w-full max-w-6xl" @click.away="showModal = false; videoUrl = ''">
                            <button @click="showModal = false; videoUrl = ''" class="absolute -top-4 -right-4 w-10 h-10 bg-white rounded-full text-black flex items-center justify-center z-50">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M6 18L18 6M6 6l12 12"></path></svg>
                            </button>
                            <div class="aspect-w-16 aspect-h-9">
                                <video x-show="videoUrl" :src="videoUrl" controls autoplay class="w-full h-full">
                                    Browser Anda tidak mendukung tag video.
                                </video>
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