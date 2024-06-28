@extends('layouts.app')

@section('title', 'Lembaga - ' .$lembaga['name'] .' | ' .$pengaturan['name'] )

@section('content')

<div class="md:px-20 bg-white p-4">
    <div class="pt-24 flex justify-center">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            
            <section class="border border-b py-8 md:col-span-2">
                <div class="md:mx-auto px-4">
                    <h1 class="w-full my-2 text-3xl font-bold leading-tight text-center text-blue-900">
                        {{$lembaga->name}}
                    </h1>
                    <div class="flex flex-col md:flex-row sm:space-x-reverse p-4">
                        <div class="w-full md:w-48 h-96 md:h-auto flex items-center justify-center bg-white mb-4 md:mb-0 md:mr-4">
                            <img class="object-contain w-full h-full"
                                src="{{asset('storage/'.$lembaga->logo)}}" alt="Logo {{$lembaga->name}}">
                        </div>
                        <table class="w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                            <tbody class="bg-white divide-y text-2xl divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                <tr>
                                    <td class="p-4  font-medium text-gray-700 dark:text-gray-400">
                                        <div class="flex mb-3">
                                            <div class="flex justify-between w-1/3 font-semibold">
                                                <div>Nama lembaga</div>
                                                <div>:</div>
                                            </div>
                                            <div class="w-2/3 ps-2">{{$lembaga->nama}}</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4   font-medium text-gray-700 dark:text-gray-400">
                                        <div class="flex mb-3">
                                            <div class="flex justify-between w-1/3 font-semibold">
                                                <div>Kode</div>
                                                <div>:</div>
                                            </div>
                                            <div class="w-2/3 ps-2">{{$lembaga->kode}}</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4  font-medium text-gray-700 dark:text-gray-400">
                                        <div class="flex mb-3">
                                            <div class="flex justify-between w-1/3 font-semibold">
                                                <div>Hukum</div>
                                                <div>:</div>
                                            </div>
                                            <div class="w-2/3 ps-2">{{$lembaga->hukum}}</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4  font-medium text-gray-700 dark:text-gray-400">
                                        <div class="flex mb-3">
                                            <div>{{$lembaga->alamat}}</div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-gray-200">
                                    <td class="p-4  font-medium text-gray-700 dark:text-gray-400">
                                        <div class="flex mb-3">
                                            <div>*) last updated: {{$lembaga->updated_at->format('d/m/Y')}}</div>
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
                        Lembaga Kelurahan
                    </h2>
                    <div class="space-y-4">
                        @foreach ($lembagas as $lembaga)
                        <div class="flex py-4 border-t-2">
                            <div class="flex-shrink-0 w-1/3">
                                <a href="{{route('lembaga-kelurahan.show',$lembaga->id)}}" class="block rounded-t-sm overflow-hidden">
                                    <img class="h-full w-24 object-cover" src="{{asset('storage/'.$lembaga->logo)}}" alt="lembaga Thumbnail">   
                                </a>
                            </div>
                            <div class="ml-4 text-black">
                                <a href="{{route('lembaga-kelurahan.show',$lembaga->id)}}" class="block rounded-t-lg overflow-hidden">
                                <h3 class="text-xl font-semibold">{{$lembaga->nama}}</h3>
                                </a>
                                <p class="text-gray-700">{{$lembaga->kode}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </aside>

            <!-- Tombol Kembali -->
            <div class="md:col-span-3 mb-6">
                <a href="{{ route('lembaga-kelurahan.index') }}" class="inline-flex items-center px-6 py-3 text-base font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Kembali
                </a>
            </div>
            
        </div>
    </div>
</div>





@endsection