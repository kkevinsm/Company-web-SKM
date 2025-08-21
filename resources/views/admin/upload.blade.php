<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Video - Safari Karya Maju</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <header class="bg-[#F97316] shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-2">
                <img class="w-12 h-12" src="{{ asset('images/LOGO SKM ONLY WHITE (1) 1.png') }}" alt="Safari Karya Maju Logo" />
                <span class="text-xl font-bold tracking-wider text-white">SAFARI KARYA MAJU</span>
            </div>
            
            <form method="POST" action="{{ route('admin.logout') }}" class="flex items-center">
                @csrf
                <button type="submit" class="text-white hover:text-gray-200 font-semibold">
                    Logout
                </button>
            </form>
        </div>
    </header>

    <main class="container mx-auto px-6 py-12">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-2xl font-bold text-center text-gray-800 mb-8">Upload Video Reels</h1>

            @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('success') }}
            </div>
            @endif

            @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                {{ session('error') }}
            </div>
            @endif

            @if($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('admin.videos.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf
                <div class="space-y-4">
                    <label class="block text-gray-700 font-bold" for="video_file">
                        Upload Video Reels
                    </label>
                    <input type="file" 
                           id="video_file" 
                           name="video_file" 
                           accept="video/*" 
                           onchange="previewVideo(event)"
                           class="block w-full text-sm text-gray-500 p-2 border rounded-lg
                                  file:mr-4 file:py-2 file:px-4
                                  file:rounded-md file:border-0
                                  file:text-sm file:font-semibold
                                  file:bg-[#F97316] file:text-white
                                  hover:file:bg-orange-600"
                           required>
                    
                    <div id="preview-container" class="hidden mt-4 bg-gray-100 rounded-lg p-4">
                        <p class="text-gray-700 font-medium mb-2">Preview Video:</p>
                        <video id="preview-video" 
                               controls 
                               class="w-full rounded-lg shadow-lg"
                               style="max-height: 300px;">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>

                <div>
                    <label class="block text-gray-700 font-bold mb-2" for="video_url">
                        URL Video
                    </label>
                    <input type="url" 
                           id="video_url" 
                           name="video_url" 
                           placeholder="Masukkan URL video" 
                           class="w-full p-3 border rounded-lg focus:ring-orange-500 focus:border-orange-500"
                           required>
                </div>

                <div>
                    <button type="submit" 
                            class="w-full bg-[#F97316] text-white font-bold py-3 px-4 rounded-lg 
                                   hover:bg-orange-600 transition duration-300">
                        Upload Video
                    </button>
                </div>
            </form>
        </div>
    </main>
    <script>
        function previewVideo(event) {
            const file = event.target.files[0];
            if (file && file.type.startsWith('video/')) {
                const previewContainer = document.getElementById('preview-container');
                const videoPreview = document.getElementById('preview-video');
                const url = URL.createObjectURL(file);
                
                videoPreview.src = url;
                previewContainer.classList.remove('hidden');
                
                // Listen for when video metadata is loaded
                videoPreview.onloadedmetadata = function() {
                    // Ensure audio is not muted
                    videoPreview.muted = false;
                };
            }
        }
    </script>
</body>
</html>