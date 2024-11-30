<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;

class ClientsController extends Controller
{

    public function __construct()
    {
        //* Asegura que solo que solo usuarios autenticados puedan acceder al controlador
        // $this->middleware/
    }

    public function index()
    {
        $clients = Clients::all();
        return view ('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:clients',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string',
        ]);

        clients::create($validated);

        return redirect()->route('clients.index')->with('success', 'Cliente creado con éxito');
    }

    public function edit($id)
    {
        $client = clients::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $client = clients::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email,'.$id,
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string',
        ]);

        $client->update($validated); //* Actualizamos el cliente

        return redirect()->route('clients.index')->with('success', 'Cliente actualizado con éxito');
    }

    public function destroy($id)
    {
        $client = clients::findOrFail($id);
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Cliente eliminado con éxito');
    }

   
}
