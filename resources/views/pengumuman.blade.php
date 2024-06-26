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
            @foreach ($announcements->chunk(3) as $announcementChunk)
            <div class="w-full flex flex-wrap justify-center mb-6">
                @foreach ($announcementChunk as $announcement)
                    <!-- Pengumuman -->
                    <div class="max-w-full md:max-w-md bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mb-6 transform transition-transform duration-300 hover:scale-105 mx-4"
                         data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0">
                        <div class="overflow-hidden">
                            <a href="{{ route('show.pengumuman', $announcement->slug) }}" class="block rounded-t-lg overflow-hidden">
                                <img class="w-full h-60 object-cover" src="{{ asset($announcement->image) }}" alt="{{ $announcement->title }}">
                            </a>
                        </div>
                        <div class="mt-7 px-4">
                            <div class="flex justify-between items-center text-gray-700">
                                <p class="text-xl">
                                    <i class="fa-solid fa-calendar-days"></i> {{ $announcement->created_at->translatedFormat('l, d F Y') }}
                                </p>
                            </div>
                            <a href="{{ route('show.pengumuman', $announcement->slug) }}" class="block mb-4 mt-5 text-3xl font-bold tracking-tight text-gray-900 hover:text-blue-700">
                                {{ $announcement->title }}
                            </a>
                            <p class="text-xl text-gray-600 mb-5">
                                {!! Str::limit(strip_tags($announcement->description), 100) !!}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
        
        <div class="w-full flex justify-center mt-4 space-x-4" data-aos="zoom-in" data-aos-duration="500">
            @for ($i = 1; $i <= $announcements->lastPage(); $i++)
                <a href="{{ $announcements->url($i) }}" class="flex items-center justify-center w-16 h-16 bg-blue-500 text-white rounded-full text-2xl font-bold leading-none shadow-lg focus:outline-none {{ $announcements->currentPage() == $i ? 'bg-blue-700' : '' }}">
                    {{ $i }}
                </a>
            @endfor
        </div>
        
          </div>
        </div>
        </section>
      
        
        
    </div>
@endsection
   