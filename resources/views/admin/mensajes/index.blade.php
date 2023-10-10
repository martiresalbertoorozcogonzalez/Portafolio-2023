@extends('layouts.app')


@section('content')
    

<div class="container mx-auto">


    <div class="flex flex-row">
        <a href="{{ route('home') }}" type="button" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">Regresar</a>
    </div>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-5">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-5">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-5">
                        Mensaje
                    </th>
                    <th scope="col" class="px-6 py-5">
                        Eliminar
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($mensajes as $item)
                    
                

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$item->name}}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$item->email}}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$item->message}}
                    </th>
                    <td class="px-6 py-4">
                        <form action="{{ route('admin.contacto.destroy',$item->id ) }}" method="POST">
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