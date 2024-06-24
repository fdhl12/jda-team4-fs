@extends('layouts.app')

@section('title', 'Table')

@section('content')

    <div class="pt-24">
      
      
      <section class="bg-white border-b py-8">
        <div class="container mx-auto px-4">
          <div class="grid grid-cols-1 gap-4">
            
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
                <!-- Item -->
                @foreach ($newss as $news)
                  
                <div class="hidden duration-700 ease-in-out" data-carousel-item>      
                  <figure class="relative w-full h-full transition-all duration-300 cursor-pointer">
                    <a href="{{route('show.berita',$news->slug)}}">
                      <img class="rounded-lg w-full h-full object-cover" src="{{ asset($news->image) }}" alt="image description">
                      <div class="absolute inset-0 bg-gradient-to-r from-black via-transparent to-black opacity-50 rounded-lg"></div>
                      <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black opacity-50 rounded-lg"></div>
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                      <p>{{$news->title}}</p>
                      <div class="flex justify-between items-center">
                        <p><i class="fa-solid fa-calendar-days"></i> {{$news->created_at->translatedFormat('l, d F Y')}}</p>
                      </div>
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
            
            <!-- Search Form Section -->
            {{-- <div class="col-span-1 md:col-span-1">
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
          </div> --}}
          
          </div>
        </div>
      </section>
      
      

        <section class="bg-white border-b py-8">
          <div class="container mx-auto  flex flex-wrap pt-4 pb-12">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Berita
            </h2>
            <div class="w-full mb-4">
              <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            
            @foreach ($newss as $news)
            <!-- Berita -->
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mx-auto mb-6 transform transition-transform duration-300 hover:scale-105 ">
                <a href="{{route('show.berita',$news->slug)}}" class="block rounded-t-lg overflow-hidden">
                    <img class="w-full h-60 object-cover" src="{{ asset($news->image) }}" alt="">
                </a>
                <div class="p-5">
                    <a href="{{route('show.berita',$news->slug)}}"class="block mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-blue-700 dark:hover:text-blue-400">{{$news->title}}</a>
                    <p class="mb-3 text-gray-700 dark:text-gray-400 break-words">
                      {!! Str::limit(strip_tags($news->description), 100) !!}
                    </p>
                    <div class="flex justify-between items-center text-blue-700">
                      <p><i class="fa-solid fa-calendar-days"></i> {{$news->created_at->translatedFormat('l, d F Y')}}</p>
                      <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="w-4 h-4 ml-2 -mr-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M13.293 6.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L10 9.586l3.293-3.293z" clip-rule="evenodd" />
                        </svg>
                      </a>
                      </div>
                </div>
            </div>
    
            @endforeach
          </div>
        </div>
        </section>
      
        
        
    </div>
@endsection
   