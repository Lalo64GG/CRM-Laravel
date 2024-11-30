<x-app-layout>
    <div class="container mx-auto px-6 py-8">
        <h1 class="text-3xl font-semibold text-gray-800 dark:text-white mb-4">Clientes</h1>
        <a href="{{ route('clients.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 mb-3 inline-block">Crear Cliente</a>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 dark:border-gray-900 shadow-md rounded-lg">
                <thead class="bg-gray-100 dark:bg-gray-800">
                    <tr class="hover:cursor-pointer">
                        <th class="py-2 px-4 text-left text-sm font-semibold text-gray-600 dark:text-gray-100">Nombre</th>
                        <th class="py-2 px-4 text-left text-sm font-semibold text-gray-600 dark:text-gray-100">Email</th>
                        <th class="py-2 px-4 text-left text-sm font-semibold text-gray-600 dark:text-gray-100">Teléfono</th>
                        <th class="py-2 px-4 text-left text-sm font-semibold text-gray-600 dark:text-gray-100">Dirección</th>
                        <th class="py-2 px-4 text-left text-sm font-semibold text-gray-600 dark:text-gray-100">Acciones</th>
                    </tr>
                </thead>
                <tbody class="dark:bg-gray-700">
                    @foreach ($clients as $client)
                        <tr class="border-b dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 hover:cursor-pointer">
                            <td class="py-2 px-4 text-sm text-gray-800 dark:text-gray-100">{{ $client->name }} {{ $client->lastname }}</td>
                            <td class="py-2 px-4 text-sm text-gray-800 dark:text-gray-100">{{ $client->email }}</td>
                            <td class="py-2 px-4 text-sm text-gray-800 dark:text-gray-100">{{ $client->phone }}</td>
                            <td class="py-2 px-4 text-sm text-gray-800 dark:text-gray-100">{{ $client->address }}</td>
                            <td class="py-2 px-4 text-sm flex">
                                <a href="{{ route('clients.edit', $client->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded-md hover:bg-yellow-600">Editar</a>
                                <form action="{{ route('clients.destroy', $client->id) }}" method="POST" class="d-inline-block flex">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700 ml-2">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
