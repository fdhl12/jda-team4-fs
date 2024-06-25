@extends('layouts.app')

@section('title', 'Perangkat Kelurahan')

@section('content')

    <div class="mt-24 mb-auto  bg-white">
        <div class="container mx-auto px-4 py-12">

            <div class="mb-20 text-center">
                <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                     <span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">
                        Perangkat Kelurahan
                    </span>
                </h1>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">

                @for($i = 1; $i < 10; $i++)
                    <a href="#" class="flex flex-col items-center border border-gray-200 shadow md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full h-96" src="https://kradenan-palang.desa.id/assets/files/data/website-desa-kradenan-3523182005/agungfc.jpeg" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                AGUNG FAJAR CAHYANA
                            </h5>
                            <p class="mb-3 font-normal text-black-700 dark:text-black-400">
                                SEKRETARIS DESA
                            </p>
                        </div>
                    </a>
                @endfor

            </div>


        </div>
    </div>
@endsection
