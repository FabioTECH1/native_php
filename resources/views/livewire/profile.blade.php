<div class="app-container flex flex-col">
    <!-- Header -->
    <header class="bg-white shadow-sm px-6 py-4">
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <h1 class="font-bold">Profile</h1>
            </div>
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="p-2 text-gray-500 hover:text-red-500">
                    <i class="fas fa-sign-out-alt"></i>
                </button>
            </form>
        </div>
    </header>

    <!-- Main Content -->
    <main class="content-area flex-1 px-6 py-4">
        <!-- User Profile Card -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-6">
            <div class="flex flex-col items-center mb-6">
                <div
                    class="w-20 h-20 rounded-full gradient-bg flex items-center justify-center mb-3 text-white text-2xl">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>
                <h2 class="text-xl font-bold">{{ auth()->user()->name }}</h2>
                <p class="text-gray-500 text-sm">{{ auth()->user()->email }}</p>
            </div>

            <!-- User Details Table -->
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <tbody class="bg-white divide-y divide-gray-200">

                        <tr>
                            <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-500">Email Verified
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">
                                @if (auth()->user()->email_verified_at)
                                    {{ auth()->user()->email_verified_at->format('M d, Y H:i') }}
                                @else
                                    <span class="text-red-500">Not verified</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-500">Created At
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">
                                {{ auth()->user()->created_at->format('M d, Y H:i') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <!-- Bottom Navigation -->
    <nav class="bg-white border-t border-gray-200 px-6 py-3 flex justify-around">
        <a href="{{ route('home') }}"
            class="flex flex-col items-center {{ Route::is('home') ? 'text-indigo-600' : 'text-gray-500' }}">
            <i class="fas fa-home"></i>
            <span class="text-xs mt-1">Home</span>
        </a>
        <a href="{{ route('profile') }}"
            class="flex flex-col items-center {{ Route::is('profile') ? 'text-indigo-600' : 'text-gray-500' }}">
            <i class="fas fa-user"></i>
            <span class="text-xs mt-1">Profile</span>
        </a>
    </nav>
</div>
