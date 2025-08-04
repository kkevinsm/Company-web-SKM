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
                        {{ __('welcome.hero_title') }}
                    </h1>
                </div>
            </div>

        </section>

        <!-- SECTION 2 -->
        <section class="bg-white text-black py-20 md:py-28">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row items-center gap-12 md:gap-16">

                    <div class="w-full md:w-2/5 flex-shrink-0">
                        <img src="{{ asset('images/foto-pimpinan.png') }}" alt="Claudemas Yefune, S.E." class="w-full h-auto rounded-lg shadow-lg">
                    </div>

                    <div class="w-full md:w-3/5">
                    <h2 class="text-4xl font-bold text-gray-800 mb-6">
                            {{ __('welcome.leader_t1') }}
                    </h2>
                    <div class="space-y-5 text-base text-gray-700 text-justify leading-relaxed">
                        <p>{!! __('welcome.leader_p1') !!}</p>
                        <p>{!! __('welcome.leader_p2') !!}</p></p>
                        <p>{!! __('welcome.leader_p3') !!}</p></p>
                        <p>{!! __('welcome.leader_p4') !!}</p></p>
                        <p>{!! __('welcome.leader_p5') !!}</p></p>
                            <div class="mt-8 border-t pt-6">
                                <p class="text-lg font-bold text-black">Claudemas Yefune, S.E.</p>
                                <p class="text-base text-gray-600">{{ __('welcome.leader_title') }}</p>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3 -->
        <section class="relative bg-gray-800 text-white overflow-hidden md:h-[720px]">
            <img src="{{ asset('images/nilai-bg3.png') }}" alt="Nilai Perusahaan Background" class="absolute inset-0 w-full h-full object-cover z-0 opacity-30">
            <div class="relative h-full">
                <div class="container mx-auto px-6 h-full flex items-center">
                    <div class="w-full md:w-3/4 py-20 md:py-12">
                        <div class="md:hidden mb-12">
                            <div class="inline-block bg-[#f96628] clipped-corner-top-right-nilai-only">
                                <h2 class="text-4xl font-black text-white tracking-widest px-6 py-1">{{ __('welcome.values_section_title') }}</h2>
                            </div>
                        </div>

                        <div class="flex flex-col gap-8">
                            <div class="flex items-start gap-4 md:gap-6">
                                <div class="flex-shrink-0 w-12 h-12 md:w-16 md:h-16 bg-white/10 rounded-lg flex items-center justify-center">
                                    <img src="{{ asset('images/icon-integrity.svg') }}" alt="{{ __('welcome.values.integrity.title') }}" class="w-6 h-6 md:w-8 md:h-8">
                                </div>
                                <div>
                                    <span class="inline-block bg-[#f96628] text-white text-xs md:text-sm font-bold px-6 py-1 md:px-8 clipped-corner mb-2">{{ __('welcome.values.integrity.title') }}</span>
                                    <p class="text-sm md:text-base text-gray-300 leading-relaxed">{{ __('welcome.values.integrity.description') }}</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 md:gap-6">
                                <div class="flex-shrink-0 w-12 h-12 md:w-16 md:h-16 bg-white/10 rounded-lg flex items-center justify-center">
                                    <img src="{{ asset('images/icon-innovation.svg') }}" alt="{{ __('welcome.values.innovation.title') }}" class="w-6 h-6 md:w-8 md:h-8">
                                </div>
                                <div>
                                    <span class="inline-block bg-[#f96628] text-white text-xs md:text-sm font-bold px-6 py-1 md:px-8 clipped-corner mb-2">{{ __('welcome.values.innovation.title') }}</span>
                                    <p class="text-sm md:text-base text-gray-300 leading-relaxed">{{ __('welcome.values.innovation.description') }}</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 md:gap-6">
                                <div class="flex-shrink-0 w-12 h-12 md:w-16 md:h-16 bg-white/10 rounded-lg flex items-center justify-center">
                                    <img src="{{ asset('images/icon-winning-spirit.svg') }}" alt="{{ __('welcome.values.winning_spirit.title') }}" class="w-6 h-6 md:w-8 md:h-8">
                                </div>
                                <div>
                                    <span class="inline-block bg-[#f96628] text-white text-xs md:text-sm font-bold px-6 py-1 md:px-8 clipped-corner mb-2">{{ __('welcome.values.winning_spirit.title') }}</span>
                                    <p class="text-sm md:text-base text-gray-300 leading-relaxed">{{ __('welcome.values.winning_spirit.description') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block absolute top-0 right-0 h-full">
                    <div class="relative h-full w-24 bg-[#f96628] clipped-corner-top-left flex items-center justify-center">
                        <h2 class="text-6xl font-black text-white transform -rotate-90 tracking-widest">{{ __('welcome.values_section_title') }}</h2>
                    </div>
                </div>
            </div>
        </section>

@endsection
