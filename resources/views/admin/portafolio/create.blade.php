@extends('layouts.app')


@section('content')


    <div class="flex flex-row justify-center text-center items-center py-5">

      <a href="{{ route('portafolio') }}" type="button" class=" text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-full text-sm px-5 py-2.5 text-center">Regresar</a>
      
      <h1 class="text-3xl text-center ml-8 font-bold">Portafolio</h1>

    </div>  
     
      <form action="{{ route('admin.portafolio.store') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto my-10">

        @csrf

        <div class="mb-5">
            <label for="nombre" class="block text-gray-700 font-medium text-sm mb-2">Nombre Portafolio</label>

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

        <div class="mb-5">
        
            <label for="categoria" class="block text-gray-700 text-sm mb-2">
                Categoria;
            </label>
        
            <select id="categoria_id" class="block appearance-none border border-gray-200 
                      text-gray-700 rounded leading-tight focus:outline-none 
                      focus:bg-white focus:border-gray-500 p-3 bg-gray-100 
                      w-full" name="categoria_id">
                <option disabled selected> Selecciona </option>
                @foreach ($categorias as $categoria)
                    <option
                        {{old('categoria') == $categoria->id ? 'selected' : ''}} 
                        value="{{ $categoria->id }}">
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
            
            @error('categoria')
                    <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
                        <strong class="font-bold">Error!!</strong>
                        <span class="block">{{$message}}</span>
                    </div>
            @enderror()
        
        </div>

        <div class="mb-5">
            
            <label for="habilidad" class="block text-gray-700 text-sm mb-2">
                Habilidad;
            </label>
            
            <select id="habilidad_id" class="block appearance-none border border-gray-200 
                      text-gray-700 rounded leading-tight focus:outline-none 
                      focus:bg-white focus:border-gray-500 p-3 bg-gray-100 
                      w-full" name="habilidad_id">
                <option disabled selected> Selecciona </option>
                @foreach ($habilidads as $habilidad)
                    <option
                        {{old('habilidad') == $habilidad->id ? 'selected' : ''}} 
                        value="{{ $habilidad->id }}">
                        {{ $habilidad->nombre }}
                    </option>
                @endforeach
            </select>

            @error('habilidad')
                    <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
                        <strong class="font-bold">Error!!</strong>
                        <span class="block">{{$message}}</span>
                    </div>
            @enderror()

        </div>

        <div class="mb-5">
            
            <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">imagen_portafolio</label>
            
            <input name="imagen_portafolio" class="block w-full text-sm text-black border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-100 focus:outline-none dark:bg-blue-500 dark:border-blue-600 dark:placeholder-gray-50" aria-describedby="file_input_help" id="file_input" type="file">
           
        
            @error('imagen_portafolio')
                <div class="bg-red-200 border border-red-500 text-red-800 px-4 py-3 rounded relative mt-3 mb-6" role="alert">
                    <strong class="font-bold">Error!!</strong>
                    <span class="block">{{$message}}</span>
                </div>
            @enderror()

            <p id="error"></p>
        
        </div>

        
      
        <button type="submit"
            class="bg-blue-500 w-full hover:bg-blue-600 text-gray-100 font-bold p-3 focus:outline focus:shadow-outline uppercase">
            Crear Portafolio
        </button>

      </form>


@endsection()
