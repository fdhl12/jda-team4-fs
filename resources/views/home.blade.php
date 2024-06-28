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
                    <div class="relative h-[25rem] md:h-[30rem] overflow-hidden rounded-lg" data-aos="zoom-in"
                         data-aos-duration="500" data-aos-delay="0">
                        <div class="absolute bottom-0 left-0 right-0 p-6 flex flex-col items-center">
                            <p class="drop-shadow-xl uppercase text-3xl tracking-loose font-extrabold text-white">
                                Website {{ $pengaturan['name'] }}</p>
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

        <section id="pengumuman" class="bg-white border-b py-10">
            <div class="container mx-auto px-1 relative">
                <!-- Konten Pengumuman -->
                <h2 class="text-5xl font-bold text-blue-950 text-center mb-4" data-aos="zoom-in" data-aos-duration="500"
                    data-aos-delay="0">Pengumuman</h2>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t" data-aos="zoom-in"
                         data-aos-duration="500" data-aos-delay="0"></div>
                </div>
                <p class="text-3xl font-medium text-orange-500 text-center mb-4" data-aos="zoom-in"
                   data-aos-duration="500" data-aos-delay="0">Informasi Terkait {{ $pengaturan['name'] }}</p>

                  <!-- Loop Pengumuman -->
                <div class="w-full flex flex-wrap justify-center my-12">
                    @foreach ($announcements as $announcement)
                        <!-- Include the card component and pass the $announcement variables -->
                        @include('components.card', [
                            'link' => route('show.pengumuman', $announcement->slug),
                            'image' => asset($announcement->image),
                            'title' => $announcement->title,
                            'date' => $announcement->created_at->translatedFormat('l, d F Y'),
                            'description' => Str::limit(strip_tags($announcement->description), 100)
                        ])
                    @endforeach
                </div>

                <!-- Tombol Selengkapnya -->
                @include('components.button-1', [
                    'route' => route('pengumuman'),
                    'label' => 'Selengkapnya'
                ])

            </div>
            
        </section>

        <section id="kontak" class="bg-gray-300 py-16 bg-banner-1">
            
            <div class="container mx-auto px-4">
                <h2 class="text-5xl font-bold text-blue-900 text-center mb-8" data-aos="zoom-in" data-aos-duration="500"
                    data-aos-delay="0">
                    Layanan
                </h2>
                <div class="w-full mb-8">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t" data-aos="zoom-in"
                         data-aos-duration="500" data-aos-delay="0"></div>
                </div>
                <p class="text-3xl font-medium text-blue-900 text-center mb-12" data-aos="zoom-in"
                   data-aos-duration="500" data-aos-delay="0">
                    Kontak Layanan Seputar {{ $pengaturan['name'] }}
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 my-12" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0">
                    @foreach ($layanans as $layanan)
                        <div class="bg-white rounded-lg p-8 md:p-10 shadow-xl transition duration-300 ease-in-out transform hover:-translate-y-1 hover:scale-105 flex items-center justify-center relative group">
                            <div class="text-blue-900 bg-blue-100 rounded-full p-4">
                                <svg class="w-12 h-12 text-blue-950 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"/>
                                </svg>
                            </div>
                            <div class="ml-6">
                                <h3 class="text-blue-900 font-semibold text-3xl md:text-3xl mb-4">{{$layanan->nama}}</h3>
                                <p class="text-gray-800 text-2xl md:text-2xl">No.Telp : {{$layanan->telepon}}</p>
                            </div>
                            <div class="absolute bottom-0 left-0 h-1 bg-gradient-to-r from-blue-950 to-blue-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left w-full"></div>
                        </div>
                    @endforeach
                </div>
                
                 <!-- Tombol Selengkapnya -->
                 @include('components.button-2', [
                    'route' => route('pengumuman'),
                    'label' => 'Selengkapnya'
                ])
            </div>
        </section>

        <section id="berita" class="bg-white border-b py-10">
            <div class="container mx-auto px-1 relative py-10">
                <!-- Konten Berita -->
                <h2 class="text-5xl font-bold text-blue-950 text-center mb-4" data-aos="zoom-in" data-aos-duration="500"
                    data-aos-delay="0">Berita Terkini</h2>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0"></div>
                </div>
                <p class="text-3xl font-medium text-orange-500 text-center mb-4" data-aos="zoom-in"
                    data-aos-duration="500" data-aos-delay="0">Berita Seputar {{ $pengaturan['name'] }}</p>
        
                <!-- Loop Berita -->
                <div class="w-full flex flex-wrap justify-center my-12">
                    @foreach ($newss as $news)
                        <!-- Include the card component and pass the $news variables -->
                        @include('components.card', [
                            'link' => route('show.berita', $news->slug),
                            'image' => asset($news->image),
                            'title' => $news->title,
                            'date' => $news->created_at->translatedFormat('l, d F Y'),
                            'description' => Str::limit(strip_tags($news->description), 100)
                        ])
                    @endforeach
                </div>
        
                <!-- Tombol Selengkapnya -->
                @include('components.button-1', [
                    'route' => route('berita'),
                    'label' => 'Selengkapnya'
                ])
            </div>
        </section>
        <section class="bg-gray-100 py-10">
            <div class="container mx-auto px-1 relative  py-10">
                <h2 class="text-5xl font-bold text-blue-950 text-center mb-4" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0">
                    Galeri
                </h2>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0"></div>
                </div>
                <p class="text-3xl font-medium text-orange-500 text-center mb-4" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0">
                    Foto Foto Seputar {{ $pengaturan['name'] }}
                </p>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-12 my-12">
                    @foreach ($galeris as $galeri)
                        <div class="relative overflow-hidden transform transition duration-300 ease-in-out hover:scale-105 shadow-xl"
                             data-aos="zoom-in"
                             data-aos-duration="500"
                             data-aos-delay="0">
                            <a data-fancybox="gallery"
                               href="{{ asset('storage/'.$galeri->image) }}"
                               data-caption="{{ $galeri->description }}"
                               data-options='{"type": "image", "image": {"zoom": {"fit": "contain", "startScale": 1.5}}}'
                               style="display: block;">
                                <img class="object-cover object-center w-full h-full"
                                     src="{{ asset('storage/'.$galeri->image) }}"
                                     alt="{{ $galeri->description }}">
                            </a>
                        </div>
                    @endforeach
                </div>
                
                
        

                 <!-- Tombol Selengkapnya -->
                 @include('components.button-2', [
                    'route' => route('galeri'),
                    'label' => 'Selengkapnya'
                ])

            </div>
        </section>


    </div>
@endsection
