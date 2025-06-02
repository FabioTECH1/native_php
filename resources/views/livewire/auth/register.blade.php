<div class="app-container flex flex-col">
    <!-- Header -->
    <div class="pt-12 px-6 text-center">
        <div class="w-14 h-14 mx-auto rounded-xl gradient-bg flex items-center justify-center mb-4">
            <i class="fas fa-terminal text-white text-xl"></i>
        </div>
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Create Account</h1>
        <p class="text-gray-500 dark:text-gray-400 mt-1">Start testing PHP functions today</p>
    </div>

    <!-- Registration Form -->
    <div class="flex-1 flex flex-col justify-center px-6 pb-8">
        <form wire:submit.prevent="register" class="space-y-4">

            <!-- Profile Image Upload -->
            <div class="flex flex-col items-center">
                <!-- Hidden file input -->
                <input type="file" id="profile_upload" wire:model="photoDataUrl" accept="image/*" class="hidden">

                <div class="flex flex-col items-center">
                    <button type="button" wire:click.prevent="imageUpload"
                        class="relative w-24 h-24 mb-4 p-0 border-none bg-transparent">
                        @if ($photoDataUrl)
                            <img src="{{ $photoDataUrl }}"
                                class="w-full h-full rounded-full object-cover border-2 border-purple-200 dark:border-purple-800"
                                alt="Profile preview">
                        @else
                            <div
                                class="w-full h-full rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center">
                                <i class="fas fa-user text-gray-400 dark:text-gray-500 text-2xl"></i>
                            </div>
                        @endif
                        <div class="absolute bottom-0 right-0 bg-white dark:bg-gray-800 p-2 rounded-full shadow-md">
                            <i class="fas fa-camera text-purple-500"></i>
                        </div>
                    </button>
                </div>

                @error('photo')
                    <p class="text-red-500 dark:text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Full
                    Name</label>
                <input type="text" id="name" wire:model="name" required
                    class="w-full px-4 py-2 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent
                    @error('name') border-red-500 @else border-gray-300 dark:border-gray-600 @enderror
                    bg-white dark:bg-gray-800 text-gray-900 dark:text-white"
                    placeholder="John Doe">
                @error('name')
                    <p class="text-red-500 dark:text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email</label>
                <input type="email" id="email" wire:model="email" required
                    class="w-full px-4 py-2 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent
                    @error('email') border-red-500 @else border-gray-300 dark:border-gray-600 @enderror
                    bg-white dark:bg-gray-800 text-gray-900 dark:text-white"
                    placeholder="your@email.com">
                @error('email')
                    <p class="text-red-500 dark:text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <label for="password"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Password</label>
                <input type="password" id="password" wire:model="password" required minlength="8"
                    class="w-full px-4 py-2 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent
                    @error('password') border-red-500 @else border-gray-300 dark:border-gray-600 @enderror
                    bg-white dark:bg-gray-800 text-gray-900 dark:text-white"
                    placeholder="••••••••">
                @error('password')
                    <p class="text-red-500 dark:text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Confirm Password</label>
                <input type="password" id="password_confirmation" wire:model="password_confirmation" required
                    class="w-full px-4 py-2 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent
                    @error('password_confirmation') border-red-500 @else border-gray-300 dark:border-gray-600 @enderror
                    bg-white dark:bg-gray-800 text-gray-900 dark:text-white"
                    placeholder="••••••••">
                @error('password_confirmation')
                    <p class="text-red-500 dark:text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn-press w-full py-3 gradient-bg text-white rounded-lg font-medium mt-6">
                Create Account
            </button>
        </form>

        <!-- Login Link -->
        <div class="text-center mt-4">
            <p class="text-sm text-gray-600 dark:text-gray-400">
                Already have an account?
                <a href="{{ route('login') }}"
                    class="text-purple-600 dark:text-purple-400 font-medium hover:underline">Sign in</a>
            </p>
        </div>
    </div>

    <!-- Footer -->
    <div class="pb-6 px-6 text-center">
        <p class="text-xs text-gray-500 dark:text-gray-400">
            By registering, you agree to our <a href="#" class="underline">Terms</a> and <a href="#"
                class="underline">Privacy Policy</a>
        </p>
    </div>
</div>
