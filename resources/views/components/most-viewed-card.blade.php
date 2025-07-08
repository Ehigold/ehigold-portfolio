@props(['movie'])

<div class="flex space-x-3 hover:bg-gray-700 p-2 rounded-lg transition-all duration-300">
    <a href="{{ route('movies-details', ['slug' => $movie->slug]) }}" class="flex-shrink-0">
        <img src="{{ asset('storage/' . $movie->poster) }}" 
             alt="{{ $movie->name }}" 
             class="w-16 h-20 object-cover rounded-lg">
    </a>
    <div class="flex flex-col justify-between">
        <div>
            <a href="{{ route('movies-details', ['slug' => $movie->slug]) }}" 
               class="text-sm font-semibold text-white hover:text-orange-500 transition-colors duration-300">
                {{ $movie->name }}
            </a>
            <p class="text-xs text-gray-400">
                {{ date('Y', strtotime($movie->release_date)) }}
            </p>
        </div>
        <div class="flex items-center text-xs text-gray-400">
            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
            </svg>
            <span class="ml-1">{{ number_format($movie->rating, 1) }}</span>
            <span class="mx-2">•</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
            </svg>
            <span class="ml-1">{{ number_format($movie->views) }}</span>
        </div>
    </div>
</div>