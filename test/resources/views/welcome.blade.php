<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <header>
        <nav class="bg-gray-200 px-4 py-2">
            <div class="flex justify-between">
              <div class="flex items-center space-x-4">
                <a href="/" class="text-gray-800 font-bold text-lg">Kezdőoldal</a>
                <ul class="flex space-x-4">
                  <li><a href="{{route('companies.index')}}" class="text-blue-500 hover:text-blue-700">Cégek</a></li>
                  
                </ul>
              </div>
              <div class="flex items-center space-x-4">
                {{-- <a href="" class="text-gray-800 font-bold">Login</a> --}}
                
                @guest
                    <a class="text-gray-800 font-bold" href="{{ route('login') }}">Login</a>
                    <a href="" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Sign up</a>
                @else
                    @auth
                        <p class="mr-7">Szia, {{ Auth::user() -> name }}!</p>
                    
                    @endauth
                    <a class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    
                @endguest
              </div>
            </div>
          </nav>
          
          
    </header>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            
        <h1 class="text-4xl">Kezdőoldal</h1>
            
        </div>
    </body>
</html>
