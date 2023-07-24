<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $cliente = new Cliente;
        $cliente->nome = $request->nome;
        $cliente->email = $request->email;
        $cliente->telefone = $request->telefone;
        $cliente->save();

        return redirect('/clientes');
    }

    public function edit($IdClientes)
    {
        $cliente = Cliente::findOrFail($IdClientes); 
    
        return view('clientes.edit', compact('cliente')); 
    }    
    
    public function update(Request $request, $IdClientes)
    {
        $cliente = Cliente::findOrFail($IdClientes);
        $cliente->nome = $request->nome;
        $cliente->email = $request->email;
        $cliente->telefone = $request->telefone;
        $cliente->save();

        return redirect('/clientes')->with('message', 'Cliente atualizado com sucesso!');
    }

    public function destroy($IdClientes)
    {
        $cliente = Cliente::findOrFail($IdClientes);
        $cliente->delete();

        return redirect('/clientes')->with('message', 'Cliente excluído com sucesso!');
    }

}
