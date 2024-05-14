<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your Music Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto">
        <nav class="flex justify-between items-center py-4">
            <div>
                <h1 class="text-2xl font-bold text-gray-800">Your Music Platform</h1>
            </div>
            <div>
                @if (Route::has('login'))
                <div class="space-x-4">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="text-gray-800 hover:text-gray-600">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="text-gray-800 hover:text-gray-600">Log in</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-gray-800 hover:text-gray-600">Register</a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>
        </nav>
    </div>

    <div class="container mx-auto">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Discover Your Music</h2>
            <div class="flex justify-center space-x-6">
                <a href="{{ route('songs.index') }}" class="text-blue-500 hover:text-blue-600">Songs</a>
                <a href="{{ route('bands.index') }}" class="text-blue-500 hover:text-blue-600">Bands</a>
                <a href="{{ route('albums.index') }}" class="text-blue-500 hover:text-blue-600">Albums</a>
            </div>
        </div>
    </div>
</body>

</html>
