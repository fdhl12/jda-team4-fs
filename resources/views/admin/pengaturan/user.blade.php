@extends('layouts.app-admin')

@section('title', 'Pengaturan Pengguna')

@section('content')


<div class="dark:bg-gray-700 bg-gray-200 py-12">
    <!-- Card start -->
    <div class="max-w-lg mx-auto bg-white dark:bg-gray-900 rounded-lg overflow-hidden shadow-lg">
        <div class="border-b px-4 pb-6">
            <div class="text-center my-4">
                <div class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="32" width="28" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>

                </div>
                <div class="py-2">
                    <h3 class="font-bold text-2xl text-gray-800 dark:text-white mb-1">{{ auth()->user()->name }}</h3>
                    <div class="inline-flex text-gray-700 dark:text-gray-300 items-center">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                        </svg>
                        {{auth()->user()->role->name}}
                    </div>
                </div>
                <div class="inline-flex text-gray-700 dark:text-gray-300 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                    {{auth()->user()->email}}
                </div>
            </div>
        </div>
        <div class="px-4 py-4">
            @if (session('success'))
            <div class="mb-4">
                <div class="text-green-600">
                    {{ session('success') }}
                </div>
            </div>
        @endif
            @if ($errors->any())
            <div class="mb-4">
                <div class="text-red-600">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
            <form method="POST" action="{{ route('admin.pengaturan.pengguna.update', auth()->user()->id) }}">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="name">Nama</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:bg-gray-800 dark:text-gray-200 leading-tight focus:outline-none focus:shadow-outline"
                        id="name" type="text" name="name" value="{{ auth()->user()->name }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="email">Email</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:bg-gray-800 dark:text-gray-200 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" type="email" name="email" value="{{ auth()->user()->email }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="current_password">Password Lama</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:bg-gray-800 dark:text-gray-200 leading-tight focus:outline-none focus:shadow-outline"
                        id="current_password" type="password" name="current_password">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="password">Password Baru</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:bg-gray-800 dark:text-gray-200 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" type="password" name="password">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="password_confirmation">Password Baru Konfirmasi</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 dark:bg-gray-800 dark:text-gray-200 leading-tight focus:outline-none focus:shadow-outline"
                        id="password_confirmation" type="password" name="password_confirmation">
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Card end -->
</div>

@endsection
