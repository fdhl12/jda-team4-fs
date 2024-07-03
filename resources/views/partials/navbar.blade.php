<nav id="header" class="fixed w-full z-30 top-0 bg-white">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
            <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="/">
                <img src="{{ asset($pengaturan['logo_text']) }}" alt="{{ $pengaturan['name'] }}" class="h-14 md:h-20">
            </a>
        </div>
        <div class="block xl:hidden pr-4">
            <div class="text-center">
                <button class="text-black hover:bg-gray-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </button>
             </div>
        </div>
        <div class="w-full flex-grow lg:items-center lg:w-auto hidden xl:block mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 xl:items-center">
                <li class="mr-3">
                    <a class="smooth-scroll inline-block py-6 px-6 text-2xl lg:text-2xl font-semibold no-underline hover:text-blue-900 hover:border-b-4 hover:border-blue-900 {{ request()->is('/') ? 'text-blue-900 border-b-4 border-blue-900' : '' }}" href="/">Beranda</a>
                </li>
                <li class="mr-3 dropdown relative">
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar-1" class="flex items-center py-6 px-6 text-lg lg:text-2xl font-bold no-underline hover:text-blue-900 hover:border-b-4 hover:border-blue-900 {{ request()->is('lembaga-kelurahan*') || request()->is('perangkat-kelurahan*') || request()->is('strucktur*') ? 'text-blue-900 border-b-4 border-blue-900' : '' }}">
                        <span>Pemerintahan</span>
                        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <div id="dropdownNavbar-1" class="z-10 hidden font-normal bg-gray-100 divide-y divide-gray-300 rounded-lg shadow w-52 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-3 text-lg" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('lembaga-kelurahan.index') }}" class="block px-4 py-3 lg:text-lg text-gray-700 dark:text-gray-300 font-bold hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Lembaga</a>
                            </li>
                            <li>
                                <a href="{{ route('perangkat-kelurahan.index') }}" class="block px-4 py-3 lg:text-lg text-gray-700 dark:text-gray-300 font-bold hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Perangkat</a>
                            </li>
                            <li>
                                <a href="{{ route('strucktur.index') }}" class="block px-4 py-3 lg:text-lg text-gray-700 dark:text-gray-300 font-bold hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Struktur</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mr-3 dropdown relative">
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center py-6 px-6 text-lg lg:text-2xl font-bold no-underline hover:text-blue-900 hover:border-b-4 hover:border-blue-900 {{ request()->is('tentang*') || request()->is('visimisi*') || request()->is('sejarah*') || request()->is('geografi*') || request()->is('demografi*') ? 'text-blue-900 border-b-4 border-blue-900' : '' }}">
                        <span>Profile</span>
                        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <div id="dropdownNavbar" class="z-10 hidden font-normal bg-gray-100 divide-y divide-gray-300 rounded-lg shadow w-52 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-3 text-lg" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('tentang') }}" class="block px-4 py-3 lg:text-lg text-gray-700 dark:text-gray-300 font-bold hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Tentang</a>
                            </li>
                            <li>
                                <a href="{{ route('visimisi') }}" class="block px-4 py-3 lg:text-lg text-gray-700 dark:text-gray-300 font-bold hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Visi & Misi</a>
                            </li>
                            <li>
                                <a href="{{ route('sejarah') }}" class="block px-4 py-3 lg:text-lg text-gray-700 dark:text-gray-300 font-bold hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Sejarah</a>
                            </li>
                            <li>
                                <a href="{{ route('geografi') }}" class="block px-4 py-3 lg:text-lg text-gray-700 dark:text-gray-300 font-bold hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Geografis</a>
                            </li>
                            <li>
                                <a href="{{ route('demografi') }}" class="block px-4 py-3 lg:text-lg text-gray-700 dark:text-gray-300 font-bold hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Demografis</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mr-3 dropdown relative">
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar-2" class="flex items-center py-6 px-6 text-lg lg:text-2xl font-bold no-underline hover:text-blue-900 hover:border-b-4 hover:border-blue-900 {{ request()->is('berita*') || request()->is('pengumuman*') || request()->is('agenda*') || request()->is('peraturan*') ? 'text-blue-900 border-b-4 border-blue-900' : '' }}">
                        <span>Informasi</span>
                        <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <div id="dropdownNavbar-2" class="z-10 hidden font-normal bg-gray-100 divide-y divide-gray-300 rounded-lg shadow w-52 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-3 text-lg" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('berita') }}" class="block px-4 py-3 lg:text-lg text-gray-700 dark:text-gray-300 font-bold hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Berita</a>
                            </li>
                            <li>
                                <a href="{{ route('pengumuman') }}" class="block px-4 py-3 lg:text-lg text-gray-700 dark:text-gray-300 font-bold hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Pengumuman</a>
                            </li>
                            <li>
                                <a href="{{ route('galeri') }}" class="block px-4 py-3 lg:text-lg text-gray-700 dark:text-gray-300 font-bold hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Galeri</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mr-3">
                    <a class="smooth-scroll inline-block py-6 px-6 text-2xl lg:text-2xl font-semibold no-underline hover:text-blue-900 hover:border-b-4 hover:border-blue-900 {{ request()->is('layanan*') ? 'text-blue-900 border-b-4 border-blue-900' : '' }}" href="/layanan">Layanan</a>
                </li>
            </ul>
        </div>
    </div>
    <hr class="border-b border-gray-300 opacity-25 my-0 py-0" />
