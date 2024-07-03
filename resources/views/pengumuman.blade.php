@extends('layouts.app')

@section('title', 'Pengumuman | ' .$pengaturan['name'] )

@section('content')

    <div class="pt-24">

        <section id="pengumuman" class="bg-white border-b py-8 bg-banner-1">
            <div class="container mx-auto flex flex-wrap justify-center pt-4 pb-12">
                <h2 data-aos="zoom-in" data-aos-duration="500" class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                    Pengumuman
                </h2>
                <div class="w-full mb-4">
                    <div data-aos="zoom-in" data-aos-duration="500" class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
                <div class="w-full text-center mb-4">
                    <p class="text-3xl font-medium text-orange-500" data-aos="zoom-in" data-aos-duration="500">Pengumuman Seputar
                        {{ $pengaturan['name'] }}</p>
                </div>

                  <!-- Include the search form component with a route parameter -->
                 @include('components.search', ['route' => route('pengumuman','#pengumuman'), 'type' => 'pengumuman'])

                @if($announcements->isEmpty())
                    <div class="w-full text-center">
                        <p class="text-xl text-gray-600">Tidak ada pengumuman yang ditemukan.</p>
                    </div>
                @else
                    @foreach ($announcements->chunk(3) as $announcementChunk)
                    <div class="w-full grid grid-cols-1 md:grid-cols-3 justify-center mb-6">
                        @foreach ($announcementChunk as $announcement)
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
                @endif

                <!-- Navigasi Halaman -->
                <div class="w-full flex justify-center">
                    {{ $announcements->appends(['query' => $query])->onEachSide(0)->links('components.pagination') }}
                </div>
            </div>
        </section>




    </div>
@endsection
