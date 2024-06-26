@extends('layouts.app')

@section('title', 'Sejarah '. $pengaturan['name'])

@section('content')

    <div class="pt-24">
        <section class="bg-white border-b py-8">
            <div class="container mx-auto px-4">
                <div class="text-center">
                    <!-- Judul Top Berita -->
                    <h2 class="text-5xl font-bold text-blue-900 mb-4">Sejarah</h2>
                    <div class="w-full mb-4">
                        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                    </div>
                    <p class="text-3xl font-medium text-blue-900 mb-8">
                        @yield('title')
                    </p>
                </div>
                <article class="text-wrap prose m-auto max-w-4xl">
                    {!! $sejarah !!}
                </article>
            </div>
        </section>
    </div>
@endsection
