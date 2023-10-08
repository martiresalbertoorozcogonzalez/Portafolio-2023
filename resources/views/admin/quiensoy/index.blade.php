@extends('layouts.app')


@section('content')
    

<div class="container mx-auto">


    <div class="flex flex-row">
        {{-- <button type="button" class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">Crear Catergoria</button> --}}
        <a href="{{ route('home') }}" type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">Regresar</a>
        <a href="{{ route('admin.quiensoy.create') }}" type="button" class="text-white bg-gradient-to-br from-blue-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">Crear</a>
    </div>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-5">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-5">
                        Descripcion
                    </th>
                    <th scope="col" class="px-6 py-5">
                        Imagen Principal
                    </th>
                    <th scope="col" class="px-6 py-5">
                        Editar
                    </th>
                    <th scope="col" class="px-6 py-5">
                        Eliminar
                    </th>
                </tr>
            </thead>
            <tbody>


                @foreach ($quiensoy as $item)
                    

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      {{ $item->nombre }} 
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $item->descripcion }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img style="width:100px;" src="/storage/{{ $item->imagen_quiensoy}}">
                    </th>
                    <td class="px-6 py-4">
                        <a href="{{ route('quiensoy.edit',['quiensoy' => $item->id]) }}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar</a>
                    </td>
                    <td class="px-6 py-4">
                        <form action="{{ route('admin.quiensoy.destroy',$item->id ) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" value="Eliminar">
                        </form
                    </td>
                    
                </tr>

                @endforeach

               
            </tbody>
        </table>
    </div>
    

</div>

@endsection