@extends('layouts.app')

@section('title', $news['title'] .' | '. $pengaturan['name'])

@section('content')

    <div class="md:px-20 bg-white p-4">
        <div class="pt-24 flex justify-center">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <section class="border bg-white shadow-lg rounded-lg border-b py-8 md:col-span-2">
                    <header class="px-6 py-4">
                        <h1 class="text-5xl font-bold text-blue-950 mb-2 text-center pb-8">
                            {{ $news->title }}
                        </h1>
                        <div class="flex flex-col md:flex-row items-center text-xl text-orange-500">
                            <span class="font-semibold mr-2">{{ $news->user->name }}</span>
                            <time datetime="{{ $news->created_at }}">
                                {{ $news->created_at->translatedFormat('l, d F Y H:i') }}
                            </time>
                        </div>
                    </header>

                    <article>
                        <img class="w-full h-auto object-cover pb-8" src="{{ asset($news->image) }}" alt="News Image">

                        <div class="px-6 py-4 text-2xl text-black leading-relaxed break-words prose max-w-full">
                            {!! $news->description !!}
                        </div>

                    </article>
                </section>

                <aside class="border border-b py-8">
                    <div class="mx-auto px-4">
                        <h2 class="w-full my-2 text-4xl font-bold leading-tight text-center text-blue-900 pb-5">
                            Berita Terbaru
                        </h2>
                        <div class="space-y-4">
                            @foreach ($newss as $item)
                                <div
                                    class="flex py-4 border-t-2 transition duration-300 ease-in-out transform hover:scale-105 hover:bg-blue-300">
                                    <div class="flex-shrink-0 w-2/5">
                                        <a href="{{ route('show.berita', $item->slug) }}"
                                           class="block rounded-t-lg overflow-hidden transition duration-300 ease-in-out transform hover:scale-110">
                                            <img class="w-full object-cover" src="{{ asset($item->image) }}"
                                                 alt="News Thumbnail">
                                        </a>
                                    </div>
                                    <div class="ml-4 text-black">
                                        <a href="{{ route('show.berita', $item->slug) }}"
                                           class="block rounded-t-lg overflow-hidden transition duration-300 ease-in-out transform hover:text-blue-500">
                                            <h3 class="text-2xl font-semibold">{{ $item->title }}</h3>
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
