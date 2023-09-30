<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Portafolio-Martires-Alberto') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite('resources/css/app.css')

</head>
<body>
    <div id="app">
        {{-- <nav class="flex flex-row bg-gray-900">
            <div class="container m-auto bg-slate-400">
                <div>
                    <a class="text-white font-bold" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>    
                </div>
                
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> --}}

        {{-- Navbar --}}
        <nav class="bg-gray-900 py-6 relative">
            <div class="container mx-auto flex px-8 xl:px-0">
              
              <div class="flex flex-grow">
                <a href="{{ url('/') }}"><img class="h-12 items-center" src="img/Logo.png" alt=""></a>
              </div>
         
              <div class="flex lg:hidden">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-white" onclick="openMenu();">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
               </svg>
              </div>
         
              <div id="menu" class="lg:flex hidden flex-grow justify-between absolute lg:relative lg:top-0 top-20 left-0 bg-gray-900 w-full lg:w-auto items-center py-14 lg:py-0 px-8">
                
               <div class="flex flex-col lg:flex-row mb-8 lg:mb-0">
                  {{-- <a class="text-white hover:text-red-500 lg:mr-7 mb-8 lg:mb-0" href="">Inicio</a> --}}
                </div>
         
                @guest
                <div class="flex flex-col lg:flex-row text-center">
                @if (Route::has('login'))
                 <a class="text-white border border-white py-2.5 px-5 rounded-md hover:bg-white hover:text-gray-600
                           transition duration-500 ease-in-out lg:mr-4 mb-8 lg:mb-0" href="{{ url('login') }}">
                           Iniciar Sesion
                 </a>
                 @endif
                 @if (Route::has('register')) 
                 <a class="text-white border border-white py-2.5 px-5 rounded-md hover:bg-white
                           hover:text-gray-600 transition duration-500 ease-in-out lg:mr-4" href="{{ url('register') }}">
                           Registrate
                 </a>
                 @endif
                </div>
                @else
                <li class="flex flex-col lg:flex-row text-center">
                    <a class="text-white border border-white py-2.5 px-5 rounded-md hover:bg-white
                           hover:text-gray-600 transition duration-500 ease-in-out lg:mr-4" href="{{url('/')}}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="text-white border border-white py-2.5 px-5 rounded-md hover:bg-white
                    hover:text-gray-600 transition duration-500 ease-in-out lg:mr-4" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
         
               </div>
         
            </div>   

            {{-- Script para la barra del menu --}}
            <script>
                function openMenu() {
                let menu = document.getElementById('menu');

                if (menu.classList.contains('hidden')) {
                    menu.classList.remove('hidden')
                }else {
                    menu.classList.add('hidden');
                }
                }
            </script>

        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
