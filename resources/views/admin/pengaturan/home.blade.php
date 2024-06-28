@extends('layouts.app-admin')

@section('title', 'Pengaturan Halaman Utama')

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
                       class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4"/>
                        </svg>
                        <span class="ms-2">Dasar</span>
                    </a>
                </li>
                <li class="me-2">
                    <a href="{{ route('admin.pengaturan.home.index') }}"
                       class="inline-flex items-center justify-center p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 group"
                       aria-current="page">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4"/>
                        </svg>
                        <span class="ms-2">Halaman Utama</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <form action="{{ route('admin.pengaturan.home.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="bg-white dark:bg-gray-800 p-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm">

            <x-admin.breadcrumbs :data="[
                'Beranda' => route('admin.beranda'),
                'Pengaturan' => false,
                'Halaman Utama' => false,
            ]"/>

            <div class="w-full mb-1 flex justify-between">
                <div class="mb-4">
                    <h2 class="text-xl font-semibold text-black-900 sm:text-2xl dark:text-white">
                        Pengaturan Halaman Utama
                    </h2>
                </div>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 xl:gap-4 mb-3">
                <div class="col-span-1">
                    <label for="cover" class="block mb-2  font-medium text-black-900 dark:text-white">
                        Cover
                    </label>
                    <input class="block w-full  text-black-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-black-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="cover" type="file" name="cover">
                    @error('cover')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $errors->first('cover') }}
                    </p>
                    @enderror
                </div>
                <div class="col-span-1">
                    <label for="video" class="block mb-2  font-medium text-black-900 dark:text-white">
                        Video
                    </label>
                    <input class="block w-full  text-black-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-black-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="video" type="file" name="video">
                    @error('video')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $errors->first('video') }}
                    </p>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="judul" class="block mb-2  font-medium text-black-900 dark:text-white">
                    Judul
                </label>
                <input type="text" name="judul" id="judul"
                       class="shadow-sm bg-gray-50 border border-gray-300 text-black-900 sm: rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                       placeholder="Judul Web" value="{{ $judul }}">
                @error('judul')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $errors->first('judul') }}
                </p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sub_judul" class="block mb-2  font-medium text-black-900 dark:text-white">
                    Sub Judul
                </label>
                <input type="text" name="sub_judul" id="sub_judul"
                       class="shadow-sm bg-gray-50 border border-gray-300 text-black-900 sm: rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                       placeholder="Sub Judul Web" value="{{ $sub_judul }}">
                @error('sub_judul')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $errors->first('sub_judul') }}
                </p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tagar" class="block mb-2  font-medium text-black-900 dark:text-white">
                    Tagar
                </label>
                <input type="text" name="tagar" id="tagar"
                       class="shadow-sm bg-gray-50 border border-gray-300 text-black-900 sm: rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                       placeholder="#tagar" value="{{ $tagar }}">
                @error('tagar')
                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                    {{ $errors->first('tagar') }}
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
