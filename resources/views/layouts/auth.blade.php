<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    <script>
        // Check for dark mode preference at the system level
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            height: 100vh;
            overflow: hidden;
        }

        .app-container {
            max-width: 414px;
            height: 100%;
            margin: 0 auto;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
        }

        .function-card {
            transition: all 0.1s ease;
        }

        .function-card:active {
            transform: scale(0.98);
            opacity: 0.9;
        }

        .content-area {
            -ms-overflow-style: none;
            scrollbar-width: none;
            overflow-y: auto;
        }

        .content-area::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-200">
    {{ $slot }}
    @livewireScripts
</body>

</html>
