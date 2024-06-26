@extends('layouts.app')

@section('title', 'Sejarah Kelurahan Cibeber')

@section('content')

    <div class="pt-24">
        <section class="bg-white border-b py-8 text-center">
            <div class="container mx-auto px-4">
                <!-- Judul Top Berita -->
                <h2 class="text-5xl font-bold text-blue-900 mb-4">Geografi</h2>
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t mb-4"></div>
                <p class="text-3xl font-medium text-blue-900 mb-8">Kontak Layanan Seputar Kelurahan Cibeber</p>
                
                <!-- Google Maps Embed -->
                <div class="w-full mx-auto" style="max-width: 800px;">
                    {!! $geografi["map"] !!}
                </div>
                
                <!-- Informasi Kontak -->
                <div class="w-full mx-auto text-left mt-8" style="max-width: 600px;">
                    {!! $geografi["deskripsi"] !!}
                </div>
            </div>
        </section>
        
        
        
        
    </div>
@endsection
