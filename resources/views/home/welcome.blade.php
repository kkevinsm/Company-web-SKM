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
                        Selamat Datang di PT Safari Karya Maju!
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
                            Leader's Message
                    </h2>
                    <div class="space-y-5 text-base text-gray-700 text-justify leading-relaxed">
                        <p>
                            Sejak tahun 2000, CV. Safari Karya Maju yang kemudian bertransformasi menjadi PT. Safari Karya Maju telah menjadi pilar utama dalam industri pengolahan sheet metal dan fabrikasi di Indonesia. Kami bangga menyediakan solusi terbaik dengan kualitas unggul yang didasari oleh nilai-nilai inti perusahaan kami: <strong> INTEGRITY, INNOVATION, dan WINNING SPIRIT.</strong>
                        </p>
                        <p>
                            Di PT. Safari Karya Maju, kami menganggap integritas sebagai fondasi utama dalam setiap interaksi dengan pelanggan, mitra, dan stakeholder kami. Kami memegang teguh komitmen untuk selalu bertindak secara <strong> jujur, transparan, dan bertanggung jawab.</strong>
                        </p>
                        <p>
                            Semangat inovasi mengalir dalam setiap aspek operasional kami. Kami tidak hanya mengikuti tren industri, tetapi juga menjadi pionir dalam memimpin perubahan. Dengan <strong> pendekatan yang progresif dan teknologi mutakhir,</strong> kami terus berinovasi untuk memenuhi tuntutan pasar yang semakin kompleks.
                        </p>
                        <p>
                            Kemenangan bagi kami bukan sekadar prestasi, tetapi semangat untuk terus tumbuh dan memberikan yang terbaik bagi pelanggan kami. Kami menghargai setiap kesempatan untuk belajar dan berkembang, serta <strong> membangun hubungan yang berkelanjutan dan saling menguntungkan. </strong>
                        </p>
                        <p>
                            Kami mengundang Anda untuk menjelajahi lebih dalam tentang <strong> PT. Safari Karya Maju dalam company profile ini.</strong> Mari bersama-sama menciptakan masa depan yang lebih gemilang, karena di PT. Safari Karya Maju, kami selalu <strong> berkomitmen untuk memberikan yang terbaik.</strong>
                        </p>
                            <div class="mt-8 border-t pt-6">
                                <p class="text-lg font-bold text-black">Claudemas Yefune, S.E.</p>
                                <p class="text-base text-gray-600">Leader of PT Safari Karya Maju</p>
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
                                <h2 class="text-4xl font-black text-white tracking-widest px-6 py-1">NILAI.</h2>
                            </div>
                        </div>

                        <div class="flex flex-col gap-8">
                            @php
                                $nilai = [
                                    [
                                        'icon' => 'icon-integrity.svg',
                                        'title' => 'INTEGRITY',
                                        'description' => 'Jujur, tidak berkompromi terhadap kepalsuan/penyimpangan, berani berterus terang dan bertanggung jawab. Komitmen diri pada karakter daripada keuntungan pribadi, pada orang daripada benda, pada pelayanan daripada kekuasaan, pada prinsip daripada kesenangan, pada pandangan jangka panjang daripada jangka pendek.'
                                    ],
                                    [
                                        'icon' => 'icon-innovation.svg',
                                        'title' => 'INNOVATION',
                                        'description' => 'Berani berubah, cerdik dalam mencari, menggali dan menemukan solusi inovatif. Dengan cerdik mencari, menggali, menemukan, dan mencoba ide-ide baru serta berani berubah dengan selalu belajar, berlatih dan bisa serta menerapkan perkembangan teknologi untuk senantiasa meningkatkan kemakmuran bersama.'
                                    ],
                                    [
                                        'icon' => 'icon-winning-spirit.svg',
                                        'title' => 'WINNING SPIRIT',
                                        'description' => 'Kami memiliki semangat sebagai pemenang dengan berpikir sebagai pemenang, bersiap menjadi pemenang, bekerja serupa pemenang, serta memiliki tekad untuk terus belajar, berlatih dan bisa memberikan hasil yang semakin baik tiap harinya.'
                                    ]
                                ];
                            @endphp

                            @foreach ($nilai as $item)
                            <div class="flex items-start gap-4 md:gap-6">
                                <div class="flex-shrink-0 w-12 h-12 md:w-16 md:h-16 bg-white/10 rounded-lg flex items-center justify-center">
                                    <img src="{{ asset('images/' . $item['icon']) }}" alt="{{ $item['title'] }}" class="w-6 h-6 md:w-8 md:h-8">
                                </div>
                                <div>
                                    <span class="inline-block bg-[#f96628] text-white text-xs md:text-sm font-bold px-6 py-1 md:px-8 clipped-corner mb-2">{{ $item['title'] }}</span>
                                    <p class="text-sm md:text-base text-gray-300 leading-relaxed">{{ $item['description'] }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="hidden md:block absolute top-0 right-0 h-full">
                    <div class="relative h-full w-24 bg-[#f96628] clipped-corner-top-left flex items-center justify-center">
                        <h2 class="text-6xl font-black text-white transform -rotate-90 tracking-widest">NILAI.</h2>
                    </div>
                </div>
            </div>
        </section>

@endsection
