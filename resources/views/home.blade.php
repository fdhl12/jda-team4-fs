@extends('layouts.app')

@section('title', 'Table')

@section('content')

      <div class="flex justify-center items-end h-screen pb-10">
        <div class="container max-w-8xl px-6 mx-auto text-center">
          <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-[25rem] md:h-[30rem] overflow-hidden rounded-lg">
              <div class="absolute bottom-0 left-0 right-0 p-6 flex flex-col items-center">
                <p class="drop-shadow-xl uppercase text-3xl tracking-loose font-extrabold text-white">Website Kelurahan Cibeber</p>
                <h1 class="drop-shadow-xl my-4 text-4xl md:text-7xl font-extrabold leading-tight text-white">
                  Portal Layanan Publik Kota Cimahi
                </h1>
                <p class="drop-shadow-xl leading-normal text-xl md:text-2xl mb-8 font-extrabold text-white">
                  #CimahiCampernik #KotaHijau #KotaTentara
                </p>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <section class="bg-white border-b py-8 bg-banner-1">
        <div class="container mx-auto px-1 relative">
            <!-- Pengumuman -->
            <h2 class="text-5xl font-bold text-blue-950 text-center mb-4">Pengumuman</h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <p class="text-3xl font-medium text-orange-500 text-center mb-4">Informasi Terkait Kelurahan Cibeber</p>
    
            <!-- Tombol Selengkapnya -->
            <div class="flex justify-center md:justify-end mb-8">
                <a href="#" class="bg-blue-500 text-white font-bold py-4 px-8 text-2xl rounded-lg hover:bg-blue-700 transition-transform duration-300 transform hover:scale-105">Selengkapnya</a>
            </div>
            
            <div class="grid gap-6 grid-cols-1 md:grid-cols-3">
                <!-- Berita 1 -->
                <div class="max-w-lg bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-auto mb-6 transform transition-transform duration-300 hover:scale-110">
                    <a href="#" class="block rounded-t-lg overflow-hidden">
                        <img class="w-full" src="{{ asset('images/berita-1.jpeg') }}" alt="Berita 1" />
                    </a>
                    <div class="p-8">
                        <a href="#" class="block mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-blue-700 dark:hover:text-blue-400">
                            Dokter Urologi Bagikan Tips Sehat Minum Kopi Tanpa Menyiksa Ginjal
                        </a>
                        <div class="flex justify-between items-center text-blue-700">
                            <p><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                        </div>
                    </div>
                </div>
                <!-- Berita 2 -->
                <div class="max-w-lg bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-auto mb-6 transform transition-transform duration-300 hover:scale-110">
                    <a href="#" class="block rounded-t-lg overflow-hidden">
                        <img class="w-full" src="{{ asset('images/berita-2.jpeg') }}" alt="Berita 2" />
                    </a>
                    <div class="p-6">
                        <a href="#" class="block mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-blue-700 dark:hover:text-blue-400">
                            Dokter Urologi Bagikan Tips Sehat Minum Kopi Tanpa Menyiksa Ginjal
                        </a>
                        <div class="flex justify-between items-center text-blue-700">
                            <p><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                        </div>
                    </div>
                </div>
                <!-- Berita 3 -->
                <div class="max-w-lg bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-auto mb-6 transform transition-transform duration-300 hover:scale-110">
                    <a href="#" class="block rounded-t-lg overflow-hidden">
                        <img class="w-full" src="{{ asset('images/berita-3.jpeg') }}" alt="Berita 3" />
                    </a>
                    <div class="p-6">
                        <a href="#" class="block mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-blue-700 dark:hover:text-blue-400">
                            Dokter Urologi Bagikan Tips Sehat Minum Kopi Tanpa Menyiksa Ginjal
                        </a>
                        <div class="flex justify-between items-center text-blue-700">
                            <p><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <section id="kontak" class="bg-gray-300 py-8">
        <div class="container mx-auto px-4">
          <h2 class="text-5xl font-bold text-blue-900 text-center mb-4">Kontak</h2>
          <div class="w-full mb-4">
              <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
          </div>
          <p class="text-3xl font-medium text-blue-900 text-center mb-8">Kontak Layanan Seputar Kelurahan Cibeber</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 md:gap-8">
                <div class="bg-white rounded-lg p-4 md:p-6 shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 mx-2 sm:mx-0">
                    <h3 class="text-blue-900 font-semibold text-2xl md:text-3xl mb-2 sm:mb-4">Ambulan</h3>
                    <p class="text-gray-800 text-base md:text-2xl">Nomor: 112</p>
                </div>
                <div class="bg-white rounded-lg p-4 md:p-6 shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 mx-2 sm:mx-0">
                    <h3 class="text-blue-900 font-semibold text-lg md:text-3xl mb-2 sm:mb-4">Polsek Cimahi Selatan</h3>
                    <p class="text-gray-800 text-base md:text-2xl">Nomor: (022) XXXXXXX</p>
                </div>
                <div class="bg-white rounded-lg p-4 md:p-6 shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 mx-2 sm:mx-0">
                    <h3 class="text-blue-900 font-semibold text-lg md:text-3xl mb-2 sm:mb-4">PLN Kota Cimahi</h3>
                    <p class="text-gray-800 text-base md:text-2xl">Nomor: 12345678</p>
                </div>
                <div class="bg-white rounded-lg p-4 md:p-6 shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 mx-2 sm:mx-0">
                    <h3 class="text-blue-900 font-semibold text-lg md:text-3xl mb-2 sm:mb-4">Damkar Kota Cimahi</h3>
                    <p class="text-gray-800 text-base md:text-2xl">Nomor: 119</p>
                </div>
                <div class="bg-white rounded-lg p-4 md:p-6 shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 mx-2 sm:mx-0">
                    <h3 class="text-blue-900 font-semibold text-lg md:text-3xl mb-2 sm:mb-4">BPBD Kota Cimahi</h3>
                    <p class="text-gray-800 text-base md:text-2xl">Nomor: (022) YYYYYYY</p>
                </div>
                <div class="bg-white rounded-lg p-4 md:p-6 shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 mx-2 sm:mx-0">
                    <h3 class="text-blue-900 font-semibold text-lg md:text-3xl mb-2 sm:mb-4">Puskesmas Cibeber</h3>
                    <p class="text-gray-800 text-base md:text-2xl">Nomor: 98765432</p>
                </div>
            </div>
        </div>
      </section>
    
      <section class="bg-white border-b py-8">
        <div class="container mx-auto px-1 relative">
          <!-- Judul Top Berita -->
          <h2 class="text-5xl font-bold text-blue-900 text-center mb-4">Berita Terkini</h2>
          <div class="w-full mb-4">
              <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
          </div>
          <p class="text-3xl font-medium text-blue-900 text-center mb-8">Kontak Layanan Seputar Kelurahan Cibeber</p>
          <!-- Tombol Selengkapnya -->
          <div class="flex justify-center md:justify-end mb-8">
            <a href="#" class="bg-blue-500 text-white font-bold py-4 px-8 text-2xl rounded-lg hover:bg-blue-700 transition-transform duration-300 transform hover:scale-105">Selengkapnya</a>
          </div>
            <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-1">
              <!-- Kiri - Lokasi -->
              <div class="md:col-span-1">
                  <!-- Card Berita Besar -->
                  <div class="relative max-w-full bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-auto transform transition-transform duration-300 hover:scale-105">
                      <a href="#" class="block rounded-lg overflow-hidden">
                          <img class="w-full h-[24rem] object-cover" src="{{ asset('images/berita-1.jpeg') }}" alt="Berita Besar" />
                          <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-5">
                              <a href="#" class="block mb-2 text-2xl font-bold tracking-tight text-white hover:text-blue-400">
                                  Berita Besar Hari Ini: Lorem ipsum dolor sit amet consectetur adipisicing elit.
                              </a>
                              <div class="flex justify-between items-center text-blue-400">
                                  <p><i class="fa-solid fa-calendar-days"></i> 20/06/2024 </p>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="relative max-w-full bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-auto transform transition-transform duration-300 hover:scale-105">
                      <a href="#" class="block rounded-lg overflow-hidden">
                          <img class="w-full h-[24rem] object-cover" src="{{ asset('images/berita-1.jpeg') }}" alt="Berita Besar" />
                          <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-5">
                              <a href="#" class="block mb-2 text-2xl font-bold tracking-tight text-white hover:text-blue-400">
                                  Berita Besar Hari Ini: Lorem ipsum dolor sit amet consectetur adipisicing elit.
                              </a>
                              <div class="flex justify-between items-center text-blue-400">
                                  <p><i class="fa-solid fa-calendar-days"></i> 20/06/2024 </p>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
          
              <!-- Kanan - Berita -->
              <div class="md:col-span-1 grid gap-1 md:grid-cols-2">
                  <!-- Berita 1 -->
                  <div class="relative bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-auto transform transition-transform duration-300 hover:scale-105">
                      <a href="#" class="block rounded-lg overflow-hidden">
                          <img class="w-full h-[18rem] object-cover" src="{{ asset('images/berita-2.jpeg') }}" alt="Berita 2" />
                          <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-5">
                              <a href="#" class="block mb-2 text-2xl font-bold tracking-tight text-white hover:text-blue-400">
                                  Dokter Urologi Bagikan Tips Sehat Minum Kopi Tanpa Menyiksa Ginjal
                              </a>
                              <div class="flex justify-between items-center text-blue-400">
                                  <p><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                              </div>
                          </div>
                      </a>
                  </div>
          
                  <!-- Berita 2 -->
                  <div class="relative bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-auto transform transition-transform duration-300 hover:scale-105">
                      <a href="#" class="block rounded-lg overflow-hidden">
                          <img class="w-full h-[18rem] object-cover" src="{{ asset('images/berita-2.jpeg') }}" alt="Berita 2" />
                          <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-5">
                              <a href="#" class="block mb-2 text-2xl font-bold tracking-tight text-white hover:text-blue-400">
                                  Dokter Urologi Bagikan Tips Sehat Minum Kopi Tanpa Menyiksa Ginjal
                              </a>
                              <div class="flex justify-between items-center text-blue-400">
                                  <p><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                              </div>
                          </div>
                      </a>
                  </div>
          
                  <!-- Berita 3 -->
                  <div class="relative bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-auto transform transition-transform duration-300 hover:scale-105">
                      <a href="#" class="block rounded-lg overflow-hidden">
                          <img class="w-full h-[18rem] object-cover" src="{{ asset('images/berita-3.jpeg') }}" alt="Berita 3" />
                          <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-5">
                              <a href="#" class="block mb-2 text-2xl font-bold tracking-tight text-white hover:text-blue-400">
                                  Dokter Urologi Bagikan Tips Sehat Minum Kopi Tanpa Menyiksa Ginjal
                              </a>
                              <div class="flex justify-between items-center text-blue-400">
                                  <p><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                              </div>
                          </div>
                      </a>
                  </div>
          
                  <!-- Berita 4 -->
                  <div class="relative bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-auto transform transition-transform duration-300 hover:scale-105">
                      <a href="#" class="block rounded-lg overflow-hidden">
                          <img class="w-full h-[18rem] object-cover" src="{{ asset('images/berita-1.jpeg') }}" alt="Berita 4" />
                          <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-5">
                              <a href="#" class="block mb-2 text-2xl font-bold tracking-tight text-white hover:text-blue-400">
                                  Dokter Urologi Bagikan Tips Sehat Minum Kopi Tanpa Menyiksa Ginjal
                              </a>
                              <div class="flex justify-between items-center text-blue-400">
                                  <p><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                              </div>
                          </div>
                      </a>
                  </div>
              </div>
            </div>
        </div>
      </section>
    
      <section class="bg-gray-100 py-8">
        <div class="container mx-auto px-1 relative">
            <!-- Judul Top Berita -->
            <h2 class="text-5xl font-bold text-blue-900 text-center mb-4">Berita Terkini</h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <p class="text-3xl font-medium text-blue-900 text-center mb-8">Kontak Layanan Seputar Kelurahan Cibeber</p>
            <!-- Tombol Selengkapnya -->
            <div class="flex justify-center md:justify-end mb-8">
              <a href="#" class="bg-blue-500 text-white font-bold py-4 px-8 text-2xl rounded-lg hover:bg-blue-700 transition-transform duration-300 transform hover:scale-105">Selengkapnya</a>
            </div>
          <div class="grid gap-4">
            <div>
              <img class="h-auto w-full max-w-full rounded-lg" src="{{ asset('images/berita-1.jpeg') }}" alt="">
          </div>          
            <div class="grid grid-cols-5 gap-4">
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/berita-2.jpeg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/berita-3.jpeg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/berita-1.jpeg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/berita-2.jpeg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/berita-3.jpeg') }}" alt="">
                </div>
            </div>
          </div>
        </div>
      </section>
      
      
        <!-- Change the colour #f8fafc to match the previous section colour -->
       
      </div>
@endsection
   