@extends('layouts.app')

@section('title', $pengaturan['name'])

@section('content')
    <div class="gradient">
        <video autoplay muted loop poster="images/foto-1.jpeg" id="bgvid">
            <source src="videos/profile.mp4" type="video/mp4">
            <!-- Sisipkan sumber video sesuai format -->
            Your browser does not support the video tag.
        </video>


      <div class="flex justify-center items-end h-screen pb-10">
        <div class="container max-w-8xl px-6 mx-auto text-center">
          <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-[25rem] md:h-[30rem] overflow-hidden rounded-lg" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0">
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

    <section class="bg-white border-b py-8">
        <div class="container mx-auto px-1 relative">
            <!-- Pengumuman -->
            <h2 class="text-5xl font-bold text-blue-950 text-center mb-4" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0">Pengumuman</h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0"></div>
            </div>
            <p class="text-3xl font-medium text-orange-500 text-center mb-4" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0">Informasi Terkait Kelurahan Cibeber</p>
            <!-- Tombol Selengkapnya -->
            <div class="flex justify-center md:justify-end mb-8" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0">
                <a href="#" class="border ease-in text-blue-700 font-bold py-4 px-8 text-2xl rounded-lg border-blue-700 hover:bg-blue-950 hover:text-white transition-transform duration-700 transform hover:scale-105">Selengkapnya</a>
            </div>
            <!-- Slider Cards -->
            <div x-data="{ slide: 0 }" class="sm:grid-cols-2">
                <div class="grid gap-12 grid-cols-1  sm:grid-cols-1 md:grid-cols-1" x-ref="slides" x-init="slides = $refs.slides.children.length">
                    <!-- Berita 1 -->
                    <div x-show="slide === 0" class="max-w-full mx-auto mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                            <div class="max-w-lg">
                                <div class="overflow-hidden">
                                    <a href="#" class="block relative overflow-hidden group">
                                        <img class="w-full transition duration-500 transform group-hover:scale-105 group-hover:border-4 group-hover:border-blue-500" src="images/berita-2.jpeg" alt="Berita 1" />
                                        <!-- Tambahkan kelas "transition", "duration-500", "transform", "group-hover:scale-105", "group-hover:border-4", dan "group-hover:border-blue-500" -->
                                    </a>
                                </div>
                                <div class="mt-7">
                                    <div class="flex justify-between items-center text-gray-700">
                                        <p class="text-2xl"><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                                    </div>
                                    <a href="#" class="block mb-4 mt-5 text-3xl font-bold tracking-tight text-gray-900 hover:text-blue-700">
                                        Dokter Urologi Bagikan Tips Sehat Minum Kopi Tanpa Menyiksa Ginjal
                                    </a>
                                    <p class="text-2xl text-gray-600">Ringkasan berita singkat dapat ditambahkan di sini, menjelaskan pokok-pokok utama dari artikel tersebut.</p>
                                </div>
                            </div>

                            <div class="max-w-lg">
                                <div class="overflow-hidden">
                                    <a href="#" class="block relative overflow-hidden group">
                                        <img class="w-full transition duration-500 transform group-hover:scale-105 group-hover:border-4 group-hover:border-blue-500" src="images/berita-2.jpeg" alt="Berita 1" />
                                        <!-- Tambahkan kelas "transition", "duration-500", "transform", "group-hover:scale-105", "group-hover:border-4", dan "group-hover:border-blue-500" -->
                                    </a>
                                </div>
                                <div class="mt-7">
                                    <div class="flex justify-between items-center text-gray-700">
                                        <p class="text-2xl"><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                                    </div>
                                    <a href="#" class="block mb-4 mt-5 text-3xl font-bold tracking-tight text-gray-900 hover:text-blue-700">
                                        Dokter Urologi Bagikan Tips Sehat Minum Kopi Tanpa Menyiksa Ginjal
                                    </a>
                                    <p class="text-2xl text-gray-600">Ringkasan berita singkat dapat ditambahkan di sini, menjelaskan pokok-pokok utama dari artikel tersebut.</p>
                                </div>
                            </div>

                            <div class="max-w-lg">
                                <div class="overflow-hidden">
                                    <a href="#" class="block relative overflow-hidden group">
                                        <img class="w-full transition duration-500 transform group-hover:scale-105 group-hover:border-4 group-hover:border-blue-500" src="images/berita-2.jpeg" alt="Berita 1" />
                                        <!-- Tambahkan kelas "transition", "duration-500", "transform", "group-hover:scale-105", "group-hover:border-4", dan "group-hover:border-blue-500" -->
                                    </a>
                                </div>
                                <div class="mt-7">
                                    <div class="flex justify-between items-center text-gray-700">
                                        <p class="text-2xl"><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                                    </div>
                                    <a href="#" class="block mb-4 mt-5 text-3xl font-bold tracking-tight text-gray-900 hover:text-blue-700">
                                        Dokter Urologi Bagikan Tips Sehat Minum Kopi Tanpa Menyiksa Ginjal
                                    </a>
                                    <p class="text-2xl text-gray-600">Ringkasan berita singkat dapat ditambahkan di sini, menjelaskan pokok-pokok utama dari artikel tersebut.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Berita 1 -->
                    <div x-show="slide === 1" class="max-w-full mx-auto mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                            <div class="max-w-lg">
                                <div class="overflow-hidden">
                                    <a href="#" class="block relative overflow-hidden group">
                                        <img class="w-full transition duration-500 transform group-hover:scale-105 group-hover:border-4 group-hover:border-blue-500" src="images/berita-2.jpeg" alt="Berita 1" />
                                        <!-- Tambahkan kelas "transition", "duration-500", "transform", "group-hover:scale-105", "group-hover:border-4", dan "group-hover:border-blue-500" -->
                                    </a>
                                </div>
                                <div class="mt-7">
                                    <div class="flex justify-between items-center text-gray-700">
                                        <p class="text-2xl"><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                                    </div>
                                    <a href="#" class="block mb-4 mt-5 text-3xl font-bold tracking-tight text-gray-900 hover:text-blue-700">
                                        Dokter Urologi Bagikan Tips Sehat Minum Kopi Tanpa Menyiksa Ginjal
                                    </a>
                                    <p class="text-2xl text-gray-600">Ringkasan berita singkat dapat ditambahkan di sini, menjelaskan pokok-pokok utama dari artikel tersebut.</p>
                                </div>
                            </div>

                            <div class="max-w-lg">
                                <div class="overflow-hidden">
                                    <a href="#" class="block relative overflow-hidden group">
                                        <img class="w-full transition duration-500 transform group-hover:scale-105 group-hover:border-4 group-hover:border-blue-500" src="images/berita-2.jpeg" alt="Berita 1" />
                                        <!-- Tambahkan kelas "transition", "duration-500", "transform", "group-hover:scale-105", "group-hover:border-4", dan "group-hover:border-blue-500" -->
                                    </a>
                                </div>
                                <div class="mt-7">
                                    <div class="flex justify-between items-center text-gray-700">
                                        <p class="text-2xl"><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                                    </div>
                                    <a href="#" class="block mb-4 mt-5 text-3xl font-bold tracking-tight text-gray-900 hover:text-blue-700">
                                        Dokter Urologi Bagikan Tips Sehat Minum Kopi Tanpa Menyiksa Ginjal
                                    </a>
                                    <p class="text-2xl text-gray-600">Ringkasan berita singkat dapat ditambahkan di sini, menjelaskan pokok-pokok utama dari artikel tersebut.</p>
                                </div>
                            </div>

                            <div class="max-w-lg">
                                <div class="overflow-hidden">
                                    <a href="#" class="block relative overflow-hidden group">
                                        <img class="w-full transition duration-500 transform group-hover:scale-105 group-hover:border-4 group-hover:border-blue-500" src="images/berita-2.jpeg" alt="Berita 1" />
                                        <!-- Tambahkan kelas "transition", "duration-500", "transform", "group-hover:scale-105", "group-hover:border-4", dan "group-hover:border-blue-500" -->
                                    </a>
                                </div>
                                <div class="mt-7">
                                    <div class="flex justify-between items-center text-gray-700">
                                        <p class="text-2xl"><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                                    </div>
                                    <a href="#" class="block mb-4 mt-5 text-3xl font-bold tracking-tight text-gray-900 hover:text-blue-700">
                                        Dokter Urologi Bagikan Tips Sehat Minum Kopi Tanpa Menyiksa Ginjal
                                    </a>
                                    <p class="text-2xl text-gray-600">Ringkasan berita singkat dapat ditambahkan di sini, menjelaskan pokok-pokok utama dari artikel tersebut.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-show="slide === 2" class="max-w-full mx-auto mb-6">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                            <div class="max-w-lg">
                                <div class="overflow-hidden">
                                    <a href="#" class="block relative overflow-hidden group">
                                        <img class="w-full transition duration-500 transform group-hover:scale-105 group-hover:border-4 group-hover:border-blue-500" src="images/berita-2.jpeg" alt="Berita 1" />
                                        <!-- Tambahkan kelas "transition", "duration-500", "transform", "group-hover:scale-105", "group-hover:border-4", dan "group-hover:border-blue-500" -->
                                    </a>
                                </div>
                                <div class="mt-7">
                                    <div class="flex justify-between items-center text-gray-700">
                                        <p class="text-2xl"><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                                    </div>
                                    <a href="#" class="block mb-4 mt-5 text-3xl font-bold tracking-tight text-gray-900 hover:text-blue-700">
                                        Dokter Urologi Bagikan Tips Sehat Minum Kopi Tanpa Menyiksa Ginjal
                                    </a>
                                    <p class="text-2xl text-gray-600">Ringkasan berita singkat dapat ditambahkan di sini, menjelaskan pokok-pokok utama dari artikel tersebut.</p>
                                </div>
                            </div>

                            <div class="max-w-lg">
                                <div class="overflow-hidden">
                                    <a href="#" class="block relative overflow-hidden group">
                                        <img class="w-full transition duration-500 transform group-hover:scale-105 group-hover:border-4 group-hover:border-blue-500" src="images/berita-2.jpeg" alt="Berita 1" />
                                        <!-- Tambahkan kelas "transition", "duration-500", "transform", "group-hover:scale-105", "group-hover:border-4", dan "group-hover:border-blue-500" -->
                                    </a>
                                </div>
                                <div class="mt-7">
                                    <div class="flex justify-between items-center text-gray-700">
                                        <p class="text-2xl"><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                                    </div>
                                    <a href="#" class="block mb-4 mt-5 text-3xl font-bold tracking-tight text-gray-900 hover:text-blue-700">
                                        Dokter Urologi Bagikan Tips Sehat Minum Kopi Tanpa Menyiksa Ginjal
                                    </a>
                                    <p class="text-2xl text-gray-600">Ringkasan berita singkat dapat ditambahkan di sini, menjelaskan pokok-pokok utama dari artikel tersebut.</p>
                                </div>
                            </div>

                            <div class="max-w-lg">
                                <div class="overflow-hidden">
                                    <a href="#" class="block relative overflow-hidden group">
                                        <img class="w-full transition duration-500 transform group-hover:scale-105 group-hover:border-4 group-hover:border-blue-500" src="images/berita-2.jpeg" alt="Berita 1" />
                                        <!-- Tambahkan kelas "transition", "duration-500", "transform", "group-hover:scale-105", "group-hover:border-4", dan "group-hover:border-blue-500" -->
                                    </a>
                                </div>
                                <div class="mt-7">
                                    <div class="flex justify-between items-center text-gray-700">
                                        <p class="text-2xl"><i class="fa-solid fa-calendar-days"></i> 16/06/2024 </p>
                                    </div>
                                    <a href="#" class="block mb-4 mt-5 text-3xl font-bold tracking-tight text-gray-900 hover:text-blue-700">
                                        Dokter Urologi Bagikan Tips Sehat Minum Kopi Tanpa Menyiksa Ginjal
                                    </a>
                                    <p class="text-2xl text-gray-600">Ringkasan berita singkat dapat ditambahkan di sini, menjelaskan pokok-pokok utama dari artikel tersebut.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigasi Slider -->
                    <div class="flex justify-center mt-4 space-x-4">
                        <button class="flex items-center justify-center w-16 h-16 bg-blue-500 text-white rounded-full text-2xl font-bold leading-none shadow-lg focus:outline-none" :class="{ 'bg-blue-700': slide === 0 }" @click="slide = 0">1</button>
                        <button class="flex items-center justify-center w-16 h-16 bg-blue-500 text-white rounded-full text-2xl font-bold leading-none shadow-lg focus:outline-none" :class="{ 'bg-blue-700': slide === 1 }" @click="slide = 1">2</button>
                        <button class="flex items-center justify-center w-16 h-16 bg-blue-500 text-white rounded-full text-2xl font-bold leading-none shadow-lg focus:outline-none" :class="{ 'bg-blue-700': slide === 2 }" @click="slide = 2">3</button>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section id="kontak" class="bg-gray-300 py-16 bg-banner-1">
        <div class="container mx-auto px-4">
            <h2 class="text-5xl font-bold text-blue-900 text-center mb-8" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0">Kontak</h2>
            <div class="w-full mb-8">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0"></div>
            </div>
            <p class="text-3xl font-medium text-blue-900 text-center mb-12" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0">Kontak Layanan Seputar Kelurahan Cibeber</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg p-8 md:p-10 shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 flex items-center justify-center">
                    <div class="text-blue-900 bg-blue-100 rounded-full p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-blue-900 font-semibold text-3xl md:text-3xl mb-4">Ambulan</h3>
                        <p class="text-gray-800 text-2xl md:text-2xl">Nomor: 112</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg p-8 md:p-10 shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 flex items-center justify-center">
                    <div class="text-blue-900 bg-blue-100 rounded-full p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-blue-900 font-semibold text-3xl md:text-3xl mb-4">Polsek Cimahi Selatan</h3>
                        <p class="text-gray-800 text-2xl md:text-2xl">Nomor: (022) XXXXXXX</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg p-8 md:p-10 shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 flex items-center justify-center">
                    <div class="text-blue-900 bg-blue-100 rounded-full p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-blue-900 font-semibold text-3xl md:text-3xl mb-4">PLN Kota Cimahi</h3>
                        <p class="text-gray-800 text-2xl md:text-2xl">Nomor: 12345678</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg p-8 md:p-10 shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 flex items-center justify-center">
                    <div class="text-blue-900 bg-blue-100 rounded-full p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-blue-900 font-semibold text-3xl md:text-3xl mb-4">Damkar Kota Cimahi</h3>
                        <p class="text-gray-800 text-2xl md:text-2xl">Nomor: 119</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg p-8 md:p-10 shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 flex items-center justify-center">
                    <div class="text-blue-900 bg-blue-100 rounded-full p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-blue-900 font-semibold text-3xl md:text-3xl mb-4">BPBD Kota Cimahi</h3>
                        <p class="text-gray-800 text-2xl md:text-2xl">Nomor: (022) YYYYYYY</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg p-8 md:p-10 shadow-md transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 flex items-center justify-center">
                    <div class="text-blue-900 bg-blue-100 rounded-full p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                    </div>
                    <div class="ml-6">
                        <h3 class="text-blue-900 font-semibold text-3xl md:text-3xl mb-4">Puskesmas Cibeber</h3>
                        <p class="text-gray-800 text-2xl md:text-2xl">Nomor: 98765432</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="berita" class="bg-white border-b py-8">
        <div class="container mx-auto px-1 relative">
            <!-- Konten Berita -->
            <h2 class="text-5xl font-bold text-blue-950 text-center mb-4" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0">Berita Terkini</h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0"></div>
            </div>
            <p class="text-3xl font-medium text-orange-500 text-center mb-4" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0">Berita Seputar Kelurahan Cibeber</p>
             <!-- Tombol Selengkapnya -->
             <div class="flex justify-center md:justify-end mb-8 pr-12" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0">
                <a href="{{ route('berita') }}" class="border ease-in text-blue-900 font-bold py-4 px-8  text-2xl rounded-lg border-blue-900 hover:bg-blue-950 hover:text-white transition-transform duration-700 transform hover:scale-105">Selengkapnya</a>
            </div>            
            
            <!-- Loop Berita -->
            @foreach ($newss->chunk(3) as $newsChunk)
                <div class="w-full flex flex-wrap justify-center mb-6">
                    @foreach ($newsChunk as $news)
                        <!-- Berita Item -->
                        <div class="max-w-full md:max-w-md bg-white border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 mb-6 transform transition-transform duration-300 hover:scale-105 mx-4 flowbite flow-slide-left" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0">
                            <div class="overflow-hidden">
                                <a href="{{ route('show.berita', $news->slug) }}" class="block overflow-hidden">
                                    <img class="w-full h-60 object-cover" src="{{ asset($news->image) }}" alt="{{ $news->title }}">
                                </a>
                            </div>
                            <div class="mt-7 px-4">
                                <div class="flex justify-between items-center text-gray-700">
                                    <p class="text-xl">
                                        <i class="fas fa-calendar-alt"></i> {{ $news->created_at->translatedFormat('l, d F Y') }}
                                    </p>
                                </div>
                                <a href="{{ route('show.berita', $news->slug) }}" class="block mb-4 mt-5 text-3xl font-bold tracking-tight text-gray-900 hover:text-blue-700">
                                    {{ $news->title }}
                                </a>
                                <p class="text-xl text-gray-600 mb-5">
                                    {!! Str::limit(strip_tags($news->description), 100) !!}
                                </p>
                            </div>
                        </div>
                        
                    @endforeach
                </div>
            @endforeach
            
            <!-- Tombol Pagination -->
            <div class="w-full flex justify-center mt-4 space-x-4" data-aos="zoom-in" data-aos-duration="500">
                @for ($i = 1; $i <= $newss->lastPage(); $i++)
                    <a href="{{ $newss->url($i) }}#berita" class="flex items-center justify-center w-16 h-16 bg-blue-500 text-white rounded-full text-2xl font-bold leading-none shadow-lg focus:outline-none {{ $newss->currentPage() == $i ? 'bg-blue-700' : '' }}">
                        {{ $i }}
                    </a>
                @endfor
            </div>
            
        </div>
    </section>
    
    

      <section class="bg-gray-100 py-8 ">
        <div class="container mx-auto px-1 relative">
            <h2 class="text-5xl font-bold text-blue-950 text-center mb-4">Galeri</h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <p class="text-3xl font-medium text-orange-500 text-center mb-4">Foto Foto Seputar Kelurahan Cibeber</p>
            <!-- Tombol Selengkapnya -->
            <div class="flex justify-center md:justify-end mb-8">
                <a href="#" class="border ease-in text-blue-700 font-bold py-4 px-8 text-2xl rounded-lg border-blue-700 hover:bg-blue-950 hover:text-white transition-transform duration-700 transform hover:scale-105">Selengkapnya</a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-12 mb-12">
                <div class="relative overflow-hidden  hover:scale-105 transform transition duration-300">
                    <img class="object-cover object-center w-full h-full" src="images/berita-1.jpeg" alt="Berita 1">
                </div>
                <div class="relative overflow-hidden  hover:scale-105 transform transition duration-300">
                    <img class="object-cover object-center w-full h-full" src="images/berita-2.jpeg" alt="Berita 2">
                </div>
                <div class="relative overflow-hidden  hover:scale-105 transform transition duration-300">
                    <img class="object-cover object-center w-full h-full" src="images/berita-3.jpeg" alt="Berita 3">
                </div>
                <div class="relative overflow-hidden  hover:scale-105 transform transition duration-300">
                    <img class="object-cover object-center w-full h-full" src="images/berita-1.jpeg" alt="Berita 1">
                </div>
                <div class="relative overflow-hidden  hover:scale-105 transform transition duration-300">
                    <img class="object-cover object-center w-full h-full" src="images/berita-2.jpeg" alt="Berita 2">
                </div>
                <div class="relative overflow-hidden  hover:scale-105 transform transition duration-300">
                    <img class="object-cover object-center w-full h-full" src="images/berita-3.jpeg" alt="Berita 3">
                </div>
            </div>



        </div>
      </section>


    </div>
@endsection
