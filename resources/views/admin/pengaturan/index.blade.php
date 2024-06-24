@extends('layouts.app-admin')

@section('title', 'Pengaturan')

@section('content')

    @if(session('update'))
        <x-admin.alert-success>
            {{ session('update') }}
        </x-admin.alert-success>
    @endif

    <div class="bg-white dark:bg-gray-800 pt-5 pb-1 px-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm">
        <x-admin.breadcrumbs :data="[
            'Beranda' => route('admin.beranda'),
            'Pengaturan' => false,
        ]"/>
    </div>

    <form action="{{ route('admin.pengaturan.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="bg-white dark:bg-gray-800 p-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm">

            <div class="w-full mb-1 flex justify-between">
                <div class="mb-4">
                    <h2 class="text-xl font-semibold text-black-900 sm:text-2xl dark:text-white">
                        Pengaturan
                    </h2>
                </div>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-3 xl:gap-4">
                <div class="col-span-1">
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4 m-auto">
                            <label for="logo" class="block mb-2  font-medium text-black-900 dark:text-white">
                                Logo
                            </label>
                            <img class="mb-4 max-h-24 sm:mb-0 xl:mb-4 2xl:mb-0" src="{{ asset($logo) }}" alt="Logo">
                            <input class="block w-full  text-black-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-black-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="logo" type="file" name="logo">
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <div class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4 m-auto">
                            <label for="logo_text" class="block mb-2  font-medium text-black-900 dark:text-white">
                                Logo Text
                            </label>
                            <img class="mb-4 max-h-24 sm:mb-0 xl:mb-4 2xl:mb-0" src="{{ asset($logo_text) }}" alt="Logo">
                            <input class="block w-full  text-black-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-black-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="logo_text" type="file" name="logo_text">
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="name" class="block mb-2  font-medium text-black-900 dark:text-white">
                    Nama
                </label>
                <input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-black-900 sm: rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Website" value="{{ $nama }}">
            </div>

            <div class="mb-3">
                <label for="description" class="block mb-2  font-medium text-black-900 dark:text-white">
                    Deskripsi
                </label>
                <textarea id="description" name="description" rows="4" class="block p-2.5 w-full  text-black-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Deskripsi Website">{{ $deskripsi }}</textarea>
            </div>

            <div class="mb-3">
                <label for="nama" class="block mb-2  font-medium text-black-900 dark:text-white">
                    Keywords
                </label>
                <input type="text" name="keywords" id="keywords" class="shadow-sm bg-gray-50 border border-gray-300 text-black-900 sm: rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Keyword Website" value="{{ $keywords }}">
            </div>

            <div class="mb-0">
                <label for="nama" class="block mb-2  font-medium text-black-900 dark:text-white">
                    Tags
                </label>
                <input type="text" name="tags" id="tags" class="shadow-sm bg-gray-50 border border-gray-300 text-black-900 sm: rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Website" value="{{ $tags }}">
            </div>

        </div>


        <div class="bg-white dark:bg-gray-800 p-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm">
            <div class="col-span-6">
                <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg  px-2.5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="submit">
                    Simpan
                </button>
            </div>
        </div>

    </form>

@endsection
