@extends('layouts.app')

@section('content')

<section class="text-gray-600 body-font">

    <div class="container px-5 py-14 mx-auto">
      <a href="{{ url('home') }}" type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">Regresar</a>
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Admin Portafolio</h1>
      </div>

      <div class="flex flex-wrap -m-4 text-center">


        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <a href="{{ route('portafolio') }}">
          <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
              <path d="M3 18v-6a9 9 0 0118 0v6"></path>
              <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
            </svg>
            <p class="leading-relaxed title-font font-medium text-3xl text-gray-900">Crear Portafolio</p>
          </div>
          </a>
        </div>
        

        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <a href="{{ route('categoria') }}">
            <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                <path d="M8 17l4 4 4-4m-4-5v9"></path>
                <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
              </svg>
              <p class="leading-relaxed title-font font-medium text-3xl text-gray-900">Categorias</p>
              <span class="inline-flex items-center rounded-xl bg-red-50 px-2 py-1 text-3xl font-bolt text-green-700 ring-4 ring-inset ring-green-600/60">{{ $categorias->count() }}</span>
            </div>
           </a>
        </div>

        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <a href="{{ route('habilidad') }}">
            <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                <path d="M8 17l4 4 4-4m-4-5v9"></path>
                <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
              </svg>
              <p class="leading-relaxed title-font font-medium text-3xl text-gray-900">Habilidades</p>
              <span class="inline-flex items-center rounded-xl bg-red-50 px-2 py-1 text-3xl font-bolt text-green-700 ring-4 ring-inset ring-green-600/60">{{ $habilidades->count() }}</span>
            </div>
           </a>
        </div>
        
        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <a href="{{ route('certificacion') }}">
          <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
            </svg>
            <p class="leading-relaxed title-font font-medium text-3xl text-gray-900">Certificaciones</p>
            <span class="inline-flex items-center rounded-xl bg-red-50 px-2 py-1 text-3xl font-bolt text-green-700 ring-4 ring-inset ring-green-600/60">{{ $certificaciones->count() }}</span>
          </div>
          </a>
        </div>

      </div>
    </div>
</section>

@endsection
