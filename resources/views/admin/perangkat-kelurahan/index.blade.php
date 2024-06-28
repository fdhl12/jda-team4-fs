@extends('layouts.app-admin')

@section('title', 'Perangkat Kelurahan')

@section('content')

    @if(session('destroy'))
        <x-admin.alert-danger>
            {{ session('destroy') }}
        </x-admin.alert-danger>
    @elseif(session('store'))
        <x-admin.alert-success>
            {{ session('store') }}
        </x-admin.alert-success>
    @elseif(session('update'))
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
                    <a href="{{ route('admin.perangkat-kelurahan.index') }}" class="inline-flex items-center justify-center p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 group" aria-current="page">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                        </svg>

                        <span class="ms-1">Perangkat</span>
                    </a>
                </li>
                <li class="me-2">
                    <a href="{{ route('admin.jabatan.index') }}" class="inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 0 0-2 2v4m5-6h8M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m0 0h3a2 2 0 0 1 2 2v4m0 0v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6m18 0s-4 2-9 2-9-2-9-2m9-2h.01"/>
                        </svg>

                        <span class="ms-1">Jabatan</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>

    <main class="bg-white dark:bg-gray-800 p-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm">

        <div class="w-full mb-3">
            <div class="mb-4">

                <x-admin.breadcrumbs :data="[
                    'Beranda' => route('admin.beranda'),
                    'Perangkat Kelurahan' => false,
                ]"/>

                <h1 class="text-xl font-semibold text-black-900 sm:text-2xl dark:text-white">@yield('title')</h1>
            </div>

            <div class="sm:flex">

                <div class="flex items-center mr-auto space-x-2 sm:space-x-3">
                    <button type="button" data-modal-target="add-modal" data-modal-toggle="add-modal"
                            class="inline-flex items-center justify-center w-1/2 px-3 py-2  font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        Tambah
                    </button>
                </div>

            </div>

        </div>

        <div class="flex flex-col">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full align-middle">
                    <div class="overflow-hidden shadow">
                        <table id="table" class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                            <thead class="bg-blue-100 dark:bg-blue-700">
                            <tr>
                                <th scope="col"
                                    class="p-4 font-semibold text-left whitespace-nowrap text-black-500 uppercase dark:text-black-400 w-60">
                                    Nama
                                </th>
                                <th scope="col"
                                    class="p-4 font-semibold text-left whitespace-nowrap text-black-500 uppercase dark:text-black-400 w-20">
                                    Jabatan
                                </th>
                                <th scope="col"
                                    class="p-4 font-semibold text-left whitespace-nowrap text-black-500 uppercase dark:text-black-400 w-10">
                                    NIP
                                </th>
                                <th scope="col"
                                    class="p-4 font-semibold text-end whitespace-nowrap text-black-500 uppercase dark:text-black-400 w-10">
                                    Aksi
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-blue-200 dark:bg-blue-800 dark:divide-blue-700">

                            @foreach ($perangkatKelurahans as $perangkatKelurahan)
                                <tr class="hover:bg-blue-100 dark:hover:bg-blue-700">
                                    <td class="flex items-center p-4 mr-12 space-x-6 whitespace-nowrap">
                                        @if($perangkatKelurahan->image)
                                            <img class="w-16" src="{{ asset('storage/'.$perangkatKelurahan->image) }}"
                                                 alt="Foto">
                                        @endif
                                        <div class="text-sm font-normal text-black-500 dark:text-black-400">
                                            <div class="text-base font-semibold text-black-900 dark:text-white">
                                                <a href="{{route('admin.perangkat-kelurahan.show',$perangkatKelurahan->id)}}"
                                                   class="hover:underline"> {{$perangkatKelurahan->name}} </a>
                                            </div>
                                            <div class="text-sm font-normal text-black-500 dark:text-black-400">
                                                {{$perangkatKelurahan->email}}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-black-500 truncate xl:max-w-xs dark:text-black-400">
                                        {{$perangkatKelurahan->jabatan->name}}
                                    </td>
                                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-black-500 truncate xl:max-w-xs dark:text-black-400">
                                        {{$perangkatKelurahan->nip}}
                                    </td>
                                    <td class="p-4 space-x-2 whitespace-nowrap text-end">
                                        <button type="button" data-modal-target="edit-modal-{{ $perangkatKelurahan->id }}"
                                                data-modal-toggle="edit-modal-{{ $perangkatKelurahan->id }}"
                                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                                                <path fill-rule="evenodd"
                                                      d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                            Ubah
                                        </button>
                                        <button type="button" data-modal-target="delete-modal-{{ $perangkatKelurahan->id }}"
                                                data-modal-toggle="delete-modal-{{ $perangkatKelurahan->id }}"
                                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                      d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                      clip-rule="evenodd"></path>
                                            </svg>
                                            Hapus
                                        </button>
                                        @include('admin.perangkat-kelurahan.edit', ['perangkatKelurahan' => $perangkatKelurahan])
                                        @include('admin.perangkat-kelurahan.delete', ['perangkatKelurahan' => $perangkatKelurahan])
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @if(!request()->get('show') == 'all' and !request()->get('query'))
            {{ $perangkatKelurahans->onEachSide(0)->links('components.admin.pagination', ['show_all' => route('admin.perangkat-kelurahan.index') . '?show=all']) }}
        @endif

    </main>

    @include('admin.perangkat-kelurahan.create')

@endsection
