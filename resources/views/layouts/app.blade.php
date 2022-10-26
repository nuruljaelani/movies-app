<!doctype html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="flex bg-slate-900">
        <div class="max-w-5xl mx-auto flex items-center py-4 px-4 lg:px-0 w-full">
            <div class="w-1/2 md:w-1/4">
                <a href="{{ route('movies.index') }}"
                    class="text-lg md:text-xl lg:text-xl xl:text-3xl text-white font-semibold">Movies App</a>
            </div>
            <div class="w-1/2 md:w-2/4 flex items-center gap-2 justify-between">
                <a href="{{ url('movie/latest') }}" class="text-white font-semibold">
                    Latest
                </a>
                <a href="{{ url('movie/now_playing') }}" class="text-white font-semibold">
                    Now Playing
                </a>
                <a href="{{ url('movie/popular') }}" class="text-white font-semibold">
                    Popular
                </a>
                <a href="{{ url('movie/top_rated') }}" class="text-white font-semibold">
                    Top Rated
                </a>
                <a href="{{ url('movie/upcoming') }}" class="text-white font-semibold">
                    Upcoming
                </a>
            </div>
            <div class="hidden md:flex gap-4 justify-end w-1/4 items-center">
                <a href="{{ route('login.index') }}" class="text-white">Masuk</a>
                <button type="button" class="text-slate-900 bg-white py-2 px-4 rounded-2xl font-semibold">
                    Daftar
                </button>
            </div>
        </div>
    </nav>
    <main class="bg-white min-h-screen">
        @yield('content')
    </main>
    <footer class="mt-4 md:mt-20">
        <div class="bg-slate-900 text-center py-4">
            <p class="text-white">Movies App | 2022</p>
        </div>
    </footer>
</body>

</html>
