@extends('layouts.app')


@section('content')


    <div class="flex flex-row justify-center text-center items-center py-5">

      <a href="{{ route('categoria') }}" type="button" class=" text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-full text-sm px-5 py-2.5 text-center">Regresar</a>
      
      <h1 class="text-3xl text-center ml-8 font-bold">Categorias</h1>

    </div>  
     
      <form action="{{ route('admin.categoria.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto my-10">

        @csrf

        <div class="mb-5">
            <label for="nombre" class="block text-gray-700 font-medium text-sm mb-2">Nombre Categoria</label>

            <input 
                id="nombre" type="text" class="p-3 bg-gray-50 rounded border border-gray-900  w-full @error('nombre')  @enderror"
                name="nombre"
                placeholder="Nombre"
                value="{{old('nombre')}}"
                >
                @error('nombre')
                    <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
                        <strong class="font-bold">Error!!</strong>
                        <span class="block">{{$message}}</span>
                    </div>
                @enderror
        </div>
      
        <div class="mb-5">
          
            
           <label for="descripcion" class="block mb-2 text-md font-medium text-gray-900">Descripcion</label>
           <textarea id="descripcion" rows="3" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-100 dark:border-gray-900 dark:placeholder-white dark:text-gray-900 dark:focus:ring-blue-500 dark:focus:border-blue-500" name="descripcion" placeholder="Tu descripcion"></textarea>

          
            @error('descripcion')
                <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
                    <strong class="font-bold">Error!!</strong>
                    <span class="block">{{$descripcion}}</span>
                </div>
            @enderror()
        </div>

        
      
        <button type="submit"
            class="bg-blue-500 w-full hover:bg-blue-600 text-gray-100 font-bold p-3 focus:outline focus:shadow-outline uppercase">
            Crear Categoria
        </button>

      </form>


@endsection()
