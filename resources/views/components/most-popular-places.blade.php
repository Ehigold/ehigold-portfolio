<section class="bg-sky-100 dark:bg-slate-700 pt-8 pb-20">
    <div class="container mx-auto px-4 pb-8">
        <div class="flex items-center justify-center mt-9">
            <div class="flex-grow-[0.1] h-px bg-gray-300"></div>
            <h2 class="mx-4 px-6 py-1 text-2xl font-bold text-gray-900 dark:text-white">Most Popular Places</h2>
            <div class="flex-grow-[0.1] h-px bg-gray-300"></div>
        </div>
        <p class="mt-2 text-center text-gray-600 dark:text-gray-400">
            Find Properties in these Cities
        </p>
    </div>

    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="h-64 md:h-full">
                <!-- Full-width card -->
                <div class="relative h-full bg-cover bg-center" style="background-image: url({{ asset($places[0]['image']) }})">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center p-4">
                        <h3 class="text-white text-2xl sm:text-2xl md:text-2xl lg:text-4xl font-bold text-center">{{ $places[0]['name'] }}</h3>
                        <p class="text-white text-lg sm:text-lg md:text-lg lg:text-2xl text-center">Available Properties: {{ $places[0]['available'] }}</p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <!-- 4 smaller cards -->
                @foreach(array_slice($places, 1, 4) as $place)
                    <div class="relative h-60 bg-cover bg-center" style="background-image: url({{ asset($place['image']) }})">
                        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center p-2">
                            <h3 class="text-white text-2xl font-bold text-center">{{ $place['name'] }}</h3>
                            <p class="text-white text-lg text-center">Available: {{ $place['available'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
