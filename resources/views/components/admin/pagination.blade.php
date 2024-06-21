@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="items-center w-full p-4 bg-white border-t border-black-200 sm:flex sm:justify-between dark:bg-blue-800 dark:border-black-700">
        <div class="flex justify-between flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-black-500 bg-white border border-black-300 cursor-default leading-5 rounded-md dark:text-black-600 dark:bg-black-800 dark:border-black-600">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-black-700 bg-white border border-black-300 leading-5 rounded-md hover:text-black-500 focus:outline-none focus:ring ring-black-300 focus:border-blue-300 active:bg-black-100 active:text-black-700 transition ease-in-out duration-150 dark:bg-black-800 dark:border-black-600 dark:text-black-300 dark:focus:border-blue-700 dark:active:bg-black-700 dark:active:text-black-300">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-black-700 bg-white border border-black-300 leading-5 rounded-md hover:text-black-500 focus:outline-none focus:ring ring-black-300 focus:border-blue-300 active:bg-black-100 active:text-black-700 transition ease-in-out duration-150 dark:bg-black-800 dark:border-black-600 dark:text-black-300 dark:focus:border-blue-700 dark:active:bg-black-700 dark:active:text-black-300">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-black-500 bg-white border border-black-300 cursor-default leading-5 rounded-md dark:text-black-600 dark:bg-black-800 dark:border-black-600">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-black-700 leading-5 dark:text-black-400">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        -
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}

                    <a href="{{ $show_all }}" class="px-1 py-1 ms-3 h-6 text-sm font-medium text-black-500 bg-white border border-black-300 rounded-lg hover:bg-black-100 hover:text-black-700 dark:bg-black-800 dark:border-black-700 dark:text-black-400 dark:hover:bg-black-700 dark:hover:text-white">Tampilkan semua</a>
                </p>

            </div>

            <div>
                <span class="relative z-0 inline-flex rtl:flex-row-reverse shadow-sm rounded-md">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                            <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-black-500 bg-white border border-black-300 cursor-default rounded-l-md leading-5 dark:bg-black-800 dark:border-black-600" aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-black-500 bg-white border border-black-300 rounded-l-md leading-5 hover:text-black-400 focus:z-10 focus:outline-none focus:ring ring-black-300 focus:border-blue-300 active:bg-black-100 active:text-black-500 transition ease-in-out duration-150 dark:bg-black-800 dark:border-black-600 dark:active:bg-black-700 dark:focus:border-blue-800" aria-label="{{ __('pagination.previous') }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-black-700 bg-white border border-black-300 cursor-default leading-5 dark:bg-black-800 dark:border-black-600">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-bold text-blue-500 bg-white border border-black-300 cursor-default leading-5 dark:bg-black-800 dark:border-black-600">{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-black-700 bg-white border border-black-300 leading-5 hover:text-black-500 focus:z-10 focus:outline-none focus:ring ring-black-300 focus:border-blue-300 active:bg-black-100 active:text-black-700 transition ease-in-out duration-150 dark:bg-black-800 dark:border-black-600 dark:text-black-400 dark:hover:text-black-300 dark:active:bg-black-700 dark:focus:border-blue-800" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-black-500 bg-white border border-black-300 rounded-r-md leading-5 hover:text-black-400 focus:z-10 focus:outline-none focus:ring ring-black-300 focus:border-blue-300 active:bg-black-100 active:text-black-500 transition ease-in-out duration-150 dark:bg-black-800 dark:border-black-600 dark:active:bg-black-700 dark:focus:border-blue-800" aria-label="{{ __('pagination.next') }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    @else
                        <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                            <span class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-black-500 bg-white border border-black-300 cursor-default rounded-r-md leading-5 dark:bg-black-800 dark:border-black-600" aria-hidden="true">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
