@extends('layouts.app')

@section('title', 'Table')

@section('content')

<div class="md:px-48 bg-white p-4">
    <div class="pt-24 flex justify-center">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <section class="border border-b py-8 md:col-span-2">
                <div class="mx-auto px-4">
                    <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-blue-900">
                        {{ $news->title }}
                    </h1>
                    <div>
                        <article class="text-black text-2xl">
                            <div class="flex items-center mb-4">
                                <div class="font-medium dark:text-white">
                                    <p class="text-black font-bold text-2xl">{{ $news->user->name }} <time datetime="{{ $news->created_at }}" class="block text-2xl text-orange-700 font-bold dark:text-gray-400">{{ $news->created_at->translatedFormat('l, d F Y H:i') }}</time></p>
                                </div>
                            </div>
                            <div class="py-6">
                                <img class="m-auto w-full h-auto object-cover" src="{{ asset($news->image) }}" alt="News Image">
                                <p class="mb-3 text-gray-500 dark:text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-900 dark:first-letter:text-gray-100 first-letter:me-3 first-letter:float-start">{!! $news->description !!}</p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
    
            <aside class="border border-b py-8">
                <div class="mx-auto px-4">
                    <h2 class="w-full my-2 text-3xl font-bold leading-tight text-center text-blue-900">
                        Berita Terbaru
                    </h2>
                    <div class="space-y-4">
                        @foreach ($newss as $item)
                            <div class="flex py-4 border-t-2">
                                <div class="flex-shrink-0 w-1/3">
                                    <a href="{{ route('show.berita', $item->slug) }}" class="block rounded-t-lg overflow-hidden">
                                        <img class="h-full w-24 object-cover" src="{{ asset($item->image) }}" alt="News Thumbnail">
                                    </a>
                                </div>
                                <div class="ml-4 text-black">
                                    <a href="{{ route('show.berita', $item->slug) }}" class="block rounded-t-lg overflow-hidden">
                                        <h3 class="text-xl font-semibold">{{ $item->title }}</h3>
                                    </a>
                                    <p class="text-gray-700">{{ $item->created_at->translatedFormat('l, d F Y H:i') }}</p>
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