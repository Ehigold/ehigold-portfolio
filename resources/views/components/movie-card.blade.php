@props(['movie'])

<div class="mb-2 overflow-hidden transition-all duration-300 bg-gray-100 border-2 rounded-lg dark:bg-gray-800 dark:border-gray-700 hover:border-orange-500 group">
    <a href="{{ route('movies-details', ['slug' => $movie->slug]) }}">
        <div class="relative p-1">
            <img src="{{ asset('storage/' . $movie->poster) }}" 
                 alt="{{ $movie->name }}" 
                 class="object-cover w-full transition-transform duration-300 rounded-lg h-36 group-hover:scale-105">
            
            <div class="absolute bottom-0 left-0 right-0 p-2 text-white bg-gradient-to-t from-black/80">
                <h3 class="text-sm font-semibold truncate">{{ $movie->name }}</h3>
                <div class="flex items-center justify-between text-xs">
                    <span>{{ date('Y', strtotime($movie->release_date)) }}</span>
                    <div class="flex items-center">
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        <span class="ml-1">{{ number_format($movie->rating, 1) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>