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
                        Sederet  Lisensi Dan Sertifikasi Yang Kami Dapatkan
                    </h1>
                    <p class="mt-4 text-xl md:text-2xl leading-normal text-gray-200">
                        PT SAFARI KARYA MAJU
                    </p>
                </div>
            </div>

        </section>

        <!-- SECTION 2 -->
        <section class="bg-white py-20 md:py-28">
            <div class="container mx-auto px-6">

                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 md:w-1/2">Gambaran Umum Sertifikasi</h2>
                    <p class="text-base text-gray-600 md:w-1/2 mt-4 md:mt-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pellentesque ex in odio aliquet, pharetra tincidunt turpis eleifend. Suspendisse vitae mollis dui.
                    </p>
                </div>

                @php
                    // Data sertifikat Anda
                    $sertifikasi = [
                        ['image' => 'sertif-1.png', 'title' => 'ARS Quality Management System', 'subtitle' => 'ISO 9001 : 2015'],
                        ['image' => 'sertif-2.png', 'title' => 'ARS Environmental Management System', 'subtitle' => 'ISO 14001 : 2015'],
                        ['image' => 'sertif-3.png', 'title' => 'ARS Occupational Health and Safety Management System', 'subtitle' => 'ISO 45001 : 2018'],
                        ['image' => 'sertif-4.png', 'title' => 'Surat Izin Usaha Industri (SIUI)', 'subtitle' => 'Sheet Metal Cutting No. 9120307311533'],
                        ['image' => 'sertif-5.png', 'title' => 'Surat Izin Usaha Perdagangan (SIUP)', 'subtitle' => 'Sheet Metal Cutting No. 9120307311533'],
                        ['image' => 'sertif-6.png', 'title' => 'Nomor Induk Berusaha (NIB)', 'subtitle' => 'Sheet Metal Cutting No. 9120307311533'],
                    ];
                @endphp

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                    @foreach ($sertifikasi as $sertif)
                        <div>
                            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                                <img src="{{ asset('images/sertif/' . $sertif['image']) }}" alt="{{ $sertif['title'] }}" class="w-full h-auto object-contain rounded shadow-md">
                            </div>
                            <div class="mt-4 text-center">
                                <h3 class="text-base font-bold text-gray-800">{{ $sertif['title'] }}</h3>
                                <p class="text-xs text-gray-500 mt-1">{{ $sertif['subtitle'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>

@endsection