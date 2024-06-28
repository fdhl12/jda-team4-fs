@extends('layouts.app-admin')

@section('title', 'Pengaturan Dasar')

@section('content')

    @if(session('update'))
        <x-admin.alert-success>
            {{ session('update') }}
        </x-admin.alert-success>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $key => $error)
            <x-admin.alert-danger :key="$key">
                {{ $error }}
            </x-admin.alert-danger>
        @endforeach
    @endif

    <div class="bg-white dark:bg-gray-800 px-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm">
        <div class="border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-gray-500 dark:text-gray-400">
                <li class="me-2">
                    <a href="{{ route('admin.pengaturan.index') }}"
                       class="inline-flex items-center justify-center p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 group"
                       aria-current="page">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4"/>
                        </svg>
                        <span class="ms-2">Dasar</span>
                    </a>
                </li>
                <li class="me-2">
                    <a href="{{ route('admin.pengaturan.home.index') }}"
                       class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4"/>
                        </svg>
                        <span class="ms-2">Halaman Utama</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <form action="{{ route('admin.pengaturan.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="bg-white dark:bg-gray-800 p-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm">

            <x-admin.breadcrumbs :data="[
                'Beranda' => route('admin.beranda'),
                'Pengaturan' => false,
                'Dasar' => false,
            ]"/>

            <div class="w-full mb-1 flex justify-between">
                <div class="mb-4">
                    <h2 class="text-xl font-semibold text-black-900 sm:text-2xl dark:text-white">
                        Pengaturan Dasar
                    </h2>
                </div>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-3 xl:gap-4">
                <div class="col-span-1">
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <div class="items-center xl:block 2xl:flex xl:space-x-0 2xl:space-x-4 m-auto">
                            <label for="logo" class="block mb-2  font-medium text-black-900 dark:text-white">
                                Logo
                            </label>
                            <img class="mb-4 max-h-24 xl:mb-4 2xl:mb-0" src="{{ asset($logo) }}" alt="Logo">
                            <input class="block w-full  text-black-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-black-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="logo" type="file" name="logo">
                            @error('logo')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $errors->first('logo') }}
                            </p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <div class="items-center xl:block 2xl:flex xl:space-x-0 2xl:space-x-4 m-auto">
                            <label for="logo_text" class="block mb-2  font-medium text-black-900 dark:text-white">
                                Logo Text
                            </label>
                            <img class="mb-4 max-h-24 xl:mb-4 2xl:mb-0" src="{{ asset($logo_text) }}" alt="Logo">
                            <input class="block w-full  text-black-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-black-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="logo_text" type="file" name="logo_text">
                            @error('logo_text')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $errors->first('logo_text') }}
                            </p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="name" class="block mb-2  font-medium text-black-900 dark:text-white">
                    Nama
                </label>
                <input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-black-900 sm: rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama Website" value="{{ $nama }}">
                @error('name')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $errors->first('name') }}
                </p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="block mb-2  font-medium text-black-900 dark:text-white">
                    Deskripsi
                </label>
                <textarea id="description" name="description" rows="4" class="block p-2.5 w-full  text-black-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Deskripsi Website">{{ $deskripsi }}</textarea>
                @error('description')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $errors->first('description') }}
                </p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nama" class="block mb-2  font-medium text-black-900 dark:text-white">
                    Keywords
                </label>
                <input type="text" name="keywords" id="keywords" class="shadow-sm bg-gray-50 border border-gray-300 text-black-900 sm: rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Keyword Website" value="{{ $keywords }}">
                @error('keywords')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $errors->first('keywords') }}
                </p>
                @enderror
            </div>

            <div class="mb-0">
                <label for="nama" class="block mb-2  font-medium text-black-900 dark:text-white">
                    Tags
                </label>
                <input type="text" name="tags" id="tags" class="shadow-sm bg-gray-50 border border-gray-300 text-black-900 sm: rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tags Website" value="{{ $tags }}">
                @error('tags')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $errors->first('tags') }}
                </p>
                @enderror
            </div>

        </div>


        <div class="sticky bottom-0 bg-white dark:bg-gray-800 p-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm">
            <div class="col-span-6">
                <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg  px-2.5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="submit">
                    Simpan
                </button>
            </div>
        </div>

    </form>

@endsection
