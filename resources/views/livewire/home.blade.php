<div class="app-container flex flex-col">
    <!-- Header -->
    <header class="bg-white dark:bg-gray-800 shadow-sm px-6 py-4">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <div class="w-10 h-10 rounded-full gradient-bg flex items-center justify-center">
                    <i class="fas fa-mobile-alt text-white"></i>
                </div>
                <div class="ml-3">
                    <h1 class="font-bold text-gray-900 dark:text-white">Mobile Tester</h1>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Native Function Tests</p>
                </div>
            </div>
            @livewire('components.logout')
        </div>
    </header>

    <!-- Main Content - Scrollable but scrollbar hidden -->
    <main class="content-area flex-1 px-6 py-4">
        <!-- Function Grid -->
        <div class="grid grid-cols-2 gap-3">
            <!-- Vibrate -->
            <form wire:submit.prevent="vibrate" class="function-card">
                <button type="submit"
                    class="w-full bg-white dark:bg-gray-800 p-4 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 flex flex-col items-center text-center">
                    <div class="w-8 h-8 rounded-md gradient-bg flex items-center justify-center mb-2">
                        <i class="fas fa-vibrate text-white text-sm"></i>
                    </div>
                    <h4 class="font-medium text-sm text-gray-900 dark:text-white">Vibrate</h4>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Device vibration</p>
                </button>
            </form>

            <!-- Flashlight -->
            <form wire:submit.prevent="flashlight" class="function-card">
                <button type="submit"
                    class="w-full bg-white dark:bg-gray-800 p-4 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 flex flex-col items-center text-center">
                    <div class="w-8 h-8 rounded-md gradient-bg flex items-center justify-center mb-2">
                        <i class="fas fa-lightbulb text-white text-sm"></i>
                    </div>
                    <h4 class="font-medium text-sm text-gray-900 dark:text-white">Flashlight</h4>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Torch control</p>
                </button>
            </form>

            <!-- Toasts -->
            <form wire:submit.prevent="toast" class="function-card">
                <button type="submit"
                    class="w-full bg-white dark:bg-gray-800 p-4 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 flex flex-col items-center text-center">
                    <div class="w-8 h-8 rounded-md gradient-bg flex items-center justify-center mb-2">
                        <i class="fas fa-comment-alt text-white text-sm"></i>
                    </div>
                    <h4 class="font-medium text-sm text-gray-900 dark:text-white">Show Toast</h4>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Notification toast</p>
                </button>
            </form>

            <!-- Alerts -->
            <form wire:submit.prevent="alert" class="function-card">
                <button type="submit"
                    class="w-full bg-white dark:bg-gray-800 p-4 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 flex flex-col items-center text-center">
                    <div class="w-8 h-8 rounded-md gradient-bg flex items-center justify-center mb-2">
                        <i class="fas fa-exclamation-circle text-white text-sm"></i>
                    </div>
                    <h4 class="font-medium text-sm text-gray-900 dark:text-white">Show Alert</h4>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">System alert dialog</p>
                </button>
            </form>

            <!-- Share -->
            <form wire:submit.prevent="share" class="function-card">
                <button type="submit"
                    class="w-full bg-white dark:bg-gray-800 p-4 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 flex flex-col items-center text-center">
                    <div class="w-8 h-8 rounded-md gradient-bg flex items-center justify-center mb-2">
                        <i class="fas fa-share-alt text-white text-sm"></i>
                    </div>
                    <h4 class="font-medium text-sm text-gray-900 dark:text-white">Share</h4>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Native sharing</p>
                </button>
            </form>

            <!-- Biometric ID -->
            <form wire:submit.prevent="biometric" class="function-card">
                <button type="submit"
                    class="w-full bg-white dark:bg-gray-800 p-4 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 flex flex-col items-center text-center">
                    <div class="w-8 h-8 rounded-md gradient-bg flex items-center justify-center mb-2">
                        <i class="fas fa-fingerprint text-white text-sm"></i>
                    </div>
                    <h4 class="font-medium text-sm text-gray-900 dark:text-white">Biometric ID</h4>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Fingerprint/Face ID</p>
                </button>
            </form>

            <!-- Camera -->
            <form wire:submit.prevent="camera" class="function-card">
                <button type="submit"
                    class="w-full bg-white dark:bg-gray-800 p-4 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 flex flex-col items-center text-center">
                    <div class="w-8 h-8 rounded-md gradient-bg flex items-center justify-center mb-2">
                        <i class="fas fa-camera text-white text-sm"></i>
                    </div>
                    <h4 class="font-medium text-sm text-gray-900 dark:text-white">Camera</h4>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Take photos</p>
                </button>
            </form>

            <!-- Push Notifications -->
            <form wire:submit.prevent="enrollForPushNotifications" class="function-card">
                <button type="submit"
                    class="w-full bg-white dark:bg-gray-800 p-4 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 flex flex-col items-center text-center">
                    <div class="w-8 h-8 rounded-md gradient-bg flex items-center justify-center mb-2">
                        <i class="fas fa-bell text-white text-sm"></i>
                    </div>
                    <h4 class="font-medium text-sm text-gray-900 dark:text-white">Push Notifications</h4>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Test notifications</p>
                </button>
            </form>
        </div>

        <!-- Image Gallery Section -->
        @if ($images->count() > 0)
            @include('livewire.image')
        @endif
    </main>

    @livewire('components.navigation')
</div>
