@extends('layouts.app')

@section('title', 'Lembaga Kelurahan')

@section('content')
<section class="bg-gray-300 py-16 bg-banner-1">
    <div class="container mx-auto px-4 py-12">
        <!-- Konten Berita -->
        <h2 class="text-6xl font-bold text-blue-950 text-center mb-4 animate-fade-in-down">Lembaga</h2>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t animate-fade-in-down delay-150"></div>
        </div>
        <p class="text-4xl font-medium text-orange-500 text-center mb-4 animate-fade-in-down delay-300">Lembaga Terkait Kelurahan Cibeber</p>

        <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($lembagas as $lembaga)
                <a href="{{route('lembaga-kelurahan.show', $lembaga->id)}}" class="flex flex-col items-center p-4 gap-3 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl bg-white hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 transform transition-transform duration-500 hover:scale-105 animate-fade-in-up delay-100">
                    <img class="object-cover w-full md:h-auto md:w-24" src="{{ asset('storage/'.$lembaga->logo) }}" alt="">
                    <div class="flex flex-col justify-between leading-normal">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-black-900 dark:text-white">
                            {{$lembaga->nama}} ( {{$lembaga->kode}} )
                        </h5>
                        <p class="mb-3 text-xl font-normal text-gray-700 dark:text-gray-400">
                            {{$lembaga->alamat}}
                        </p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>


@endsection
