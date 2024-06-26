@extends('layouts.app')

@section('title', 'Perangkat Kelurahan')

@section('content')

    <div class="mt-24 mb-auto  text-black bg-white">
        <div class="container mx-auto px-4 py-12">

            <div class="mb-20 text-center">
                <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                     <span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">
                        Perangkat Kelurahan
                    </span>
                </h1>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">

                @foreach ($perangkats as $perangkat)
                    
                <a href="{{route('perangkat-kelurahan.show', $perangkat->id)}}" class="border border-gray-200 shadow md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full h-96" src="https://kradenan-palang.desa.id/assets/files/data/website-desa-kradenan-3523182005/agungfc.jpeg" alt="">
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
