@extends('layouts.app')

@section('title', 'Lembaga | ' .$pengaturan['name'] )

@section('content')
<section class="bg-gray-300 py-16 bg-banner-1">
    <div class="container mx-auto px-4 py-12">
        <!-- Konten Berita -->
        <h2 class="text-6xl font-bold text-blue-950 text-center mb-4 animate-fade-in-down">Lembaga</h2>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t animate-fade-in-down delay-150"></div>
        </div>
        <p class="text-4xl font-medium text-orange-500 text-center mb-10 animate-fade-in-down delay-300">Lembaga Terkait
            {{ $pengaturan['name'] }}</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($lembagas as $lembaga)
                <a href="{{route('lembaga-kelurahan.show', $lembaga->id)}}" class="group bg-white dark:bg-gray-800 rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <div class="relative p-6 flex flex-col md:flex-row items-center gap-4">
                        <div class="w-24 h-24 rounded-full overflow-hidden bg-gray-200 dark:bg-gray-700 flex-shrink-0 group-hover:animate-pulse">
                            <img class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110" src="{{ asset('storage/'.$lembaga->logo) }}" alt="{{ $lembaga->nama }} logo">
                        </div>
                        <div class="flex-grow text-center md:text-left">
                            <h5 class="text-3xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-blue-950 dark:group-hover:text-blue-400 transition-colors duration-300">
                                {{$lembaga->nama}} <span class="text-xl font-normal text-gray-600 dark:text-gray-400">({{$lembaga->kode}})</span>
                            </h5>
                            <p class="text-2xl text-gray-600 dark:text-gray-400 group-hover:text-gray-800 dark:group-hover:text-gray-200 transition-colors duration-300">
                                {{$lembaga->alamat}}
                            </p>
                        </div>
                    </div>
                    <div class="h-1 bg-gradient-to-r from-blue-950 to-blue-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                </a>
            @endforeach
        </div>

    </div>
</section>


@endsection
