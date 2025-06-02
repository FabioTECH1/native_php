<div class="mb-6 mt-4">
    <h3 class="font-semibold mb-3 text-center text-gray-900 dark:text-white">
        <i class="fas fa-images text-purple-500 mr-2"></i>
        Your Photos
    </h3>
    <div class="relative">
        <!-- Slider container -->
        <div class="flex overflow-x-auto snap-x snap-mandatory space-x-4 p-1 hide-scrollbar">
            @foreach ($images as $image)
                <div class="flex-shrink-0 w-64 snap-start">
                    <div
                        class="bg-white dark:bg-gray-800 rounded-xl shadow-sm overflow-hidden border border-gray-200 dark:border-gray-700">
                        <img src="{{ $image->data_url }}" alt="User photo {{ $loop->index + 1 }}"
                            class="w-full h-48 object-cover">
                        <div class="p-3">
                            <p class="text-xs text-gray-500 dark:text-gray-400">
                                {{ $image->created_at->diffForHumans() }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Simple navigation arrows (optional) -->
        @if ($images->count() > 1)
            <div class="flex justify-between mt-2">
                <button class="text-purple-500 hover:text-purple-700 dark:hover:text-purple-400"
                    onclick="scrollSlider(-1)">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="text-purple-500 hover:text-purple-700 dark:hover:text-purple-400"
                    onclick="scrollSlider(1)">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        @endif
    </div>
</div>

<style>
    .hide-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .hide-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>

<script>
    function scrollSlider(direction) {
        const container = document.querySelector('.hide-scrollbar');
        container.scrollBy({
            left: direction * 260, // Adjust this value based on your card width + margin
            behavior: 'smooth'
        });
    }
</script>
