<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 flex items-center justify-center min-h-screen">
    <div class="text-center">
        <h1 class="text-5xl font-bold text-white mb-6">
            🎉 Tailwind is Working!
        </h1>
        <button class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
            Test Button
        </button>
    </div>
</body>
</html>
