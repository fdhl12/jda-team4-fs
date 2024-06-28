@extends('layouts.app')

@section('title', 'Struktur | ' .$pengaturan['name'] )

@section('content')
<section class="bg-gray-300 py-5 bg-banner-1">
    <div class="mt-24 mb-auto >
        <div class="container mx-auto px-4 py-12">

            <h2 class="text-5xl font-bold text-blue-950 text-center mb-4" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0">Struktur</h2>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0"></div>
            </div>
            <p class="text-3xl font-medium text-orange-500 text-center mb-10" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0">Struktur Kelurahan Cibeber</p>

            <div class="mb-10">
                <img class="mx-auto " src="{{ $strukturOrganisasi }}" alt="@yield('title')">
            </div>


        </div>
    </div>
</section>
@endsection
