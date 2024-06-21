@extends('layouts.app-admin')

@section('title', 'Informasi Desa')

@section('content')

    @if(session('update'))
        <x-admin.alert-success>
            {{ session('update') }}
        </x-admin.alert-success>
    @endif

    <form action="{{ route('admin.profile-desa.update') }}" method="POST">
        @csrf
        @method('patch')

        @include('admin.profile-desa.tentang')
        @include('admin.profile-desa.visi-misi')
        @include('admin.profile-desa.sejarah')
    {{--    @include('admin.profile-desa.kontak')--}}
    {{--    @include('admin.profile-desa.sosial-media')--}}

        <main class="bg-white dark:bg-gray-800 p-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm">
            <div class="col-span-6">
                <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg  px-2.5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="submit">
                    Simpan
                </button>
            </div>
        </main>

    </form>

@endsection
