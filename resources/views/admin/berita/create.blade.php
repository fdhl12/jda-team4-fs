@extends('layouts.app-admin')

@section('title', 'Buat Berita')

@section('content')

    <main class="bg-white dark:bg-gray-800 p-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">

        <div class="mb-4">
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">@yield('title')</h1>
        </div>

        <form action="{{ route('admin.berita.store') }}" method="POST">

            @csrf

            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Judul
                    </label>
                    <input type="text" name="title" id="title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tulis Judul..." required>
                </div>
                <div class="col-span-6">
                    <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Konten
                    </label>
                    <textarea id="content" name="content" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="👨‍💻Tulis Konten..."></textarea>
                </div>
                <div class="col-span-6">
                    <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="submit">Tambah</button>
                </div>
            </div>
          </form>

        <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">

        <div id="editor">
            <h2>Demo Content</h2>
            <p>Preset build with <code>snow</code> theme, and some common formats.</p>
        </div>

        <script>
            const quill = new Quill('#editor', {
                theme: 'snow'
            });
        </script>

    </main>

@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
@endpush
