@extends('layouts.guest')

@section('content')

    <!--SECTION 1-->
    <section class="relative h-screen flex items-center justify-start overflow-hidden">
        
        <div class="absolute top-0 left-0 w-full h-full z-0">
            <img class="absolute top-1/2 left-1/2 w-full h-full min-w-full min-h-full object-cover -translate-x-1/2 -translate-y-1/2" src="{{ asset('images/pelanggan-hero.png') }}" alt="Latar Belakang Pelanggan">
        </div>
        <div class="absolute top-0 left-0 w-full h-full z-10"></div>
        <div class="container mx-auto px-6">
            <div class="relative z-20 text-white max-w-4xl">
                <h1 class="text-5xl font-extrabold tracking-tight">
                    Tingkatkan Kepercayaan Dengan Menyediakan Baja Yang AMAN Dan HANDAL
                </h1>
                <p class="mt-4 text-2xl leading-normal text-white/75">
                    PT SAFARI KARYA MAJU
                </p>
            </div>
        </div>

    </section>

    <!--SECTION 2-->
    <section class="bg-white py-20 md:py-28" x-data="{ inView: false }" x-intersect:enter="inView = true">
        <div class="container mx-auto px-6">
        
            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-16">
                <div class="md:w-1/2">
                    <h3 class="text-lg font-semibold text-[#f96628] uppercase tracking-wider">OVERVIEW PELANGGAN</h3>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mt-2">Bersama Terus Mendukung Kemajuan Industri Bangsa Kita</h2>
                </div>
                <div class="md:w-1/2 mt-4 md:mt-0">
                    <p class="text-base text-gray-600 text-justify">
                        Semua produk pabrik baja PT Safari Karya Maju diuji dengan aman dan dapat diandalkan, dengan keahlian selama 25 tahun kami bangga menjadi mitra bagi banyak proyek di negeri ini. Berikut daftar perusahaan yang telah mempercayakan pabrik kami yang berkualitas, salah satunya perusahaan multinasional.
                    </p>
                </div>
            </div>

            @php
                $pelanggan = [
                    ['name' => 'PT. Scandinavian Tobacco Group Indonesia', 'logo' => 'logo-scandinavian.png'],
                    ['name' => 'PT. Veolia Services Indonesia', 'logo' => 'logo-veolia.png'],
                    ['name' => 'PT. Coca-Cola Amatil Indonesia', 'logo' => 'logo-coca.png'],
                    ['name' => 'PT. Fajar Kreasindo', 'logo' => 'logo-fajar.png'],
                    ['name' => 'PT. Guntner Indonesia', 'logo' => 'logo-guntner.png'],
                    ['name' => 'PT. Penyelesaian Masalah Property', 'logo' => 'logo-penyelesaian.png'],
                    ['name' => 'PT. Ironwood Water Management', 'logo' => 'logo-ironwood.png'],
                    ['name' => 'PT. A7 Pro Indonesia', 'logo' => 'logo-a7.png'],
                    ['name' => 'PT. Surya Indo Plastic', 'logo' => 'logo-surya.png'],
                    ['name' => 'PT. Jagat Baja Prima Utama', 'logo' => 'logo-jagat.png'],
                    ['name' => 'PT. Santinilestari Energi Indonesia', 'logo' => 'logo-santini.png'],
                    ['name' => 'PLN Nusantara Power Construction', 'logo' => 'logo-pln.png'],
                    ['name' => 'PT. INDOLAKTO Pandaan', 'logo' => 'logo-indolakto.png'],
                    ['name' => 'PT. Amcor Specialty Cartons Indonesia', 'logo' => 'logo-amcor.png'],
                    ['name' => 'PT. Organon Pharma Indonesia', 'logo' => 'logo-organon.png'],
                    ['name' => 'PT. Panggung Elektrik Citrabuana', 'logo' => 'logo-panggung.png'],
                    ['name' => 'PT. Intim Harmonis Foods Industri', 'logo' => 'logo-inafood.png'],
                    ['name' => 'PT. Sadhana Ekapraya Amitra', 'logo' => 'logo-sadhana.png'],
                    ['name' => 'PT. Kirana Commercial Kitchen Indonesia', 'logo' => 'logo-kirana.png'],
                    ['name' => 'PT. INKA Multi Solusi', 'logo' => 'logo-inka.png'],
                    ['name' => 'PT. Cakra Abadi Tekhindo', 'logo' => 'logo-cakra.png'],
                    ['name' => 'PT. Srimurni Surabaya', 'logo' => 'logo-srimurni.png'],
                ];
            @endphp

            <div class="flex flex-wrap justify-center gap-8">
                @foreach ($pelanggan as $p)
        
                    <div
                        x-show="inView"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 transform translate-y-8"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        style="transition-delay: {{ $loop->index * 250 }}ms"
                    >
                        <div class="flex flex-col items-center justify-center text-center p-4 bg-gray-50 rounded-lg shadow-sm h-48 w-56 transition duration-300 hover:shadow-xl hover:-translate-y-2">
                
                            <div class="h-20 w-full flex items-center justify-center">
                                <img src="{{ asset('images/logo-pel/' . $p['logo']) }}" alt="Logo {{ $p['name'] }}" class="max-h-16 object-contain" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" style="display:block;">
                                <div class="h-16 w-full bg-gray-200 rounded flex items-center justify-center text-gray-400 text-xs text-center" style="display:none;">Logo Belum Tersedia</div>
                            </div>

                            <p class="mt-4 font-semibold text-gray-700 text-sm leading-tight">{{ $p['name'] }}</p>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
