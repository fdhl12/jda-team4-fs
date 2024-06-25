@extends('layouts.app-admin')

@section('title', 'Struktur Organisasi')

@section('content')

    <div class="bg-white dark:bg-gray-800 pt-5 pb-1 px-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm">
        <x-admin.breadcrumbs :data="[
            'Beranda' => route('admin.beranda'),
            'Struktur Organisasi' => false,
        ]"/>
    </div>

    <form action="{{ route('admin.struktur-organisasi.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="bg-white dark:bg-gray-800 p-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm">

            <div class="w-full mb-1 flex justify-between">
                <div class="mb-4">
                    <h2 class="text-xl font-semibold text-black-900 sm:text-2xl dark:text-white">
                        Upload Gambar Struktur Organisasi
                    </h2>
                </div>
            </div>
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6">
                    <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4 m-auto">
                        <input class="text-black-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-black-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="struktur_organisasi" type="file" name="struktur_organisasi">
                        <button
                            class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg  px-2.5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            type="submit">
                            Simpan
                        </button>
                    </div>
                </div>
                <div class="col-span-6">
                    <img class="mb-4 max-h-full sm:mb-0 xl:mb-4 2xl:mb-0" src="{{ asset($strukturOrganisasi) }}" alt="Logo">
                </div>
            </div>

        </div>

    </form>

@endsection
