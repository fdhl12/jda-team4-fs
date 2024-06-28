<main class="bg-white dark:bg-gray-800 p-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm">

    <div class="w-full mb-1 flex justify-between">
        <div class="mb-4">
            <h2 class="text-xl font-semibold text-black-900 sm:text-2xl dark:text-white">
                Tentang
            </h2>
        </div>
    </div>
    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6">
            <textarea name="tentang" rows="4" class="block p-2.5 w-full  text-black-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tuliskan Tentang Kelurahan.">{{ $tentang }}</textarea>
            @error('tentang')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                {{ $errors->first('tentang') }}
            </p>
            @enderror
        </div>
    </div>

</main>
