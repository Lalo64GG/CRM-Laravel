<x-app-layout>
<div class="container mx-auto px-6 py-8">
    <h1 class="text-3xl font-semibold text-gray-800 mb-4">Crear Cliente</h1>
    <form action="{{route('clients.store')}}" method="POST">
        @csrf
        @method('POST')
        <div class="grid grid-cols-1 gap-4">
            <div class="col-span-1">
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input id="name" name="name" type="text" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
            <div class="col-span-1">
                <label for="lastname" class="block text-sm font-medium text-gray-700">Apellido</label>
                <input id="lastname" name="lastname" type="text" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
            <div class="col-span-1">
                <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                <input id="email" name="email" type="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
            <div class="col-span-1">
                <label for="phone" class="block text-sm font-medium text-gray-700">Teléfono</label>
                <input id="phone" name="phone" type="text" class="mt-1 block w-full text-sm font-medium text-gray-700 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="col-span-1">
                <label for="address" class="block text-sm font-medium text-gray-700">Dirección</label>
                <input id="address" name="address" type="text" class="mt-1 block w-full text-sm font-medium text-gray-700 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="col-span-1">
                <button type="submit" class="bg-blue-600 text-white px-3 py-1 rounded-md hover:bg-blue-800 ml-2">Guardar</button>
            </div>
        </div>
    </form>
</div>
</x-app-layout>
