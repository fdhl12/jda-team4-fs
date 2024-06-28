@extends('layouts.app')

@section('title', 'Struktur Organisasi')

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

            <div class="mb-10">
                <img class="mx-auto " src="{{ asset('storage/'. $strukturOrganisasi) }}" alt="@yield('title')">
            </div>


        </div>
    </div>
@endsection
