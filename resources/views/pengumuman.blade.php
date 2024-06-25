@extends('layouts.app')

@section('title', 'Table')

@section('content')

    <div class="pt-24">
      
      
      
      

        <section class="bg-white border-b py-8">
          <div class="container mx-auto flex flex-wrap justify-center pt-4 pb-12">
            <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Pengumuman
            </h2>
            <div class="w-full mb-4">
              <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            
            @foreach ($announcements as $announcement)
            <!-- Berita -->
            <div class="max-w-sm bg-white border xl:mx-6 md:mx-3 border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mb-6 transform transition-transform duration-300 hover:scale-105 ">
                <a href="{{route('show.pengumuman',$announcement->slug)}}" class="block rounded-t-lg overflow-hidden">
                    <img class="w-full h-60 object-cover" src="{{ asset($announcement->image) }}" alt="">
                </a>
                <div class="p-5">
                    <a href="{{route('show.pengumuman',$announcement->slug)}}"class="block mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-blue-700 dark:hover:text-blue-400">{{$announcement->title}}</a>
                    <p class="mb-3 text-gray-700 dark:text-gray-400 break-words">
                      {!! Str::limit(strip_tags($announcement->description), 100) !!}
                    </p>
                    <div class="flex justify-between items-center text-blue-700">
                      <p><i class="fa-solid fa-calendar-days"></i> {{$announcement->created_at->translatedFormat('l, d F Y')}}</p>
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
   