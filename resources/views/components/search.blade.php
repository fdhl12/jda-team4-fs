<div class="w-full flex justify-center mb-12 mt-8 px-4 md:p-0" data-aos="zoom-in" data-aos-duration="500">
    <form action="{{ $route }}" method="GET" class="w-full max-w-2xl flex">
        <input type="text" name="query" value="{{ $query ?? '' }}" class="w-full px-6 py-4 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-500 text-xl shadow-md" placeholder="Cari {{ $type }}...">
        <button type="submit" class="px-6 py-4 bg-blue-500 text-white rounded-r-lg hover:bg-blue-950 focus:outline-none focus:ring-2 focus:ring-blue-700 text-xl shadow-md flex items-center justify-center space-x-2">
            <i class="fas fa-search"></i>
            <span>Cari</span>
        </button>
    </form>
</div>
