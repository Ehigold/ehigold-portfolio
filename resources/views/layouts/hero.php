
<body class="antialiased text-gray-600 bg-gray-100 font-inter dark:bg-gray-900 dark:text-gray-400"
    x-data="{ 'darkMode': true, sidebarOpen: false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
    $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))" :class="{ 'dark': darkMode === true }"
    :class="{ 'sidebar-expanded': sidebarExpanded }" x-data="{ sidebarOpen: false, sidebarExpanded: localStorage.getItem('sidebar-expanded') == 'true' }" x-init="$watch('sidebarExpanded', value => localStorage.setItem('sidebar-expanded', value))"
    class="font-sans antialiased">
<!-- Hero Section with Swiper -->
<section class="relative">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="relative h-[500px]">
                    <!-- Background Image -->
                    <div
                        class="h-full bg-center bg-cover"
                        style="background-image: url('{{ asset('storage/' . $movie->poster) }}" alt="{{ $movie->name }}');"
                        >

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-900 opacity-90"></div>




                    </div>

                    <!-- Content -->
                    <div class="absolute inset-0 flex items-center justify-center px-6">
                        <div class="text-center">
                            <h1 class="mb-4 text-5xl font-extrabold">{{ $movie->name }}</h1>
                            <div class="flex items-center justify-center gap-4 mb-4 text-sm">
                                <span class="px-3 py-1 bg-gray-700 rounded-md">MOVIE</span>
                                <span class="px-3 py-1 bg-gray-700 rounded-md">HD</span>
                                <span class="flex items-center gap-1">⭐ 7.0</span>
                                <span>2024</span>
                            </div>
                            <p class="max-w-2xl mx-auto mb-6 text-gray-300">
                                After receiving an unexpected call from her wayfinding ancestors, Moana journeys alongside Maui and a
                                new crew to the far seas of Oceania, facing dangerous waters and an adventure unlike anything she's
                                ever faced.
                            </p>
                            <div class="flex items-center justify-center gap-4">
                                <button class="px-6 py-3 text-sm font-bold text-white transition bg-red-500 rounded-md hover:bg-red-600">
                                    Watch Now ▶
                                </button>
                                {{-- <button
                                    x-data="{ added: false }"
                                    @click="added = !added"
                                    class="px-6 py-3 text-sm font-bold text-white transition rounded-md"
                                    :class="added ? 'bg-red-600 hover:bg-red-500' : 'bg-gray-700 hover:bg-gray-600'"
                                >
                                    <span x-text="added ? 'Added to Wishlist ❤️' : 'Favorite 🤍'"></span>
                                </button> --}}

                                @props(['movie'])

                                <button
                                x-data="{ added: Alpine.store('wishlist').includes({{ $movie->id }}) }"
                                id="wishlist-btn-{{ $movie->id }}"
                                @click="toggleWishlist({{ $movie->id }})"
                                class="px-6 py-3 text-sm font-bold text-white transition rounded-md"
                                :class="added ? 'bg-red-600 hover:bg-red-500' : 'bg-gray-700 hover:bg-gray-600'"
                            >
                                <span x-text="added ? 'Added to Wishlist ❤️' : 'Favorite 🤍'"></span>
                            </button>



                            <script>
                                  document.addEventListener('alpine:init', () => {
                        Alpine.store('wishlist', @json(auth()->user()->wishlists()->pluck('movie_id')->toArray()));
                    });

                    function toggleWishlist(movieId) {
                    fetch('/wishlist/toggle', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({ movie_id: movieId })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            let wishlist = Alpine.store('wishlist');

                            if (data.added) {
                                wishlist.push(movieId); // Add movie to wishlist
                            } else {
                                Alpine.store('wishlist', wishlist.filter(id => id !== movieId)); // Remove movie from wishlist
                            }
                        }
                    })
                    .catch(error => console.error('Error:', error));
                }



                            </script>




                            </div>
                        </div>
                    </div>
                </div>
            </div>



            {{-- Slide 2 --}}
            <div class="swiper-slide">
                <div class="relative h-[600px]">
                    <!-- Background Image -->
                    <div
                        class="h-full bg-center bg-cover"
                        style="background-image: url('{{ asset('storage/' . $movie->poster) }}" alt="{{ $movie->name }}');"
                    >
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-900 opacity-90"></div>
                    </div>

                    <!-- Content -->
                    <div class="absolute inset-0 flex items-center justify-center px-6">
                        <div class="text-center">
                            <h1 class="mb-4 text-5xl font-extrabold">{{ $movie->name }}</h1>
                            <div class="flex items-center justify-center gap-4 mb-4 text-sm">
                                <span class="px-3 py-1 bg-gray-700 rounded-md">MOVIE</span>
                                <span class="px-3 py-1 bg-gray-700 rounded-md">HD</span>
                                <span class="flex items-center gap-1">⭐ 7.0</span>
                                <span>2024</span>
                            </div>
                            <p class="max-w-2xl mx-auto mb-6 text-gray-300">
                                After receiving an unexpected call from her wayfinding ancestors, Moana journeys alongside Maui and a
                                new crew to the far seas of Oceania, facing dangerous waters and an adventure unlike anything she's
                                ever faced.
                            </p>
                            <div class="flex items-center justify-center gap-4">
                                <button class="px-6 py-3 text-sm font-bold text-white transition bg-red-500 rounded-md hover:bg-red-600">
                                    Watch Now ▶
                                </button>
                                <button class="px-6 py-3 text-sm font-bold text-white transition bg-gray-700 rounded-md hover:bg-gray-600">
                                    Favorite ❤️
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             {{-- Slide 3 --}}
             <div class="swiper-slide">
                <div class="relative h-[600px]">
                    <!-- Background Image -->
                    <div
                        class="h-full bg-center bg-cover"
                        style="background-image: url('{{ asset('storage/' . $movie->poster) }}" alt="{{ $movie->name }}');"
                    >
                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-900 opacity-90"></div>
                    </div>

                    <!-- Content -->
                    <div class="absolute inset-0 flex items-center justify-center px-6">
                        <div class="text-center">
                            <h1 class="mb-4 text-5xl font-extrabold">{{ $movie->name }}</h1>
                            <div class="flex items-center justify-center gap-4 mb-4 text-sm">
                                <span class="px-3 py-1 bg-gray-700 rounded-md">MOVIE</span>
                                <span class="px-3 py-1 bg-gray-700 rounded-md">HD</span>
                                <span class="flex items-center gap-1">⭐ 7.0</span>
                                <span>2024</span>
                            </div>
                            <p class="max-w-2xl mx-auto mb-6 text-gray-300">
                                After receiving an unexpected call from her wayfinding ancestors, Moana journeys alongside Maui and a
                                new crew to the far seas of Oceania, facing dangerous waters and an adventure unlike anything she's
                                ever faced.
                            </p>
                            <div class="flex items-center justify-center gap-4">
                                <button class="px-6 py-3 text-sm font-bold text-white transition bg-red-500 rounded-md hover:bg-red-600">
                                    Watch Now ▶
                                </button>
                                <button class="px-6 py-3 text-sm font-bold text-white transition bg-gray-700 rounded-md hover:bg-gray-600">
                                    Favorite ❤️
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add more slides with different content -->
            <!-- Slide 2, 3, etc. -->

        </div>
        <!-- Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>




