@extends('layouts.welcome')


@section('content')

  {{-- Hero --}}
  <section id="quiensoy" class="text-gray-600 body-font">
    
    <div class="container mx-auto flex px-5 py-32 md:flex-row flex-col items-center">
        
      @foreach ($quiensoy as $item)
      
          <div id="#inicio" class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-4xl mb-4 font-medium text-gray-900">{{ $item->nombre}}</h1>

            <p class="mb-8 leading-relaxed">{{ $item->descripcion }}</p>
            
            <div class="flex justify-center">
              <a href="#contacto" class="inline-flex text-white bg-gray-900 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 rounded text-lg">Enviar mensaje</a>
              <a href="#portafolio" class="ml-4 inline-flex text-gray-100 bg-gray-900 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 rounded text-lg">Portafolio</a>
            </div>
          </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded-full" alt="hero" src="/storage/{{ $item->imagen_quiensoy}}">
          </div>
      
      @endforeach    
        
    </div>
    
  </section>

  {{-- Hanilidades --}}

  <section class="text-gray-600 body-font">
    <div class="container px-5 py-10 mx-auto">
      <div id="habilidades" class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Habilidades</h1>
      </div>
      
      
      <div class="flex flex-wrap -m-4 text-center">
        
        @foreach ($habilidades as $item)
          
          <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
            <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
              <img class="h-24 mx-auto" src="/storage/{{ $item->imagen_habilidad}}" alt="">
              <h2 class="title-font font-medium text-3xl text-gray-900">{{$item->nombre}}</h2>
            </div>
          </div>

          @endforeach
        
        </div>

    </div>
  </section>

  {{-- Certificados --}}
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-10 mx-auto">
      <div id="certificaciones" class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Certificaciones</h1>
      </div>
      <div class="flex flex-wrap -m-4">

        @foreach ($certificaciones as $item)
            
          <div class="xl:w-1/3 md:w-1/2 p-4">
            <div class="border border-gray-200 p-6 rounded-lg">
              <img src="/storage/{{ $item->imagen_certificacion}}" alt="">
              <h2 class="text-lg text-gray-900 font-medium title-font mb-2">{{$item->nombre}}</h2>
            </div>
          </div>
          
        @endforeach

      </div>
      <button class="flex mx-auto mt-5 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Ver mas</button>
    </div>
  </section>

  {{-- Portafolio --}}
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-10 mx-auto">

      <div id="portafolio" class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Portafolio</h1>
      </div>
      
      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
      
        @foreach ($portafolio as $item)

          <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
            <div class="rounded-lg h-64 overflow-hidden">
              <img alt="content" class="object-cover object-center h-full w-full" src="/storage/{{ $item->imagen_portafolio}}">
            </div>
            <h2 class="text-xl font-medium title-font text-gray-900 mt-5 text-center">{{ $item->nombre }}</h2>
            <p class="text-base leading-relaxed mt-2">{{ $item->descripcion }}</p>
          </div>

        @endforeach
      
      </div>

      <button class="flex mx-auto mt-5 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Ver mas</button>

    </div>
  </section>

  {{-- Contacto --}}
  <section id="contacto" class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <h1 class="sm:text-3xl text-3xl font-bold title-font mb-4 text-gray-900">Contactame</h1>
      </div>
      <div class="lg:w-1/2 md:w-2/3 mx-auto">
       
        <form action="{{ route('contacto.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto my-10">
          
          @csrf

        <div class="flex flex-wrap -m-2">
          
          

            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">Nombre</label>
                <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
            </div>
            <div class="p-2 w-full">
              <div class="relative">
                <label for="message" class="leading-7 text-sm text-gray-600">Mensaje</label>
                <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
              </div>
            </div>
            <div class="p-2 w-full">
              <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Enviar</button>
            </div>
     
          </form>  
          
            <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
              <a class="text-indigo-500">,martiresalbertoorozcogonzalez@gmail.com</a>
              <p class="leading-normal my-5">Guatemala.
                <br>Guatemala, zona 12
              </p>
              <span class="inline-flex">
                <a class="text-gray-500">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                  </svg>
                </a>
                <a class="ml-4 text-gray-500">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                  </svg>
                </a>
                <a class="ml-4 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                  </svg>
                </a>
                <a class="ml-4 text-gray-500">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                  </svg>
                </a>
              </span>
            </div>

        </div>
      </div>
    </div>
  </section>  
    
@endsection