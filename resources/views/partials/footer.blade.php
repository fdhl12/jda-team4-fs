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
                </div>
            </div>
        </div>
        <div class="mt-8 border-t border-gray-700 pt-4 text-center">
            <p>&copy; 2024 {{ $pengaturan['name'] }}. Hak Cipta Dilindungi Undang-Undang.</p>
        </div>
    </div>
</footer>


<!-- Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2" defer></script>

<script>
     AOS.init();
    
</script>
<script>
  
    var header = document.getElementById("header");
    var navcontent = document.getElementById("nav-content");
    var navaction = document.getElementById("navAction");
    var brandname = document.getElementById("brandname");
    var toToggle = document.querySelectorAll(".toggleColour");

   
</script>
<script>
    /*Toggle dropdown list*/
    /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

    var navMenuDiv = document.getElementById("nav-content");
    var navMenu = document.getElementById("nav-toggle");

    document.onclick = check;

    function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, navMenu)) {
                // click on the link
                if (navMenuDiv.classList.contains("hidden")) {
                    navMenuDiv.classList.remove("hidden");
                } else {
                    navMenuDiv.classList.add("hidden");
                }
            } else {
                // click both outside link and outside menu, hide menu
                navMenuDiv.classList.add("hidden");
            }
        }
    }

    function checkParent(t, elm) {
        while (t.parentNode) {
            if (t == elm) {
                return true;
            }
            t = t.parentNode;
        }
        return false;
    }
</script>
<script>
    function contactForm() {
        return {
            name: '',
            email: '',
            message: '',
            showSuccessMessage: false,
            showErrorMessage: false,
            handleSubmit() {
                // Reset messages
                this.showSuccessMessage = false;
                this.showErrorMessage = false;

                // Simulate form submission
                setTimeout(() => {
                    if (this.name && this.email && this.message) {
                        // Simulate successful form submission
                        this.showSuccessMessage = true;
                    } else {
                        // Simulate error in form submission
                        this.showErrorMessage = true;
                    }
                }, 1000);
            }
        }
    }

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

