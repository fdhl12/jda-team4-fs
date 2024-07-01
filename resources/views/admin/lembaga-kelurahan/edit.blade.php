<!-- Edit Modal -->
<div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full text-left" id="edit-modal-{{ $lembaga->id }}">
    <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                <h3 class="text-xl font-semibold dark:text-white">
                    Ubah @yield('title')
                </h3>
                <button type="button" class="text-black-400 bg-transparent hover:bg-gray-200 hover:text-black-900 rounded-lg  p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white" data-modal-toggle="edit-modal-{{ $lembaga->id }}">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <form action="{{ route('admin.lembaga-kelurahan.update', $lembaga->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <input type="text" name="nama" id="nama" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nama" value="{{ old('nama') ?: $lembaga->nama }}" required>
                            @error('nama')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $errors->first('nama') }}
                            </p>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="kode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode</label>
                            <input type="text" name="kode" id="kode" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Kode" value="{{ old('kode') ?: $lembaga->kode }}" required>
                            @error('kode')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $errors->first('kode') }}
                            </p>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="hukum" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dasar Hukum</label>
                            <input type="text" name="hukum" id="hukum" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Dasar Hukum" value="{{ old('hukum') ?: $lembaga->hukum }}">
                            @error('hukum')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $errors->first('hukum') }}
                            </p>
                            @enderror
                        </div>
                        <div class="col-span-6 sm:col-span-3 flex justify-between gap-3 items-center">
                            <div class="flex-grow">
                                <label class="block mb-2  font-medium text-black-900 dark:text-white" for="logo">
                                    Logo
                                </label>
                                <input class="block w-full  text-black-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-black-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="logo" type="file" name="logo">
                                @error('logo')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                    {{ $errors->first('logo') }}
                                </p>
                                @enderror
                            </div>
                            @if($lembaga->logo)
                                <div class="w-16">
                                    <img src="{{ asset('storage/'.$lembaga->logo) }}" alt="Logo">
                                </div>
                            @endif
                        </div>
                        <div class="col-span-6">
                            <label for="alamat" class="block mb-2  font-medium text-black-900 dark:text-white">
                                Alamat
                            </label>
                            <textarea id="alamat" name="alamat" rows="4" class="block p-2.5 w-full  text-black-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Alamat">{{ old('alamat') ?: $lembaga->alamat }}</textarea>
                            @error('alamat')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                                {{ $errors->first('alamat') }}
                            </p>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                    <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg  px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="submit">
                        Ubah
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
