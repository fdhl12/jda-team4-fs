<aside id="logo-sidebar" class="fixed top-0 left-0 z-35 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('admin.beranda') }}" class="flex items-center p-2 text-black font-medium rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-blue-700 group
                @if(request()->routeIs('admin.beranda*')) bg-blue-100 dark:bg-blue-700 @endif
                ">

                    <svg class="w-6 h-6 text-black font-medium dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.122 17.645a7.185 7.185 0 0 1-2.656 2.495 7.06 7.06 0 0 1-3.52.853 6.617 6.617 0 0 1-3.306-.718 6.73 6.73 0 0 1-2.54-2.266c-2.672-4.57.287-8.846.887-9.668A4.448 4.448 0 0 0 8.07 6.31 4.49 4.49 0 0 0 7.997 4c1.284.965 6.43 3.258 5.525 10.631 1.496-1.136 2.7-3.046 2.846-6.216 1.43 1.061 3.985 5.462 1.754 9.23Z"/>
                    </svg>


                    <span class="ms-3">Beranda</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.berita') }}" class="flex items-center p-2 text-black font-medium rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-blue-700 group
                @if(request()->routeIs('admin.berita*')) bg-blue-100 dark:bg-blue-700 @endif
                ">

                    <svg class="w-6 h-6 text-black font-medium dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7h1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h11.5M7 14h6m-6 3h6m0-10h.5m-.5 3h.5M7 7h3v3H7V7Z"/>
                    </svg>

                    <span class="ms-3">Berita</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.pengumuman') }}" class="flex items-center p-2 text-black font-medium rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-blue-700 group
                @if(request()->routeIs('admin.pengumuman*')) bg-blue-100 dark:bg-blue-700 @endif
                ">

                    <svg class="w-6 h-6 text-black font-medium dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 9H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h6m0-6v6m0-6 5.419-3.87A1 1 0 0 1 18 5.942v12.114a1 1 0 0 1-1.581.814L11 15m7 0a3 3 0 0 0 0-6M6 15h3v5H6v-5Z"/>
                    </svg>

                    <span class="ms-3">Pengumuman</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.galeri.index') }}" class="flex items-center p-2 text-black font-medium rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-blue-700 group
                @if(request()->routeIs('admin.galeri*')) bg-blue-100 dark:bg-blue-700 @endif
                ">

                    <svg class="w-6 h-6 text-black font-medium dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M4 18V8a1 1 0 0 1 1-1h1.5l1.707-1.707A1 1 0 0 1 8.914 5h6.172a1 1 0 0 1 .707.293L17.5 7H19a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1Z"/>
                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>

                    <span class="ms-3">Galeri</span>
                </a>
            </li>

            @auth

                @if(Auth::user()->role_id === 1)

                    <li>
                        <button type="button" class="flex items-center w-full p-2 text-base text-black font-medium transition duration-75 rounded-lg group hover:bg-blue-100 dark:text-white dark:hover:bg-blue-700" aria-controls="dropdown-informasi-kelurahan" data-collapse-toggle="dropdown-informasi-kelurahan">
                            <svg class="w-6 h-6 text-black font-medium dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 9h3m-3 3h3m-3 3h3m-6 1c-.306-.613-.933-1-1.618-1H7.618c-.685 0-1.312.387-1.618 1M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Zm7 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
                            </svg>
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">
                                Informasi Kelurahan
                            </span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <ul id="dropdown-informasi-kelurahan" class="py-2 space-y-2
                        @if(
                            !request()->routeIs('admin.profile-kelurahan*')
                            and
                            !request()->routeIs('admin.geografis*')
                            and
                            !request()->routeIs('admin.*demografi*')
                        ) hidden @endif
                        ">
                            <li>
                                <a href="{{ route('admin.profile-kelurahan') }}" class="flex items-center w-full p-2 text-black font-medium transition duration-75 rounded-lg pl-11 group hover:bg-blue-100 dark:text-white dark:hover:bg-blue-700
                                @if(request()->routeIs('admin.profile-kelurahan*')) bg-blue-100 dark:bg-blue-700 @endif
                                ">
                                    Profil
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.geografis') }}" class="flex items-center w-full p-2 text-black font-medium transition duration-75 rounded-lg pl-11 group hover:bg-blue-100 dark:text-white dark:hover:bg-blue-700
                                @if(request()->routeIs('admin.geografis*')) bg-blue-100 dark:bg-blue-700 @endif
                                ">
                                    Geografis
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.demografi.index') }}" class="flex items-center w-full p-2 text-black font-medium transition duration-75 rounded-lg pl-11 group hover:bg-blue-100 dark:text-white dark:hover:bg-blue-700
                                @if(request()->routeIs('admin.*demografi*')) bg-blue-100 dark:bg-blue-700 @endif
                                ">
                                    Demografi
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <button type="button" class="flex items-center w-full p-2 text-base text-black font-medium transition duration-75 rounded-lg group hover:bg-blue-100 dark:text-white dark:hover:bg-blue-700" aria-controls="dropdown-pemerintahan" data-collapse-toggle="dropdown-pemerintahan">
                            <svg class="w-6 h-6 text-black font-medium dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 4h12M6 4v16M6 4H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z"/>
                            </svg>
                            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">
                                Pemerintahan
                            </span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <ul id="dropdown-pemerintahan" class="py-2 space-y-2
                        @if(
                            !request()->routeIs('admin.struktur-organisasi*')
                            and
                            !request()->routeIs('admin.perangkat-kelurahan.index*')
                            and
                            !request()->routeIs('admin.lembaga-kelurahan*')
                            and
                            !request()->routeIs('admin.jabatan*')
                        ) hidden @endif
                        ">
                            <li>
                                <a href="{{ route('admin.struktur-organisasi.index') }}" class="flex items-center w-full p-2 text-black font-medium transition duration-75 rounded-lg pl-11 group hover:bg-blue-100 dark:text-white dark:hover:bg-blue-700
                                @if(request()->routeIs('admin.struktur-organisasi*')) bg-blue-100 dark:bg-blue-700 @endif
                                ">
                                Struktur Organisasi
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.perangkat-kelurahan.index') }}" class="flex items-center w-full p-2 text-black font-medium transition duration-75 rounded-lg pl-11 group hover:bg-blue-100 dark:text-white dark:hover:bg-blue-700
                                @if(request()->routeIs('admin.perangkat-kelurahan*') or request()->routeIs('admin.jabatan*')) bg-blue-100 dark:bg-blue-700 @endif
                                ">
                                Perangkat
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.lembaga-kelurahan.index') }}" class="flex items-center w-full p-2 text-black font-medium transition duration-75 rounded-lg pl-11 group hover:bg-blue-100 dark:text-white dark:hover:bg-blue-700
                                @if(request()->routeIs('admin.lembaga-kelurahan*')) bg-blue-100 dark:bg-blue-700 @endif
                                ">
                                    Lembaga
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('admin.layanan.index') }}" class="flex items-center p-2 text-black-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-blue-700 group
                        @if(request()->routeIs('admin.layanan.index*')) bg-blue-100 dark:bg-blue-700 @endif
                        ">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.079 6.839a3 3 0 0 0-4.255.1M13 20h1.083A3.916 3.916 0 0 0 18 16.083V9A6 6 0 1 0 6 9v7m7 4v-1a1 1 0 0 0-1-1h-1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1Zm-7-4v-6H5a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h1Zm12-6h1a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-1v-6Z"/>
                            </svg>

                            <span class="ms-3">Layanan</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.user.index') }}" class="flex items-center p-2 text-black-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-blue-700 group
                        @if(request()->routeIs('admin.user.index*')) bg-blue-100 dark:bg-blue-700 @endif
                        ">
                            <svg class="w-6 h-6 text-black font-medium dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            </svg>
                            <span class="ms-3">Pengguna</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('admin.pengaturan.index') }}" class="flex items-center p-2 text-black-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-blue-700 group
                        @if(request()->routeIs('admin.pengaturan*')) bg-blue-100 dark:bg-blue-700 @endif
                        ">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13v-2a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L14 4.757V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L4.929 6.343a1 1 0 0 0 0 1.414l.536.536L4.757 10H4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535 1.707.707V20a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1.414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H20a1 1 0 0 0 1-1Z"/>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                            </svg>
                            <span class="ms-3">Pengaturan</span>
                        </a>
                    </li>

                @endif

            @endauth

        </ul>
    </div>
</aside>
