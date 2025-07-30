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
                        <img src="{{ asset('images/logo-skm-color.png') }}" alt="Logo SKM Berwarna" class="w-full max-w-xs md:max-w-md">
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

                        <h2 class="text-5xl font-semibold">Tentang Kami
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

        <!-- SECTION 4 -->
<section class="bg-youngorange/30 py-16 sm:py-24 overflow-hidden">
    <div x-data="{
        services: [
            {
                title: 'Laser Cutting',
                description: 'Menggunakan mesin CNC Fiber Laser 1500 Watt, 6000 Watt, hingga 60kW untuk memastikan hasil potong yang presisi, tanpa barier dan rapi. Mampu mengerjakan segala jenis metal mulai dari plat besi hingga plat stainless (max 40 mm), plat alumunium (maks 5 mm), plat kuningan (5 mm), plat tembaga (2 mm), dengan waktu yang relatif cepat. Serta, pemotongan sudut hingga -45 sampai +45 derajat dengan area plat yang sangat luas hingga 12 x 3,5 m.',
                image: '{{ asset('images/works/laser-cut.jpg') }}'
            },
            {
                title: 'Laser Welding',
                description: 'Menggunakan mesin laser welding yang canggih, modern dan cepat untuk hasil sambungan yang rapi dan kuat. Menjadikan proses fabrikasi jauh lebih cepat dan hasil akhir produk yang bermutu tinggi.',
                image: '{{ asset('images/works/laser-weld.png') }}'
            },
            {
                title: 'Metal Bending',
                description: 'Dengan menggunakan mesin CNC Bending 160 ton berkapasitas panjang 3,2 meter, siap menghasilkan hasil tekukan yang presisi untuk material metal. Tersedia 4 pilihan V DIES: V8, V12, V16 dan V25 untuk pilihan radius tekuk yang diinginkan.',
                image: '{{ asset('images/works/metal-bend.png') }}'
            },
            {
                title: 'Machining',
                description: 'Proses machining presisi untuk berbagai komponen industri. Dengan teknologi terkini, kami memastikan setiap detail dikerjakan dengan akurasi tinggi untuk memenuhi standar kualitas tertinggi.',
                image: '{{ asset('images/works/metal-fab.png') }}'
            },
            {
                title: 'Assembly',
                description: 'Jasa perakitan komponen dengan standar industri. Tim kami yang berpengalaman memastikan semua bagian terpasang dengan sempurna untuk fungsionalitas dan daya tahan maksimal.',
                image: '{{ asset('images/works/non-metal.png') }}'
            }
        ],
        selectedIndex: 0,
        interval: null,
        next() {
            this.selectedIndex = (this.selectedIndex + 1) % this.services.length;
        },
        prev() {
            this.selectedIndex = (this.selectedIndex - 1 + this.services.length) % this.services.length;
        },
        select(index) {
            this.selectedIndex = index;
        },
        scrollToSelected() {
            this.$nextTick(() => {
                const container = this.$refs.slider;
                const card = this.$refs['card' + this.selectedIndex];
                if (container && card) {
                    container.scrollTo({
                        left: card.offsetLeft,
                        behavior: 'smooth'
                    });
                }
            });
        }
    }"
    x-init="() => {
        interval = setInterval(() => next(), 5000);

        $watch('selectedIndex', () => {
            scrollToSelected();
            clearInterval(interval);
            interval = setInterval(() => next(), 5000);
        });
    }"
    class="w-full">
        <h2 class="text-4xl sm:text-5xl font-semibold text-black mb-16 sm:mb-24 text-center lg:text-left px-6 sm:px-12 lg:px-24">Apa yang Kami Kerjakan</h2>

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
                        <img :src="service.image" :alt="service.title" class="w-full h-full object-cover object-center shadow-lg" onerror="this.onerror=null;this.src='https://placehold.co/720x620/cccccc/ffffff?text=Image+Not+Found';">
                    </div>
                </template>
            </div>

            <!-- Cards Section -->
            <div class="w-full md:w-auto px-0 md:absolute md:left-[30%] lg:left-[40%] md:right-0 md:top-1/2 md:-translate-y-1/2 z-10 order-2 -mt-56 md:-mt-0 py-10 md:py-0">
                <div x-ref="slider" class="flex overflow-x-auto gap-10 py-4 scroll-smooth no-scrollbar">
                    <template x-for="(service, index) in services" :key="index">
                        <div :x-ref="'card' + index" class="flex-shrink-0 w-[340px]">
                            <div @click="select(index)" 
                                 :class="{
                                     '!bg-[#f96628] text-white': selectedIndex === index, 
                                     'bg-white text-black': selectedIndex !== index,
                                     'opacity-75 scale-90': selectedIndex !== index
                                 }" 
                                 class="card-content w-[340px] h-[420px] p-10 rounded-md shadow-lg gap-6 flex flex-col justify-between relative group transition-all duration-300 cursor-pointer">
                                <h3 class="text-2xl font-bold group-hover:text-white" :class="{'text-white': selectedIndex === index}" x-text="service.title"></h3>
                                <div class="flex-none w-10 h-1 rounded group-hover:bg-white" :class="{'bg-white': selectedIndex === index, 'bg-[#f96628]': selectedIndex !== index}"></div>
                                <p class="text-sm group-hover:text-white flex-grow" :class="{'text-white': selectedIndex === index}" x-text="service.description"></p>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
                 <!-- Navigation Buttons -->
                <div class="flex justify-end gap-2 mt-4 items-center max-w-[620px] mx-auto">
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
