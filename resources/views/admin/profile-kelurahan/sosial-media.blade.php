<div class="bg-white dark:bg-gray-800 p-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm">

    <div class="w-full mb-1">
        <div class="mb-4">
            <h1 class="text-xl font-semibold text-black-900 sm:text-2xl dark:text-white">
                Sosial Media
            </h1>
        </div>
    </div>

    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-3">
            <label for="facebook" class="block mb-2  font-medium text-black-900 dark:text-white">Facebook</label>
            <input type="text" name="facebook" id="facebook" class="shadow-sm bg-gray-50 border border-gray-300 text-black-900 sm: rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="https://facebook.com/" value="{{ $sosial_media['facebook'] }}" required>
            @error('facebook')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                {{ $errors->first('facebook') }}
            </p>
            @enderror
        </div>
        <div class="col-span-6 sm:col-span-3">
            <label for="twitter" class="block mb-2  font-medium text-black-900 dark:text-white">Twitter</label>
            <input type="text" name="twitter" id="twitter" class="shadow-sm bg-gray-50 border border-gray-300 text-black-900 sm: rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="https://twitter.com/" value="{{ $sosial_media['twitter'] }}" required>
            @error('twitter')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                {{ $errors->first('twitter') }}
            </p>
            @enderror
        </div>
        <div class="col-span-6 sm:col-span-3">
            <label for="instagram" class="block mb-2  font-medium text-black-900 dark:text-white">Instagram</label>
            <input type="text" name="instagram" id="instagram" class="shadow-sm bg-gray-50 border border-gray-300 text-black-900 sm: rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="https://instagram.com/" value="{{ $sosial_media['instagram'] }}" required>
            @error('instagram')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                {{ $errors->first('instagram') }}
            </p>
            @enderror
        </div>
        <div class="col-span-6 sm:col-span-3">
            <label for="youtube" class="block mb-2  font-medium text-black-900 dark:text-white">Youtube</label>
            <input type="text" name="youtube" id="youtube" class="shadow-sm bg-gray-50 border border-gray-300 text-black-900 sm: rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="https://youtube.com/" value="{{ $sosial_media['youtube'] }}" required>
            @error('youtube')
            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                {{ $errors->first('youtube') }}
            </p>
            @enderror
        </div>
    </div>

</div>
