<div class="app-container flex flex-col">
    <!-- Header -->
    <header class="bg-white dark:bg-gray-800 shadow-sm px-6 py-4">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <h1 class="font-bold text-gray-900 dark:text-white">Profile</h1>
            </div>
            @livewire('components.logout')
        </div>
    </header>

    <!-- Main Content -->
    <main class="content-area flex-1 px-6 py-4">
        <!-- User Profile Card -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 p-6 mb-6">
            <div class="flex flex-col items-center mb-6">
                <!-- Profile Image - Shows base64 if available, falls back to initial -->
                @if (auth()->user()->profile_image)
                    <img src="{{ auth()->user()->profile_image }}"
                        class="w-20 h-20 rounded-full object-cover border-2 border-purple-200 dark:border-purple-800 mb-3"
                        alt="Profile photo">
                @else
                    <div
                        class="w-20 h-20 rounded-full gradient-bg flex items-center justify-center mb-3 text-white text-2xl">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>
                @endif

                <h2 class="text-xl font-bold text-gray-900 dark:text-white">{{ auth()->user()->name }}</h2>
                <p class="text-gray-500 dark:text-gray-400 text-sm">{{ auth()->user()->email }}</p>
            </div>

            <!-- User Details Table -->
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                        <tr>
                            <td
                                class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-400">
                                Email Verified</td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 dark:text-white">
                                @if (auth()->user()->email_verified_at)
                                    {{ auth()->user()->email_verified_at->format('M d, Y H:i') }}
                                @else
                                    <span class="text-red-500 dark:text-red-400">Not verified</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td
                                class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-400">
                                Created At</td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 dark:text-white">
                                {{ auth()->user()->created_at->format('M d, Y H:i') }}
                            </td>
                        </tr>
                        @if (auth()->user()->profile_image_updated_at)
                            <tr>
                                <td
                                    class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-400">
                                    Profile Updated</td>
                                <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 dark:text-white">
                                    {{ auth()->user()->profile_image_updated_at->format('M d, Y H:i') }}
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <!-- Bottom Navigation -->
    @livewire('components.navigation')
</div>
