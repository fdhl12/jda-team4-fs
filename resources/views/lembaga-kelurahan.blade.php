@extends('layouts.app')

@section('title', 'Lembaga Kelurahan')

@section('content')

    <div class="mt-24 mb-auto  bg-white">
        <div class="container mx-auto px-4 py-12">

            <div class="mb-20 text-center">
                <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                     <span class="underline underline-offset-3 decoration-8 decoration-blue-400 dark:decoration-blue-600">
                        @yield('title')
                    </span>
                </h1>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <a href="#" class="flex flex-col items-center p-4 gap-3 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full md:h-auto md:w-24" src="{{ asset('storage/logo.png') }}" alt="">
                    <div class="flex flex-col justify-between leading-normal">
                        <h5 class="mb-2 text-lg font-semibold tracking-tight text-black-900 dark:text-white">
                            BADAN PERMUSYAWARATAN DESA (BPD)
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            Jalan Raya Gresik No. 156 Tuban Jalan Raya Gresik No. 156 Tuban Jalan Raya Gresik No. 156 Tuban Jalan Raya Gresik No. 156 Tuban
                        </p>
                    </div>
                </a>

                @for($i = 1; $i < 10; $i++)

                    <a href="#" class="flex flex-col items-center p-4 gap-3 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full md:h-auto md:w-24" src="{{ asset('storage/logo.png') }}" alt="">
                        <div class="flex flex-col justify-between leading-normal">
                            <h5 class="mb-2 text-lg font-semibold tracking-tight text-black-900 dark:text-white">
                                BADAN PERMUSYAWARATAN DESA (BPD)
                            </h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                Jalan Raya Gresik No. 156 Tuban
                            </p>
                        </div>
                    </a>
                @endfor

            </div>


        </div>
    </div>
@endsection