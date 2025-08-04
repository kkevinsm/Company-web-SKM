@extends('layouts.guest')

@section('content')

        <!-- HERO SECTION -->
        <section class="relative h-[720px] flex items-center justify-start overflow-hidden">
            
            <div class="absolute top-0 left-0 w-full h-full z-0">
                <img 
                    class="w-full h-full object-cover" 
                    src="{{ asset('images/hero-image-sertifikasi.png') }}" 
                    alt="Latar Belakang Halaman Produk">
            </div>

            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50 z-10"></div>

            <div class="container mx-auto px-6">
                <div class="relative z-20 text-white max-w-4xl">
                    <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight">
                        {{ __('tentang.hero_title') }}
                    </h1>
                    <p class="mt-4 text-xl md:text-2xl leading-normal text-gray-200">
                        {{__('tentang.hero_subtitle')}}
                </div>
            </div>

        </section>

        <!-- SECTION 2 -->
        <section class="bg-white text-black py-20 md:py-28">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row items-center gap-12 md:gap-16">
                    
                    <div class="w-full md:w-2/5 flex-shrink-0">
                        <img src="{{ asset('images/Mask-group.png') }}" alt="Sekilas tentang PT Safari Karya Maju" class="w-full h-auto">
                    </div>

                    <div class="w-full md:w-3/5">
                        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-left">
                            {{ __('tentang.glance_title') }}
                        </h2>

                        <div class="space-y-6 text-lg text-gray-700 text-justify">
                            <p>{!! __('tentang.glance_p1') !!}</p>
                            <p>{!! __('tentang.glance_p2') !!}</p>
                            <p>{!! __('tentang.glance_p3') !!}</p>
                            <p>{!! __('tentang.glance_p4') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3 -->
        <section class="relative h-[640px]">
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('images/visi-misi-bg.png') }}" alt="Visi Misi Background" class="w-full h-full object-cover">
            </div>

            <div class="absolute inset-0 bg-black/30 z-10"></div>

            <div class="relative container mx-auto px-6 h-full flex items-center justify-center z-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 w-full max-w-5xl">
                    
                    <div class="bg-black/20 backdrop-blur-sm border border-white/20 rounded-3xl p-8 text-white">
                        <h3 class="text-5xl font-extrabold text-[#f96628] mb-4">{{ __('tentang.vision_title') }}</h3>
                        <p class="text-lg leading-relaxed">
                            {{ __('tentang.vision_content') }}
                        </p>
                    </div>

                    <div class="bg-black/20 backdrop-blur-sm border border-white/20 rounded-3xl p-8 text-white">
                        <h3 class="text-5xl font-extrabold text-[#f96628] mb-4">{{ __('tentang.mission_title') }}</h3>
                        <p class="text-lg leading-relaxed">
                            {{ __('tentang.mission_content') }}
                        </p>
                    </div>

                </div>
            </div>
        </section>

@endsection