@extends('layouts.app-admin')

@section('title', 'Demografi')

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

    <form action="{{ route('admin.demografi.update') }}" method="POST">

        @csrf
        @method('patch')

        <div class="bg-white dark:bg-gray-800 p-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm">

            <div class="w-full mb-1 flex justify-between">
                <div class="mb-4">

                    <x-admin.breadcrumbs :data="[
                        'Beranda' => route('admin.beranda'),
                        'Demografi' => false,
                    ]"/>

                    <h2 class="text-xl font-semibold text-black-900 sm:text-2xl dark:text-white">
                        @yield('title')
                    </h2>
                </div>
            </div>
            <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6">
                    <textarea id="description" name="demografi" rows="4" class="block p-2.5 w-full  text-black-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tuliskan Demografi...">{{ old('description') ?: $demografi }}</textarea>
                    @error('demografi')
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                        {{ $errors->first('demografi') }}
                    </p>
                    @enderror
                </div>
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

@push('scripts')
    <x-admin.ckeditor-js :route="route('admin.demografi.ckeditor', ['_token' => csrf_token()])"/>
@endpush
