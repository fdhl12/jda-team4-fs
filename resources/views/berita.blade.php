@extends('layouts.app')

@section('title', 'Table')

@section('content')

    <div class="pt-24">
      
      
      <section class="bg-white border-b py-8" >
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
                    <div class="duration-700 ease-in-out" data-carousel-item>
                        <figure class="relative w-full h-full transition-all duration-300 cursor-pointer group">
                            <a href="{{ route('show.berita', $news->slug) }}">
                                <img class="rounded-lg w-full h-full object-cover" src="{{ asset($news->image) }}" alt="{{ $news->title }}">
                                <div class="absolute inset-0 bg-gradient-to-r from-black via-transparent to-black opacity-50 rounded-lg"></div>
                                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black opacity-50 rounded-lg"></div>
                            </a>
                            <figcaption class="absolute inset-x-0 bottom-0 p-4 text-white">
                                <div>
                                    <div class="flex justify-between items-center text-2xl mb-4">
                                      <p><i class="fa-solid fa-calendar-days"></i> {{ $news->created_at->translatedFormat('l, d F Y') }}</p>
                                    </div>
                                    <p class="text-5xl font-bold mb-4">{{ $news->title }}</p>
                                </div>
                                <p class="text-4xl text-gray-300">
                                    {!! Str::limit(strip_tags($news->description), 100) !!}
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
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
        </div>
      </section>
      
      

      <section class="bg-white border-b py-8 bg-banner-1">
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
          
          @foreach ($newss->chunk(3) as $newsChunk)
          <div class="w-full flex flex-wrap justify-center mb-6">
            @foreach ($newsChunk as $news)
                <!-- Berita -->
                <div class="max-w-full md:max-w-md bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mb-6 transform transition-transform duration-300 hover:scale-105 mx-4"
                data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0">
               <div class="overflow-hidden">
                   <a href="{{ route('show.berita', $news->slug) }}" class="block rounded-t-lg overflow-hidden">
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
          
          <div class="w-full flex justify-center mt-4 space-x-4"  data-aos="zoom-in" data-aos-duration="500">
            @for ($i = 1; $i <= $newss->lastPage(); $i++)
              <a href="{{ $newss->url($i) }}" class="flex items-center justify-center w-16 h-16 bg-blue-500 text-white rounded-full text-2xl font-bold leading-none shadow-lg focus:outline-none {{ $newss->currentPage() == $i ? 'bg-blue-700' : '' }}">
                {{ $i }}
              </a>
            @endfor
          </div>
          
        </div>
    </section>
    
    
      
      
      
      
      
      
      
        
        
    </div>
@endsection
   