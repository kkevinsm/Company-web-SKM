<div class="w-full bg-youngorange">
    <div class="container mx-auto px-6 md:px-20 py-12 relative" style="max-width: 1440px;">
        <div class="flex flex-col items-center text-center gap-8 mb-12 md:mb-16">
            <img class="w-64 md:w-80" src="{{ asset('images/skm-horizontal.png') }}" alt="Logo SKM">
            <div>
]                <p class="text-sm md:text-base">
                    <span class="font-bold">{{ __('navbar.address') }}:</span>
                    Dsn. Bakalan RT 001 RW 002, Durensewu, Kec. Pandaan, Pasuruan, Jawa Timur 67156
                </p>
                <p class="text-sm md:text-base mt-2">
                    <span class="font-bold">Email:</span>
                    skm.manufacture@safarikaryamaju.com
                </p>
            </div>
        </div>
        <hr class="border-black">
        
        <div class="flex flex-col-reverse md:flex-row md:justify-between items-center gap-6 md:gap-0 mt-4">
            <p class="text-zinc-500 text-sm md:text-base text-center md:text-left">
                © Copyright PT Safari Karya Maju 2025. All Right Reserved.
            </p>
            <div class="flex items-center gap-4">
                <img class="w-6 h-6" src="{{ asset('images/icon-fb.png') }}" alt="Facebook">
                <img class="w-6 h-6" src="{{ asset('images/icon-lin.png') }}" alt="LinkedIn">
                <img class="w-6 h-6" src="{{ asset('images/icon-yt.png') }}" alt="YouTube">
                <img class="w-6 h-6" src="{{ asset('images/icon-ig.png') }}" alt="Instagram">
            </div>
        </div>
    </div>
</div>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "PT Safari Karya Maju",
  "url": "{{ url('/') }}",
  "logo": "{{ asset('images/skm-horizontal.png') }}",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+62-343-633-704",
    "email": "skm.manufacture@safarikaryamaju.com",
    "contactType": "Customer Service"
  },
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Dsn. Bakalan RT 001 RW 002, Durensewu, Kec. Pandaan",
    "addressLocality": "Pasuruan",
    "postalCode": "67156",
    "addressRegion": "Jawa Timur",
    "addressCountry": "ID"
  },
  "sameAs": [
    "https://www.youtube.com//@safarikaryamaju",
    "https://www.instagram.com/skm_lasercutting/"
  ]
}
</script>
