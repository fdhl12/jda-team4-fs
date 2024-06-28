@extends('layouts.app')

@section('title', $pengaturan['name'])

@section('content')

<div class="md:px-20 bg-white p-4">
    <div class="pt-24 flex justify-center">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <section class="border border-b py-8 md:col-span-2">
                <article class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <header class="px-6 py-4">
                        <h1 class="text-5xl font-bold text-blue-950 mb-2 text-center pb-8">
                            {{ $announcement->title }}
                        </h1>
                        <div class="flex items-center text-xl text-orange-500">
                            <span class="font-semibold mr-2">{{ $announcement->user->name }}</span>
                            <time datetime="{{ $announcement->created_at }}">
                                {{ $announcement->created_at->translatedFormat('l, d F Y H:i') }}
                            </time>
                        </div>
                    </header>
                    
                    <img class="w-full h-auto object-cover pb-8" src="{{ asset($announcement->image) }}" alt="News Image">
                    
                    <div class="px-6 py-4 text-2xl">
                        <p class="text-black  leading-relaxed break-words">
                            {!! $announcement->description !!}
                        </p>
                    </div>
                    
                </article>
            </section>
    
            <aside class="border border-b py-8">
                <div class="mx-auto px-4">
                    <h2 class="w-full my-2 text-4xl font-bold leading-tight text-center text-blue-900 pb-5">
                        Pengumuman Terbaru
                    </h2>
                    <div class="space-y-4">
                        @foreach ($announcements as $item)
                            <div class="flex py-4 border-t-2 transition duration-300 ease-in-out transform hover:scale-105 hover:bg-blue-300">
                                <div class="flex-shrink-0 w-2/5">
                                    <a href="{{ route('show.berita', $item->slug) }}" class="block rounded-t-lg overflow-hidden transition duration-300 ease-in-out transform hover:scale-110">
                                        <img class="h-full w-full object-cover" src="{{ asset($item->image) }}" alt="News Thumbnail">
                                    </a>
                                </div>
                                <div class="ml-4 text-black">
                                    <a href="{{ route('show.berita', $item->slug) }}" class="block rounded-t-lg overflow-hidden transition duration-300 ease-in-out transform hover:text-blue-500">
                                        <h3 class="text-xl font-semibold">{{ $item->title }}</h3>
                                    </a>
                                    <p class="text-orange-700 ">{{ $item->created_at->translatedFormat('l, d F Y H:i') }}</p>
                                </div>
                            </div>
                        
                        @endforeach
                    </div>
                </div>
            </aside>
            
            
        </div>
    </div>
    
</div>


@endsection