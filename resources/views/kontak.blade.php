@extends('layouts.app')

@section('title', 'Table')

@section('content')

    <div class="pt-24">
      
        
        <section class="bg-white border-b py-8" x-data="contactForm()">
            <div class="container mx-auto px-4">
                <div class="text-center mb-6">
                    <img src="images/logo.png" alt="Example Image" class="mx-auto w-20 h-20 mb-4">
                    <h2 class="text-3xl font-bold">Contact Us</h2>
                </div>
                <form @submit.prevent="handleSubmit" class="max-w-md mx-auto">
                    <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
                        <input type="text" id="name" x-model="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="John Doe" required />
                    </div>
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Email</label>
                        <input type="email" id="email" x-model="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@domain.com" required />
                    </div>
                    <div class="mb-5">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Message</label>
                        <textarea id="message" x-model="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a message..." required></textarea>
                    </div>
                    <div class="mb-5" x-show="showSuccessMessage" x-transition>
                        <p class="text-green-600">Your message has been sent successfully!</p>
                    </div>
                    <div class="mb-5" x-show="showErrorMessage" x-transition>
                        <p class="text-red-600">There was an error sending your message. Please try again.</p>
                    </div>
                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Send Message</button>
                </form>
                <div class="flex justify-center mt-8 space-x-4">
                    <a href="https://www.instagram.com" target="_blank" class="text-gray-500 hover:text-gray-700">
                        <i class="fa-brands fa-instagram text-2xl"></i>
                    </a>
                    <a href="https://www.tiktok.com" target="_blank" class="text-gray-500 hover:text-gray-700">
                        <i class="fa-brands fa-tiktok text-2xl"></i>
                    </a>
                    <a href="https://www.youtube.com" target="_blank" class="text-gray-500 hover:text-gray-700">
                        <i class="fa-brands fa-youtube text-2xl"></i>
                    </a>
                    <a href="https://www.twitter.com" target="_blank" class="text-gray-500 hover:text-gray-700">
                        <i class="fa-brands fa-twitter text-2xl"></i>
                    </a>
                </div>
                <p class="mt-8 text-center text-gray-700">
                    Jl. Ibu Ganirah, Cibeber, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40531
                </p>
            </div>
        </section>
      
        
    
    </div>
@endsection
   