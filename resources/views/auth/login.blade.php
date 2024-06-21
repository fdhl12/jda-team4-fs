@extends('layouts.app-admin')

@section('title', 'Masuk')

@section('auth')

    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="{{ route('home') }}" class="flex items-center mb-6 text-2xl font-bold text-black
            -900 dark:text-white">
                <img class="w-16 h-16 mr-2" src="{{ asset('images/logo.png') }}" alt="logo">
                {{ config('app.name', 'Laravel') }}
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-black
                    -900 md:text-2xl dark:text-white">
                        Form @yield('title')
                    </h1>

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <x-admin.alert-danger title="!">
                                {{ $error }}
                            </x-admin.alert-danger>
                        @endforeach
                    @endif

                    <form class="space-y-4 md:space-y-6" action="{{ route('login') }}" method="POST">

                        @csrf

                        <div>
                            <label for="email" class="block mb-2 font-bold text-black
                            -900 dark:text-white">
                                {{ __('Email') }}
                            </label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-black
                            -900 sm: rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Email" required="" autofocus>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 font-bold text-black
                            -900 dark:text-white">
                                {{ __('Kata Sandi') }}
                            </label>
                            <input type="password" name="password" id="password" placeholder="Masukan Kata Sandi" class="bg-gray-50 border border-gray-300 text-black
                            -900 sm: rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                                </div>
                                <div class="ml-3">
                                    <label for="remember" class="text-black
                                    -500 dark:text-black
                                    -300">
                                        {{ __('Tetap Masuk') }}
                                    </label>
                                </div>
                            </div>
{{--                            @if (Route::has('password.request'))--}}
{{--                                <a href="{{ route('password.request') }}" class=" font-bold text-primary-600 hover:underline dark:text-primary-500">--}}
{{--                                    {{ __('Lupa Password?') }}--}}
{{--                                </a>--}}
{{--                            @endif--}}
                        </div>

                        <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-bold rounded-lg px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            {{ __('Masuk') }}
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
