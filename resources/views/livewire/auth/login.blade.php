    <div class="app-container flex flex-col">

        <div class="pt-12 px-6 text-center">
            <div class="w-14 h-14 mx-auto rounded-xl gradient-bg flex items-center justify-center mb-4">
                <i class="fas fa-terminal text-white text-xl"></i>
            </div>
            <h1 class="text-2xl font-bold">PHP Tester</h1>
            <p class="text-gray-500 mt-1">Native Function Sandbox</p>
        </div>

        <!-- Code Demo -->
        <div class="mt-6 px-6">
            <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-200">
                <div class="code-font bg-gray-900 rounded-lg overflow-hidden">
                    <div class="flex items-center px-3 py-2 bg-gray-800 text-xs">
                        <div class="flex space-x-1">
                            <div class="w-2 h-2 rounded-full bg-red-500"></div>
                            <div class="w-2 h-2 rounded-full bg-yellow-500"></div>
                            <div class="w-2 h-2 rounded-full bg-green-500"></div>
                        </div>
                        <span class="ml-2 text-gray-400">test.php</span>
                    </div>
                    <div class="p-3 text-gray-300 text-xs">
                        <span class="text-purple-400"></span><br>
                        <span class="text-blue-400 ml-2">$result</span> = <span
                            class="text-yellow-200">array_filter</span>(<br>
                        <span class="text-blue-400 ml-4">[1, 0, 2, '', 3, null]</span>,<br>
                        <span class="text-blue-400 ml-4">fn</span>(<span class="text-blue-400">$val</span>) => <span
                            class="text-blue-400">$val</span> !== <span class="text-green-400">''</span><br>
                        <span class="ml-2">);</span><br><br>
                        <span class="text-blue-400">print_r</span>(<span class="text-blue-400">$result</span>);<br>
                        <span class="text-purple-400"></span><br>
                        <div class="mt-1 pt-1 border-t border-gray-700 text-gray-400">
                            <span class="text-gray-500">// Output:</span><br>
                            <span>> </span>Array ([0] => 1 [2] => 2 [4] => 3)
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Auth Section -->
        <div class="flex-1 flex flex-col justify-center px-6 pb-8">
            <div class="text-center mb-6">
                <h2 class="text-lg font-semibold">Test PHP Authentication</h2>
                <p class="text-gray-500 text-sm mt-1">Sign in to continue</p>
            </div>

            <!-- Email Form -->
            <form class="space-y-3" wire:submit.prevent="login">
                @csrf
                <div>
                    <input type="email" name="email" placeholder="Email"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }}"
                        value="{{ old('email') }}">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <input type="password" name="password" placeholder="Password"
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }}">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex space-x-3">
                    <button type="submit"
                        class="flex-1 py-3 gradient-bg text-white rounded-lg font-medium flex items-center justify-center">
                        Login
                    </button>
                    <button type="button"
                        class="biometric-btn w-14 py-3 gradient-bg text-white rounded-lg font-medium flex items-center justify-center"
                        title="Biometric Login">
                        <i class="fas fa-fingerprint"></i>
                    </button>
                </div>
            </form>

            <!-- Register Link -->
            <p class="text-sm text-gray-600 text-center mt-2">
                Don't have an account?
                <a href="{{ route('register') }}" class="text-purple-600 font-medium">Sign up</a>
            </p>
        </div>

        <!-- Footer -->
        <div class="pb-6 px-6 text-center">
            <p class="text-xs text-gray-500">
                By using PHP Tester, you agree to our <a href="#" class="underline">Terms</a>
            </p>
        </div>

        <!-- Simple Biometric Simulation -->
        <script>
            document.querySelector('.biometric-btn').addEventListener('click', function() {
                alert(
                    "Biometric authentication would be implemented here using:\n\n- Web Authentication API (WebAuthn)\n- PHP's native session handling"
                );
            });
        </script>
    </div>
