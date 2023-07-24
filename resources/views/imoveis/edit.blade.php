@extends('layouts.app')

@section('content')
<div class="mt-5">
    <h2>Editar Imóvel</h2>

    <form action="/imoveis/{{ $imovel->id }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group mt-3">
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" name="descricao" value="{{ $imovel->descricao }}" class="form-control">
        </div>

        <div class="form-group mt-3">
            <label for="endereco">Endereço</label>
            <input type="text" id="endereco" name="endereco" value="{{ $imovel->endereco }}" class="form-control">
        </div>

        @if($imovel->cliente)
        <div class="form-group mt-3">
            <label for="cliente_id">Cliente</label>
            <select id="cliente_id" name="cliente_id" class="form-control">
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->IdClientes }}" @if($imovel->cliente_id == $cliente->IdClientes) selected @endif>{{ $cliente->nome }}</option>
                @endforeach
            </select>
        </div>
        @endif

        <button type="submit" class="btn btn-primary mt-3">Salvar</button>
    </form>

    <form action="/imoveis/{{ $imovel->id }}" method="post" class="mt-2">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
</div>
@endsection
