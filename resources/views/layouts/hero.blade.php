<!-- Hero Section with Swiper -->
<section class="relative">
    <div class="swiper hero-swiper">
        <div class="swiper-wrapper">
                <!-- Slide -->
                <div class="swiper-slide">
                    <div class="relative h-[500px]">
                        <!-- Background Image -->
                        <div
                            class="h-full bg-center bg-cover"
                            style="background-image: url('{{ asset('storage/') }}');"
                        >
                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-gray-900 opacity-90"></div>
                        </div>

                        <!-- Content -->
                        <div class="absolute inset-0 flex items-center justify-center px-6">
                            <div class="text-center">
                                <h1 class="mb-4 text-5xl font-extrabold text-white dark:text-white">name</h1>
                                <div class="flex items-center justify-center gap-4 mb-4 text-sm">
                                    {{-- <span class="px-3 py-1 bg-gray-700 rounded-md">{{ $movie->types }}</span> --}}
                                </div>

                                <div class="flex items-center justify-center gap-4">
                                    <button class="px-6 py-3 text-sm font-bold text-white transition bg-red-500 rounded-md hover:bg-red-600">
                                        Watch Now ▶
                                    </button>

                                    <!-- Wishlist Button -->
                                  

                                    {{-- try --}}
                                    {{-- <button
                                    x-data="{ added: Alpine.store('wishlist').includes({{ $movie->id }}) }"
                                    :class="added ? 'bg-red-600 hover:bg-red-500' : 'bg-gray-700 hover:bg-gray-600'"
                                    @click="if (Alpine.store('isAuthenticated')) { toggleWishlist({{ $movie->id }}); added = !added; } else { alert('Login to add wishlist'); }"
                                    class="px-6 py-3 text-sm font-bold text-white transition rounded-md"
                                    >
                                    <span x-text="added ? 'Added to Wishlist ❤️' : 'Favorite 🤍'"></span>
                                    </button> --}}


                                    {{-- try --}}




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <!-- Navigation -->
       <!-- Navigation -->
<div class="swiper-button-next !text-white"></div>
<div class="swiper-button-prev !text-white"></div>
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- Alpine.js Wishlist Script -->
{{-- <script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('wishlist', @json(auth()->user()->wishlists()->pluck('movie_id')->toArray()));

        window.toggleWishlist = function(movieId) {
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
        };
    });
</script> --}}

{{-- null --}}
<!-- Alpine.js Wishlist Script -->
<!-- Check if user is authenticated in Blade and pass it to Alpine.js -->
<script>
    document.addEventListener('alpine:init', () => {
        // Check if user is authenticated
        const isAuthenticated = @json(auth()->check());

        // Set wishlist based on authentication status
        @auth
            const userWishlists = @json(auth()->user()->wishlists()->pluck('movie_id')->toArray());
        @else
            const userWishlists = [];
        @endauth

        // Create Alpine.js stores
        Alpine.store('wishlist', userWishlists);
        Alpine.store('isAuthenticated', isAuthenticated);

        // Toggle wishlist function
        window.toggleWishlist = function(movieId) {
            if (!Alpine.store('isAuthenticated')) {
                alert('Login to add wishlist');
                return;
            }

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
                        wishlist.push(movieId);
                    } else {
                        Alpine.store('wishlist', wishlist.filter(id => id !== movieId));
                    }
                }
            })
            .catch(error => console.error('Error:', error));
        };
    });
</script>




{{-- null end --}}

{{-- <script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('wishlist', @json(auth()->user()->wishlists()->pluck('movie_id')->toArray() ?? []));

                window.toggleWishlist = function(movieId) {
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
                if (data.error === 'User not authenticated') {
                    alert('You must be logged in to add to wishlist!');
                    return;
                }

                if (data.success) {
                    let wishlist = Alpine.store('wishlist');
                    if (data.added) {
                        wishlist.push(movieId);
                    } else {
                        Alpine.store('wishlist', wishlist.filter(id => id !== movieId));
                    }
                }
            })
            .catch(error => console.error('Error:', error));
        };


    });
</script> --}}


