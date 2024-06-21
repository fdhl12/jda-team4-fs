@extends('layouts.app-admin')

@section('title', 'Struktur Organisasi')

@section('content')

    <main class="bg-white dark:bg-gray-800 p-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm">

        <div class="w-full mb-3">
            <div class="mb-4">

                <x-admin.breadcrumbs :data="[
                    'Beranda' => route('admin.beranda'),
                    'Struktur Organisasi' => false,
                ]"/>

                <h1 class="text-xl font-semibold text-black-900 sm:text-2xl dark:text-white">@yield('title')</h1>
            </div>

            <div class="sm:flex">

                <div class="flex items-center mr-auto space-x-2 sm:space-x-3">
                    <button type="button" data-modal-target="create-modal" data-modal-toggle="create-modal" class="inline-flex items-center justify-center w-1/2 px-3 py-2  font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
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
                                <th scope="col" class="p-4 font-semibold text-left whitespace-nowrap text-black-500 uppercase dark:text-black-400 w-80">
                                    Nama
                                </th>
                                <th scope="col" class="p-4 font-semibold text-left whitespace-nowrap text-black-500 uppercase dark:text-black-400 w-80">
                                    Jabatan
                                </th>
                                <th scope="col" class="p-4 font-semibold text-left whitespace-nowrap text-black-500 uppercase dark:text-black-400 w-80">
                                    Induk
                                </th>
                                <th scope="col" class="p-4 font-semibold text-end whitespace-nowrap text-black-500 uppercase dark:text-black-400 w-10">
                                    Aksi
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                                <tr class="hover:bg-blue-100 dark:hover:bg-blue-700">
                                    <td class="flex items-center p-4 mr-12 space-x-6 whitespace-nowrap">
                                        <img class="w-10 h-10 rounded-full" src="https://flowbite-admin-dashboard.vercel.app/images/users/robert-brown.png" alt="Robert Brown avatar">
                                        <div class=" font-normal text-black-500 dark:text-black-400">
                                            <div class="text-base font-semibold text-black-900 dark:text-white">
                                                Robert Brown
                                            </div>
                                            <div class=" font-normal text-black-500 dark:text-black-400">
                                                robert.brown@flowbite.com
                                            </div>
                                        </div>
                                    </td>
                                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-black-500 truncate xl:max-w-xs dark:text-black-400">
                                        Lurah
                                    </td>
                                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-black-500 truncate xl:max-w-xs dark:text-black-400">
                                        123456789
                                    </td>
                                    <td class="p-4 space-x-2 whitespace-nowrap text-end">
                                        <button type="button" data-modal-target="edit-modal" data-modal-toggle="edit-modal" class="inline-flex items-center px-3 py-2  font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                                            Ubah
                                        </button>
                                        <button type="button" data-modal-target="delete-modal" data-modal-toggle="delete-modal" class="inline-flex items-center px-3 py-2  font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                            Hapus
                                        </button>
                                        @include('admin.struktur-organisasi.edit')
                                        @include('admin.struktur-organisasi.delete')
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

{{--        @if(!request()->get('show') == 'all' and !request()->get('query'))--}}
{{--            {{ $strukturOrganisasi->onEachSide(0)->links('components.admin.pagination', ['show_all' => route('admin.struktur-organisasi') . '?show=all']) }}--}}
{{--        @endif--}}

    </main>

    @include('admin.struktur-organisasi.create')

@endsection
