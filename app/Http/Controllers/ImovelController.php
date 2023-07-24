<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ImovelController extends Controller
{
    public function index()
    {
        $imoveis = Imovel::all();
        return view('imoveis.index', compact('imoveis'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('imoveis.create', compact('clientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required',
            'endereco' => 'required',
            'cliente_id' => 'nullable|exists:clientes,IdClientes', 
        ]);
        
        $imovel = new Imovel;
        $imovel->descricao = $request->descricao;
        $imovel->endereco = $request->endereco;
        
        if ($request->has('cliente_id') && $request->cliente_id != '') {
            $cliente = Cliente::find($request->cliente_id);
            if ($cliente) {
                $imovel->cliente_id = $cliente->IdClientes;
            }
        }        
        
        $imovel->save();

        return redirect('/imoveis');
    }

    public function edit($id)
    {
        $imovel = Imovel::findOrFail($id); 
        $clientes = Cliente::all();
        return view('imoveis.edit', compact('imovel', 'clientes')); 
    }  

    public function update(Request $request, $id)
    {
        $request->validate([
            'descricao' => 'required',
            'endereco' => 'required',
            'cliente_id' => 'nullable|exists:clientes,IdClientes',
        ]);

        $imovel = Imovel::findOrFail($id);
        $imovel->descricao = $request->descricao;
        $imovel->endereco = $request->endereco;

        if ($request->has('cliente_id') && $request->cliente_id != '') {
            $cliente = Cliente::find($request->cliente_id);
            if ($cliente) {
                $imovel->cliente_id = $cliente->IdClientes;
            }
        }        

        $imovel->save();

        return redirect('/imoveis')->with('message', 'Imóvel atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $imovel = Imovel::findOrFail($id);
        $imovel->delete();

        return redirect('/imoveis')->with('message', 'Imóvel excluído com sucesso!');
    }


}
