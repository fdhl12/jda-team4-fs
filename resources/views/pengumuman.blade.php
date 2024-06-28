@extends('layouts.app')

@section('title', 'Pengumuman | ' .$pengaturan['name'] )

@section('content')

    <div class="pt-24">

        <section class="bg-white border-b py-8 bg-banner-1">
            <div class="container mx-auto flex flex-wrap justify-center pt-4 pb-12">
                <h2 data-aos="zoom-in" data-aos-duration="500" class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                    Pengumuman
                </h2>
                <div class="w-full mb-4">
                    <div data-aos="zoom-in" data-aos-duration="500" class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
                <div class="w-full text-center mb-4">
                    <p class="text-3xl font-medium text-orange-500" data-aos="zoom-in" data-aos-duration="500">Pengumuman Seputar Kelurahan Cibeber</p>
                </div>
                {{-- Fitur Search --}}
                @foreach ($announcements->chunk(3) as $announcementChunk)
                <div class="w-full flex flex-wrap justify-center mb-6">
                    @foreach ($announcementChunk as $announcement)
                       <!-- Include the card component and pass the $announcement variable correctly -->
                        @include('components.card', [
                            'link' => route('show.pengumuman', $announcement->slug),
                            'image' => $announcement->image,
                            'title' => $announcement->title,
                            'date' => $announcement->created_at->translatedFormat('l, d F Y'),
                            'description' => Str::limit(strip_tags($announcement->description), 100)
                        ])
                    @endforeach
                </div>
                @endforeach
            
                <!-- Navigasi Slider -->
                {{ $announcements->onEachSide(0)->links('components.pagination') }}
            
            </div>
        </section>
        
      
        
        
    </div>
@endsection
   