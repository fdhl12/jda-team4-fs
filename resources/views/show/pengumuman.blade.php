@extends('layouts.app')

@section('title', 'Table')

@section('content')

<div class="md:px-48 bg-white p-4">
<div class="pt-24 flex justify-center">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <section class="border border-b py-8 md:col-span-2">
            <div class="mx-auto px-4">
                <h1 class="w-full my-2 text-5xl  font-bold leading-tight text-center text-blue-900">
                    {{$announcement->title}}
                </h1>
                <div>
                    <article class="text-black text-2xl">
                        <div class="flex items-center mb-4">
                            <div class="font-medium dark:text-white">
                                <p class="text-black font-bold text-2xl">{{$announcement->user->name}} <time datetime="{{$announcement->created_at}}" class="block text-2xl text-orange-700 font-bold dark:text-gray-400">{{$announcement->created_at->translatedFormat('l, d F Y H:i')}}</time></p>
                            </div>
                        </div>
                        <div class="m py-6">
                            <img class="m-auto h-full w-80"  src="{{asset($announcement->image)}}" alt="announcement Image">
                            <p class="mb-2 text-black dark:text-gray-400">{!! $announcement->description !!}</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <aside class="border border-b py-8">
            <div class="mx-auto px-4">
                <h2 class="w-full my-2 text-3xl font-bold leading-tight text-center text-blue-900">
                    Pengumuman Terbaru
                </h2>
                <div class="space-y-4">
                    @foreach ($announcements as $announcement)
                    <div class="flex py-4 border-t-2">
                        <div class="flex-shrink-0 w-1/3">
                            <a href="{{route('show.pengumuman', $announcement->slug)}}" class="block rounded-t-lg overflow-hidden">
                                <img class="h-full w-24 object-cover" src="{{asset($announcement->image)}}" alt="announcement Thumbnail">   
                            </a>
                        </div>
                        <div class="ml-4 text-black">
                            <a href="{{route('show.pengumuman', $announcement->slug)}}" class="block rounded-t-lg overflow-hidden">
                            <h3 class="text-xl font-semibold">{{$announcement->title}}</h3>
                            </a>
                            <p class="text-gray-700">{{$announcement->created_at->translatedFormat('l, d F Y H:i')}}</p>
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