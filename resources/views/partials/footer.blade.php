<footer class="bg-gray-800 text-gray-300 py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Bagian 1: Logo atau Nama Perusahaan -->
            <div class="flex items-center justify-center md:justify-start">
                <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                   href="{{ route('home') }}">
                    <img src="{{ asset($pengaturan['logo_text']) }}" alt="Example Image" class="w-15 h-20 filter invert brightness-0">
                </a>
            </div>

            <!-- Bagian 2: Navigasi Footer -->
            <div class="md:flex md:flex-col md:items-start space-y-4">
                <h3 class="text-lg font-semibold">Tautan</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}"
                           class="hover:text-blue-500 transition-colors duration-300">Beranda</a></li>
                    <li><a href="{{ route('tentang') }}" class="hover:text-blue-500 transition-colors duration-300">Tentang
                            Kami</a></li>
                    <li><a href="{{ route('layanan') }}"
                           class="hover:text-blue-500 transition-colors duration-300">Layanan</a></li>
                    <li><a href="{{ route('kontak') }}"
                           class="hover:text-blue-500 transition-colors duration-300">Kontak</a></li>
                </ul>
            </div>

            <!-- Bagian 3: Informasi Kontak dan Sosial Media -->
            <div class="md:flex md:flex-col md:items-start space-y-4">
                <h3 class="text-lg font-semibold">Hubungi Kami</h3>
                <p>Alamat: {{ $profile['kontak']['alamat'] }}</p>
                <p>Email: {{ $profile['kontak']['email'] }}</p>
                <div class="flex space-x-4 mt-4">
                    <a href="{{ $profile['sosial_media']['facebook'] }}"
                       class="text-gray-300 hover:text-blue-500 transition-colors duration-300"><i
                            class="fab fa-facebook-square fa-lg"></i></a>
                    <a href="{{ $profile['sosial_media']['twitter'] }}"
                       class="text-gray-300 hover:text-blue-500 transition-colors duration-300"><i
                            class="fab fa-twitter-square fa-lg"></i></a>
                    <a href="{{ $profile['sosial_media']['instagram'] }}"
                       class="text-gray-300 hover:text-blue-500 transition-colors duration-300"><i
                            class="fab fa-instagram-square fa-lg"></i></a>
                    <a href="{{ $profile['sosial_media']['youtube'] }}"
                       class="text-gray-300 hover:text-blue-500 transition-colors duration-300"><i
                            class="fab fa-youtube fa-lg"></i></a>
                </div>
            </div>
        </div>
        <div class="mt-8 border-t border-gray-700 pt-4 text-center">
            <p>&copy; 2024 {{ $pengaturan['name'] }}. Hak Cipta Dilindungi Undang-Undang.</p>
        </div>
    </div>
</footer>


<!-- Get patch fixes within a minor version -->
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0/dist/smooth-scroll.polyfills.min.js"></script>

<script>
     AOS.init({once: true});
</script>
<script>
    var scroll = new SmoothScroll('.smooth-scroll', {
        speed: 9000,
        speedAsDuration: true
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
/>
<script>
    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });
</script>
