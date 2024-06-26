@extends('layouts.app-admin')

@section('title', 'Profil')

@section('content')

    @if(session('update'))
        <x-admin.alert-success>
            {{ session('update') }}
        </x-admin.alert-success>
    @endif

    <div class="bg-white dark:bg-gray-800 pt-5 pb-1 px-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm">
        <x-admin.breadcrumbs :data="[
            'Beranda' => route('admin.beranda'),
            'Profile' => false,
        ]"/>
    </div>

    <form action="{{ route('admin.profile-kelurahan.update') }}" method="POST">
        @csrf
        @method('patch')

        @include('admin.profile-kelurahan.tentang')
        @include('admin.profile-kelurahan.visi-misi')
        @include('admin.profile-kelurahan.sejarah')
        @include('admin.profile-kelurahan.kontak')
        @include('admin.profile-kelurahan.sosial-media')

        <div class="bg-white dark:bg-gray-800 p-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm">
            <div class="col-span-6">
                <button
                    class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg  px-2.5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                    type="submit">
                    Simpan
                </button>
            </div>
        </div>

    </form>

@endsection

@push('scripts')
    <x-admin.ckeditor-js :route="route('admin.demografi.ckeditor', ['_token' => csrf_token()])"/>

    <script>
        ckeditorOptions.height = 300
        CKEDITOR.replace('tentang', ckeditorOptions);
        CKEDITOR.replace('visimisi', ckeditorOptions);
        CKEDITOR.replace('sejarah', ckeditorOptions);
    </script>
@endpush
