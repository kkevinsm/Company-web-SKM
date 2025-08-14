<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Upload Video</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">

    <header class="bg-[#F97316] shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2">
                <img class="w-12 h-12" src="{{ asset('images/LOGO SKM ONLY WHITE (1) 1.png') }}" alt="Safari Karya Maju Logo" />
                <span class="text-xl font-bold tracking-wider">SAFARI KARYA MAJU</span>
            </a>
            
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" class="block h-10 w-10 rounded-full overflow-hidden border-2 border-white focus:outline-none focus:border-orange-200 transition">
                    <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1544005313-94ddf0286de2?w=100" alt="User Avatar">
                </button>

                <div x-show="open"
                     @click.away="open = false"
                     x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="transform opacity-0 scale-95"
                     x-transition:enter-end="transform opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="transform opacity-100 scale-100"
                     x-transition:leave-end="transform opacity-0 scale-95"
                     class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-20"
                     style="display: none;">
                    
                    <div class="px-4 py-2 text-sm text-gray-700">
                        <p class="font-semibold">Nama Admin</p>
                        <p class="text-xs text-gray-500 truncate">admin@example.com</p>
                    </div>

                    <div class="border-t border-gray-200 my-1"></div>

                    <form method="POST" action="/logout">
                        @csrf
                        <a href="/logout"
                           onclick="event.preventDefault(); this.closest('form').submit();"
                           class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-orange-100 hover:text-orange-700">
                            Logout
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-6 py-12">
        <div x-data="videoUploader()" class="max-w-4xl mx-auto bg-white rounded-2xl shadow-lg p-8">
            <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Upload Video Terbaru</h1>
            <form action="/admin/upload-video" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <div class="bg-gradient-to-br from-orange-200 to-amber-100 rounded-xl p-8 flex flex-col items-center justify-center">
                        <div class="relative">
                            <button @click="open = !open" type="button" class="bg-[#F97316] text-white font-semibold px-8 py-3 rounded-lg shadow-md hover:bg-orange-600 transition duration-300 flex items-center">
                                Pilih Video
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                            <div x-show="open" @click.away="open = false" x-transition class="absolute mt-2 w-full bg-white rounded-md shadow-lg z-10" style="display: none;">
                                <a @click.prevent="$refs.fileInput.click(); open = false" href="#" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 text-sm">Unggah dari Device</a>
                                <a @click.prevent="alert('Integrasi Google Drive API diperlukan di sini.'); open = false" href="#" class="block px-4 py-3 text-gray-700 hover:bg-gray-100 text-sm">Unggah dari Google Drive</a>
                            </div>
                        </div>
                        <input type="file" name="video_file" class="hidden" x-ref="fileInput" @change="handleFileSelect($event)" accept="video/*">
                    </div>
                    <div class="bg-gradient-to-bl from-orange-200 to-amber-100 rounded-xl p-4 flex items-center justify-center aspect-video">
                        <template x-if="!videoPreviewUrl">
                            <span class="text-gray-500 font-semibold">Pratinjau Video</span>
                        </template>
                        <template x-if="videoPreviewUrl">
                            <video :src="videoPreviewUrl" controls class="w-full h-full object-contain rounded-lg"></video>
                        </template>
                    </div>
                </div>
                <div class="flex items-center mb-8">
                    
                    <label for="video-url" 
                        class="bg-[#F97316] text-white font-semibold px-8 py-3 rounded-l-lg whitespace-nowrap">
                        Video URL
                    </label>

                    <input type="text" id="video-url" name="video_url_display" x-model="videoFileName" 
                        placeholder="Isi url dari video disini" 
                        class="w-full p-3 border-t border-b border-r border-gray-300 rounded-r-lg focus:outline-none focus:ring-0 focus:border-gray-300">

                </div>
                <div class="text-center">
                    <button type="submit" class="bg-[#F97316] text-white font-bold px-12 py-4 rounded-lg shadow-xl hover:bg-orange-600 transition duration-300 transform hover:scale-105">
                        Unggah Ke Web
                    </button>
                </div>
            </form>
        </div>
    </main>
    <script>
        function videoUploader() {
            return {
                open: false,
                videoPreviewUrl: '',
                videoFileName: '',
                handleFileSelect(event) {
                    const file = event.target.files[0];
                    if (file && file.type.startsWith('video/')) {
                        this.videoPreviewUrl = URL.createObjectURL(file);
                        this.videoFileName = file.name;
                    } else {
                        this.videoPreviewUrl = '';
                        this.videoFileName = '';
                        alert('Silakan pilih file video.');
                    }
                }
            }
        }
    </script>
</body>
</html>