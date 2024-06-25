<nav id="header" class="fixed w-full z-50 top-0 text-white ">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
      <div class="pl-4 flex items-center">
        <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="/">
          <img src="{{ url('images/logo.png') }}" alt="Example Image" class="w-15 h-20">
        </a>
      </div>
      <div class="block lg:hidden pr-4">
        <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
          </svg>
        </button>
      </div>
      <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
        <ul class="list-reset lg:flex justify-end flex-1 items-center">
          <li class="mr-3">
            <a class="smooth-scroll inline-block py-6 px-6 text-2xl lg:text-2xl font-semibold no-underline hover:bg-gray-200 hover:text-gray-600 text-brown-500" href="/">Home</a>
          </li>          
          <li class="mr-3 dropdown relative" href="">
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center py-6 px-6 text-lg lg:text-2xl font-bold no-underline hover:bg-gray-200 hover:text-gray-800">
              <span>Profile</span>
              <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
              </svg>
            </button>          
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-gray-200 divide-y divide-gray-300 rounded-lg shadow w-52 dark:bg-gray-700 dark:divide-gray-600">
              <ul class="py-3 text-lg" aria-labelledby="dropdownLargeButton">
                <li>
                  <a href="{{ route("tentang") }}" class="block px-4 py-3 lg:text-lg text-gray-700 dark:text-gray-300 font-bold hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Tentang</a>
                </li>
                <li>
                  <a href="{{ route("visimisi") }}" class="block px-4 py-3 lg:text-lg text-gray-700 dark:text-gray-300 font-bold hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Visi & Misi</a>
                </li>
                <li>
                  <a href="{{ route("sejarah") }}" class="block px-4 py-3 lg:text-lg text-gray-700 dark:text-gray-300 font-bold hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Sejarah</a>
                </li>
                <li>
                  <a href="{{ route("geografi") }}" class="block px-4 py-3 lg:text-lg text-gray-700 dark:text-gray-300 font-bold hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Geografis</a>
                </li>
                <li>
                  <a href="{{ route("demografi") }}" class="block px-4 py-3 lg:text-lg text-gray-700 dark:text-gray-300 font-bold hover:bg-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Demografis</a>
                </li>
              </ul>
            </div>
            
            
            
          </li>
          <li class="mr-3">
            <a class="smooth-scroll inline-block py-6 px-6 text-2xl lg:text-2xl font-bold no-underline hover:bg-gray-200 hover:text-gray-800" href="{{ route("berita") }}">Informasi</a>
          </li>
          <li class="mr-3">
            <a class="smooth-scroll inline-block py-6 px-6 text-2xl lg:text-2xl font-bold no-underline hover:bg-gray-200 hover:text-gray-800" href="{{ route("galeri") }}">Galeri</a>
          </li>
          <li class="mr-3">
            <a class="smooth-scroll inline-block py-6 px-6 text-2xl lg:text-2xl font-bold no-underline hover:bg-gray-200 hover:text-gray-800" href="{{ route("kontak") }}">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
  </nav>

   