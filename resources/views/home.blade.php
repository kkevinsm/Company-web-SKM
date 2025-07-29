@extends('layouts.guest')

@section('content')

    <section class="relative h-screen flex items-center justify-start overflow-hidden -mt-32">
        
        <div class="absolute top-0 left-0 w-full h-full z-0">
            <iframe 
                class="absolute top-1/2 left-1/2 w-full h-full min-w-[177.77vh] min-h-[100vh] -translate-x-1/2 -translate-y-1/2" 
                src="https://www.youtube.com/embed/WT_AxXaOWrs?autoplay=1&mute=1&controls=0&loop=1&playlist=WT_AxXaOWrs&controls=0"
                frameborder="0" 
                allow="autoplay; encrypted-media" 
                allowfullscreen>
            </iframe>
        </div>

        <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50 z-10"></div>

        <div class="container mx-auto px-6">
            <div class="relative z-20 text-white max-w-2.5xl">
                <h1 class="text-5xl font-extrabold tracking-tight">  {{-- tracking-tight untuk letter-spacing: -0.02em --}}
                    YOUR ALL METAL SHEET SOLUTION
                </h1>
                <p class="mt-4 text-2xl leading-normal text-white/75"> {{-- leading-normal untuk line-height & text-white/75 untuk warna --}}
                    PT SAFARI KARYA MAJU
                </p>

                <a href="#" class="mt-8 inline-flex items-center justify-center gap-2 h-12 py-5 px-8 border-2 border-white rounded-full text-white text-sm shadow-sm hover:bg-white hover:text-gray-900 transition-colors">
                    <span class="leading-normal">Putar Video</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 5v14l11-7z"></path>
                        </svg>
                </a>
            </div>
        </div>

    </section>

    <section class="relative bg-white py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold">Section 2</h2>
        </div>
    </section>

@endsection

