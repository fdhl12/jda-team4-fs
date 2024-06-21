@extends('layouts.app-admin')

@section('title', 'Demografi')

@section('content')

    @if(session('update'))
        <x-admin.alert-success>
            {{ session('update') }}
        </x-admin.alert-success>
    @endif

    <form action="{{ route('admin.geografis.update') }}" method="POST">

        @csrf
        @method('patch')

        <div class="bg-white dark:bg-gray-800 p-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm">

            <div class="w-full mb-1 flex justify-between">
                <div class="mb-4">
                    <h2 class="text-xl font-semibold text-black-900 sm:text-2xl dark:text-white">
                        Demografi
                    </h2>
                </div>
            </div>
            <div class="grid grid-cols-6 gap-6">
                ahihihi
            </div>
        </div>

    </form>

@endsection
