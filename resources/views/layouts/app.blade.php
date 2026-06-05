<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Auth CRUD</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">
    <nav class="bg-gray-800 border-b border-gray-700">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/ideas" class="text-2xl font-bold text-indigo-400">Ideas</a>
            
            <div class="flex gap-4 items-center">
                @auth
                    <span class="text-gray-300">{{ auth()->user()->name }}</span>
                    <form method="POST" action="/logout" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="/login" class="text-indigo-400 hover:text-indigo-300">Login</a>
                    <a href="/register" class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded-md">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-8">
        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 rounded-md mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded-md mb-4">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="bg-gray-800 border-t border-gray-700 mt-12">
        <div class="container mx-auto px-4 py-6 text-center text-gray-400">
            <p>&copy; 2026 Laravel Auth CRUD Boilerplate. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
