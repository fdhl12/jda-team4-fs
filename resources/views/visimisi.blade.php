@extends('layouts.app')

@section('title', 'Visi & Misi '. $pengaturan['name'])

@section('content')

    <div class="pt-24">
        <section class="bg-white border-b py-12">
            <div class="container mx-auto px-8"> <!-- Increased px for more space -->
                <div class="text-center">
                    <!-- Judul Top Berita -->
                    <h2 class="text-7xl font-bold text-blue-900 mb-8">Visi & Misi</h2>
                    <!-- Larger text size and increased margin-bottom -->
                    <div class="w-full mb-8">
                        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                    </div>
                    <p class="text-3xl font-medium text-blue-900 mb-8">@yield('title')</p> <!-- Larger text size -->
                </div>

                <article class="text-wrap prose m-auto max-w-4xl">
                    {!! $visimisi !!}
                </article>

            </div>
        </section>
    </div>
@endsection
