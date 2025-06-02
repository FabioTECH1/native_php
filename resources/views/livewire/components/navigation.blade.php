<!-- Bottom Navigation -->
<nav class="bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 px-6 py-3 flex justify-around">
    <a href="{{ route('home') }}"
        class="flex flex-col items-center {{ Route::is('home') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400' }}">
        <i class="fas fa-home"></i>
        <span class="text-xs mt-1">Home</span>
    </a>
    <a href="{{ route('profile') }}"
        class="flex flex-col items-center {{ Route::is('profile') ? 'text-indigo-600 dark:text-indigo-400' : 'text-gray-500 dark:text-gray-400' }}">
        <i class="fas fa-user"></i>
        <span class="text-xs mt-1">Profile</span>
    </a>
</nav>
