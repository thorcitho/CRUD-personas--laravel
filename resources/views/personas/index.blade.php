<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Personas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4">
                <a href="{{route('personas.create')}}" class="mb-3 bg-indigo-600 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded focus:outline-none focus:shadow-outline">Crear</a>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-black text-center">Id</th>
                            <th class="px-4 py-2 text-black text-center">DNI</th>
                            <th class="px-4 py-2 text-black text-center">Paterno</th>
                            <th class="px-4 py-2 text-black text-center">Materno</th>
                            <th class="px-4 py-2 text-black text-center">Nombres</th>
                            <th class="px-4 py-2 text-black text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personas as $persona)
                        <tr>
                            <td class="border px-4 py-2 text-black text-center">{{$persona->id}}</td>
                            <td class="border px-4 py-2 text-black text-center">{{$persona->dni}}</td>
                            <td class="border px-4 py-2 text-black text-center">{{$persona->paterno}}</td>
                            <td class="border px-4 py-2 text-black text-center">{{$persona->materno}}</td>
                            <td class="border px-4 py-2 text-black text-center">{{$persona->nombres}}</td>
                            <td class="border px-4 py-2 text-center">
                                <div class="flex justify-center">
                                    <a href="{{route('personas.edit',$persona->id)}}" class="mb-3 bg-indigo-600 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded focus:outline-none focus:shadow-outline">Editar</a>&nbsp;
                                    <button type="button" onclick="confirmDelete('{{$persona->id}}')" class="mb-3 bg-red-600 hover:bg-red-700 text-white font-bold py-1 px-4 rounded focus:outline-none focus:shadow-outline">Eliminar</button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    function confirmDelete(id) {
        alertify.confirm("This is a confirm dialog.", function(e) {
            if (e) {
                let form = document.createElement('form')
                form.method = 'POST'
                form.action = '/personas/' + id
                form.innerHTML = '@csrf @method("DELETE")'
                document.body.appendChild(form)
                form.submit()
            } else {
                return false
            }
        })
    }
</script>
