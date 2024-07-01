@extends('layouts.app')

@section('title', 'Layanan Publik '. $pengaturan['name'])

@section('content')

    <div class="pt-24">
        <section class="bg-white border-b py-12 text-center bg-banner-1">
            <div class="container mx-auto px-8"> <!-- Increased px for more space -->
                <!-- Judul Top Berita -->
                <h2 class="text-5xl font-bold text-blue-900 mb-8" data-aos="zoom-in" data-aos-duration="500">
                    Layanan
                </h2> <!-- Larger text size and increased margin-bottom -->
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t mb-4" data-aos="zoom-in" data-aos-duration="500"></div>
                <p class="text-3xl font-medium text-orange-500 text-center mb-8" data-aos="zoom-in" data-aos-duration="500">
                    @yield('title')
                </p> <!-- Larger text size -->

                <article data-aos="zoom-in" data-aos-duration="500">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-lg text-left rtl:text-right text-blue-500 dark:text-blue-400">
                            <thead
                                class="text-lg text-blue-700 uppercase bg-blue-50 dark:bg-blue-700 dark:text-blue-400">
                            <tr>
                                <th scope="col" class="px-6 whitespace-nowrap py-3">
                                    Nama Layanan
                                </th>
                                <th scope="col" class="px-6 whitespace-nowrap py-3 text-orange-400">
                                    Telepon
                                </th>
                                <th scope="col" class="px-6 whitespace-nowrap py-3">
                                    Jam Buka
                                </th>
                                <th scope="col" class="px-6 whitespace-nowrap py-3">
                                    Jam Tutup
                                </th>
                                <th scope="col" class="px-6 whitespace-nowrap py-3">
                                    Alamat
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($layanans as $layanan)
                                <tr class="bg-white border-b dark:bg-blue-800 dark:border-blue-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-blue-900 whitespace-nowrap dark:text-white">
                                        {{ $layanan->nama }}
                                    </th>
                                    <th scope="row"
                                        class="px-6 py-4 font-bold text-orange-400 whitespace-nowrap dark:text-white">
                                        {{ $layanan->telepon }}
                                        </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-blue-900 whitespace-nowrap dark:text-white">
                                        {{ $layanan->buka }}
                                        </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-blue-900 whitespace-nowrap dark:text-white">
                                        {{ $layanan->tutup }}
                                        </td>
                                    <th scope="row" class="px-6 py-4 font-medium text-blue-900 dark:text-white">
                                        {{ $layanan->alamat }}
                                        </td>
                                </tr>
                            @empty
                            @endif
                            </tbody>
                        </table>
                    </div>

                </article>

            </div>
        </section>
    </div>
@endsection
