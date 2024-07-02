<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Persona') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="flex flex-col justify-center items-center">
                    <form method="POST" action="{{ route('personas.store') }}" class="max-w-sm mx-auto">
                        @csrf
                        <div class="mb-5">
                            <label for="dni" class="mb-2 block text-base font-medium text-gray-900 dark:text-black">DNI</label>
                            <input type="number" name="dni" id="dni" class="form-input px-4 py-1 rounded-full w-full">
                        </div>
                        <div class="mb-5">
                            <label for="paterno" class="mb-2 block text-base font-medium text-gray-900 dark:text-black">Paterno</label>
                            <input type="text" name="paterno" id="paterno" class="form-input px-4 py-1 rounded-full w-full">
                        </div>
                        <div class="mb-5">
                            <label for="materno" class="mb-2 block text-base font-medium text-gray-900 dark:text-black">Materno</label>
                            <input type="text" name="materno" id="materno" class="form-input px-4 py-1 rounded-full w-full">
                        </div>
                        <div class="mb-5">
                            <label for="nombres" class="mb-2 block text-base font-medium text-gray-900 dark:text-black">Nombres</label>
                            <input type="text" name="nombres" id="nombres" class="form-input px-4 py-1 rounded-full w-full">
                        </div>
                        <div class="mb-5 py-2 flex justify-between">
                            <button type="submit" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded focus:outline-none focus:shadow-outline">Grabar</button>
                            <a href="{{ route('personas.index') }}" class="bg-indigo-600 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded focus:outline-none focus:shadow-outline">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>