</nav>

<div id="drawer-navigation" class="fixed z-50 block xl:hidden h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
      </svg>
      <span class="sr-only">Close menu</span>
   </button>
    <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium text-xl">
            <li>
                <a href="/" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="ml-3 {{ request()->is('/') ? 'text-blue-900 border-b-4 border-blue-900' : '' }}">Beranda</span>
                </a>
            </li>
            <li>
                <button type="button" class="flex items-center w-full p-2 text-xl text-gray-900 transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 " aria-controls="dropdown-example" data-collapse-toggle="dropdown-example" >
                    <span class="flex-1 ml-3 text-left whitespace-nowrap {{ request()->is('lembaga-kelurahan*') || request()->is('perangkat-kelurahan*') || request()->is('strucktur*') ? 'text-blue-900 border-b-4 border-blue-900' : '' }}" sidebar-toggle-item>Pemerintahan</span>
                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('lembaga-kelurahan.index') }}" class="flex items-center w-full p-2 text-xl text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Lembaga</a>
                    </li>
                    <li>
                        <a href="{{ route('perangkat-kelurahan.index') }}" class="flex items-center w-full p-2 text-xl text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Perangkat</a>
                    </li>
                    <li>
                        <a href="{{ route('strucktur.index') }}" class="flex items-center w-full p-2 text-xl text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Struktur</a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button" class="flex items-center w-full p-2 text-xl text-gray-900 transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-profile" data-collapse-toggle="dropdown-profile">
                    <span class="flex-1 ml-3 text-left whitespace-nowrap {{ request()->is('tentang*') || request()->is('visimisi*') || request()->is('sejarah*') || request()->is('geografi*') || request()->is('demografi*') ? 'text-blue-900 border-b-4 border-blue-900' : '' }}" sidebar-toggle-item>Profile</span>
                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-profile" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('tentang') }}" class="flex items-center w-full p-2 text-xl text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Tentang</a>
                    </li>
                    <li>
                        <a href="{{ route('visimisi') }}" class="flex items-center w-full p-2 text-xl text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Visi & Misi</a>
                    </li>
                    <li>
                        <a href="{{ route('sejarah') }}" class="flex items-center w-full p-2 text-xl text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Sejarah</a>
                    </li>
                    <li>
                        <a href="{{ route('geografi') }}" class="flex items-center w-full p-2 text-xl text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Geografis</a>
                    </li>
                </ul>
            </li>
            <li>
                <button type="button" class="flex items-center w-full p-2 text-xl text-gray-900 transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-masyarakat" data-collapse-toggle="dropdown-masyarakat">
                    <span class="flex-1 ml-3 text-left whitespace-nowrap {{ request()->is('berita*') || request()->is('pengumuman*') || request()->is('agenda*') || request()->is('peraturan*') ? 'text-blue-900 border-b-4 border-blue-900' : '' }}" sidebar-toggle-item>Informasi</span>
                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 9.293a1 1 0 011.414 0L10 12.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-masyarakat" class="hidden py-2 space-y-2">
                    <li>
                        <a href="{{ route('berita') }}" class="flex items-center w-full p-2 text-xl text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Berita</a>
                    </li>
                    <li>
                        <a href="{{ route('pengumuman') }}" class="flex items-center w-full p-2 text-xl text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Pengumuman</a>
                    </li>
                    <li>
                        <a href="{{ route('galeri') }}" class="flex items-center w-full p-2 text-xl text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Galeri</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('layanan')}}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group ">
                    <span class="ml-3 {{ request()->is('layanan*') ? 'text-blue-900 border-b-4 border-blue-900' : '' }}">Layanan</span>
                </a>
            </li>
        </ul>
    </div>
</div>
</body>
</html>
