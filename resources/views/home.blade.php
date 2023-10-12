@extends('layouts.app')

@section('content')

<section class="text-gray-600 body-font">

    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Admin Portafolio</h1>
      </div>
      <div class="flex flex-wrap -m-4 text-center">

        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <a href="{{ route('Quiensoy') }}">
          <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
            </svg>
            <p class="leading-relaxed title-font font-medium text-3xl text-gray-900">Quien soy</p>
            <span class="inline-flex items-center rounded-xl bg-red-50 px-2 py-1 text-3xl font-bolt text-green-700 ring-4 ring-inset ring-green-600/60">{{ $quiensoy->count() }}</span>
          </div>
          </a>
        </div>

        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <a href="{{ url('portafolio_admin') }}">
          <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
              <path d="M3 18v-6a9 9 0 0118 0v6"></path>
              <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
            </svg>
            <p class="leading-relaxed title-font font-medium text-3xl text-gray-900">Portafolio</p>
            <span class="inline-flex items-center rounded-xl bg-red-50 px-2 py-1 text-3xl font-bolt text-green-700 ring-4 ring-inset ring-green-600/60">{{ $portafolio->count() }} </span>
          </div>
          </a>
        </div>

        <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
          <a href="{{ url('mensajes') }}">
          <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
            </svg>
            <p class="leading-relaxed title-font font-medium text-3xl text-gray-900">Mensajes</p>
             
             <span class="inline-flex items-center rounded-xl bg-red-50 px-2 py-1 text-3xl font-bolt text-red-700 ring-4 ring-inset ring-red-600/60">{{ $mensajes->count() }}</span>            
            
          </div>
          </a>

        </div>
        


      </div>
    </div>
</section>

@endsection
