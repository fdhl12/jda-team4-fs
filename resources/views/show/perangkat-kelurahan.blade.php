@extends('layouts.app')

@section('title', 'Perangkar - ' .$perangkatdesa['name'] .' | ' .$pengaturan['name'] )

@section('content')

<div class="xl:px-48 sm:px-0 bg-white p-4">
    <div class="pt-24 flex justify-center">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <section class="border border-b py-8 md:col-span-2">
                <div class="md:mx-auto px-4">
                    <h1 class="w-full my-2 text-3xl font-bold leading-tight text-center text-blue-900">
                        {{$perangkatdesa->name}}
                    </h1>
                    <div class="flex flex-col md:flex-row sm:space-x-reverse p-4">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{asset('storage/'.$perangkatdesa->image)}}" alt="">
                        <table class="w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600 mt-4 md:mt-0 md:ml-4">
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                <tr>
                                    <td class="p-4 text-base font-normal text-gray-500 dark:text-gray-400">
                                        <div class="flex mb-3 font-normal text-gray-700 dark:text-gray-400">
                                            <div class="flex justify-between w-1/3 font-semibold">
                                                <div>Nama Lengkap</div>
                                                <div>:</div>
                                            </div>
                                            <div class="w-2/3 ps-2">{{$perangkatdesa->name}}</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4 text-base font-normal text-gray-500 dark:text-gray-400">
                                        <div class="flex mb-3 font-normal text-gray-700 dark:text-gray-400">
                                            <div class="flex justify-between w-1/3 font-semibold">
                                                <div>Jabatan</div>
                                                <div>:</div>
                                            </div>
                                            <div class="w-2/3 ps-2">{{$perangkatdesa->jabatan->name}}</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4 text-base font-normal text-gray-500 dark:text-gray-400">
                                        <div class="flex mb-3 font-normal text-gray-700 dark:text-gray-400">
                                            <div class="flex justify-between w-1/3 font-semibold">
                                                <div>NIP</div>
                                                <div>:</div>
                                            </div>
                                            <div class="w-2/3 ps-2">{{$perangkatdesa->nip}}</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4 text-base font-normal text-gray-500 dark:text-gray-400">
                                        <div class="flex mb-3 font-normal text-gray-700 dark:text-gray-400">
                                            <div class="">{{$perangkatdesa->alamat}}</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="p-4 text-base font-normal text-gray-500 dark:text-gray-400">
                                        <div class="flex mb-3 font-normal text-gray-700 dark:text-gray-400">
                                            <div class="">*) last updated: {{$perangkatdesa->updated_at->format('d/m/Y')}}</div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>                
            </section>
    
            <aside class="border border-b py-8">
                <div class="mx-auto px-4">
                    <h2 class="w-full my-2 text-3xl font-bold leading-tight text-center text-blue-900">
                        Perangkat Kelurahan
                    </h2>
                    <div class="space-y-4">
                        @foreach ($perangkats as $perangkat)
                        <div class="flex py-4 border-t-2">
                            <div class="flex-shrink-0 w-1/3">
                                <a href="{{route('perangkat-kelurahan.show',$perangkat->id)}}" class="block rounded-t-sm overflow-hidden">
                                    <img class="h-full w-24 object-cover" src="{{asset('storage/'.$perangkat->image)}}" alt="perangkat Thumbnail">   
                                </a>
                            </div>
                            <div class="ml-4 text-black">
                                <a href="{{route('perangkat-kelurahan.show',$perangkat->id)}}" class="block rounded-t-lg overflow-hidden">
                                <h3 class="text-xl font-semibold">{{$perangkat->name}}</h3>
                                </a>
                                <p class="text-gray-700">{{$perangkat->jabatan->name}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>





@endsection