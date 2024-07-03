@extends('layouts.app')

@section('title', 'Perangkat | ' .$pengaturan['name'] )

@section('content')
    <section class="bg-gray-300 bg-banner-1">
        <div class="mt-24 mb-auto  text-black">
            <div class="container mx-auto px-4 py-12">

                <h2 class="text-5xl font-bold text-blue-950 text-center mb-4" data-aos="zoom-in" data-aos-duration="500"
                    data-aos-delay="0">Perangkat</h2>
                <div class="w-full mb-4">
                    <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t" data-aos="zoom-in"
                         data-aos-duration="500" data-aos-delay="0"></div>
                </div>
                <p class="text-3xl font-medium text-orange-500 text-center mb-10" data-aos="zoom-in"
                   data-aos-duration="500" data-aos-delay="0">
                    Perangkat {{ $pengaturan['name'] }}
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    @foreach ($perangkats as $perangkat)
                        <div
                            class="bg-white border border-gray-200 rounded-lg shadow hover:shadow-lg transition-shadow duration-300 ease-in-out overflow-hidden flex flex-col">
                            <a href="{{route('perangkat-kelurahan.show', $perangkat->id)}}" class="flex-grow">
                                <div class="aspect-w-1 aspect-h-1 w-full">
                                    <img
                                        class="object-cover w-full max-h-[350px] transition-transform duration-300 ease-in-out hover:scale-105"
                                        src="{{asset('storage/'.$perangkat->image)}}" alt="Foto {{$perangkat->name}}">
                                </div>
                            </a>
                            <div class="p-4 flex flex-col items-center">
                                <h5 class="text-2xl font-bold tracking-tight text-blue-950 break-words text-center">
                                    {{$perangkat->name}}
                                </h5>
                                <p class="text-xl font-medium text-gray-700 mt-2 text-center flex-grow">
                                    {{$perangkat->jabatan->name}}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </div>
    </section>
@endsection
