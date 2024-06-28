@extends('layouts.app')

@section('title', 'Galeri | ' .$pengaturan['name'] )

@section('content')

    <div class="pt-24">

        <section class="bg-white border-b py-8 bg-banner-1 pb-20">
            <div class="container mx-auto px-1 relative">
                <h2 class="text-5xl font-bold text-blue-950 text-center mb-4">
                    @yield('title')
                </h2>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
                <p class="text-3xl font-medium text-orange-500 text-center mb-10 md:mb-20">
                    Foto Foto Terkait {{ $pengaturan['name'] }}
                </p>

                <!-- Slider Cards -->
                <div x-data="{ slide: 0 }" class="w-full max-w-screen-2xl mx-auto">
                    <div class="grid gap-12 grid-cols-1" x-ref="slides" x-init="slides = $refs.slides.children.length">

                        <div x-show="slide === 0" class="max-w-full mx-auto mb-3">
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">

                                @foreach($galeris as $galeri)
                                    <div class="relative overflow-hidden hover:scale-105 transform transition duration-300">
                                        <a href="{{ asset('storage/'.$galeri->image)  }}" data-fancybox="gallery" data-caption="{{ $galeri->description }}">
                                            <img class="object-cover object-center w-[30rem] h-full" src="{{ asset('storage/'. $galeri->image) }}"
                                                 alt="{{ $galeri->description }}">
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        <!-- Navigasi Slider -->
                        {{ $galeris->onEachSide(0)->links('components.pagination') }}

                    </div>
                </div>


            </div>
        </section>
    </div>
@endsection


