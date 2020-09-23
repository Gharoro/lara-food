<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <link href="/css/custom.css" rel="stylesheet">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.2.1/dist/alpine.js" defer></script>
    </head>
    <body class="antialiased">
        <header x-data="{ isOpen: false }" class="bg-white shadow">
          <nav class="container mx-auto px-6 py-3">
            <div class="flex flex-col md:flex-row md:justify-between md:items-center">
              <div class="flex justify-between items-center">
                <div class="flex items-center">
                  <a class="text-gray-800 text-xl font-bold md:text-2xl hover:text-gray-700" href="{{ url('/') }}">LaraFood</a>
                </div>

                <!-- Mobile menu button -->
                <div class="flex md:hidden">
                  <button @click="isOpen = !isOpen" type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600" aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                      <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                    </svg>
                  </button>
                </div>
              </div>

              <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
              @if (Route::has('login'))
              <div class="md:flex items-center" :class="isOpen ? 'block' : 'hidden'">
                <div class="flex items-center py-2 -mx-1 md:mx-0">
                  @auth
                    <a class="auth-btn auth-btn block w-1/2 px-3 py-2 bg-orange-700 bg-opacity-75 mx-1 text-center uppercase text-sm font-bold text-white leading-5 md:mx-2 md:w-auto" href="{{ url('/dashboard') }}">Dashboard</a>
                    <!-- Logout Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-dropdown-link class="no-auth-btn w-full block w-1/2 px-3 py-2 bg-opacity-75 mx-1 text-center uppercase text-sm font-bold text-white leading-5 md:mx-2 md:w-auto" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            {{ __('Logout') }}
                        </x-jet-dropdown-link>
                    </form>

                    <a class="auth-btn block w-1/2 px-3 py-2 ml-3 bg-orange-700 bg-opacity-75 mx-1 text-center text-white leading-5 md:mx-2 md:w-auto" href="{{ url('/basket') }}">
                      <i title="My Basket" class="fas fa-shopping-basket"></i>
                    </a>
                  @else
                      <a class="auth-btn block w-1/2 px-3 py-2 bg-orange-700 bg-opacity-75 mx-1 text-center uppercase text-sm font-bold text-white leading-5 md:mx-2 md:w-auto" href="{{ url('login') }}">Login</a>
                    @if (Route::has('register'))
                      <a class="no-auth-btn block w-1/2 px-3 py-2 bg-opacity-75 mx-1 text-center uppercase text-sm font-bold text-white leading-5 md:mx-2 md:w-auto" href="{{ url('register') }}">Register</a>
                      <a class="auth-btn block w-1/2 px-3 py-2 ml-3 bg-orange-700 bg-opacity-75 mx-1 text-center text-white leading-5 md:mx-2 md:w-auto" href="{{ url('login') }}">
                        <i title="My Basket" class="fas fa-shopping-basket"></i>
                      </a>
                    @endif
                  @endif
                </div>
              </div>
              @endif
            </div>
          </nav>
        </header>

        <div class="font-sans antialiased">
            {{ $slot }}
        </div>


        <footer class="container footer bg-gray-300 flex justify-center mt-6">
            <p class="text-gray-800 px-8 py-8">Developer: <a href="#"> Pureheart</a></p>
        </footer>
    </body>
</html>
