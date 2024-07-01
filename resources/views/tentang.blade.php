@extends('layouts.app')

@section('title', 'Tentang '. $pengaturan['name'])

@section('content')

    <div class="pt-24">
        <section class="bg-white border-b py-8 bg-banner-1">
            <div class="container mx-auto px-4 pb-40">
                <div class="text-center">
                    <!-- Berita -->
                    <h2 class="text-5xl font-bold text-blue-950 text-center mb-4" data-aos="zoom-in" data-aos-duration="500">Profil</h2>
                    <div class="w-full mb-4">
                        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t" data-aos="zoom-in" data-aos-duration="500"></div>
                    </div>
                    <p class="text-3xl font-medium text-orange-500 text-center mb-4" data-aos="zoom-in" data-aos-duration="500">
                        @yield('title')
                    </p>
                </div>
                <article class="text-wrap text-3xl text-blue-950 prose m-auto max-w-4xl pb-96 " data-aos="zoom-in" data-aos-duration="500">
                    {!! $tentang !!}
                </article>
            </div>
        </section>

    </div>
@endsection
