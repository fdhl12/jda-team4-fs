<div class="bg-white dark:bg-gray-800 p-5 m-3 border-gray-200 dark:border-gray-700 rounded-lg shadow-sm">

    <div class="w-full mb-1">
        <div class="mb-4">
            <h1 class="text-xl font-semibold text-black-900 sm:text-2xl dark:text-white">
                Kontak
            </h1>
        </div>
    </div>

    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-3">
            <label for="email" class="block mb-2  font-medium text-black-900 dark:text-white">Email</label>
            <input type="text" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-black-900 sm: rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="contoh@gmail.com" value="{{ $kontak['email'] }}" required>
        </div>
        <div class="col-span-6 sm:col-span-3">
            <label for="no_telp" class="block mb-2  font-medium text-black-900 dark:text-white">No Telp</label>
            <input type="text" name="no_telp" id="no_telp" class="shadow-sm bg-gray-50 border border-gray-300 text-black-900 sm: rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="021-000-xxx" value="{{ $kontak['no_telp'] }}" required>
        </div>
        <div class="col-span-6">
            <label for="alamat" class="block mb-2  font-medium text-black-900 dark:text-white">Alamat</label>
            <textarea id="alamat" name="alamat" rows="4" class="block p-2.5 w-full  text-black-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan Alamat Kelurahan">{{ $kontak['alamat'] }}</textarea>
        </div>
    </div>

</div>
