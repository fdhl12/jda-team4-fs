@extends('layouts.app')

@section('title', 'Table')

@section('content')

    <div class="pt-24">
      
      <section class="bg-white border-b py-8" x-data="{ open: false, imgSrc: '', currentSlide: 0, currentIndex: 0, slides: [
        'images/berita-1.jpeg', 'images/berita-2.jpeg', 'images/berita-3.jpeg', 
        'images/berita-2.jpeg', 'images/berita-3.jpeg', 'images/berita-1.jpeg', 
        'images/berita-2.jpeg', 'images/berita-3.jpeg', 'images/berita-1.jpeg', 
        'images/berita-1.jpeg', 'images/berita-2.jpeg', 'images/berita-3.jpeg', 
        'images/berita-1.jpeg', 'images/berita-2.jpeg', 'images/berita-3.jpeg', 
        'images/berita-1.jpeg', 'images/berita-2.jpeg', 'images/berita-3.jpeg'
    ] }">
        <div class="container mx-auto px-0">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Foto
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-1">
                <template x-for="(image, index) in slides.slice(currentSlide * 9, (currentSlide + 1) * 9)" :key="index">
                    <div>
                        <img @click="open = true; imgSrc = image; currentIndex = currentSlide * 9 + index" class="w-full h-auto rounded-lg cursor-pointer" :src="image" alt="">
                    </div>
                </template>
            </div>
            <div class="flex justify-center mt-4">
                <button @click="currentSlide = Math.max(currentSlide - 1, 0)" class="px-4 py-2 mx-2 bg-gray-300 rounded text-gray-800 hover:bg-blue-400 focus:outline-none">Previous</button>
                <button @click="currentSlide = Math.min(currentSlide + 1, Math.floor((slides.length - 1) / 9))" class="px-4 py-2 mx-2 bg-gray-300 rounded text-gray-800 hover:bg-blue-400 focus:outline-none">Next</button>
            </div>
        </div>
        <!-- Modal untuk menampilkan gambar besar -->
        <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 z-50">
            <div @click.away="open = false" class="relative w-full h-full max-h-screen overflow-hidden rounded-lg flex justify-center items-center">
                <!-- Tombol tutup -->
                <button @click="open = false" class="absolute top-0 right-0 m-4 text-white text-3xl font-bold focus:outline-none">
                    &times;
                </button>
                <button @click="currentIndex = Math.max(currentIndex - 1, 0); imgSrc = slides[currentIndex]" class="absolute left-0 m-4 text-white text-3xl font-bold focus:outline-none z-50">
                    &#9664;
                </button>
                <img :src="imgSrc" alt="" class="w-full h-auto max-h-full object-contain">
                <button @click="currentIndex = Math.min(currentIndex + 1, slides.length - 1); imgSrc = slides[currentIndex]" class="absolute right-0 m-4 text-white text-3xl font-bold focus:outline-none z-50">
                    &#9654;
                </button>
            </div>
        </div>
    </section>
    
        
        <section class="bg-white border-b py-8">
          <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Video
            </h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
    
            

<div class="grid gap-4">
        <div class="w-full">
            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/jvR4di-iMjs?si=VTcjemhhw7uFgRTC" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    <div class="grid grid-cols-5 gap-4">
        <div class="w-full">
            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/40t_sqp2bq4?si=WGRSreftAncLhe8D" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>  
        <div class="w-full">
            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/jJbaf6k32-Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="w-full">
            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/CMJaet5GANY?si=tZtmqYY4N9iEz_kG" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="w-full">
            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/MZZNLiQ8DYU?si=FmYutsBjD9Q0xOC9" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="w-full">
            <iframe class="w-full aspect-video" src="https://www.youtube.com/embed/kNg47yj7jc8?si=kreLnh-baOiIp3aU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>

          </div>
        </div>
        </section>
      
        
        <!-- Change the colour #f8fafc to match the previous section colour -->
        <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
              <g class="wave" fill="#f8fafc">
                <path
                  d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
                ></path>
              </g>
              <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                  <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                  <path
                    d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                    opacity="0.100000001"
                  ></path>
                  <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
                </g>
              </g>
            </g>
          </g>
        </svg>
        <section class="container mx-auto text-center py-6 mb-12">
          <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
            Kontak Kami
          </h2>
          <div class="w-full mb-4">
            <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
          </div>
          <h3 class="my-4 text-3xl leading-tight">
            WEBSITE KELURAHAN CIBEBER
          </h3>
          <button class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Kirim
          </button>
        </section>
    </div>
@endsection
   