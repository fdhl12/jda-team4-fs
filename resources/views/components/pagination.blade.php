@if ($paginator->hasPages())
    <div class="w-full flex justify-center mt-4 space-x-4" data-aos="zoom-in" data-aos-duration="500">
        <!-- Left Arrow -->
        @if ($paginator->onFirstPage())
            <span class="flex items-center justify-center w-16 h-16 bg-blue-300 text-white rounded-full text-2xl font-bold leading-none shadow-md focus:outline-none cursor-not-allowed">
                <i class="fas fa-arrow-left"></i>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="flex items-center justify-center w-16 h-16 bg-blue-500 text-white rounded-full text-2xl font-bold leading-none shadow-md focus:outline-none hover:bg-blue-600 transition-colors duration-300">
                <i class="fas fa-arrow-left"></i>
            </a>
        @endif

        <!-- Pagination Numbers -->
        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    <a href="{{ $url }}" class="flex items-center justify-center w-16 h-16 bg-blue-500 text-white rounded-full text-2xl font-bold leading-none shadow-md focus:outline-none hover:bg-blue-600 transition-colors duration-300 {{ $page == $paginator->currentPage() ? 'bg-blue-950' : '' }}">
                        {{ $page }}
                    </a>
                @endforeach
            @endif
        @endforeach

        <!-- Right Arrow -->
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="flex items-center justify-center w-16 h-16 bg-blue-500 text-white rounded-full text-2xl font-bold leading-none shadow-md focus:outline-none hover:bg-blue-600 transition-colors duration-300 {{ $page == $paginator->currentPage() ? 'bg-blue-950' : '' }}">
                <i class="fas fa-arrow-right"></i>
            </a>
        @else
            <span class="flex items-center justify-center w-16 h-16 bg-blue-300 text-white rounded-full text-2xl font-bold leading-none shadow-md focus:outline-none cursor-not-allowed">
                <i class="fas fa-arrow-right"></i>
            </span>
        @endif
    </div>
@endif