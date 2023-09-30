<nav  class="bg-gray-900 py-6 fixed w-full">
    <div id="inicio" class="container mx-auto flex px-8 xl:px-0">
      
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
          {{-- <a class="text-white hover:text-red-500 lg:mr-7 mb-8 lg:mb-0" href="#inicio">Inicio</a> --}}
          <a class="text-white hover:text-red-500 lg:mr-7 mb-8 lg:mb-0" href="#quiensoy">Quien Soy</a>
          <a class="text-white hover:text-red-500 lg:mr-7 mb-8 lg:mb-0" href="#habilidades">Habilidades</a>
          <a class="text-white hover:text-red-500 lg:mr-7 mb-8 lg:mb-0" href="#certificaciones">Certificaciones</a>
          <a class="text-white hover:text-red-500 lg:mr-7 mb-8 lg:mb-0" href="#portafolio">Portafolio</a>
          <a class="text-white hover:text-red-500 lg:mr-7" href="#contacto">Contacto</a>
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
        <li class="flex flex-col lg:flex-row mb-8 lg:mb-0">
            <a id="navbarDropdown" class="text-white hover:text-red-500 lg:mr-7 mb-8 lg:mb-0" href="{{ route('home') }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Admin Portafolio
            </a>
  
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="text-white hover:text-red-500 lg:mr-7 mb-8 lg:mb-0" href="{{ route('logout') }}"
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
  </nav>
  