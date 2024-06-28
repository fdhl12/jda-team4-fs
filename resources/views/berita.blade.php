@extends('layouts.app')
@section('title', 'Berita | ' .$pengaturan['name'] )

@section('content')

    <div class="pt-24">
      
      
        <section class="bg-white border-b py-8">
            <div class="container mx-auto px-4">
                <!-- Carousel Section -->
                <div id="default-carousel" class="relative w-full col-span-1 md:col-span-2" data-carousel="slide">
                    <!-- Berita -->
                    <h2 class="text-5xl font-bold text-blue-950 text-center mb-4" data-aos="zoom-in" data-aos-duration="500">Berita Terkini</h2>
                    <div class="w-full mb-4">
                        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t" data-aos="zoom-in" data-aos-duration="500"></div>
                    </div>
                    <p class="text-3xl font-medium text-orange-500 text-center mb-4" data-aos="zoom-in" data-aos-duration="500">Berita Seputar Kelurahan Cibeber</p>
                    <!-- Carousel wrapper -->
                    <div class="relative h-[35rem] overflow-hidden rounded-lg" data-aos="zoom-in" data-aos-duration="500">
                        @foreach ($newss as $news)
                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <figure class="relative w-full h-full transition-all duration-300 cursor-pointer group">
                                    <a href="{{ route('show.berita', $news->slug) }}">
                                        <img class="rounded-lg w-full h-full object-cover" src="{{ asset($news->image) }}" alt="{{ $news->title }}">
                                        <div class="absolute inset-0 bg-gradient-to-r from-black via-transparent to-black opacity-50 rounded-lg"></div>
                                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black opacity-50 rounded-lg"></div>
                                    </a>
                                    <figcaption class="absolute inset-x-0 bottom-0 p-6 text-white">
                                        <div>
                                            <p class="text-xl mb-2 text-gray-300">
                                                <i class="fa-solid fa-calendar-days mr-2"></i>{{ $news->created_at->translatedFormat('l, d F Y') }}
                                            </p>
                                            <h3 class="text-4xl font-bold mb-3 leading-tight">{{ $news->title }}</h3>
                                        </div>
                                        <p class="text-2xl text-gray-200 line-clamp-2">
                                            {!! Str::limit(strip_tags($news->description), 150) !!}
                                        </p>
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach
                    </div>
        
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        @foreach ($newss as $index => $news)
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="{{ $loop->first ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}" data-carousel-slide-to="{{ $index }}"></button>
                        @endforeach
                    </div>
        
                   <!-- Slider controls -->
                    <div class="absolute inset-0 flex items-center justify-between z-30">
                        <button type="button" class="flex items-center justify-center w-10 h-10 rounded-full bg-white/30 hover:bg-white/50 focus:ring-4 focus:ring-white focus:outline-none ml-4" data-carousel-prev>
                            <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button type="button" class="flex items-center justify-center w-10 h-10 rounded-full bg-white/30 hover:bg-white/50 focus:ring-4 focus:ring-white focus:outline-none mr-4" data-carousel-next>
                            <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        
      
      

      <section id="berita" class="bg-white border-b py-8 bg-banner-1">
        <div class="container mx-auto px-4 md:px-4 lg:px-8 xl:px-12 flex flex-wrap justify-center pt-4 pb-12">
            <h2 data-aos="zoom-in" data-aos-duration="500" class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Berita
            </h2>
            <div class="w-full mb-4">
                <div data-aos="zoom-in" data-aos-duration="500" class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="w-full text-center mb-4">
                <p class="text-3xl font-medium text-orange-500" data-aos="zoom-in" data-aos-duration="500">Berita Seputar Kelurahan Cibeber</p>
            </div>
    
             <!-- Include the search form component with a route parameter -->
            @include('components.search', ['route' => route('berita','#berita')])
    
            <!-- Display news articles -->
            @foreach ($newss->chunk(3) as $newsChunk)
            <div class="w-full flex flex-wrap justify-center mb-6">
                @foreach ($newsChunk as $news)
                <!-- Include the card component and pass the $news variable -->
                @include('components.card', [
                    'link' => route('show.berita', $news->slug),
                    'image' => $news->image,
                    'title' => $news->title,
                    'date' => $news->created_at->translatedFormat('l, d F Y'),
                    'description' => Str::limit(strip_tags($news->description), 100)
                ])
                @endforeach
            </div>
            @endforeach
    
               <!-- Navigasi Slider -->
               {{ $newss->onEachSide(0)->links('components.pagination') }}
        </div>
    </section>
    
    
    
      
      
      
      
      
      
      
        
        
    </div>
@endsection
   