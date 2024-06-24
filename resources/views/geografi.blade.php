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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15843.904651530696!2d107.52003954999999!3d-6.8934545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e503ce53d5eb%3A0x8e2c9ed5ffc073bd!2sCibeber%2C%20Kec.%20Cimahi%20Sel.%2C%20Kota%20Cimahi%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1719147599958!5m2!1sid!2sid" 
                            width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                
                <!-- Informasi Kontak -->
                <div class="w-full mx-auto text-left mt-8" style="max-width: 600px;">
                    <p class="text-lg text-blue-900 mb-4"><span class="font-bold">Alamat:</span> Jl. Contoh No. 123, Kelurahan Cibeber, Kota Cimahi, Jawa Barat</p>
                    <p class="text-lg text-blue-900 mb-4"><span class="font-bold">Telepon:</span> +62 123 4567 8901</p>
                    <p class="text-lg text-blue-900 mb-4"><span class="font-bold">Email:</span> kelurahan.cibeber@example.com</p>
                </div>
            </div>
        </section>
        
        
        
        
    </div>
@endsection
