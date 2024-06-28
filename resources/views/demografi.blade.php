@extends('layouts.app')

@section('title', 'Demografi '. $pengaturan['name'])

@section('content')
<div class="pt-24">
    <section class="bg-white border-b py-8 bg-banner-1">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <h2 class="text-5xl font-bold text-blue-900 mb-4">@yield('title')</h2>
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t mb-4"></div>
                <p class="text-3xl font-medium text-blue-900 mb-8">Berikut Informasi Demografi</p>
            </div>

            <article class="text-wrap text-3xl text-blue-950 prose m-auto max-w-4xl pb-96">
                {!! $demografi !!}
            </article>

        </div>
    </section>
</div>



@endsection
