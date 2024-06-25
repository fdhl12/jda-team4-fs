@extends('layouts.app')

@section('title', 'Table')

@section('content')

    <div class="pt-24">
      
      <section class="bg-white border-b py-8 bg-banner-1">
        <div class="container mx-auto px-1 relative">
            <!-- Pengumuman -->
            <h2 class="text-5xl font-bold text-blue-950 text-center mb-4">Galeri</h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <p class="text-3xl font-medium text-orange-500 text-center mb-4">Foto Foto Terkait Kelurahan Cibeber</p>
        
          <!-- Slider Cards -->
          <div x-data="{ slide: 0 }" class="w-full max-w-screen-2xl mx-auto">
            <div class="grid gap-12 grid-cols-1" x-ref="slides" x-init="slides = $refs.slides.children.length">
                <!-- Berita 1 -->
                <div x-show="slide === 0" class="max-w-full mx-auto mb-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                        <div class="relative overflow-hidden hover:scale-105 transform transition duration-300">
                            <img class="object-cover object-center w-[30rem] h-full" src="images/berita-1.jpeg" alt="Berita 1">
                        </div>
                        <div class="relative overflow-hidden hover:scale-105 transform transition duration-300">
                            <img class="object-cover object-center w-full h-full" src="images/berita-2.jpeg" alt="Berita 2">
                        </div>
                        <div class="relative overflow-hidden hover:scale-105 transform transition duration-300">
                            <img class="object-cover object-center w-full h-full" src="images/berita-3.jpeg" alt="Berita 3">
                        </div>
                        <div class="relative overflow-hidden hover:scale-105 transform transition duration-300">
                            <img class="object-cover object-center w-full h-full" src="images/berita-1.jpeg" alt="Berita 1">
                        </div>
                        <div class="relative overflow-hidden hover:scale-105 transform transition duration-300">
                            <img class="object-cover object-center w-full h-full" src="images/berita-2.jpeg" alt="Berita 2">
                        </div>
                        <div class="relative overflow-hidden hover:scale-105 transform transition duration-300">
                            <img class="object-cover object-center w-full h-full" src="images/berita-3.jpeg" alt="Berita 3">
                        </div>
                    </div>
                </div>
                
                <!-- Berita 2 -->
                <div x-show="slide === 1" class="max-w-full mx-auto mb-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                        <div class="relative overflow-hidden hover:scale-105 transform transition duration-300">
                            <img class="object-cover object-center w-[30rem] h-full" src="images/berita-1.jpeg" alt="Berita 1">
                        </div>
                        <div class="relative overflow-hidden hover:scale-105 transform transition duration-300">
                            <img class="object-cover object-center w-full h-full" src="images/berita-2.jpeg" alt="Berita 2">
                        </div>
                        <div class="relative overflow-hidden hover:scale-105 transform transition duration-300">
                            <img class="object-cover object-center w-full h-full" src="images/berita-3.jpeg" alt="Berita 3">
                        </div>
                        <div class="relative overflow-hidden hover:scale-105 transform transition duration-300">
                            <img class="object-cover object-center w-full h-full" src="images/berita-1.jpeg" alt="Berita 1">
                        </div>
                        <div class="relative overflow-hidden hover:scale-105 transform transition duration-300">
                            <img class="object-cover object-center w-full h-full" src="images/berita-2.jpeg" alt="Berita 2">
                        </div>
                        <div class="relative overflow-hidden hover:scale-105 transform transition duration-300">
                            <img class="object-cover object-center w-full h-full" src="images/berita-3.jpeg" alt="Berita 3">
                        </div>
                    </div>
                </div>
                
                <!-- Berita 3 -->
                <div x-show="slide === 2" class="max-w-full mx-auto mb-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                        <div class="relative overflow-hidden hover:scale-105 transform transition duration-300">
                            <img class="object-cover object-center w-[30rem] h-full" src="images/berita-1.jpeg" alt="Berita 1">
                        </div>
                        <div class="relative overflow-hidden hover:scale-105 transform transition duration-300">
                            <img class="object-cover object-center w-full h-full" src="images/berita-2.jpeg" alt="Berita 2">
                        </div>
                        <div class="relative overflow-hidden hover:scale-105 transform transition duration-300">
                            <img class="object-cover object-center w-full h-full" src="images/berita-3.jpeg" alt="Berita 3">
                        </div>
                        <div class="relative overflow-hidden hover:scale-105 transform transition duration-300">
                            <img class="object-cover object-center w-full h-full" src="images/berita-1.jpeg" alt="Berita 1">
                        </div>
                        <div class="relative overflow-hidden hover:scale-105 transform transition duration-300">
                            <img class="object-cover object-center w-full h-full" src="images/berita-2.jpeg" alt="Berita 2">
                        </div>
                        <div class="relative overflow-hidden hover:scale-105 transform transition duration-300">
                            <img class="object-cover object-center w-full h-full" src="images/berita-3.jpeg" alt="Berita 3">
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
    </div>
@endsection
   