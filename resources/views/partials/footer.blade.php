<footer class="bg-gray-800 text-gray-300 py-12">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Bagian 1: Logo atau Nama Perusahaan -->
      <div class="flex items-center justify-center md:justify-start">
        <h2 class="text-2xl font-bold uppercase">Nama Perusahaan</h2>
      </div>
      
      <!-- Bagian 2: Navigasi Footer -->
      <div class="md:flex md:flex-col md:items-start space-y-4">
        <h3 class="text-lg font-semibold">Tautan</h3>
        <ul class="space-y-2">
          <li><a href="#" class="hover:text-blue-500 transition-colors duration-300">Beranda</a></li>
          <li><a href="#" class="hover:text-blue-500 transition-colors duration-300">Tentang Kami</a></li>
          <li><a href="#" class="hover:text-blue-500 transition-colors duration-300">Layanan</a></li>
          <li><a href="#" class="hover:text-blue-500 transition-colors duration-300">Kontak</a></li>
        </ul>
      </div>
      
      <!-- Bagian 3: Informasi Kontak dan Sosial Media -->
      <div class="md:flex md:flex-col md:items-start space-y-4">
        <h3 class="text-lg font-semibold">Hubungi Kami</h3>
        <p>Alamat: Jalan Contoh No. 123, Kota, Negara</p>
        <p>Email: info@example.com</p>
        <div class="flex space-x-4 mt-4">
          <a href="#" class="text-gray-300 hover:text-blue-500 transition-colors duration-300"><i class="fab fa-facebook-square fa-lg"></i></a>
          <a href="#" class="text-gray-300 hover:text-blue-500 transition-colors duration-300"><i class="fab fa-twitter-square fa-lg"></i></a>
          <a href="#" class="text-gray-300 hover:text-blue-500 transition-colors duration-300"><i class="fab fa-instagram-square fa-lg"></i></a>
        </div>
      </div>
    </div>
    <div class="mt-8 border-t border-gray-700 pt-4 text-center">
      <p>&copy; 2024 Nama Perusahaan. Hak Cipta Dilindungi Undang-Undang.</p>
    </div>
  </div>
</footer>

<!-- Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2" defer></script>

<script>

    document.addEventListener("scroll", function () {
      /*Apply classes for slide in bar*/
      scrollpos = window.scrollY;

      if (scrollpos > 10) {
        header.classList.add("bg-white");
        navcontent.classList.add("bg-white");
      } else {
        header.classList.remove("bg-white");
        navaction.classList.remove("gradient");
        navaction.classList.add("bg-white");
        navaction.classList.remove("text-white");
        n
        //Use to switch toggleColour colours
        for (var i = 0; i < toToggle.length; i++) {
          toToggle[i].classList.add("text-white");
          toToggle[i].classList.remove("text-gray-800");
        }

       
        navcontent.classList.remove("bg-white");
        navcontent.classList.add("bg-gray-100");
      }
    });
  </script> <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      var navaction = document.getElementById("navAction");
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");

      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-white");
          navaction.classList.remove("bg-white");
          navaction.classList.add("gradient");
          navaction.classList.remove("text-gray-800");
          navaction.classList.add("text-white");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-gray-800");
            toToggle[i].classList.remove("text-white");
          }
          header.classList.add("shadow");
          navcontent.classList.remove("bg-gray-100");
          navcontent.classList.add("bg-white");
        } else {
          header.classList.remove("bg-white");
          navaction.classList.remove("gradient");
          navaction.classList.add("bg-white");
          navaction.classList.remove("text-white");
          navaction.classList.add("text-gray-800");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-gray-800");
          }

          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-100");
        }
      });
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
