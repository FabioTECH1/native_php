    <div class="app-container flex flex-col">
        <!-- Header -->
        <div class="pt-12 px-6 text-center">
            <div class="w-14 h-14 mx-auto rounded-xl gradient-bg flex items-center justify-center mb-4">
                <i class="fas fa-terminal text-white text-xl"></i>
            </div>
            <h1 class="text-2xl font-bold">Create Account</h1>
            <p class="text-gray-500 mt-1">Start testing PHP functions today</p>
        </div>

        <!-- Registration Form -->
        <div class="flex-1 flex flex-col justify-center px-6 pb-8">
            <form wire:submit.prevent="register" class="space-y-4">
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                    <input type="text" id="name" wire:model="name" required
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent @error('name') border-red-500 @else border-gray-300 @enderror"
                        placeholder="John Doe">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" id="email" wire:model="email" required
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent @error('email') border-red-500 @else border-gray-300 @enderror"
                        placeholder="your@email.com">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" id="password" wire:model="password" required minlength="8"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent @error('password') border-red-500 @else border-gray-300 @enderror"
                        placeholder="••••••••">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm
                        Password</label>
                    <input type="password" id="password_confirmation" wire:model="password_confirmation" required
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent @error('password_confirmation') border-red-500 @else border-gray-300 @enderror"
                        placeholder="••••••••">
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Biometric Enrollment -->
                <div class="flex items-center pt-2">
                    <input type="checkbox" id="enable_biometric" wire:model="enable_biometric"
                        class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
                    <label for="enable_biometric" class="ml-2 block text-sm text-gray-700">
                        Enable biometric login
                    </label>
                </div>
                <input type="hidden" wire:model="device_uuid" id="device_uuid">

                <!-- Submit Button -->
                <button type="submit" class="btn-press w-full py-3 gradient-bg text-white rounded-lg font-medium mt-6">
                    Create Account
                </button>
            </form>

            <!-- Login Link -->
            <div class="text-center mt-4">
                <p class="text-sm text-gray-600">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-purple-600 font-medium">Sign in</a>
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="pb-6 px-6 text-center">
            <p class="text-xs text-gray-500">
                By registering, you agree to our <a href="#" class="underline">Terms</a> and <a href="#"
                    class="underline">Privacy Policy</a>
            </p>
        </div>
    </div>
