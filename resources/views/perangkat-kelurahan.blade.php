@extends('layouts.app')

@section('title', 'Perangkat Kelurahan')

@section('content')

    <div class="mt-24 mb-auto  text-black bg-white">
        <div class="container mx-auto px-4 py-12">

            <h2 class="text-5xl font-bold text-blue-950 text-center mb-4" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0">Perangkat</h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0"></div>
            </div>
            <p class="text-3xl font-medium text-orange-500 text-center mb-4" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0">Perangkat Seputar Kelurahan Cibeber</p>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">

                @foreach ($perangkats as $perangkat)

                <a href="{{route('perangkat-kelurahan.show', $perangkat->id)}}" class="border border-gray-200 shadow md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full h-96" src="{{asset('storage/'.$perangkat->image)}}" alt="">
                        <div class=" p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{$perangkat->name}}
                            </h5>
                            <p class="mb-3 font-normal text-black-700 dark:text-black-400">
                                {{$perangkat->jabatan->name}}
                            </p>
                        </div>
                    </a>
                @endforeach

            </div>


        </div>
    </div>
@endsection
