@extends('layouts.app-admin')

@section('title', 'Masuk - '. $pengaturan['name'])
@section('robots', 'noindex, nofollow')

@section('auth')

<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="{{ route('home') }}" class="flex items-center mb-6 text-2xl font-bold text-black-900 dark:text-white">
            <img class="w-16 h-16 mr-2" src="{{ asset($pengaturan['logo']) }}" alt="logo">
            {{ $pengaturan['name'] }}
        </a>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-black-900 md:text-2xl dark:text-white">
                  Masuk
                </h1>

                @if ($errors->any())
                    @foreach ($errors->all() as $key => $error)
                        <x-admin.alert-danger :key="$key">
                            {{ $error }}
                        </x-admin.alert-danger>
                    @endforeach
                @endif

                <form class="space-y-4 md:space-y-6" action="{{ route('login') }}" method="POST" id="loginForm">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 font-bold text-black-900 dark:text-white">
                            {{ __('Email') }}
                        </label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-black-900 sm: rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Email" required="" autofocus>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 font-bold text-black-900 dark:text-white">
                            {{ __('Kata Sandi') }}
                        </label>
                        <input type="password" name="password" id="password" placeholder="Masukan Kata Sandi" class="bg-gray-50 border border-gray-300 text-black-900 sm: rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <div>
                        <!-- Container for the Captcha -->
                        <div id="captchaTable" class="flex justify-center items-center space-x-4 mb-4"></div>
                        <!-- Input field for user to enter the Captcha -->
                        <div class="flex justify-center items-center space-x-4 mb-4">
                            <input type="text" id="captchaInput" class="border border-gray-300 rounded-md py-2 px-3 focus:outline-none flex-1" placeholder="Enter Captcha">
                            <!-- Button to refresh the Captcha -->
                            <button type="button" id="refreshButton" class="bg-blue-500 text-white px-6 py-2 rounded-md focus:outline-none">Refresh</button>
                        </div>
                        <!-- Message to display the verification result -->
                        <p id="resultMessage" class="mt-4"></p>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                            </div>
                            <div class="ml-3">
                                <label for="remember" class="text-black-500 dark:text-black-300">
                                    {{ __('Tetap Masuk') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" id="submitButton" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-bold rounded-lg px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        {{ __('Masuk') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

    <script>document.addEventListener('DOMContentLoaded', function () {
        const captchaTable = document.getElementById('captchaTable');
        const captchaInput = document.getElementById('captchaInput');
        const refreshButton = document.getElementById('refreshButton');
        const submitButton = document.getElementById('submitButton');
        const resultMessage = document.getElementById('resultMessage');
        let captchaVerified = false;
    
        // Generate the initial Captcha
        generateCaptchaTable();
    
        // Event listener for the Refresh button
        refreshButton.addEventListener('click', function () {
            generateCaptchaTable();
            resultMessage.textContent = '';
        });
    
        // Event listener for the Captcha input field
        captchaInput.addEventListener('input', function () {
            verifyCaptcha();
        });
    
        // Prevent form submission if Captcha is not verified
        submitButton.addEventListener('click', function (event) {
            if (!captchaVerified) {
                event.preventDefault();
                resultMessage.textContent = 'Please verify the Captcha.';
                resultMessage.classList.remove('text-green-500');
                resultMessage.classList.add('text-red-500');
            }
        });
    
        // Function to generate a random string for the Captcha
        function generateRandomString(length) {
            const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let result = '';
            for (let i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * characters.length));
            }
            return result;
        }
    
        // Function to generate the Captcha table
        function generateCaptchaTable() {
            const captchaText = generateRandomString(6);
            captchaTable.dataset.captcha = captchaText;
            captchaTable.innerHTML = '';
            for (let i = 0; i < captchaText.length; i++) {
                const cell = document.createElement('div');
                cell.textContent = captchaText.charAt(i);
                cell.classList.add('text-4xl', 'font-bold', 'w-12', 'h-12', 'text-center', 'border', 'border-gray-300');
                captchaTable.appendChild(cell);
            }
            captchaVerified = false;
        }
    
        // Function to verify the Captcha input
        function verifyCaptcha() {
            const inputText = captchaInput.value.trim().toLowerCase();
            const captchaText = captchaTable.dataset.captcha.trim().toLowerCase();
    
            if (inputText === captchaText) {
                resultMessage.textContent = 'Captcha berhasil diverifikasi.';
                resultMessage.classList.remove('text-red-500');
                resultMessage.classList.add('text-green-500');
                captchaVerified = true;
            } else {
                resultMessage.textContent = 'Captcha Salah. Mohon coba lagi.';
                resultMessage.classList.remove('text-green-500');
                resultMessage.classList.add('text-red-500');
                captchaVerified = false;
            }
        }
    });
        </script>

@endsection 
