@extends('layouts.app')

@section('title', 'Sejarah Kelurahan Cibeber')

@section('content')

    <div class="pt-24">
        <section class="bg-white border-b py-8" x-data="contactForm()">
            <div class="container mx-auto px-4">
                <!-- Judul Top Berita -->
                <h2 class="text-5xl font-bold text-blue-900 text-center mb-4">Sejarah</h2>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
                </div>
                <p class="text-3xl font-medium text-blue-900 text-center mb-8">Kontak Layanan Seputar Kelurahan Cibeber</p>
                <div class="flex flex-col md:flex-row items-center md:items-start mt-8">
                    <div class="md:w-1/2">
                        <p class="mt-4 text-lg md:text-xl text-center md:text-left text-gray-700 leading-relaxed">
                            Kelurahan Cibeber, yang terletak di Kecamatan Cimahi Selatan, Kota Cimahi, Jawa Barat, merupakan sebuah daerah yang kaya akan sejarah dan budaya. Kelurahan ini dikenal dengan suasana lingkungan yang asri dan ramah, menjadikannya tempat tinggal yang nyaman bagi warganya. Berbagai fasilitas umum, seperti sekolah, puskesmas, dan pasar tradisional, tersedia untuk memenuhi kebutuhan sehari-hari masyarakat.
                        </p>
                        <p class="mt-4 text-lg md:text-xl text-center md:text-left text-gray-700 leading-relaxed">
                            Keberagaman budaya dan tradisi di Kelurahan Cibeber mencerminkan harmoni antarwarga yang hidup berdampingan dengan damai. Setiap tahun, berbagai acara adat dan perayaan lokal digelar, mempererat ikatan sosial dan melestarikan warisan budaya leluhur. Dukungan dari pemerintah setempat dalam bidang pendidikan dan kesehatan juga turut meningkatkan kualitas hidup warga Cibeber.
                        </p>
                        <p class="mt-4 text-lg md:text-xl text-center md:text-left text-gray-700 leading-relaxed">
                            Selain itu, Kelurahan Cibeber terus berbenah untuk menjadi kawasan yang lebih maju dan modern. Program pembangunan infrastruktur seperti perbaikan jalan dan fasilitas umum dilakukan secara berkesinambungan. Dengan semangat gotong royong yang kuat, warga Cibeber bersama-sama berkontribusi dalam menjaga kebersihan dan keamanan lingkungan, menciptakan suasana yang kondusif bagi generasi penerus.
                        </p>
                    </div>
                    <div class="md:w-1/2 mt-8 md:mt-0 md:ml-8">
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('images/foto-1.jpeg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        
    </div>
@endsection
