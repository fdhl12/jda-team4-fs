@extends('layouts.app')

@section('title', 'Table')

@section('content')

    <div class="pt-24">
      
      
      <section class="bg-white border-b py-8">
        <div class="container mx-auto px-4">
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            
            <!-- Carousel Section -->
            <div id="default-carousel" class="relative w-full col-span-1 md:col-span-2" data-carousel="slide">
              <h3 class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-800">
                Berita Terkini
              </h3>
              <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
              </div>
              <!-- Carousel wrapper -->
              <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>      
                  <figure class="relative w-full h-full transition-all duration-300 cursor-pointer">
                    <a href="#">
                      <img class="rounded-lg w-full h-full object-cover" src="{{ asset('images/berita-2.jpeg') }}" alt="image description">
                      <div class="absolute inset-0 bg-gradient-to-r from-black via-transparent to-black opacity-50 rounded-lg"></div>
                      <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black opacity-50 rounded-lg"></div>
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                      <p>Do you want to get notified when a new component is added to Flowbite?</p>
                      <div class="flex justify-between items-center">
                        <p><i class="fa-regular fa-folder"></i> Sosial </p>
                        <p><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                      </div>
                    </figcaption>
                  </figure>        
                </div>


                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>      
                  <figure class="relative w-full h-full transition-all duration-300 cursor-pointer">
                    <a href="#">
                      <img class="rounded-lg w-full h-full object-cover" src="{{ asset('images/berita-1.jpeg') }}" alt="image description">
                      <div class="absolute inset-0 bg-gradient-to-r from-black via-transparent to-black opacity-50 rounded-lg"></div>
                      <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black opacity-50 rounded-lg"></div>
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                      <p>Do you want to get notified when a new component is added to Flowbite?</p>
                      <div class="flex justify-between items-center">
                        <p><i class="fa-regular fa-folder"></i> Sosial </p>
                        <p><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                      </div>
                    </figcaption>
                  </figure>        
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>      
                  <figure class="relative w-full h-full transition-all duration-300 cursor-pointer">
                    <a href="#">
                      <img class="rounded-lg w-full h-full object-cover" src="{{ asset('images/berita-3.jpeg') }}" alt="image description">
                      <div class="absolute inset-0 bg-gradient-to-r from-black via-transparent to-black opacity-50 rounded-lg"></div>
                      <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black opacity-50 rounded-lg"></div>
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                      <p>Do you want to get notified when a new component is added to Flowbite?</p>
                      <div class="flex justify-between items-center">
                        <p><i class="fa-regular fa-folder"></i> Sosial </p>
                        <p><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                      </div>
                    </figcaption>
                  </figure>        
                </div>
              </div>
              <!-- Slider indicators -->
              <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
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
            
            <!-- Search Form Section -->
            <div class="col-span-1 md:col-span-1">
              <form class="max-w-md mx-auto mb-8 border border-blue-500">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">
                        <svg class="w-4 h-4 text-blue-500 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required />
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
              </form>
              
              <h3 class="w-full my-2 text-2xl font-bold leading-tight text-center text-gray-800">
                Kategori
              </h3>

              <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
                  <div class="flex flex-col items-center">
                      <button class="relative inline-flex items-center justify-center p-0.5 mb-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                          <span class="relative px-9 py-7 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                              <i class="fa-solid fa-gavel text-5xl text-blue-500 group-hover:text-white"></i>
                          </span>
                      </button>
                      <span class="text-sm text-gray-700 dark:text-gray-300 mt-1">POLITIK</span>
                  </div>
  
                  <div class="flex flex-col items-center">
                      <button class="relative inline-flex items-center justify-center p-0.5 mb-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                          <span class="relative  px-9 py-7 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                              <i class="fa-solid text-5xl fa-scale-unbalanced-flip text-blue-500 group-hover:text-white"></i>
                          </span>
                      </button>
                      <span class="text-sm text-gray-700 dark:text-gray-300 mt-1">Sosial</span>
                  </div>
  
                  <div class="flex flex-col items-center">
                      <button class="relative inline-flex items-center justify-center p-0.5 mb-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                          <span class="relative px-9 py-7 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                              <i class="fa-solid text-5xl fa-briefcase-medical text-blue-500 group-hover:text-white"></i>
                          </span>
                      </button>
                      <span class="text-sm text-gray-700 dark:text-gray-300 mt-1">Kesehatan</span>
                  </div>
  
                  <div class="flex flex-col items-center">
                      <button class="relative inline-flex items-center justify-center p-0.5 mb-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                          <span class="relative px-9 py-7 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                              <i class="fa-solid text-5xl fa-handcuffs text-blue-500 group-hover:text-white"></i>
                          </span>
                      </button>
                      <span class="text-sm text-gray-700 dark:text-gray-300 mt-1">Kriminal</span>
                  </div>
  
                  <div class="flex flex-col items-center">
                      <button class="relative inline-flex items-center justify-center p-0.5 mb-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                          <span class="relative px-9 py-7 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                              <i class="fa-solid text-5xl fa-medal text-blue-500 group-hover:text-white"></i> 
                          </span>
                      </button>
                      <span class="text-sm text-gray-700 dark:text-gray-300 mt-1">Olahraga</span>
                  </div>
  
                  <div class="flex flex-col items-center">
                      <button class="relative inline-flex items-center justify-center p-0.5 mb-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                          <span class="relative px-9 py-7 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                              <i class="fa-solid text-5xl fa-microchip text-blue-500 group-hover:text-white"></i>
                          </span>
                      </button>
                      <span class="text-sm text-gray-700 dark:text-gray-300 mt-1">Teknologi</span>
                  </div>
              </div>        
          </div>
          
          </div>
        </div>
      </section>
      
      

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
                    <div class="flex justify-between items-center text-blue-700">
                      <p><i class="fa-regular fa-folder"></i> Sosial </p>
                      <p><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                    </div>
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
                    <div class="flex justify-between items-center text-blue-700">
                      <p><i class="fa-regular fa-folder"></i> Sosial </p>
                      <p><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                    </div>
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
                    <div class="flex justify-between items-center text-blue-700">
                      <p><i class="fa-regular fa-folder"></i> Sosial </p>
                      <p><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                    </div>
                    <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="w-4 h-4 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M13.293 6.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L10 9.586l3.293-3.293z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>


             <!-- Berita 4 -->
             <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-auto mb-6 transform transition-transform duration-300 hover:scale-105">
              <a href="#" class="block rounded-t-lg overflow-hidden">
                  <img class="w-full" src="{{ asset('images/berita-2.jpeg') }}" alt="Berita 1" />
              </a>
              <div class="p-5">
                  <a href="#" class="block mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-blue-700 dark:hover:text-blue-400">Noteworthy technology acquisitions 2021</a>
                  <p class="mb-3 text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <div class="flex justify-between items-center text-blue-700">
                    <p><i class="fa-regular fa-folder"></i> Sosial </p>
                    <p><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                  </div>
                  <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Read more
                      <svg class="w-4 h-4 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M13.293 6.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L10 9.586l3.293-3.293z" clip-rule="evenodd" />
                      </svg>
                  </a>
              </div>
          </div>
  
          <!-- Berita 5 -->
          <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-auto mb-6 transform transition-transform duration-300 hover:scale-105">
              <a href="#" class="block rounded-t-lg overflow-hidden">
                  <img class="w-full" src="{{ asset('images/berita-3.jpeg') }}" alt="Berita 2" />
              </a>
              <div class="p-5">
                  <a href="#" class="block mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-blue-700 dark:hover:text-blue-400">Noteworthy technology acquisitions 2021</a>
                  <p class="mb-3 text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <div class="flex justify-between items-center text-blue-700">
                    <p><i class="fa-regular fa-folder"></i> Sosial </p>
                    <p><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                  </div>
                  <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Read more
                      <svg class="w-4 h-4 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M13.293 6.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L10 9.586l3.293-3.293z" clip-rule="evenodd" />
                      </svg>
                  </a>
              </div>
          </div>
  
          <!-- Berita 6 -->
          <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-auto mb-6 transform transition-transform duration-300 hover:scale-105">
              <a href="#" class="block rounded-t-lg overflow-hidden">
                  <img class="w-full" src="{{ asset('images/berita-1.jpeg') }}" alt="Berita 3" />
              </a>
              <div class="p-5">
                  <a href="#" class="block mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-blue-700 dark:hover:text-blue-400">Noteworthy technology acquisitions 2021</a>
                  <p class="mb-3 text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                  <div class="flex justify-between items-center text-blue-700">
                    <p><i class="fa-regular fa-folder"></i> Sosial </p>
                    <p><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                  </div>
                  <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                      Read more
                      <svg class="w-4 h-4 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M13.293 6.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L10 9.586l3.293-3.293z" clip-rule="evenodd" />
                      </svg>
                  </a>
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
   