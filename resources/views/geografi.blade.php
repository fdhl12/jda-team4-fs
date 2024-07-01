@extends('layouts.app')

@section('title', 'Geografis '. $pengaturan['name'])

@section('content')

    <div class="pt-24">
        <section class="bg-white border-b py-8 bg-banner-1">
            <div class="container mx-auto px-4">
                <div class="text-center">
                    <!-- Judul Top Berita -->
                    <h2 class="text-5xl font-bold text-blue-900 mb-4" data-aos="zoom-in" data-aos-duration="500">Geografis</h2>
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t mb-4" data-aos="zoom-in" data-aos-duration="500"></div>
                    <p class="text-3xl font-medium text-orange-500 text-center mb-4" data-aos="zoom-in" data-aos-duration="500">
                        @yield('title')
                    </p>
                </div>

                <article class="text-wrap prose m-auto max-w-4xl" data-aos="zoom-in" data-aos-duration="500">
                    <!-- Google Maps Embed -->
                    <div class="text-center m-auto mb-10" align="center">
                        {!! $geografi["map"] !!}
                    </div>
                    <article class="text-wrap text-3xl text-blue-950 prose m-auto max-w-4xl pb-96">
                    {!! $geografi["deskripsi"] !!}
                    </article>
                </article>
            </div>
        </section>
    </div>

@endsection

@push('style')
    <style>
        iframe {
            margin: auto;
            width: 100%
        }
    </style>
@endpush
