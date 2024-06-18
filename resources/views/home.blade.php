@extends('layouts.app')

@section('title', 'Table')

@section('content')

    <div class="pt-24">
        <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
          <!-- Left Col -->
          <div class="flex flex-col w-full md:w-2/5 py-4 justify-center items-start text-center md:text-left">
            <p class="uppercase tracking-loose w-full">Website Kelurahan Cibeber</p>
            
            <h1 x-data="{ text: '', fullText: 'Saluyu ngawangun jati mandiri', loopCount: 0 }"
                x-init="() => {
                    const delay = 100; // Delay antar karakter (ms)
                    const loopDelay = 1000; // Delay antara pengulangan (ms)
                    
                    function typeWriter() {
                        fullText.split('').forEach((char, index) => {
                            setTimeout(() => {
                                text = fullText.substr(0, index + 1);
                            }, index * delay);
                        });
                    }
                    
                    function resetText() {
                        setTimeout(() => {
                            text = '';
                            setTimeout(typeWriter, delay);
                        }, loopDelay);
                    }
                    
                    typeWriter();
                    setInterval(() => {
                        resetText();
                    }, fullText.length * delay + loopDelay);
                }"
                class="my-4 text-5xl font-bold leading-tight mb-8"> <!-- Added mb-8 for bottom margin -->
                <span x-text="text"></span><span class="animate-blink">|</span>
            </h1>
        
            <p class="leading-normal text-2xl mb-8">
                #CimahiCampernik #KotaHijau #KotaTentara
            </p>
        
            <!-- Tombol IG, Twitter, Tiktok beserta Icon -->
            <div class="flex justify-center md:justify-start space-x-6">
                <a href="https://www.instagram.com" target="_blank"
                   class="text-gray-500 hover:text-gray-700 transform transition-transform duration-300 ease-in-out hover:scale-110 hover:rotate-6 bg-white rounded-full p-5 shadow-lg hover:shadow-xl">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank"
                   class="text-gray-500 hover:text-gray-700 transform transition-transform duration-300 ease-in-out hover:scale-110 hover:rotate-6 bg-white rounded-full p-5 shadow-lg hover:shadow-xl">
                    <i class="fab fa-twitter text-2xl"></i>
                </a>
                <a href="https://www.tiktok.com" target="_blank"
                   class="text-gray-500 hover:text-gray-700 transform transition-transform duration-300 ease-in-out hover:scale-110 hover:rotate-6 bg-white rounded-full p-5 shadow-lg hover:shadow-xl">
                    <i class="fab fa-tiktok text-2xl"></i>
                </a>
            </div>
        </div>
        
        
          <!-- Right Col -->
          <div class="w-full md:w-3/5 py-10 text-center md:flex md:justify-center">
            <img src="{{ url('images/foto-walikota.png') }}" alt="Example Image" class="w-full md:w-2/4 ml-10">
          </div>
        </div>
      
      <div class="relative -mt-12 lg:-mt-24">
          <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                <path
                  d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                  opacity="0.100000001"
                ></path>
                <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
              </g>
              <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                <path
                  d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
                ></path>
              </g>
            </g>
          </svg>
        </div>
      
        <section class="bg-white border-b py-8">
          <div class="container mx-auto flex flex-wrap pt-4 pb-12">
              <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                  Berita
              </h2>
              <div class="w-full mb-4">
                  <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
              </div>
      
              <!-- Berita 1 -->
              <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-auto mb-6 transform transition-transform duration-300 hover:scale-105">
                  <a href="#" class="block rounded-t-lg overflow-hidden">
                      <img class="w-full" src="{{ asset('images/berita-1.jpeg') }}" alt="Berita 1" />
                  </a>
                  <div class="p-5">
                      <a href="#" class="block mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-blue-700 dark:hover:text-blue-400">Noteworthy technology acquisitions 2021</a>
                      <p class="mb-3 text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                      <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                          Read more
                          <svg class="w-4 h-4 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M13.293 6.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L10 9.586l3.293-3.293z" clip-rule="evenodd" />
                          </svg>
                      </a>
                  </div>
              </div>
      
              <!-- Berita 2 -->
              <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-auto mb-6 transform transition-transform duration-300 hover:scale-105">
                  <a href="#" class="block rounded-t-lg overflow-hidden">
                      <img class="w-full" src="{{ asset('images/berita-2.jpeg') }}" alt="Berita 2" />
                  </a>
                  <div class="p-5">
                      <a href="#" class="block mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-blue-700 dark:hover:text-blue-400">Noteworthy technology acquisitions 2021</a>
                      <p class="mb-3 text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                      <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                          Read more
                          <svg class="w-4 h-4 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M13.293 6.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L10 9.586l3.293-3.293z" clip-rule="evenodd" />
                          </svg>
                      </a>
                  </div>
              </div>
      
              <!-- Berita 3 -->
              <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-auto mb-6 transform transition-transform duration-300 hover:scale-105">
                  <a href="#" class="block rounded-t-lg overflow-hidden">
                      <img class="w-full" src="{{ asset('images/berita-3.jpeg') }}" alt="Berita 3" />
                  </a>
                  <div class="p-5">
                      <a href="#" class="block mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-blue-700 dark:hover:text-blue-400">Noteworthy technology acquisitions 2021</a>
                      <p class="mb-3 text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                      <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                          Read more
                          <svg class="w-4 h-4 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M13.293 6.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L10 9.586l3.293-3.293z" clip-rule="evenodd" />
                          </svg>
                      </a>
                  </div>
              </div>
          </div>
        </section>
      
        <section class="bg-gray-100 py-8">
          <div class="container mx-auto flex flex-wrap pt-4 pb-12">
              <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                  Galeri
              </h2>
              <div class="w-full mb-4">
                  <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
              </div>
      
              <div id="gallery" class="relative w-full" data-carousel="slide">
                  <!-- Carousel wrapper -->
                  <div class="relative h-[40rem] overflow-hidden rounded-lg">
                      <!-- Item 1 -->
                      <div class="hidden duration-700 ease-in-out" data-carousel-item>
                          <img src="{{ asset('images/berita-1.jpeg') }}" class="absolute block max-w-none h-full transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                      </div>
                      <!-- Item 2 -->
                      <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                          <img src="{{ asset('images/berita-2.jpeg') }}" class="absolute block max-w-none h-full transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                      </div>
                      <!-- Item 3 -->
                      <div class="hidden duration-700 ease-in-out" data-carousel-item>
                          <img src="{{ asset('images/berita-3.jpeg') }}" class="absolute block max-w-none h-full transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                      </div>
                  </div>
                  <!-- Slider controls -->
                  <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                          </svg>
                          <span class="sr-only">Previous</span>
                      </span>
                  </button>
                  <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                      <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                          <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                          </svg>
                          <span class="sr-only">Next</span>
                      </span>
                  </button>
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
   