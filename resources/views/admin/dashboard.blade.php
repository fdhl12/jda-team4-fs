@extends('layouts.app-admin')

@section('title', 'Dashboard')

@section('content')

    <main class="bg-white dark:bg-gray-800 p-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">

        <div class="w-full mb-1">
            <div class="mb-4">
                @include('layouts.partials.breadcrumbs')
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Dashboard</h1>
            </div>
        </div>

    </main>

@endsection
