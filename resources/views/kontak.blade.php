@extends('layouts.app')

@section('title', 'Kontak '. $pengaturan['name'])

@section('content')

    <div class="pt-24">
        <section class="bg-white border-b py-8 bg-banner-1">
            <div class="container mx-auto px-4 pb-40">
                <div class="text-center">
                    <!-- Berita -->
                    <h2 class="text-5xl font-bold text-blue-950 text-center mb-4" data-aos="zoom-in"
                        data-aos-duration="500">Kontak</h2>
                    <div class="w-full mb-4">
                        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t" data-aos="zoom-in"
                             data-aos-duration="500"></div>
                    </div>
                    <p class="text-3xl font-medium text-orange-500 text-center mb-4" data-aos="zoom-in"
                       data-aos-duration="500">
                        @yield('title')
                    </p>
                </div>
                <article class="text-wrap text-3xl text-blue-950 m-auto h-screen max-w-xl" data-aos="zoom-in"
                         data-aos-duration="500">

                    <ul class="divide-y divide-black-200 dark:divide-black-700 mt-10">
                        <li class="py-4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                         viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2"
                                              d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"/>
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-base font-semibold text-black-900 truncate dark:text-white">
                                        {{ $profile['kontak']['no_telp'] }}
                                    </p>
                                    <p class="text-sm font-normal text-black-500 truncate dark:text-black-400">
                                        No Telepon
                                    </p>
                                </div>
                                <div class="inline-flex items-center">
                                    <a href="tel:{{ $profile['kontak']['no_telp'] }}"
                                       class="px-3 py-2 mb-3 mr-3 text-sm font-medium text-center text-black-900 bg-white border border-black-300 rounded-lg hover:bg-black-100 focus:ring-4 focus:ring-primary-300 dark:bg-black-800 dark:text-black-400 dark:border-black-600 dark:hover:text-white dark:hover:bg-black-700">
                                        Hubungi
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="pt-4 pb-6">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round"
                                         class="w-6 h-6 icon icon-tabler icons-tabler-outline icon-tabler-mail">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path
                                            d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"/>
                                        <path d="M3 7l9 6l9 -6"/>
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-base font-semibold text-black-900 truncate dark:text-white">
                                        {{ $profile['kontak']['email'] }}
                                    </p>
                                    <p class="text-sm font-normal text-black-500 truncate dark:text-black-400">
                                        Email
                                    </p>
                                </div>
                                <div class="inline-flex items-center">
                                    <a href="mailto:{{ $profile['kontak']['email'] }}"
                                       class="px-3 py-2 mb-3 mr-3 text-sm font-medium text-center text-black-900 bg-white border border-black-300 rounded-lg hover:bg-black-100 focus:ring-4 focus:ring-primary-300 dark:bg-black-800 dark:text-black-400 dark:border-black-600 dark:hover:text-white dark:hover:bg-black-700">
                                        Kirim
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="pt-4 pb-6">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z"/>
                                    </svg>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-base font-semibold text-black-900 truncate dark:text-white">
                                        {{ $profile['kontak']['alamat'] }}
                                    </p>
                                    <p class="text-sm font-normal text-black-500 truncate dark:text-black-400">
                                        Alamat Kelurahan
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </article>
            </div>
        </section>

    </div>
@endsection
