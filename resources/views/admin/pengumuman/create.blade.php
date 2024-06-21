@extends('layouts.app-admin')

@section('title', 'Buat Pengumuman')

@section('content')

    @if($errors->any())
        <x-admin.alert-danger>
            Terdapat data yang masih kosong, silahkan cek kembali
        </x-admin.alert-danger>
    @endif

    <main class="bg-white dark:bg-gray-800 p-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">

        <div class="mb-4">

            <x-admin.breadcrumbs :data="[
                'Beranda' => route('admin.beranda'),
                'Pengumuman' => route('admin.pengumuman'),
                'Buat Pengumuman' => false
            ]"/>

            <h1 class="text-xl font-semibold text-black-900 sm:text-2xl dark:text-white">@yield('title')</h1>
        </div>

        <form action="{{ route('admin.pengumuman.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6">
                    <label for="title" class="block mb-2  font-medium text-black-900 dark:text-white">
                        Judul
                    </label>
                    <input type="text" name="title" id="title" class="shadow-sm bg-gray-50 border border-gray-300 text-black-900 sm: rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tulis Judul @yield('title')" value="{{ old('title') }}">
                    @error('title')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $errors->first('title') }}
                    </p>
                    @enderror
                </div>
                <div class="col-span-6">

                    <label class="block mb-2  font-medium text-black-900 dark:text-white" for="image">
                        Gambar
                    </label>
                    <input class="block w-full  text-black-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-black-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="image" type="file" name="image" value="{{ old('image') }}">
                    @error('image')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $errors->first('image') }}
                    </p>
                    @enderror
                </div>
                <div class="col-span-6">
                    <label for="description" class="block mb-2  font-medium text-black-900 dark:text-white">
                        Konten
                    </label>
                    <textarea id="description" name="description" rows="4" class="block p-2.5 w-full  text-black-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="👨‍💻Tulis Konten...">{{ old('description') }}</textarea>
                    @error('description')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $errors->first('description') }}
                    </p>
                    @enderror
                </div>
                <div class="col-span-6">
                    <input type="hidden" name="category_id" value="2">
                    <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg  px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="submit">Tambah</button>
                </div>
            </div>
        </form>

    </main>

@endsection

@push('scripts')
    <x-admin.ckeditor-js :route="route('admin.pengumuman.ckeditor', ['_token' => csrf_token()])"/>
@endpush
