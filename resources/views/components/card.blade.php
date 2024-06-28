<!-- resources/views/components/card.blade.php -->

<div class="max-w-full sm:max-w-sm md:max-w-md bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 mb-6 mx-2 sm:mx-3 md:mx-4
    transform transition-all duration-300 ease-in-out
    hover:scale-105 hover:shadow-xl
    animate-fade-in-up" 
    data-aos="zoom-in" 
    data-aos-duration="500">
    <div class="overflow-hidden">
        <a href="{{ $link }}" class="block rounded-t-lg overflow-hidden">
            <img class="w-full h-48 sm:h-52 md:h-60 object-cover transition-transform duration-300 hover:scale-110"
                src="{{ asset($image) }}"
                alt="{{ $title }}">
        </a>
    </div>
    <div class="mt-5 px-3 sm:px-4 md:px-5">
        <div class="flex justify-between items-center text-gray-700">
            <p class="text-xl md:text-xl ms:text-5xl animate-pulse">
                <i class="fas fa-calendar-alt"></i> {{ $date }}
            </p>
        </div>
        <a href="{{ $link }}"
        class="block mb-3 mt-4 text-3xl sm:text-5xl md:text-3xl font-bold tracking-tight text-gray-900
                hover:text-blue-700 transition-colors duration-300">
            {{ $title }}
        </a>
        <p class="text-xl md:text-xl text-gray-600 mb-4 animate-fade-in">
            {!! $description !!}
        </p>
    </div>
</div>
