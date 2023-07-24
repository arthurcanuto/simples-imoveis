@extends('layouts.app')

@section('content')
<div class="mt-5">
    <h2>Editar Cliente</h2>

    <form action="{{ route('clientes.update', $cliente->IdClientes) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group mt-3">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="{{ $cliente->nome }}" class="form-control">
        </div>

        <div class="form-group mt-3">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="{{ $cliente->email }}" class="form-control">
        </div>

        <div class="form-group mt-3">
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" value="{{ $cliente->telefone }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Salvar</button>
    </form>

    <form action="{{ route('clientes.destroy', $cliente->IdClientes) }}" method="post">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
</div>
@endsection


