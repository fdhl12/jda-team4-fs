@extends('layouts.app-admin')

@section('title', 'Dashboard')

@section('content')

<main class="bg-white dark:bg-gray-800 p-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
    <div class="w-full mb-1">
        <div class="mb-4">
            <x-admin.breadcrumbs :data="[
            'Beranda' => route('admin.beranda'),
            'Index' => false
            ]"/>
            <h1 class="text-xl font-semibold text-black-900 sm:text-2xl dark:text-white">Dashboard</h1>
        </div>
    </div>

    <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 pt-5">
        <div class="text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 p-4 xl:p-8 dark:bg-gray-800 dark:text-white">
            <div class="flex items-baseline gap-2">
                <span class="text-2xl font-extrabold text-blue-500">{{ $totalBerita }}</span>
                <h3 class="mb-4 text-2xl">Berita</h3>
            </div>
            <a href="{{ route('admin.berita.create') }}" class="inline-flex items-center justify-center w-1/2 px-3 py-2 font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                Buat Berita
            </a>
        </div>

        <div class="text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 p-4 xl:p-8 dark:bg-gray-800 dark:text-white">
            <div class="flex items-baseline gap-2">
                <span class="text-2xl font-extrabold text-blue-500">{{ $totalPengumuman }}</span>
                <h3 class="mb-4 text-2xl">Pengumuman</h3>
            </div>
            <a href="{{ route('admin.pengumuman.create') }}" class="inline-flex items-center justify-center w-1/2 px-3 py-2 font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                Buat Pengumuman
            </a>
        </div>

        <div class="text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 p-4 xl:p-8 dark:bg-gray-800 dark:text-white">
            <div class="flex items-baseline gap-2">
                <span class="text-2xl font-extrabold text-blue-500">{{ $totalGaleri }}</span>
                <h3 class="mb-4 text-2xl">Galeri</h3>
            </div>
            <a href="{{ route('admin.galeri.index') }}" class="inline-flex items-center justify-center w-1/2 px-3 py-2 font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                Tambah Galeri
            </a>
        </div>
    </section>

    <!-- New Graph Section -->
    <section class="mt-8">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Statistik Konten</h2>
            <div class="relative h-80">
                <canvas id="contentStats"></canvas>
            </div>
        </div>
    </section>

</main>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('contentStats').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Berita', 'Pengumuman', 'Galeri'],
                    datasets: [{
                        label: 'Jumlah Konten',
                        data: [{{ $totalBerita }}, {{ $totalPengumuman }}, {{ $totalGaleri }}],
                        backgroundColor: [
                            'rgba(59, 130, 246, 0.8)', // blue-500
                            'rgba(16, 185, 129, 0.8)', // green-500
                            'rgba(249, 115, 22, 0.8)', // orange-500
                        ],
                        borderColor: [
                            'rgb(59, 130, 246)',
                            'rgb(16, 185, 129)',
                            'rgb(249, 115, 22)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                precision: 0
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });
        });


    </script>
@endpush
