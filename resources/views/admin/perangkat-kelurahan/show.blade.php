@extends('layouts.app-admin')

@section('title', 'Perangkat Kelurahan')

@section('content')
<div class="container mx-auto flex flex-col p-4">

<h2 class="text-2xl font-bold mb-4">{{$perangkatdesa->name}}</h2>
<div class="flex justify-between bg-white divide-y  divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
    <div class="flex sm:space-x-reverse p-4">

        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://t3.ftcdn.net/jpg/02/43/12/34/360_F_243123463_zTooub557xEWABDLk0jJklDyLSGl2jrr.jpg" alt="">

        <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                <tr class="">
                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                        <div class="flex mb-3 font-normal text-gray-700 dark:text-gray-400">
                            <div class="flex justify-between w-1/3 font-semibold ">
                                <div>Nama Lengkap</div>
                                <div>:</div>
                            </div>
                            <div class="w-2/3 ps-2">{{$perangkatdesa->name}}</div>
                        </div>
                    </td>
                </tr>
                <tr class="">
                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                        <div class="flex mb-3 font-normal text-gray-700 dark:text-gray-400">
                            <div class="flex justify-between w-1/3 font-semibold ">
                                <div>Jabatan</div>
                                <div>:</div>
                            </div>
                            <div class="w-2/3 ps-2">{{$perangkatdesa->jabatan->name}}</div>
                        </div>
                    </td>
                </tr>
                <tr class="">
                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                        <div class="flex mb-3 font-normal text-gray-700 dark:text-gray-400">
                            <div class="flex justify-between w-1/3 font-semibold ">
                                <div>NIP</div>
                                <div>:</div>
                            </div>
                            <div class="w-2/3 ps-2">{{$perangkatdesa->nip}}</div>
                        </div>
                    </td>
                </tr>
                <tr class="">
                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                        <div class="flex mb-3 font-normal text-gray-700 dark:text-gray-400">
                            <div class="">{{$perangkatdesa->name}}</div>
                        </div>
                    </td>
                </tr>
                <tr class="bg-gray-200">
                    <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">
                        <div class="flex mb-3 font-normal text-gray-700 dark:text-gray-400">
                            <div class=""> *) last updated: {{$perangkatdesa->updated_at->format('d/m/Y')}}</div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        </div>
    </div>
</div>
</div>
@endsection
