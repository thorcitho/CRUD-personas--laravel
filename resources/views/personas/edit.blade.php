<!-- h1>Editar</h1 -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Persona') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="flex flex-col justify-center items-center">
                    <form method="POST" action="{{route('personas.update',$persona->id)}}" class="max-w-sm mx-auto">
                        @csrf
                        @method('PUT')
                        <div class="mb-5">
                            <label for="dni" class="mb-2 block text-base font-medium text-gray-900">DNI</label>
                            <input type="number" name="dni" value="{{old('dni',$persona->dni)}}" class="form-input px-4 py-1 rounded-full">
                        </div>
                        <div class="mb-5">
                            <label for="paterno" class="mb-2 block text-base font-medium text-gray-900">Paterno</label>
                            <input type="text" name="paterno" value="{{old('paterno',$persona->paterno)}}" class="form-input px-4 py-1 rounded-full">
                        </div>
                        <div class="mb-5">
                            <label for="materno" class="mb-2 block text-base font-medium text-gray-900">Materno</label>
                            <input type="text" name="materno" value="{{old('materno',$persona->materno)}}" class="form-input px-4 py-1 rounded-full">
                        </div>
                        <div class="mb-5">  
                            <label for="nombres" class="mb-2 block text-base font-medium text-gray-900">Nombres</label>
                            <input type="text" name="nombres" value="{{old('nombres',$persona->nombres)}}" class="form-input px-4 py-1 rounded-full">
                        </div>
                        <div class=" mb-5 py-2">
                            <button type="submit" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded focus:outline-none focus:shadow-outline">Actualizar</button>
                            <a href="{{route('personas.index')}}" class="mb-3 bg-indigo-600 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded focus:outline-none focus:shadow-outline">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>