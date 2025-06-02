<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{ $title ?? config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @livewireStyles
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
        }

        .gradient-bg {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
        }
    </style>
</head>

<body class="bg-gray-50">
    {{ $slot }}
    @livewireScripts
</body>

</html>
